const accordion = Array.from(document.getElementsByClassName("open_link"));
let content = document.getElementsByClassName("content");
for(let i = 0;i<accordion.length;i++){
    accordion[i].onclick = function(){
        content[i].classList.toggle("show");
        accordion[i].classList.toggle("click");
        
    }
}