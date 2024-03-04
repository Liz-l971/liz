import React from 'react'
import ReactDOM from 'react-dom/client'
import Banner from './banner/Banner'
import Header from './header/Header'
import './index.css'

ReactDOM.createRoot(document.getElementById('root')).render(
  <React.StrictMode>
    <Header/>
    <Banner />
  </React.StrictMode>,
)
