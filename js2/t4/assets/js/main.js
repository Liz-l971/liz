let menu_items = Array.from(document.getElementsByClassName("menu_item"));
let content_tabs = Array.from(document.getElementsByClassName("content_item"));


for(let i = 0;i < menu_items.length;i++){
    for(let j = 0;j<content_tabs.length;j++){
            menu_items[i].addEventListener('click',()=>{
                if(i==j){
                content_tabs[j].style.display = 'block';
                }else{
                    content_tabs[j].style.display = 'none';
                }
            });
    }
}