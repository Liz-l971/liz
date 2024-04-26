let width = document.querySelector(".slider_container").offsetWidth;
let slide = document.querySelector(".slider");
let slider_count = document.querySelectorAll(".slider").length;
// alert(-((Math.ceil(Number(slider_count/4)*width)+width)));


let position = 0;
setInterval(() => {
    if(Number(slide.offsetLeft) > -((Math.ceil(Number(slider_count/4)*width)+width))){
        position -=width;
    
    }else{
        position = 0;
    }
    slide.style.left = position+'px';
}, 5000)
function next(){
    if(Number(slide.offsetLeft) > -((Math.ceil(Number(slider_count/4)*width)+width))){
        position -=width;
    
    }else{
        position = 0;
    }
    slide.style.left = position+'px';
}
function prev(){
    
    if(Number(slide.offsetLeft) <0){
        position +=width;
    
    }else{
        position = 0;
    }
    // position +=width;
    slide.style.left = position+'px';
}
// alert(slider.offsetWidth);