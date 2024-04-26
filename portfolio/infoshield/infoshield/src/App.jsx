import { useState } from 'react'

function App() {
  return (

    <div>
      <header>
        <div className='container m-0 m-auto'>
          <div className='d-flex pt-10 justify-between align-center'>
            <div className='logo'>
              <a href=""><img src="./img/logo.png" alt="Логотип" /></a>
            </div>
            <div className='user_auth'>
              <a href="#">
                <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" stroke="#000000">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <title>profile_round [#1342]</title>
                    <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -2159.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M100.562548,2016.99998 L87.4381713,2016.99998 C86.7317804,2016.99998 86.2101535,2016.30298 86.4765813,2015.66198 C87.7127655,2012.69798 90.6169306,2010.99998 93.9998492,2010.99998 C97.3837885,2010.99998 100.287954,2012.69798 101.524138,2015.66198 C101.790566,2016.30298 101.268939,2016.99998 100.562548,2016.99998 M89.9166645,2004.99998 C89.9166645,2002.79398 91.7489936,2000.99998 93.9998492,2000.99998 C96.2517256,2000.99998 98.0830339,2002.79398 98.0830339,2004.99998 C98.0830339,2007.20598 96.2517256,2008.99998 93.9998492,2008.99998 C91.7489936,2008.99998 89.9166645,2007.20598 89.9166645,2004.99998 M103.955674,2016.63598 C103.213556,2013.27698 100.892265,2010.79798 97.837022,2009.67298 C99.4560048,2008.39598 100.400241,2006.33098 100.053171,2004.06998 C99.6509769,2001.44698 97.4235996,1999.34798 94.7348224,1999.04198 C91.0232075,1998.61898 87.8750721,2001.44898 87.8750721,2004.99998 C87.8750721,2006.88998 88.7692896,2008.57398 90.1636971,2009.67298 C87.1074334,2010.79798 84.7871636,2013.27698 84.044024,2016.63598 C83.7745338,2017.85698 84.7789973,2018.99998 86.0539717,2018.99998 L101.945727,2018.99998 C103.221722,2018.99998 104.226185,2017.85698 103.955674,2016.63598" id="profile_round-[#1342]"> </path> </g> </g> </g> </g></svg>
              </a>
            </div>
          </div>
        </div>
      </header>
      <div className='mainWrap'>
        <div className='container m-0 m-auto'>
          <div className='main_block d-flex'>
            <div className='cart_list pt-50 d-flex flex-column'>
              <h2>Все статьи</h2>
              <div className='cart'>
                <div className='cart_top d-flex flex-column'>
                  <h2>Как быстро и просто сделать Kali на live CD?</h2>
                  <div className='author d-flex align-center'>
                    <img src="./img/user.png" alt="пользователь" />
                    <h5>PointOfUrgency | 12:20, December 29, 2023</h5>
                  </div>

                </div>
                <img src="./img/cart.jpg" alt="Карточка статьи" />
                <div className='description_cart p-15'>
                  <h4>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab eos magni tenetur molestias inventore non deserunt, aliquam ipsam labore eius enim quos esse dolorum blanditiis ipsum dignissimos magnam. Ullam, cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi distinctio doloremque, rem consequuntur tempora, minima adipisci, voluptatum vitae ipsa consequatur ducimus facere aspernatur ut ex quibusdam rerum. Exercitationem impedit consequatur fuga est distinctio odit, assumenda atque delectus dignissimos eos unde aspernatur, nihil iure? Aperiam, nihil sequi voluptas repellendus quaerat laboriosam sit enim tempore delectus sunt. Vero, placeat delectus. Cumque earum error impedit quas vero odit distinctio accusamus veritatis qui nihil labore odio eaque numquam sapiente ea repellendus ipsa assumenda, ut nemo praesentium. Distinctio, praesentium dicta natus voluptatibus possimus laudantium illum rerum. Vero modi minus odio labore id perspiciatis consectetur optio.
                  </h4>
                  <button className='pt-10 pb-10 pl-25 pr-25'>Читать</button>

                </div>
              </div>
              <div className='cart'>
                <div className='cart_top d-flex flex-column'>
                  <h2>Как быстро и просто сделать Kali на live CD?</h2>
                  <div className='author d-flex align-center'>
                    <img src="./img/user.png" alt="пользователь" />
                    <h5>PointOfUrgency | 12:20, December 29, 2023</h5>
                  </div>

                </div>
                <img src="./img/cart.jpg" alt="Карточка статьи" />
                <div className='description_cart p-15'>
                  <h4>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab eos magni tenetur molestias inventore non deserunt, aliquam ipsam labore eius enim quos esse dolorum blanditiis ipsum dignissimos magnam. Ullam, cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi distinctio doloremque, rem consequuntur tempora, minima adipisci, voluptatum vitae ipsa consequatur ducimus facere aspernatur ut ex quibusdam rerum. Exercitationem impedit consequatur fuga est distinctio odit, assumenda atque delectus dignissimos eos unde aspernatur, nihil iure? Aperiam, nihil sequi voluptas repellendus quaerat laboriosam sit enim tempore delectus sunt. Vero, placeat delectus. Cumque earum error impedit quas vero odit distinctio accusamus veritatis qui nihil labore odio eaque numquam sapiente ea repellendus ipsa assumenda, ut nemo praesentium. Distinctio, praesentium dicta natus voluptatibus possimus laudantium illum rerum. Vero modi minus odio labore id perspiciatis consectetur optio.
                  </h4>
                  <button className='pt-10 pb-10 pl-25 pr-25'>Читать</button>

                </div>
              </div>
            </div>
            <div className='menu_container'>
            <div className='menu-bar p-20'>
              <div className='d-flex flex-column'>
              <a href="#" className='active'>Все статьи</a>
              <a href="#">Безопасность</a>
              <a href="#">Взлом</a>
              <a href="#">Разработка</a>
              <a href="#">Линукс</a>
              <a href="#">Python</a>
              </div>
              <div className='menu_nav pt-15 d-flex flex-wrap'>
              <a href="">
                  <h6>Контакты</h6>
              </a>
              <a href="">
                  <h6>Главная</h6>
              </a>
              <a href="">
                  <h6>Личный кабинет</h6>
              </a>
            </div>
            </div>
            </div>
        
          </div>
        </div>
      </div>


    </div>

  )
}

export default App
