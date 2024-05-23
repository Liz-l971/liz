function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
function openity(evt, cityName) {
    var i, tabcontentqwe, link;
    tabcontentqwe = document.getElementsByClassName("tabcontentqwe");
    for (i = 0; i < tabcontentqwe.length; i++) {
        tabcontentqwe[i].style.display = "none";
    }
    link = document.getElementsByClassName("link");
    for (i = 0; i < link.length; i++) {
        link[i].className = link[i].className.replace(" act", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " act";
}

document.addEventListener('DOMContentLoaded', function() {
    const passwordInputs = document.querySelectorAll('.display_flex_pass input[type="password"]');
    const passwordCheckbox = document.querySelector('.display_flex_pass .password-checkbox');

    passwordCheckbox.addEventListener('change', function() {
        const showPassword = this.checked;
        passwordInputs.forEach(input => {
            input.type = showPassword ? 'text' : 'password';
        });
    });
});
document.addEventListener('DOMContentLoaded', function() {
    const toggler = document.querySelector('.sidebar_toggler');
    const sidebar = document.querySelector('#sidebar');
    const closeBtn = document.querySelector('#close_btn');
    const content = document.querySelector('#content');

    toggler.addEventListener('click', function(event) {
        event.stopPropagation();
        sidebar.style.right = 0;
        content.style.paddingRight = "363px";
    });

    closeBtn.addEventListener('click', function(event) {
        event.stopPropagation();
        sidebar.style.right = "-363px";
        content.style.paddingRight = 0;
    });

    document.addEventListener('click', function(event) {
        if (!sidebar.contains(event.target) && sidebar.style.right === "0px") {
            sidebar.style.right = "-363px";
            content.style.paddingRight = 0;
        }
    });
});