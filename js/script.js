const catalogBtn = document.querySelector('.header-list-menus a');
const headerDrop = document.querySelector('.header-dropdown');
const headerSearch = document.querySelector('.header-search');
const headerPhonenumber = document.querySelector('body > header > div > div > div.header-infos.col-2 > a:nth-child(3)')
const headerEmail = document.querySelector('.header-infos .header-infos-email');
const header = document.querySelector('.header');
const headerMiddle = document.querySelector('.header-middle');
const mobileMenu = document.querySelector('.mob-menu');
const mobileDropBtn = document.querySelector('.mobile-menu-drop');
const mobileDropList = document.querySelector('.mobile-drop-list');
const menuCloseBtn = document.querySelector('.menu-close-btn');
const mobileBurger = document.querySelector('.header-mobile-burger');
const aboutNextBtn = document.querySelector('.about-mob-next');
const aboutMobNext = document.querySelector('.about-next')

/* catalog */
catalogBtn.addEventListener('click', function(e) {
        e.preventDefault();
        headerDrop.classList.toggle('is-active')
        if (headerDrop.classList.contains('is-active')) {
            headerSearch.classList.remove('is-active')
            headerPhonenumber.classList.remove('is-active')
            headerEmail.classList.remove('is-active')
            catalogBtn.style.color = '#FF7A3E'
            header.style.background = 'rgba(0, 65, 71, .8)'
        } else {
            headerSearch.classList.add('is-active')
            headerEmail.classList.add('is-active')
            headerPhonenumber.classList.add('is-active')
            catalogBtn.style.color = '#fff'
            header.style.background = 'rgba(0, 65, 71, .5)'
        }
    })
    /* catalog */

/* Burger menu */
mobileDropBtn.addEventListener('click', function(e) {
    e.preventDefault();
    mobileDropList.classList.toggle('active')
})
menuCloseBtn.addEventListener('click', function(e) {
    mobileMenu.classList.remove('active');
    document.body.classList.remove('_lock')
})
mobileBurger.addEventListener('click', function(e) {
        mobileMenu.classList.add('active')
        document.body.classList.add('_lock')
    })
    /* Burger menu */

/* aboutNext */
aboutNextBtn.addEventListener('click', function() {
        aboutMobNext.classList.add('active');
        aboutNextBtn.style.display = 'none'
    })
    /* aboutNext */

/* Swiper Products */
const swiperProducts = new Swiper('.products-wrapper', {
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    slidesPerView: 5,
    spaceBetween: 50,
    breakpoints: {
        1275: {
            slidesPerView: 5,
            spaceBetween: 30,
        },
        1000: {
            slidesPerView: 4,
            spaceBetween: 25,
        },
        677: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        600: {
            spaceBetween: 10,
        },
        375: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        280: {
            slidesPerView: 1.5,
            spaceBetween: 20,
        }
    }
});
/* Swiper Products */