import { useState , useEffect } from 'react'
import Header from './components/Header/Header.jsx'
import {Routes,Route} from "react-router-dom"
import './index.css'
import MainPage from './components/MainPage/MainPage.jsx'
import Modal from './Modal/Modal.jsx'
import OneProduct from './components/OneProduct/OneProduct.jsx'
import MySlider from './MySlider/Slider.jsx'

function App() {

  const [modalOpened,setModalOpened] = useState(false);
  const [objects,setObjects] = useState([]);
  const [basket,setbasket] = useState([]);

  async function fetchObjects() {
    const response = await fetch("http://forchildren/api/products");
    const objects = await response.json();
    setObjects(objects);
  }
  useEffect(() => {
    fetchObjects();
  }, []);

  modalOpened? document.body.classList.add("body__no__scroll"):document.body.classList.remove("body__no__scroll")


  return (
    <>
    <Header onClickOpenModal={()=>setModalOpened(true)}/>
    {modalOpened?  <Modal onClickCloseModal = {()=>setModalOpened(false)} basket={basket} objects ={objects} deleteBasket = {setbasket}/> :null}
    <Routes>
      <Route path='/' element={<MainPage objects = {objects} addToBasket={setbasket} basket ={basket}/>}/>
      <Route path='/:id' element={<OneProduct objects = {objects}/>}/>
      <Route path='/slider' element={<MySlider objects = {objects}/>}/>
    </Routes>
    </>
  )
}

export default App
