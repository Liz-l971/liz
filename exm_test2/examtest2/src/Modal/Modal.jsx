import './Modal.css'
import Card from '../Card/Card';
function Modal(props){
    const CardProducts = props.basket.map(id=> props.objects.find(item=>item.id==id))
    const sum = CardProducts.reduce((sum,item)=>sum+item.price,0);
    const deleteItemFromBasket=(basketItems,index)=>{
        const updatedBasket = basketItems.filter((item, i) => i !== index);
        console.log(index);
        console.log(updatedBasket);
        props.deleteBasket(updatedBasket);
    }
    return(
        <>
        <div className="modal">
            <div className="modal__content">
                <p className="title">Корзина</p>
                <div className="list__and__price">
                <div className="basket__list">
                  
                {CardProducts.map((obj,key)=>(
                    <>
                       <Card
                                key = {key}
                                id = {obj.id}
                                title = {obj.title}
                                description = {obj.description}
                                price = {obj.price}
                                basketBtn = {false}
                                />
                                <button onClick={()=>deleteItemFromBasket(props.basket,key)}>Удалить</button>
                    </>
                             
                                
                            ))}

                </div>
                <p className="itog">Итого {sum} руб.</p>
                </div>
          
            </div>
            <button onClick={props.onClickCloseModal} className='close__modal'>❌</button>
        </div>
        </>
    )

}
export default Modal;