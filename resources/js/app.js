// main.js

window.onload = function() {

    const swiper = new Swiper('.client-swiper', {
        // Configuração Padrão (Mobile-first)
        loop: true,
        centeredSlides: true,
        slidesPerView: 1, // Mostra 1 slide por vez em telas pequenas
        spaceBetween: 20,
        allowTouchMove: true, // Permite arrastar no celular

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // Breakpoints para telas maiores
        breakpoints: {
            // Em telas com 600px ou mais de largura
            600: {
                slidesPerView: 3,
                spaceBetween: 30,
                allowTouchMove: false, // Desativa o arrastar em telas maiores
            },
            // Em telas com 1024px ou mais
            1024: {
                slidesPerView: 3,
                spaceBetween: 40,
                allowTouchMove: false,
            }
        },
    });

};
