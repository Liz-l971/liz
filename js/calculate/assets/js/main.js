const inputOne = document.querySelector('.inputOne');
const inputTwo = document.querySelector('.inputTwo');
const minus = document.querySelector('.minus');
const plus = document.querySelector('.plus');
const mull = document.querySelector('.mull');
const divis = document.querySelector('.divis');
const submitBtn = document.querySelector('.submitBtn');
const resuktEL = document.querySelector('.result');
let action = '+';

plus.onclick = function(){
    action = '+';
}
minus.onclick = function(){
    action = '-';
}
mull.onclick = function(){
    action = '*';
}
divis.onclick = function(){
    action = '/';
}


submitBtn.onclick = function(){
    let result;
    if(action==='+'){
        result = Number(inputOne.value)+Number(inputTwo.value);
        resuktEL.textContent=result;
    }else if(action ==='-'){
        result = Number(inputOne.value)-Number(inputTwo.value);
        resuktEL.textContent=result; 
    }
    else if(action ==='*'){
        result = Number(inputOne.value)*Number(inputTwo.value);
        resuktEL.textContent=result; 
    }
    else if(action ==='/'){
        result = Number(inputOne.value)/Number(inputTwo.value);
        resuktEL.textContent=result; 
    }
    

}

