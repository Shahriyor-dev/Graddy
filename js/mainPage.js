/* aboutNext */
aboutNextBtn.addEventListener('click', function() {
    aboutNextWrapper.querySelectorAll('.about-next-mob').forEach((p) => {
        p.classList.add('active')
    })
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
            slidesPerView: 4,
            // spaceBetween: 30,
        },
        1000: {
            slidesPerView: 4,
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
