/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');
/* Import the Main component */
// import Example from './components/Example';

import axios from "axios";

// отправляем содержимое формы через axios на роут /chat-message
const form = document.getElementById('form');
const inputMessage = document.getElementById('input-message');
form.addEventListener('submit', function(event){
    event.preventDefault();
    const userInput = inputMessage.value;
    axios.post('/chat-message',{
        message: userInput,
    });
});

const channel = Echo.channel('public.chat.1');

channel.subscribed(() => {
    // функиця вызовется когда мы подключемся к каналу
    console.log('subscribed!');
}).listen('.chat-message', (event) => {
    // функиця вызывется когда будет запущен ивент в канале на который мы подписаны
    console.log(event);
   let messages = document.getElementById("messages");
   let userId = document.getElementById("user_id").value;
   if(userId!=event.user){
    messages.insertAdjacentHTML('beforeend',` <div class="messege get" id="message">
    <h5 class="h5" >${event.message}</h5>
 </div>`)
   }else{
    messages.insertAdjacentHTML('beforeend',` <div class="messege set" id="message">
    <h5 class="h5" >${event.message}</h5>
 </div>`)
   }

});