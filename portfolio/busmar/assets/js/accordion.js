let acc_btn = Array.from(document.getElementsByClassName('open_close_acc'));
let acc_info = Array.from(document.getElementsByClassName('answer_block'));
for(let i = 0;i<acc_btn.length;i++){
    acc_btn[i].addEventListener('click', function(){
        acc_info[i].classList.toggle('active_acc');
        acc_btn[i].classList.toggle('close');
    });
}