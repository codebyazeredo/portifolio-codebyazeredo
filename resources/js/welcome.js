document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

const mobileMenuButton = document.querySelector('.md\\:hidden button');
const mobileMenu = document.querySelector('.md\\:flex');

if (mobileMenuButton) {
    mobileMenuButton.addEventListener('click', function () {
        console.log('Mobile menu clicked');
    });
}

window.addEventListener('scroll', function () {
    const nav = document.querySelector('nav');
    if (window.scrollY > 80) {
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }
});