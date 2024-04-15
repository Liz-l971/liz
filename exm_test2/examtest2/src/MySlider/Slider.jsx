import Slider from "react-slick";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import Card from "../Card/Card";

function MySlider(props) {
  const setting = {
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 3,
  };

  return (
    <>
      <Slider {...setting}>
        {props.objects.map((obj, key) => (
          <Card
            key={key}
            id={obj.id}
            title={obj.title}
            description={obj.description}
            price={obj.price}
            onClickBasket={() => props.addToBasket([...props.basket, obj.id])}
            basketBtn={true}
          />
        ))}
      </Slider>
    </>
  );
}
export default MySlider;
