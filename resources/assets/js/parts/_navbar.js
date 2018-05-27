import Velocity from 'velocity-animate';

let navbarSupportedContent = document.querySelector('#navbarSupportedContent');
let toggle = document.querySelector('#navbar-toggle');
let toggleBoxShadowStatic = '0 0.125rem 0.25rem rgba(0, 0, 0, .1)';
let toggleBoxShadowHover = '0 0.125rem 0.25rem rgba(0, 0, 0, .4)';
let toggleBoxShadowActive = 'inset 0 0 10px rgba(0, 0, 0, .3)';
let toggleActions = {
    active: function () {
        Velocity(toggle, {
            opacity: '.8',
            rotateZ: -15,
        }, {
            duration: 400,
            easing: 'swing'
        })
    },
    reverse: function () {
        Velocity(toggle, {
            opacity: '.4',
            rotateZ: 0,
        }, {
            duration: 400,
            easing: 'swing'
        })
    }
};

/*Correct navbar closing*/
window.addEventListener('click', function (event) {
    if (navbarSupportedContent.classList.contains('show')) {
        if (!event.target.closest('header')) {
            Velocity(navbarSupportedContent, {height: 0}, {duration: 400});
            setTimeout(() => navbarSupportedContent.classList.remove('show'), 300);
            toggleActions.reverse();
        }
    }
});

/*Styling the toggle*/
toggle.addEventListener('click', function () {
    if (!navbarSupportedContent.classList.contains('show')) {
        toggleActions.active();
    } else {
        toggleActions.reverse();
    }
});

toggle.addEventListener('mouseover', function () {
    toggle.style.boxShadow = toggleBoxShadowHover;
});

toggle.addEventListener("mouseout", function () {
    toggle.style.boxShadow = toggleBoxShadowStatic;
});

toggle.addEventListener('mousedown', function () {
    toggle.style.boxShadow = toggleBoxShadowActive;
});

toggle.addEventListener("mouseup", function () {
    toggle.style.boxShadow = toggleBoxShadowStatic;
});