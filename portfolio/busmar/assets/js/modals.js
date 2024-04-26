const modals = Array.from(document.getElementsByClassName("modal"));

function open_modal(num){
    modals[num].style.display = "block";
}
function close_modal(num){
    modals[num].style.display = "none";

}