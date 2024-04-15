import { useEffect, useState } from "react";
import Card from "../Card/Card";
import './MainPage.css'
import Basket from "../Basket/Basket";


function MainPage({addToBasket,basket, objects}) {
  
  const [searchQuery, setSearch] = useState("");

  const [sort,setSort] = useState("");

  function search(e){
    setSearch(e.target.value);
  }

  function sortOnChange(e){
    const sortValue = e.target.value;
    setSort(sortValue)
  }

  const sortProducts = (sort,products)=>{
    switch(sort){
        case 'price_ask':
            return [...products].sort((a,b)=>a.price-b.price);
        case 'price_desk':
            return [...products].sort((a,b)=>b.price-a.price);
        default:
            return products;
    }
  }

  const filterProducts = objects.filter((item)=> item.title.toLowerCase().includes(searchQuery.toLowerCase()));

  const sortAndSearchProducts = sortProducts(sort,filterProducts);

  return (
    <>
      <div className="block">
        <div className="container">
          <p className="title">Каталог</p>
          <input type="search"  name="search" onChange={search} placeholder="Поиск"/>
          <select onChange={sortOnChange}>
          <option value="">Без фильтра</option>
            <option value="price_ask">Сначала дешевые</option>
            <option value="price_desk">Сначала дорогие</option>
          </select>
          <div className="catalog__list">
  
            {sortAndSearchProducts.length ?
            sortAndSearchProducts.map((obj, key) => (
              <Card
                id ={obj.id}
                key={key}
                title={obj.title}
                description={obj.description}
                price={obj.price}
                addCard = {
                    ()=>addToBasket([...basket, obj.id])
                }
              />
            ))
        :
        <h1>По запросу {searchQuery} ничего не найдено :(</h1>
        }
          </div>
        </div>
      </div>
    </>
  );
}

export default MainPage;
