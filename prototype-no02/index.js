const menu__open = document.querySelector('#navbar');
const menu__links = document.querySelector('#navbar-menu');

const open__menu = () => {
    menu__open.classList.toggle('is-active');
    menu__links.classList.toggle('active');
}
menu__open.addEventListener('Click', open__menu);

function openSlideMenu(){
    document.getElementById('navbar-menu').style.width = '250px';
    document.getElementById('account-data').style.transition = '0.5 ease-out';
}
function closeSlideMenu(){
    document.getElementById('navbar-menu').style.width = '0px';
    document.getElementById('account-data').style.transition = '0.5 ease-in';
}