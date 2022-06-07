// image Swiper

const swiperImages = new Swiper('.images-wrapper', {
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next-3',
        prevEl: '.swiper-button-prev-3',
    },
    slidesPerView: 5,
    spaceBetween: 15,
    breakpoints: {
        1275: {
            slidesPerView: 5,
            spaceBetween: 15,
        },
        1000: {
            slidesPerView: 4,
            spaceBetween: 9,
        },
        677: {
            slidesPerView: 4,
            spaceBetween: 9,
        },
        600: {
            spaceBetween: 9,
        },
        375: {
            slidesPerView: 4,
            spaceBetween: 9,
        },
        280: {
            slidesPerView: 3,
            spaceBetween: 9,
        }
    }
});


const colorsBloc1 = document.querySelector('.tab-colors-1');
const showColorsBtn1 = colorsBloc1.querySelector('.show-colors');
const hiddenColors1 = colorsBloc1.querySelectorAll('.hidden');

showColorsBtn1.addEventListener('click', function() {
    showColorsBtn1.style.display = 'none';
    hiddenColors1.forEach(element => {
        element.classList.remove('hidden');
    });
})

const colorsBloc2 = document.querySelector('.tab-colors-2');
const showColorsBtn2 = colorsBloc2.querySelector('.show-colors');
const hiddenColors2 = colorsBloc2.querySelectorAll('.hidden');

showColorsBtn2.addEventListener('click', function() {
    showColorsBtn2.style.display = 'none';
    hiddenColors2.forEach(element => {
        element.classList.remove('hidden');
    });
})

const colorsBloc3 = document.querySelector('.tab-colors-3');
const showColorsBtn3 = colorsBloc3.querySelector('.show-colors');
const hiddenColors3 = colorsBloc3.querySelectorAll('.hidden');

showColorsBtn3.addEventListener('click', function() {
    showColorsBtn3.style.display = 'none';
    hiddenColors3.forEach(element => {
        element.classList.remove('hidden');
    });
})

const colorsBloc4 = document.querySelector('.tab-colors-4');
const showColorsBtn4 = colorsBloc4.querySelector('.show-colors');
const hiddenColors4 = colorsBloc4.querySelectorAll('.hidden');

showColorsBtn4.addEventListener('click', function() {
    showColorsBtn4.style.display = 'none';
    hiddenColors4.forEach(element => {
        element.classList.remove('hidden');
    });
})

const colors2Bloc1 = document.querySelector('.tab2-colors-1');
const showColors2Btn1 = colors2Bloc1.querySelector('.show-colors');
const hidden2Colors1 = colors2Bloc1.querySelectorAll('.hidden');

showColors2Btn1.addEventListener('click', function() {
    showColors2Btn1.style.display = 'none';
    hidden2Colors1.forEach(element => {
        element.classList.remove('hidden');
    });
})

const colors2Bloc2 = document.querySelector('.tab2-colors-2');
const showColors2Btn2 = colors2Bloc2.querySelector('.show-colors');
const hidden2Colors2 = colors2Bloc2.querySelectorAll('.hidden');

showColors2Btn2.addEventListener('click', function() {
    showColors2Btn2.style.display = 'none';
    hidden2Colors2.forEach(element => {
        element.classList.remove('hidden');
    });
})

const colors2Bloc3 = document.querySelector('.tab2-colors-3');
const showColors2Btn3 = colors2Bloc3.querySelector('.show-colors');
const hidden2Colors3 = colors2Bloc3.querySelectorAll('.hidden');

showColors2Btn3.addEventListener('click', function() {
    showColors2Btn3.style.display = 'none';
    hidden2Colors3.forEach(element => {
        element.classList.remove('hidden');
    });
})

const colors2Bloc4 = document.querySelector('.tab2-colors-4');
const showColors2Btn4 = colors2Bloc4.querySelector('.show-colors');
const hidden2Colors4 = colors2Bloc4.querySelectorAll('.hidden');

showColors2Btn4.addEventListener('click', function() {
    showColors2Btn4.style.display = 'none';
    hidden2Colors4.forEach(element => {
        element.classList.remove('hidden');
    });
})

const colors3Bloc1 = document.querySelector('.tab3-colors-1');
const showColors3Btn1 = colors3Bloc1.querySelector('.show-colors');
const hidden3Colors1 = colors3Bloc1.querySelectorAll('.hidden');

