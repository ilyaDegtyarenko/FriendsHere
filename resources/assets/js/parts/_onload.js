import Velocity from 'velocity-animate';

window.onload = function () {
    let body = document.body;
    let app = document.querySelector('#app');
    let header = document.querySelector('header');
    let footer = document.querySelector('footer');
    let preloader = document.querySelector('#preloader-overlay');
    let bodyBgColor = getComputedStyle(document.body).getPropertyValue('--body-bg-color').trim();

    Velocity(preloader, {opacity: 0}, {
        delay: 1000,
        duration: 700,
        complete: function () {
            preloader.style.visibility = 'hidden';
        }
    });

    Velocity(header, {top: 0, opacity: 1}, {
        delay: 1000,
        duration: 1000,
        easing: 'swing'
    });

    Velocity(footer, {bottom: 0, opacity: 1}, {
        delay: 1000,
        duration: 1000,
        easing: 'swing'
    });

    Velocity(body, {backgroundColor: bodyBgColor}, {
        delay: 1600,
        duration: 5000,
        easing: 'swing'
    });

    Velocity(app, {opacity: 1}, {
        delay: 1000,
        duration: 2000,
        easing: 'swing'
    });

    Velocity(footer, {width: '90%', left: '5%'}, {
        duration: 800,
        easing: 'swing'
    });
};

window.onbeforeunload = function (e) {
    let header = document.querySelector('header');
    let footer = document.querySelector('footer');
    let preloader = document.querySelector('#preloader-overlay');

    header.style.visibility = 'hidden';
    footer.style.visibility = 'hidden';
    preloader.style.visibility = 'visible';
    preloader.style.opacity = 1;
};