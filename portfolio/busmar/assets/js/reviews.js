const review_slide = document.querySelectorAll('.review_cart');
const dots_container = document.querySelector('.slider_indicator');
let curSlide = 0;
const max_slide = review_slide.length;
outputdota();
activate_dot(0);
go_to_slide(0);
function outputdota(){
    review_slide.forEach((_, i) => {
    dots_container.insertAdjacentHTML('beforeend',`<div class="indicate_rectangle" data-slide = "${i}"></div>`); 
    })
}
function activate_dot(slide){
    document.querySelectorAll(".indicate_rectangle").forEach(dot => dot.classList.remove('dots_dot_active'));
    document.querySelector(`.indicate_rectangle[data-slide = "${slide}"]`).classList.add('dots_dot_active');
}
function go_to_slide(slide){
    review_slide.forEach((element,i)=> element.style.transform = `translateX(${120*(i-slide)}%)`);
}
function next_slide(){
    if(curSlide === max_slide -1){
        curSlide = 0;
    }else{
        curSlide++;
    }
    go_to_slide(curSlide);
    activate_dot(curSlide);
}
function prev_slide(){
    if(curSlide===0){
        curSlide === max_slide -1
    }else{
        curSlide--;
    }
    go_to_slide(curSlide);
    activate_dot(curSlide);
}
dots_container.addEventListener('click', function(e){
    if(e.target.classList.contains('indicate_rectangle'));
    const{slide}=e.target.dataset;
    go_to_slide(slide)
    activate_dot(slide);
})
