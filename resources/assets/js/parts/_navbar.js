/*Correct navbar closing*/
import Velocity from 'velocity-animate';

window.addEventListener('click', function (event) {
    let navbarSupportedContent = document.querySelector('#navbarSupportedContent');
    if (navbarSupportedContent.classList.contains('show')) {
        if (!event.target.closest('header')) {
            Velocity(navbarSupportedContent, {height: 0}, {duration: 400});
            setTimeout(() => navbarSupportedContent.classList.remove('show'), 500);
        }
    }
});