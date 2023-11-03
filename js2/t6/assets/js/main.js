document.addEventListener('DOMContentLoaded',()=>{

    const blocks = document.querySelectorAll('.block');
    const phoneBlock = document.querySelector('.phone-block');

    window.addEventListener('scroll',()=>{

        const windowHeight = window.innerHeight;

        const scrollPosition = window.scrollY;

        const blockHaight = blocks[3].clientHeight;

        const blockMidlle = blocks[3].offsetTop + blockHaight / 2;

        if( scrollPosition + windowHeight >= blockMidlle ) {
            phoneBlock.style.display = 'block';
        }else{
            phoneBlock.style.display = 'none';
        }

    });


});