showColors3Btn1.addEventListener('click', function() {
    showColors3Btn1.style.display = 'none';
    hidden3Colors1.forEach(element => {
        element.classList.remove('hidden');
    });
})

const colors3Bloc2 = document.querySelector('.tab3-colors-2');
const showColors3Btn2 = colors3Bloc2.querySelector('.show-colors');
const hidden3Colors2 = colors3Bloc2.querySelectorAll('.hidden');

showColors3Btn2.addEventListener('click', function() {
    showColors3Btn2.style.display = 'none';
    hidden3Colors2.forEach(element => {
        element.classList.remove('hidden');
    });
})

const colors3Bloc3 = document.querySelector('.tab3-colors-3');
const showColors3Btn3 = colors3Bloc3.querySelector('.show-colors');
const hidden3Colors3 = colors3Bloc3.querySelectorAll('.hidden');

showColors3Btn3.addEventListener('click', function() {
    showColors3Btn3.style.display = 'none';
    hidden3Colors3.forEach(element => {
        element.classList.remove('hidden');
    });
})

const colors3Bloc4 = document.querySelector('.tab3-colors-4');
const showColors3Btn4 = colors3Bloc4.querySelector('.show-colors');
const hidden3Colors4 = colors3Bloc4.querySelectorAll('.hidden');

showColors3Btn4.addEventListener('click', function() {
    showColors3Btn4.style.display = 'none';
    hidden3Colors4.forEach(element => {
        element.classList.remove('hidden');
    });
})

const colors4Bloc1 = document.querySelector('.tab4-colors-1');
const showColors4Btn1 = colors4Bloc1.querySelector('.show-colors');
const hidden4Colors1 = colors4Bloc1.querySelectorAll('.hidden');

showColors4Btn1.addEventListener('click', function() {
    showColors4Btn1.style.display = 'none';
    hidden4Colors1.forEach(element => {
        element.classList.remove('hidden');
    });
})

const colors4Bloc2 = document.querySelector('.tab4-colors-2');
const showColors4Btn2 = colors4Bloc2.querySelector('.show-colors');
const hidden4Colors2 = colors4Bloc2.querySelectorAll('.hidden');

showColors4Btn2.addEventListener('click', function() {
    showColors4Btn2.style.display = 'none';
    hidden4Colors2.forEach(element => {
        element.classList.remove('hidden');
    });
})

const colors4Bloc3 = document.querySelector('.tab4-colors-3');
const showColors4Btn3 = colors4Bloc3.querySelector('.show-colors');
const hidden4Colors3 = colors4Bloc3.querySelectorAll('.hidden');

showColors4Btn3.addEventListener('click', function() {
    showColors4Btn3.style.display = 'none';
    hidden4Colors3.forEach(element => {
        element.classList.remove('hidden');
    });
})

const colors4Bloc4 = document.querySelector('.tab4-colors-4');
const showColors4Btn4 = colors4Bloc4.querySelector('.show-colors');
const hidden4Colors4 = colors4Bloc4.querySelectorAll('.hidden');

showColors4Btn4.addEventListener('click', function() {
    showColors4Btn4.style.display = 'none';
    hidden4Colors4.forEach(element => {
        element.classList.remove('hidden');
    });
})

const swiperProducts2 = new Swiper('.products-wrapper-2', {
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next-5',
        prevEl: '.swiper-button-prev-5',
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
        330: {
            slidesPerView: 2,
            spaceBetween: 17,
        },
        280: {
            slidesPerView: 1,
        }
    }
});

const swiperProducts3 = new Swiper('.products-wrapper-3', {
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next-6',
        prevEl: '.swiper-button-prev-6',
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
        330: {
            slidesPerView: 2,
            spaceBetween: 17,
        },
        280: {
            slidesPerView: 1,
        }
    }
});

// count elements

const metersBox = document.querySelector('.meters-control');
const metersInput = metersBox.querySelector('input');
const metersPlus = metersBox.querySelector('.btn-plus');
const metersMinus = metersBox.querySelector('.btn-minus');

metersMinus.addEventListener('click', function(e) {
    e.preventDefault();   
    if (metersInput.value > 0) {
        metersInput.value -= 1;
    } else {
        metersInput.value = 0
    }
})

metersPlus.addEventListener('click', function(e) {
    e.preventDefault();   
    metersInput.value = Number(metersInput.value) + 1;
})

