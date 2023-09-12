
let news_list = document.querySelector('.news_list');
let add_btn = document.querySelector('.add_btn');
let modal = document.getElementById("modal");
let news =[
    {
     id:`1`,
     title: `Новость 1`,
     text:`Сегодня в Казани весь день пасмурно`,
     author:`Эмиль`,
     date:`01.09.3005`
 },{
     id:`2`,
     title: `Новость 2`,
     text:`Завтра будет выходной`,
     author:`Сергей`,
     date:`01.09.1005`
 },
 {
     id:`3`,
     title: `Новость 3`,
     text:`11 сентября сокращенный день`,
     author:`Сергей`,
     date:`01.09.1005`
 },
 {
     id:`4`,
     title: `Новость 4`,
     text:`Завтра будет еще холоднее`,
     author:`Антон`,
     date:`01.09.1005`
 },{
     id:`5`,
     title: `Новость 5`,
     text:`Последняя новость`,
     author:`Сергей`,
     date:`01.09.1005`
 }
]
function linkadd(){
    modal.style.display="flex";
}
function close(){
    modal.style.display="none"; 
}
function add(){
modal.style.display="none"; 
let id = '1';
let date = '23456';
let er = { 
    id: `${id}`,
    title:`${input_title.value}`,
    text: `${input_text.value}`,
    author:`${input_author.value}`,
    date:`${date}`
};


 news.push(er);
 let news_el = '<div class="news_cart"><div class="text_top_button"><h1 class="h1" id="title">'+er.title+'</h1><h4 class="h4" id="date">'+er.date+'</h4></div><div class="news_txt"><h2 class="h2" id="text">'+er.text+'</h2></div><div class="text_top_button"><h3 class="h3" id="author">'+er.author+'</h3><h4 class="h4" id="id">'+er.id+'</h4></div></div>'
 news_list.insertAdjacentHTML('beforeend',news_el);
}
for(let i = 0; i <news.length;i++){
    let news_info = '<div class="news_cart"><div class="text_top_button"><h1 class="h1" id="title">'+news[i].title+'</h1><h4 class="h4" id="date">'+news[i].date+'</h4></div><div class="news_txt"><h2 class="h2" id="text">'+news[i].text+'</h2></div><div class="text_top_button"><h3 class="h3" id="author">'+news[i].author+'</h3><h4 class="h4" id="id">'+news[i].id+'</h4></div></div>'
    news_list.insertAdjacentHTML('beforeend',news_info);
}



