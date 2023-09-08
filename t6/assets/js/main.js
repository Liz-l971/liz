let a =[];
let news ={
    id:`1`,
    title: `Новость 1`,
    text:`Сегодня в Казани весь день пасмурно`,
    author:`Эмиль`,
    date:`01.09.3005`

};
let news2 ={
    id:`2`,
    title: `Новость 2`,
    text:`Завтра будет выходной`,
    author:`Сергей`,
    date:`01.09.1005`

};
let news3 ={
    id:`3`,
    title: `Новость 3`,
    text:`11 сентября сокращенный день`,
    author:`Сергей`,
    date:`01.09.1005`

};
let news4 ={
    id:`4`,
    title: `Новость 4`,
    text:`Завтра будет еще холоднее`,
    author:`Антон`,
    date:`01.09.1005`

};
let news5 ={
    id:`5`,
    title: `Новость 5`,
    text:`Последняя новость`,
    author:`Сергей`,
    date:`01.09.1005`

};
a.push(news);
a.push(news2);
a.push(news3);
a.push(news4);
a.push(news5);
let news_list = document.querySelector('.news_list');
for(let i = 0; i <a.length;i++){
    let news_info = '<div class="news_cart"><div class="text_top_button"><h1 class="h1" id="title">'+a[i].title+'</h1><h4 class="h4" id="date">'+a[i].date+'</h4></div><div class="news_txt"><h2 class="h2" id="text">'+a[i].text+'</h2></div><div class="text_top_button"><h3 class="h3" id="author">'+a[i].author+'</h3><h4 class="h4" id="id">'+a[i].id+'</h4></div></div>'
    news_list.insertAdjacentHTML('beforeend',news_info);
}