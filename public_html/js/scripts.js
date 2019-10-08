let hamburger = document.getElementById('hamburger');
let mainNav = document.getElementById('main-nav');

// NAV ON MOBILE
if(screen.width <= 960) {
    mainNav.classList.add('hidden');

    hamburger.addEventListener('click', function(){
        mainNav.classList.toggle('hidden');
    });
} 

// NAV ON DESKTOPS
if (screen.width > 960){
    mainNav.classList.remove('hidden');
}