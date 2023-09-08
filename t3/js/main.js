let a = prompt('Введите стоимость товара:');
let b = prompt('Введите количество денег');
a = Number(a);
b = Number(b);
if(a==b){
    console.log('Покупка завершена');
}else if(a>b){
   console.log('Для покупки не хватает ' + (a-b) + 'р.');
}else if(a<b){
    console.log('Покупка завершена. Сдача ' + (b-a) + 'р.');
}