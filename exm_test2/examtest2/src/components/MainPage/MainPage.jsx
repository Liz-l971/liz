import styles from './MainPage.module.css';
import Card from '../../Card/Card';

function MainPage(props){
    return(
        <>
            <div className="block">
                <div className="container">
                    <p className="title">Каталог</p>
                    <div className={styles.catalog__list}>
                        {
                            props.objects.map((obj,key)=>(
                                <Card
                                key = {key}
                                id = {obj.id}
                                title = {obj.title}
                                description = {obj.description}
                                price = {obj.price}
                                onClickBasket = {()=>props.addToBasket([...props.basket,obj.id])}
                                basketBtn = {true}
                                />
                            ))
                        }


                    </div>
                </div>
            </div>
        </>
    )
}
export default MainPage;