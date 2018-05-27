<template>
    <button id='top'>{{btn.name}}</button>
</template>

<script>
    import Velocity from 'velocity-animate';

    export default {
        name: 'ClimbComponent',
        props: ['btn'],
        mounted() {
            const top = document.querySelector('#top');
            const apex = document.querySelector('#apex');
            const container = document.querySelector('#app');

            let show = false;
            container.addEventListener('scroll', function () {

                if (this.scrollTop > 900 && !show) {
                    Velocity(top, 'fadeIn');
                    Velocity(top, {opacity: '.85'});
                    show = true;
                }

                if (this.scrollTop < 900 && show) {
                    Velocity(top, 'fadeOut');
                    show = false;
                }
            });

            top.addEventListener('click', function () {

                Velocity(apex, 'scroll', {
                    container: container,
                    duration: 1200,
                    delay: 0,
                    offset: 0,
                    easing: [7, 6]
                });
            });
        }
    }
</script>

<style lang='scss' scoped>
    @import '../../sass/parts/preferences';

    #top {
        position: fixed;
        display: none;
        opacity: 0;
        right: 60px;
        bottom: 80px;
        padding: 7px;
        border: none;
        border-radius: 30px 50px;
        background: $layout-bg-color;
        cursor: pointer;
        -webkit-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.3) !important;
        -moz-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.3) !important;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.3) !important;
        &:hover {
            opacity: .95 !important;
            @extend %button-hover-shadow;
        }
        &:focus {
            outline: 0 !important;
        }
        &:active {
            opacity: .95 !important;
            @extend %button-active-shadow;
        }
    }
</style>