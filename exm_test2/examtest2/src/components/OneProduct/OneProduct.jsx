import "./OneProduct.css";
import {useParams} from "react-router-dom"

function OneProduct(props) {
    const {id} = useParams();
    const object = props.objects.find(item=>item.id===parseInt(id))
  return (
    <>
      <div className="block">
        <div className="container">
            <p className="title"> {object.title} </p>
            <div className="card">
            <img src="./img/card1.jpg" alt="card" />
            <div className="card__content">
                <p className="description__product">
                {object.description}
                </p>
            </div>
            <div className="add__basket">
                <p>{object.price} руб</p>
                <button>В корзину</button>
            </div>
        </div>
          
        </div>
      </div>
    </>
  );
}
export default OneProduct;
