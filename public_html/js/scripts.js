let mobileMenu = document.getElementById('dropdown-menu-mobile');
let mainNav = document.getElementById('main-nav');

if(screen.width < 960) {
    mainNav.classList.add('hidden');
    mobileMenu.addEventListener('click', function(){
        mainNav.classList.toggle('hidden');
    });
} else {
    mainNav.classList.remove('hidden');
}

