import styles from "./Header.module.css";
import { Link } from "react-router-dom";

function Header(props) {
  return (
    <>
      <header>
        <div className="container">
          <div className={styles.header_content}>
            <h1>LOGO</h1>
            <div className={styles.header__nav}>
                <Link to="/">Главная</Link>
                <Link to="/">Слайдер</Link>
            </div>
            <div className={styles.header__nav}>
                <button onClick={props.onClickOpenModal}>Корзина</button>
            </div>
          </div>
        </div>
      </header>
    </>
  );
}
export default Header;
