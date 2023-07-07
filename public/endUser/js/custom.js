var swiper = new Swiper(".mySwiper1", {
    breakpoints: {
        // when window width is >= 320px
        280: {
            slidesPerView: 1,
        },
        // when window width is >= 480px
        768: {
            slidesPerView: 2,
            spaceBetween: 20
        }
    }
});

var swiper = new Swiper(".mySwiper2", {
    pagination: {
        el: ".swiper-pagination",
    },
});

var swiper = new Swiper(".mySwiper3", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        // when window width is >= 320px
        280: {
            slidesPerView: 1,
        },
        // when window width is >= 480px
        768: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        // when window width is >= 640px
        992: {
            slidesPerView: 3,
            spaceBetween: 30
        }
    }
});

