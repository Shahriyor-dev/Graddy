const catalogBtn = document.querySelector('.header-list-menus a');
const headerWrapper = document.querySelector('.header-wrapper');
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
const aboutMobNext = document.querySelector('.about-next');
const aboutMobNext2 = document.getElementById('about-next-2');

// Hide header with scroll

window.addEventListener('scroll', function() {
    if ((this.document.body.scrollTop > 0 || this.document.documentElement.scrollTop > 0) && !headerDrop.classList.contains('is-active')) {
        headerSearch.classList.remove('is-active')
        headerPhonenumber.classList.remove('is-active')
        headerEmail.classList.remove('is-active')
        header.style.background = 'rgba(0, 65, 71, .8)';
        headerMiddle.style.minHeight = 0;
        headerMiddle.style.marginTop = '18px';
        headerWrapper.style.minHeight = 0;
    } else {
        headerDrop.classList.remove('is-active');
        headerSearch.classList.add('is-active');
        headerEmail.classList.add('is-active');
        headerPhonenumber.classList.add('is-active');
        catalogBtn.style.color = '#fff';
        header.style.background = 'rgba(0, 65, 71, .5)';
        headerMiddle.style.marginTop = 0;
    }
});

// Hide header with scroll

/* catalog */
function handleOpen() {
    headerDrop.classList.add('is-active')
    headerSearch.classList.remove('is-active')
    headerPhonenumber.classList.remove('is-active')
    headerEmail.classList.remove('is-active')
    catalogBtn.style.color = '#FF7A3E'
    header.style.background = 'rgba(0, 65, 71, .8)'
    headerMiddle.style.minHeight = '80px';
    headerWrapper.style.minHeight = '120px';
};

function handleClose() {
    if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
        headerDrop.classList.remove('is-active')
        headerMiddle.style.minHeight = 0;
        headerWrapper.style.minHeight = 0;
        catalogBtn.style.color = '#fff'
        headerMiddle.style.marginTop = '18px';
    } else {
        headerDrop.classList.remove('is-active')
        headerSearch.classList.add('is-active')
        headerEmail.classList.add('is-active')
        headerPhonenumber.classList.add('is-active')
        headerMiddle.style.minHeight = 0;
        headerWrapper.style.minHeight = 0;
        catalogBtn.style.color = '#fff'
        header.style.background = 'rgba(0, 65, 71, .5)'
    }
}

catalogBtn.addEventListener('mouseenter', handleOpen);

header.addEventListener('mouseleave', handleClose);
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
        aboutMobNext2.style.display = 'block';
        aboutNextBtn.style.display = 'none';
    })
    /* aboutNext */

/* Swiper Products */
const swiperProducts = new Swiper('.products-wrapper', {
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next-1',
        prevEl: '.swiper-button-prev-1',
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

const swiperGallery = new Swiper('.swiper-gallery', {
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next-2',
        prevEl: '.swiper-button-prev-2',
    },
    slidesPerView: 2,
    spaceBetween: 30,
    breakpoints: {
        1275: {
            slidesPerView: 2,
            // spaceBetween: 30,
        },
        1000: {
            slidesPerView: 2,
            // spaceBetween: 25,
        },
        677: {
            slidesPerView: 1,
            // spaceBetween: 20,
        },
        600: {
            // spaceBetween: 10,
        },
        375: {
            slidesPerView: 1,
            // spaceBetween: 10,
        },
        280: {
            slidesPerView: 1,
            // spaceBetween: 20,
        }
    }
});
/* Swiper Gallery */

/* Swiper galleries */
const swiper = new Swiper(".swiper-main", {
    navigation: {
        nextEl: '.swiper-main-button-next',
        prevEl: '.swiper-main-button-prev',
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet(index, className) {
            const thumb = this.slides[index].dataset.thumb;
            const text = this.slides[index].dataset.text;
            return `<div class="${className}">
                <div class="swiper-pagination-image-wrapper">
                  <img class="swiper-pagination-image" src="${thumb}">
                  </div>
                <span>${text}</span>
                <div class="swiper-pagination-bg swiper-pagination-bg-left-side">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <div class="swiper-pagination-bg swiper-pagination-bg-right-side">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                </div>`;
        }
    },
});
/* Swiper galleries */


Fancybox.bind('[data-fancybox="gallery"]', {
    infinite: false,
    backFocus: false,
    trapFocus: false,
    placeFocusBack: false,
});
