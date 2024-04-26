let lastScroll = 0;
const defaultOffset = 20;
const default_header = document.querySelector('.header');
const header = document.querySelector('.scroll_header');
const scrollPosition = () => window.pageYOffset || document.documentElement.scrollTop;
const containHide = () => header.classList.contains('hide');
if(scrollPosition()==0){
    default_header.classList.remove('scroll_header');
}
window.addEventListener('scroll', () => {
  
    if(scrollPosition()==0){
        console.log(scrollPosition());
        default_header.classList.remove('scroll_header');
    }
    else if(scrollPosition() > lastScroll && !containHide() && scrollPosition() > defaultOffset) {
        //scrolldown
        if(scrollPosition()>1136){
        // default_header.classList.add('scroll_header');
        header.classList.add('hide');
        console.log('down');
        }

    }
    else if(scrollPosition() < lastScroll && containHide()){
        //scroll up
        console.log('up');
        default_header.classList.add('scroll_header');
        header.style.display = 'block';
        header.classList.remove('hide');
      
    }

    lastScroll = scrollPosition();
})
