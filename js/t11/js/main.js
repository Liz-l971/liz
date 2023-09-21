let modalShowButton = document.querySelector('.add-button');
let modalHideButton = document.querySelector('.close-button');
let modal = document.querySelector('.modal');
let news_list = document.getElementById("news_list");
let input_one = document.getElementById("input_one");
let input_two = document.getElementById("input_two");
let img = document.getElementById("logo");
modalShowButton.addEventListener('click', () => {
    modal.classList.add('modal_active');
})

modalHideButton.addEventListener('click', () => {
    modal.classList.remove('modal_active');
})

//Пишите здесь
function show_error(input,er_name,message){
    let error = document.getElementById(er_name);
    error.textContent=message;
    input.style.border='1px solid red';
    input.style.background=' rgba(253, 2, 2, 0.151)'
}
function succses(input,er_name){
    input.style.background='white';
    input.style.border='1px solid black';
    let error = document.getElementById(er_name);
    error.textContent='';
}
function checkname(input){
    let flag = 0;
    if(input.value==''){
        show_error(input,'er_inp_one','Введите название новости');
        flag = 1;
    }else if(input.value.length<8){
        show_error(input,'er_inp_one','Название новости не может быть меньше 8 символов');
        flag = 1;
    }
    else{
        flag = 0;
        succses(input,'er_inp_one');
    }
    return flag;
}
function checktext(input){
    let flag = 0;
    if(input.value==''){
        show_error(input,'er_inp_two','Введите текс новости');
        flag = 1;
    }else if(input.value.length>300){
        show_error(input,'er_inp_two','Текс новости не может быть больше 300 символов');
        flag = 1;
    }
    else{
        flag = 0;
        succses(input,'er_inp_two');
    }
    return flag;
}
document.addEventListener('keydown', function(event){
    if((event.key=='b')||(event.key=='B')){
        let title = document.getElementById('title');
        title.style.color="white";
        img.style.background='url("./img/logo_white.svg")';
        let back = document.getElementById('back');
        back.style.background='black';
    }else if((event.key=='w')||(event.key=='W')){
        title.style.color="black";
        img.style.background='url("./img/logo.svg")';
        back.style.background='white';
    }
  });
let news_arr = [
{
    name: `Новость 1`,
    text:`Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque corporis debitis voluptatibus quis sapiente asperiores vel adipisci error repellat repudiandae.`
},{
    name: `Новость 2`,
    text:`Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque corporis debitis voluptatibus quis sapiente asperiores vel adipisci error repellat repudiandae.`
},{
    name:`Новость 3`,
    text:`Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque corporis debitis voluptatibus quis sapiente asperiores vel adipisci error repellat repudiandae.`
}]

function add(){
    checkname(input_one);
    checktext(input_two);
    if((checkname(input_one)==0)&&(checktext(input_two)==0)){
    let new_news={
        name: `${input_one.value}`,
        text: `${input_two.value}`
    }
    let new_news_elem = `<div class="news-item">
                            <h3 class="h3">${new_news.name}</h3>
                            <p class="news-item__p">
                                ${new_news.text}
                            </p>
                        </div>`
    news_list.insertAdjacentHTML('beforeend',new_news_elem);
    input_one.value ='';
    input_two.value ='';
    modal.classList.remove('modal_active');
}

}

    for(let i = 0;i<news_arr.length;i++){
        news_elem =  `<div class="news-item">
                        <h3 class="h3">${news_arr[i].name}</h3>
                        <p class="news-item__p">
                            ${news_arr[i].text}
                        </p>
                      </div>`
        news_list.insertAdjacentHTML('beforeend',news_elem);    
    }
    