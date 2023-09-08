let chislo = prompt('Введите цифру:');
let block = '<div class ="block"></div>';
let block_list = document.querySelector('.block_wrapper');
for(let i = 0;i<chislo-1;i++){
    block_list.insertAdjacentHTML('beforeend',block);
}
