let menu_items = Array.from(document.getElementsByClassName("menu_item"));
let content_tabs = Array.from(document.getElementsByClassName("content_item"));


for(let i = 0;i < menu_items.length;i++){
    
    menu_items[i].addEventListener('click',function(){
        for(let j = 0; j <content_tabs.length;j++){
            if(i == j){
            content_tabs[j].classList.add("open_tab");
            menu_items[j].classList.add("active");
            }
            else{
            content_tabs[j].classList.remove("open_tab");
            menu_items[j].classList.remove("active");
            }
            menu_items[i].classList.add("active");    
        }
       
    });

}