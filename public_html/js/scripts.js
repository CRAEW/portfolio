let mobileMenu = document.getElementById('dropdown-menu-mobile');
let mainNav = document.getElementById('main-nav');

mobileMenu.addEventListener('click', function(){
    mainNav.classList.toggle('hidden');
});