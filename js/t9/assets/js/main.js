let back = document.querySelector('.background'),
block = document.querySelector('.block');
document.addEventListener('keyup', function(event){
  if(event.key=='r'){
    back.classList.toggle("red");
  }
  if(event.key=='g'){
    back.classList.toggle("green");
  }
  if(event.key=='b'){
    back.classList.toggle("blue")
  }
 

});
document.addEventListener('keydown', function(event){
if(event.key=='D'){
    if(block.offsetLeft!=back.offsetWidth){
        block.style.left=(block.offsetLeft+1+"px");
    }else{
        block.style.left=(-100+"px");
    }
  }
  if(event.key=='W'){
    if(block.offsetTop)
    block.style.top=(block.offsetTop-1+"px");
  }
  if(event.key=='S'){
    block.style.top=(block.offsetTop+1+"px");
  }
  if(event.key=='A'){
    if(block.offsetLeft!=-100){
        block.style.left=(block.offsetLeft-1+"px");
    }else{
        block.style.left=(back.offsetWidth+"px");
    }
  }
});