import { useEffect, useState } from "react";
// import MainPage from "../MainPage/MainPage"

function Basket({basket,objects}){
    // console.log(basket);


    const CardProducts = basket.map(id=> objects.find(item=>item.id==id))
    console.log(CardProducts);
   

    const sum = CardProducts.reduce((sum,item)=>sum+item.price,0);
    console.log(sum) 

    return(
        <>
            <h1>Корзина</h1>
            {
                CardProducts.map(product =>
                    <div key={product.id}>
                        <h3>{product.title}</h3>
                    </div>
                )
            }
            {/* <h3>итого {sum} руб </h3> */}
        </>
    )

}
export default Basket