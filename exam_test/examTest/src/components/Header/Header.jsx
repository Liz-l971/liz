
import './Header.css'
import { Link } from 'react-router-dom';
function Header(props) {
  return (
    <>
      <header>
        <div className="container">
          <div className="header__content">
            <p className="logo">LOGO</p>
            <div className="header__block__menu">
              <Link to ="/">Главная</Link>
              <a href="">Каталог</a>
            </div>
            <div className="header__block__menu">
            <button onClick={props.onClickSignIn}>Корзина</button>
              <a href="">Профиль</a>
            </div>
          </div>
        </div>
      </header>
    </>
  );
}

export default Header;
