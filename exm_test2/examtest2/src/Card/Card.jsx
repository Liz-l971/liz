import "./Card.css";

import { Link } from "react-router-dom";

function Card(props) {
  return (
    <>
      <div className="card">
        <img src="./img/card1.jpg" alt="card" />
        <div className="card__content">
          <Link to={`${props.id}`}>
            <p className="nameProduct">{props.title}</p>
          </Link>
          <p className="description__product">{props.description}</p>
        </div>
        <div className="add__basket">
          <p>{props.price} руб</p>
          {props.basketBtn ? (
            <button onClick={props.onClickBasket}>В корзину</button>
          ) : (
           <></>
          )}
        </div>
      </div>
    </>
  );
}

export default Card;
