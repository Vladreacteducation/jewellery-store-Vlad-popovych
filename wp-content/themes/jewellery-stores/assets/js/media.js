document.addEventListener('DOMContentLoaded', function() {
    const btnBurgerMenu = document.querySelector('.btn-burger-menu');
    const header = document.querySelector('.header');
    if (btnBurgerMenu) {
        btnBurgerMenu.addEventListener('click', function() {
            if (window.innerWidth < 1280) {
                header.classList.toggle('open-burger');
            }
        });
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1280) {
                header.classList.remove('open-burger');
            }
        });
        if (window.innerWidth >= 1280) {
            header.classList.remove('open-burger');
        }
    }
});