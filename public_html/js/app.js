const hamburger = document.getElementById('hamburger');
const mainNav = document.querySelector('.main-nav-links');
const mainNavLinks = document.querySelectorAll('.main-nav-links li')

// NAV ON MOBILE
    hamburger.addEventListener('click', () => {
        mainNav.classList.toggle('open');
        mainNavLinks.forEach(link => {
            link.classList.toggle('fade');
        })
    });

    