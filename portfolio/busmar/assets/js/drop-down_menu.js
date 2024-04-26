let header_menu = document.querySelectorAll(".header_item");
header_menu.forEach( (element) =>{
    let menu_list = element.querySelector(".header_menu_block");
    element.addEventListener('mousemove' , function(){
        menu_list.style.display = 'flex';
    });
    element.addEventListener('mouseout' , function(){
        menu_list.style.display = 'none';
    });
});