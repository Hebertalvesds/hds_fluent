
document.addEventListener('scroll',()=>{
    HeaderHide();
});

function HeaderHide() {
    let header = document.getElementsByTagName('header')[0];
    let brand = document.getElementsByClassName('brand')[0];

    if(window.scrollY >= 50){
        header.style = "padding: 1px; top: -54px; transition: all .2s linear; border-bottom: 6px solid #ffe000";
        brand.classList.add('fixed');
    }
    else{
        brand.classList.remove('fixed');
        header.style = "padding: 1rem; top: 0px; transition: all .2s linear";
    }
}