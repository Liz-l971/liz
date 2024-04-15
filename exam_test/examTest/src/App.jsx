import React from 'react'
import MainPage from "./components/MainPage/MainPage";
import OneProduct from "./components/OneProduct/OneProduct";
import { Routes, Route } from "react-router-dom";
import Header from "./components/Header/Header";
import Basket from "./components/Basket/Basket";
import Modal from './components/Modal/Modal';
import { useState , useEffect } from "react";

function App() {
  const [basket,setBasket] = useState([]);

  const [objects, setObjects] = useState([]);

  const [modalOpened,setModalOpened] = React.useState(false);

  


  async function fetchObjects() {
    const response = await fetch("http://forchildren/api/products");
    const objects = await response.json();
    setObjects(objects);
  }
  useEffect(() => {
    fetchObjects();
  }, []);
  return (
    <>
    <p className='text-3xl'>sfdd</p>
      <Header onClickSignIn={()=>setModalOpened(true)}/>
      {modalOpened? <Modal onCloseSignIn={()=>setModalOpened(false)} deleteBasket = {setBasket} basket={basket} objects={objects} deleteItemFromBasket ={deleteItemFromBasket}/> : null}
      <Routes>
        <Route path="/" element={<MainPage addToBasket={setBasket} basket ={basket} objects={objects}/>} />
        {/* <Route path="/basket" element={<Basket basket={basket} objects={objects}/>} /> */}

        <Route path=":id" element={<OneProduct objects={objects} />} />
      </Routes>
      {/* <MainPage/> */}
    </>
  );
}

export default App;
