let slider = document.querySelector('.slider');
let slider_arr = Array.from(document.getElementsByClassName("img_sl"))
let slider_len = slider_arr.length;
let width = document.querySelector('.slider-container').offsetWidth;

let position = 0;
function next(){
    if(Number(slider.offsetLeft) > -((Math.ceil(Number(slider_len)/2) *width)-width)){
    position -=width;
    slider.style.left = position+'px';
   
    }
    show_btn(position);
}

function prev(){
    if(Number(slider.offsetLeft) < 0){
    position +=width;
    slider.style.left = position+'px';
    }
    show_btn(position);
}

function show_btn(pos){
    if(pos == -((Math.ceil(Number(slider_len)/2) *width)-width)){
        next_btn.style.display = 'none';
    }
    if(pos > -((Math.ceil(Number(slider_len)/2) *width)-width)){
        next_btn.style.display = 'block';
    }
    if(pos!=0){
        prev_btn.style.display = 'block';
    }
    if(pos ==0 ){
        prev_btn.style.display = 'none';

    }

}
