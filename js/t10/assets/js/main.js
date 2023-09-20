
let input_name = document.getElementById('input_name'),
btn_sub = document.getElementsByClassName('btn_sub'), 
form = document.querySelector(".form"),
main = document.querySelector(".main"),
h2 =  document.querySelector(".h2"),
input_date = document.getElementById('input_date'); 
function show_error(input,block,message){
    input.style.background = 'rgb(254, 190, 190)';
    input.style.border = '1px solid rgb(203, 6, 6)';
    let block_in = document.getElementById(block);
    block_in.textContent = message;
}
function show_succses(input,block){
    input.style.background = '';
    input.style.border = '1px solid #222222';
    let block_in = document.getElementById(block);
    block_in.textContent = '';
}
function check_name(name){
    let flag = 0;
    if(name.value==''){
        show_error(name,'name_block','Поле "имя" не может быть пустым');
        flag =1;
    }
    else if(name.value.length<2){
        flag =1;
        show_error(name,'name_block','Длина имени не может быть меньше 2x символов');
    }else{
        show_succses(name,'name_block');
    }
    return flag;
}
function check_date(date){
    let flag = 0;
    if(date.value==''){
        show_error(date,'date_block','Поле "дата" не может быть пустым');
        flag =1;
    }
    else if(date.value.length!=4){
        show_error(date,'date_block','Длина поля дата быть равна 4м символам');
        flag =1;
    }else if(Number(date.value)>2005){
        show_error(date,'date_block','Вам не может быть меньше 18 лет');
        flag =1;
    }
    else{
        show_succses(date,'date_block');
    }
    return flag;
}
// function sub(){
//     check_name(input_name);
//     check_date(input_date);
//     if((check_name(input_name)==0)&&(check_date(input_date)==0)){
//         alert("good");
//     }
// }
form.addEventListener('submit',function(event){
   
    check_name(input_name);
    check_date(input_date);
    if((check_name(input_name)==0)&&(check_date(input_date)==0)){
        event.preventDefault();
        input_name.value='';
        input_date.value='';
        let link = '<a href="https://club.z-go.ru/" class="succses_link">Сайт клуба паутина</a>';
        main.insertAdjacentHTML('beforeend', link);
        form.style.display='none';
        h2.style.display='none';
    }else{
        event.preventDefault();
    }
});
