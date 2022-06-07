const colorNextBtn = document.querySelector('.content-aside-item .forms-color-next');
const colorNextBox = document.querySelector('.content-aside-item .forms-color-hidden');
const mobColorNextBtn = document.querySelector('.mob-content-aside-item .forms-color-next');
const mobColorNextBox = document.querySelector('.mob-content-aside-item .forms-color-hidden');
const filterBurgerBtn = document.querySelector('.filter-mobile-burger');
const filterMenu = document.querySelector('.filter-mob-menu');
const filterCloseBtn = document.querySelector('.filter-close-btn');

//  Color selection
colorNextBtn.addEventListener('click', function() {
    colorNextBtn.style.display = 'none';
    colorNextBox.style.opacity = 1;
    colorNextBox.style.height = '100%';
})

mobColorNextBtn.addEventListener('click', function() {
    mobColorNextBtn.style.display = 'none';
    mobColorNextBox.style.opacity = 1;
    mobColorNextBox.style.height = '100%';
})

// filter-mobile-menu

filterBurgerBtn.addEventListener('click', function() {
    filterMenu.classList.add('active');
    document.body.classList.add('_lock');
});

filterCloseBtn.addEventListener('click', function() {
    filterMenu.classList.remove('active');
    document.body.classList.remove('_lock');
})

//filter-product-list

const mobProductsBtn = document.querySelector('.mob-products-next');
const productsCard = document.querySelectorAll('.products-card');

mobProductsBtn.addEventListener('click', function() {
    mobProductsBtn.style.display = 'none';
    productsCard.forEach(element => {
        element.style.display = 'flex';
    });
})

// filter-select

const popularBtn = document.querySelector('.popular');
const costUpBtn = document.querySelector('.cost-up');
const constDownBtn = document.querySelector('.cost-down');

popularBtn.addEventListener('click', function(e) {
    e.preventDefault();
    if (popularBtn.classList.contains('is-active')) {
        return
    } else {
        popularBtn.classList.add('is-active');
        costUpBtn.classList.remove('is-active');
        constDownBtn.classList.remove('is-active');
    }
});

costUpBtn.addEventListener('click', function(e) {
    e.preventDefault();
    if (costUpBtn.classList.contains('is-active')) {
        return
    } else {
        costUpBtn.classList.add('is-active');
        popularBtn.classList.remove('is-active');
        constDownBtn.classList.remove('is-active');
    }
});

constDownBtn.addEventListener('click', function(e) {
    e.preventDefault();
    if (constDownBtn.classList.contains('is-active')) {
        return
    } else {
        constDownBtn.classList.add('is-active');
        costUpBtn.classList.remove('is-active');
        popularBtn.classList.remove('is-active');
    }
});
