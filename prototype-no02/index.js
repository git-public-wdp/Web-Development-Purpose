const menu__open = document.querySelector('#navbar');
const menu__links = document.querySelector('#navbar-menu');

const open__menu = () => {
    menu__open.classList.toggle('is-active');
    menu__links.classList.toggle('active');
}
menu__open.addEventListener('Click', open__menu);

function openSlideMenu(){
    document.getElementById('navbar-menu').style.width = '300px';
    //document.getElementById('spacer').style.transition = '0.5s';
    document.getElementById('spacer').style.marginLeft = '240px';
}
function closeSlideMenu(){
    document.getElementById('navbar-menu').style.width = '0px';
    //document.getElementById('spacer').style.transition = '0.5s';
    document.getElementById('spacer').style.marginLeft = '40px';
}
function showResult(){

}
