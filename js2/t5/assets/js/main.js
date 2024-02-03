const timeblock = document.querySelector(".time_block"),
timebtn = document.querySelector('.open'),
countEL = document.querySelector('.count');
setTimeout(()=>{
    countfull();
},10000);
timebtn.addEventListener('click',()=>{
    countfull()
});
timebtn.addEventListener('')
function countfull(){
    timeblock.classList.add('active');
    let count = 5;
    countEL.innerHTML = count;
    countHtml(count);
    timebtn.classList.remove('active');
    const interval = setInterval(() => {
        count--;
        countHtml(count);
        if(count===0){
            clearInterval(interval);
            timeblock.classList.remove('active');
            timebtn.classList.add('active');
        }
    }, 1000);
}

function countHtml(value){
    countEL.innerHTML=value;
}