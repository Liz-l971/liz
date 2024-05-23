import './Header.css'
function Header() {
    return (
        <header className="header">
        <div className="conteiner">
            <div className="header_content">
                <div className="header_block">
                <svg width="233" height="51" viewBox="0 0 233 51" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M34.6389 30.2273C34.6389 29.4437 34.9535 28.6922 35.5135 28.1381C36.0735 27.584 36.833 27.2727 37.625 27.2727C38.417 27.2727 39.1765 27.584 39.7365 28.1381C40.2965 28.6922 40.6111 29.4437 40.6111 30.2273C40.6111 31.0109 40.2965 31.7624 39.7365 32.3165C39.1765 32.8705 38.417 33.1818 37.625 33.1818C36.833 33.1818 36.0735 32.8705 35.5135 32.3165C34.9535 31.7624 34.6389 31.0109 34.6389 30.2273ZM15.5278 37.3182H27.4722V34.3636H15.5278V37.3182ZM5.375 32.5909C4.58303 32.5909 3.8235 32.2796 3.2635 31.7255C2.7035 31.1715 2.38889 30.42 2.38889 29.6364C2.38889 28.8528 2.7035 28.1013 3.2635 27.5472C3.8235 26.9931 4.58303 26.6818 5.375 26.6818C6.16697 26.6818 6.92649 26.9931 7.4865 27.5472C8.0465 28.1013 8.36111 28.8528 8.36111 29.6364C8.36111 30.42 8.0465 31.1715 7.4865 31.7255C6.92649 32.2796 6.16697 32.5909 5.375 32.5909ZM11.2278 11.5427C11.395 11.0582 11.8489 10.7273 12.3506 10.7273H30.6375C31.1511 10.7273 31.605 11.0582 31.8081 11.6491L35.5108 21.3636H7.48917L11.2278 11.5427ZM43 20.5328V19.5909C43 19.1208 42.8112 18.6699 42.4752 18.3374C42.1392 18.005 41.6835 17.8182 41.2083 17.8182H39.2614L36.3111 10.0773C35.9213 8.89448 35.1642 7.86359 34.1476 7.13148C33.131 6.39937 31.9068 6.00341 30.6494 6H12.3386C9.75861 6.01182 7.48917 7.65455 6.72472 9.98273L3.73861 17.8182H1.79167C1.31649 17.8182 0.860769 18.005 0.524767 18.3374C0.188764 18.6699 0 19.1208 0 19.5909V20.5328C0.000100141 20.9362 0.139217 21.3274 0.394381 21.642C0.649545 21.9565 1.0055 22.1756 1.40347 22.263L1.935 22.38L1.01528 24.4482C0.356848 25.9184 0.015147 27.5082 0.0119447 29.1164L0 43.0855C0 44.1373 0.871944 45 1.935 45H5.23167C6.29472 45 7.16667 44.1373 7.16667 43.0855V40.8636H5.375V39.0909H37.625V40.8636H35.8333V43.0855C35.8333 44.1373 36.7053 45 37.7683 45H41.065C42.1281 45 43 44.1373 43 43.0855V29.14C43 27.5209 42.6536 25.9136 41.9847 24.4364L41.065 22.38L41.5965 22.263C41.9945 22.1756 42.3505 21.9565 42.6056 21.642C42.8608 21.3274 42.9999 20.9362 43 20.5328Z" fill="#FEC351"/>
<path d="M81.972 33L80.1 26.88H70.74L68.868 33H63L72.072 7.188H78.732L87.84 33H81.972ZM76.932 16.332C76.812 15.924 76.656 15.408 76.464 14.784C76.272 14.16 76.08 13.524 75.888 12.876C75.696 12.228 75.54 11.664 75.42 11.184C75.3 11.664 75.132 12.264 74.916 12.984C74.724 13.68 74.532 14.352 74.34 15C74.172 15.624 74.04 16.068 73.944 16.332L72.108 22.308H78.804L76.932 16.332ZM108.087 18.492C108.087 19.548 107.751 20.448 107.079 21.192C106.431 21.936 105.459 22.416 104.163 22.632V22.776C105.531 22.944 106.623 23.412 107.439 24.18C108.279 24.948 108.699 25.932 108.699 27.132C108.699 27.972 108.531 28.752 108.195 29.472C107.883 30.192 107.379 30.816 106.683 31.344C105.987 31.872 105.087 32.28 103.983 32.568C102.903 32.856 101.583 33 100.023 33H90.6635V13.344H100.023C101.559 13.344 102.927 13.512 104.127 13.848C105.351 14.16 106.311 14.688 107.007 15.432C107.727 16.176 108.087 17.196 108.087 18.492ZM103.155 26.844C103.155 26.076 102.855 25.524 102.255 25.188C101.655 24.828 100.755 24.648 99.5555 24.648H96.0275V29.292H99.6635C100.671 29.292 101.499 29.112 102.147 28.752C102.819 28.368 103.155 27.732 103.155 26.844ZM102.651 18.924C102.651 18.3 102.411 17.844 101.931 17.556C101.451 17.268 100.743 17.124 99.8075 17.124H96.0275V21.012H99.1955C100.323 21.012 101.175 20.856 101.751 20.544C102.351 20.208 102.651 19.668 102.651 18.924ZM129.576 17.376H123.132V33H117.768V17.376H111.324V13.344H129.576V17.376ZM150.707 23.136C150.707 24.768 150.479 26.22 150.023 27.492C149.591 28.764 148.955 29.844 148.115 30.732C147.299 31.596 146.303 32.256 145.127 32.712C143.951 33.144 142.619 33.36 141.131 33.36C139.763 33.36 138.491 33.144 137.315 32.712C136.163 32.256 135.167 31.596 134.327 30.732C133.487 29.844 132.827 28.764 132.347 27.492C131.891 26.22 131.663 24.768 131.663 23.136C131.663 20.952 132.047 19.116 132.815 17.628C133.583 16.116 134.687 14.964 136.127 14.172C137.567 13.38 139.271 12.984 141.239 12.984C143.087 12.984 144.719 13.38 146.135 14.172C147.551 14.964 148.667 16.116 149.483 17.628C150.299 19.116 150.707 20.952 150.707 23.136ZM137.135 23.136C137.135 24.432 137.267 25.524 137.531 26.412C137.819 27.276 138.263 27.936 138.863 28.392C139.463 28.824 140.243 29.04 141.203 29.04C142.163 29.04 142.931 28.824 143.507 28.392C144.107 27.936 144.539 27.276 144.803 26.412C145.091 25.524 145.235 24.432 145.235 23.136C145.235 21.84 145.091 20.76 144.803 19.896C144.539 19.032 144.107 18.384 143.507 17.952C142.907 17.52 142.127 17.304 141.167 17.304C139.751 17.304 138.719 17.796 138.071 18.78C137.447 19.74 137.135 21.192 137.135 23.136ZM165.472 33H160.036V11.832H153.052V7.296H172.456V11.832H165.472V33ZM191.312 23.136C191.312 24.768 191.084 26.22 190.628 27.492C190.196 28.764 189.56 29.844 188.72 30.732C187.904 31.596 186.908 32.256 185.732 32.712C184.556 33.144 183.224 33.36 181.736 33.36C180.368 33.36 179.096 33.144 177.92 32.712C176.768 32.256 175.772 31.596 174.932 30.732C174.092 29.844 173.432 28.764 172.952 27.492C172.496 26.22 172.268 24.768 172.268 23.136C172.268 20.952 172.652 19.116 173.42 17.628C174.188 16.116 175.292 14.964 176.732 14.172C178.172 13.38 179.876 12.984 181.844 12.984C183.692 12.984 185.324 13.38 186.74 14.172C188.156 14.964 189.272 16.116 190.088 17.628C190.904 19.116 191.312 20.952 191.312 23.136ZM177.74 23.136C177.74 24.432 177.872 25.524 178.136 26.412C178.424 27.276 178.868 27.936 179.468 28.392C180.068 28.824 180.848 29.04 181.808 29.04C182.768 29.04 183.536 28.824 184.112 28.392C184.712 27.936 185.144 27.276 185.408 26.412C185.696 25.524 185.84 24.432 185.84 23.136C185.84 21.84 185.696 20.76 185.408 19.896C185.144 19.032 184.712 18.384 184.112 17.952C183.512 17.52 182.732 17.304 181.772 17.304C180.356 17.304 179.324 17.796 178.676 18.78C178.052 19.74 177.74 21.192 177.74 23.136ZM206.69 12.984C208.898 12.984 210.686 13.848 212.054 15.576C213.422 17.28 214.105 19.8 214.105 23.136C214.105 25.368 213.782 27.252 213.134 28.788C212.486 30.3 211.598 31.44 210.47 32.208C209.342 32.976 208.034 33.36 206.546 33.36C205.61 33.36 204.794 33.24 204.098 33C203.426 32.76 202.85 32.448 202.37 32.064C201.89 31.68 201.47 31.272 201.11 30.84H200.822C200.918 31.296 200.99 31.776 201.038 32.28C201.086 32.76 201.11 33.24 201.11 33.72V41.64H195.746V13.344H200.102L200.858 15.9H201.11C201.47 15.372 201.902 14.892 202.406 14.46C202.91 14.004 203.51 13.644 204.206 13.38C204.926 13.116 205.754 12.984 206.69 12.984ZM204.962 17.268C204.026 17.268 203.282 17.46 202.73 17.844C202.178 18.228 201.77 18.816 201.506 19.608C201.266 20.376 201.134 21.348 201.11 22.524V23.1C201.11 24.372 201.23 25.452 201.47 26.34C201.71 27.204 202.118 27.864 202.694 28.32C203.27 28.776 204.05 29.004 205.034 29.004C205.85 29.004 206.522 28.776 207.05 28.32C207.578 27.864 207.974 27.192 208.238 26.304C208.502 25.416 208.634 24.336 208.634 23.064C208.634 21.144 208.334 19.704 207.734 18.744C207.158 17.76 206.234 17.268 204.962 17.268ZM232.099 13.344V17.376H223.891V33H218.527V13.344H232.099Z" fill="white"/>
<line x1="61.9985" y1="49" x2="232.001" y2="49" stroke="#09E8A5" stroke-width="3"/>
</svg>

                </div>
                <div className="header_menu">
                    <a href="?" className="header_link">
                        О нас
                    </a>
                    <a href="?p=catalog" className="header_link">
                        Каталог
                    </a>
                    <a href="" className="header_link">
                        Где нас найти?
                    </a>
                </div>
                <div className="header_block">

                    <a href="" className="small_btn orange btn_reg">
                        Регистрация
                    </a>
                    <a href="" className="small_btn grenn btn_auth">
                        Вход
                    </a>
                </div>
            </div>
        </div>
    </header>
    )    
}
export default Header