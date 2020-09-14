
let toggle = document.getElementById('toggle');
let scrollYBefore = window.scrollY;

document.addEventListener('scroll',()=>{
    HeaderHide();
});

toggle.addEventListener('change', ()=>{
    document.body.style = (toggle.checked) ? "position:fixed" : "position:inherit";
})

function HeaderHide() {
    let header = document.getElementsByTagName('header')[0];
    
    if(window.scrollY > scrollYBefore){
        header.classList.add("none");
        scrollYBefore = window.scrollY;
    }
    else{
        header.classList.remove('none');
        scrollYBefore = window.scrollY;
    }
}