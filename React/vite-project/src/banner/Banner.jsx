import { useState } from 'react'
import './Banner.css'

function Banner() {
  const [count, setCount] = useState(0)

  return (
    <>
    <section className="banner">
        <div className="conteiner">
            <div className="banner_content">
                <p className="big_txt">
                    Лучшие товары для вашего автомобиля
                </p>
                <a href="?p=catalog" className="btn_custom green_cus">
                    <p class="btn_txt">
                        Смотреть каталог
                    </p>
                <div className="arrow_btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="32" viewBox="0 0 18 32" fill="none">
                        <path d="M0.624277 31.1098C1.04046 31.526 1.56069 31.7341 2.13295 31.7341C2.65318 31.7341 3.22543 31.526 3.64162 31.1098L17.3757 17.3757C17.7919 16.9595 18 16.4393 18 15.867C18 15.2948 17.7919 14.7746 17.3757 14.3584L3.64162 0.624277C2.80925 -0.208092 1.45665 -0.208092 0.624277 0.624277C-0.208092 1.45665 -0.208092 2.80925 0.624277 3.64162L12.8497 15.867L0.624277 28.0925C-0.208092 28.9248 -0.208092 30.2775 0.624277 31.1098Z" fill="#047955"/>
                      </svg>
                </div>
                </a>

            </div>
        </div>
    </section>
    </>
  )
}

export default Banner
