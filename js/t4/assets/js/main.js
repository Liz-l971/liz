let a = prompt('Введите стоимость товара:');
let b = prompt('Введите количество денег');
a = Number(a);
b = Number(b);
let text = document.querySelector('.text');
if(a==b){
    text.style.background='green';
    document.getElementById("status").innerHTML = 'Пoкупка завершена';
       
}else if(a>b){
    text.style.background=' rgb(131, 32, 32)';
    document.getElementById("status").innerHTML = 'Для покупки не хватает ' + (a-b) + 'р.';   
}else if(a<b){
    text.style.background='green';
    document.getElementById("status").innerHTML =  'Покупка завершена. Сдача ' + (b-a) + 'р.';
}