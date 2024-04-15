import Basket from '../Basket/Basket';
import  './Modal.css';
// import Basket from '../Basket/Basket';
function Modal({onCloseSignIn,basket,objects,deleteBasket}) {
    const CardProducts = basket.map(id=> objects.find(item=>item.id==id))
    // console.log(CardProducts);
   

    const sum = CardProducts.reduce((sum,item)=>sum+item.price,0);

    const deleteItemFromBasket=(basketItems,index)=>{
        const updatedBasket = basketItems.filter((item, i) => i !== index);
        console.log(index);
        console.log(updatedBasket);
        deleteBasket(updatedBasket);
    }
    return (
        <div className='Modal'>
            <div className="container">
            <svg onClick ={onCloseSignIn} width="34" height="34" viewBox="0 0 344 344" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M343.314 23.313L320.686 0.687012L172 149.373L23.314 0.687012L0.686035 23.313L149.373 
                    172L0.686035 320.687L23.314 343.313L172 194.627L320.686 343.313L343.314 320.687L194.627 
                    172L343.314 23.313Z" fill="#D9D9D9" />
            </svg>
            <h1>Корзина</h1>
            {
                CardProducts.map((product,key) =>
                    <div key={product.id}>
                        <h3>{product.title}</h3>
                        <button onClick={() => deleteItemFromBasket(basket, key)}>Удалить</button>
                    </div>
                )
            }
            </div>
        </div>
    );
};
export default Modal