const countBox = document.querySelector('.count-control');
const countInput = countBox.querySelector('input');
const countPlus = countBox.querySelector('.btn-plus');
const countMinus = countBox.querySelector('.btn-minus');

countMinus.addEventListener('click', function(e) {
    e.preventDefault();   
    if (countInput.value > 0) {
        countInput.value -= 1
    } else {
        countInput.value = 0
    }
})

countPlus.addEventListener('click', function(e) {
    e.preventDefault();   
    countInput.value = Number(countInput.value) + 1;
})

const cartCountBox = document.querySelector('.cart-item-control');
const cartCountInput = cartCountBox.querySelector('input');
const cartCountPlus = cartCountBox.querySelector('.btn-plus');
const cartCountMinus = cartCountBox.querySelector('.btn-minus');

cartCountMinus.addEventListener('click', function(e) {
    e.preventDefault();   
    if (cartCountInput.value > 0) {
        cartCountInput.value -= 1
    } else {
        cartCountInput.value = 0
    }
})

cartCountPlus.addEventListener('click', function(e) {
    e.preventDefault();   
    cartCountInput.value = Number(cartCountInput.value) + 1;
})

const mobCartCountBox = document.querySelector('.mob-cart-item-control');
const mobCartCountInput = mobCartCountBox.querySelector('input');
const mobCartCountPlus = mobCartCountBox.querySelector('.btn-plus');
const mobCartCountMinus = mobCartCountBox.querySelector('.btn-minus');

mobCartCountMinus.addEventListener('click', function(e) {
    e.preventDefault();   
    if (mobCartCountInput.value > 0) {
        mobCartCountInput.value -= 1
    } else {
        mobCartCountInput.value = 0
    }
})

mobCartCountPlus.addEventListener('click', function(e) {
    e.preventDefault();   
    mobCartCountInput.value = Number(mobCartCountInput.value) + 1;
})

//popup on colors

const colorDivs = document.querySelectorAll('.tab-color');
colorDivs.forEach(element => {
    element.addEventListener('click', function() {
        element.classList.toogle
    })
})
colorDivs.forEach(element => {
    element.addEventListener('mouseover', function() {
        const currentElementCoord = element.getBoundingClientRect();
        const parentWidth = element.parentElement.getBoundingClientRect();
        const divColor = element.dataset.color;
        const divName = element.dataset.name;
        const divSales = element.dataset.sales;
        if (currentElementCoord.x > (parentWidth.width / 2)) {
            const popup = document.createElement('div');
            popup.className = 'color-popup popup-left';
            popup.innerHTML = `
            <div class="left-part">
                <img src="./img/productCardColors/${divColor}.svg" alt="" />
            </div>
            <div class="right-part">
                <div class="popup-title">${divName}</div>
                <div class="old-price">${divSales} ₽/м</div>
                <div class="new-price">1140 ₽/м²</div>
            </div>
            `
            element.appendChild(popup)
            if (divSales === 'false') {
                element.querySelector('.old-price').style.display = 'none';
            } else {
                element.querySelector('.old-price').style.display = 'block'
            }
        } else {
            const popup = document.createElement('div');
            popup.className = 'color-popup';
            popup.innerHTML = `
            <div class="left-part">
                <img src="./img/productCardColors/${divColor}.svg" alt="" />
            </div>
            <div class="right-part">
                <div class="popup-title">${divName}</div>
                <div class="old-price">${divSales} ₽/м</div>
                <div class="new-price">1140 ₽/м²</div>
            </div>
            `
            element.appendChild(popup)
            if (divSales === 'false') {
                element.querySelector('.old-price').style.display = 'none';
            } else {
                element.querySelector('.old-price').style.display = 'block'
            }
        }
    })
    element.addEventListener('mouseout', function(e) {
        const popup = e.target.querySelector('.color-popup');
        element.removeChild(popup);
    })
});

//cart-mob

const cartMobBtn = document.querySelector('.form-btn.mobile-button .cart-btn');
const cartMobDiv = document.querySelector('.cart-mob-menu');
const cartMobCloseBtn = document.querySelector('.cart-close-btn');

cartMobBtn.addEventListener('click', function(e) {
    e.preventDefault();
    cartMobDiv.classList.add('active');
    document.body.classList.add('_lock')
})

cartMobCloseBtn.addEventListener('click', function(e) {
    e.preventDefault()
    cartMobDiv.classList.remove('active');
    document.body.classList.remove('_lock')
})
