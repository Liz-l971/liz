let slider = document.querySelector('.services_slider');
let slider_arr = Array.from(document.getElementsByClassName("services_cart_conn"));
let cart = document.getElementsByClassName("services_cart_conn");
let slider_len = slider_arr.length;
let width1 = document.querySelector('.services_container').offsetWidth;

let position1 = 0;
function next(){
    // if(Number(slider.offsetLeft) > -((Math.ceil(Number(slider_len)/3.5) *width1)-width1)){
        // if(position1>-cart.offsetWidth){
        position1 -=slider.offsetWidth;
        slider.style.left = position1+'px';
    // }
 
   
    // }
    // show_btn(position1);
}

function prev(){
    // if(Number(slider.offsetLeft) < 0){
    if(position1<0){

    position1 +=slider.offsetWidth;
    slider.style.left = position1+'px';
    }
    // show_btn(position1);
}

// function show_btn(pos){
//     if(pos == -((Math.ceil(Number(slider_len)/2) *width1)-width1)){
//         next_btn.style.display = 'none';
//     }
//     if(pos > -((Math.ceil(Number(slider_len)/2) *width1)-width1)){
//         next_btn.style.display = 'block';
//     }
//     if(pos!=0){
//         prev_btn.style.display = 'block';
//     }
//     if(pos ==0 ){
//         prev_btn.style.display = 'none';

//     }

// }
