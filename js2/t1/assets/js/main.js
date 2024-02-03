let block = document.querySelectorAll('.menu_block');
block.forEach(element =>{
    let menu_list = element.querySelector('.menu_list');
    element.addEventListener('mousemove',()=>{
        menu_list.style.display = 'block';
    });
    element.addEventListener('mouseout',()=>{
        menu_list.style.display = 'none';
    });
});