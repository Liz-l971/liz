import './Card.css'
import { Link } from 'react-router-dom';

function Card(props){
    return(
        <>
        <div className="block">
            <div className="container">
                <Link to={`${props.id}`}><p className="title">
                    {props.title}
                </p></Link>
                
                <div className="cardContent">
                    <img src="./img/products/cart.jpg" alt={props.title} className="card__image" />
                    <div className="cartText">
                        <p>
                            {props.description}
                        </p>
                        <p>
                            {props.price}
                        </p>
                        <button onClick={props.addCard}>Добавить в корзину</button>
                    </div>
                </div>
            </div>
        </div>
        </>
    )
}
export default Card