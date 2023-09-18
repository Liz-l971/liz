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
    block.style.left=(block.offsetLeft+1+"px");
  }
  if(event.key=='W'){
    block.style.top=(block.offsetTop-1+"px");
  }
  if(event.key=='S'){
    block.style.top=(block.offsetTop+1+"px");
  }
  if(event.key=='A'){
    block.style.left=(block.offsetLeft-1+"px");
  }
});