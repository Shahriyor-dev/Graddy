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

const selectBtn = document.querySelector('.custom-select');
const selectDropDown = document.querySelector('.select-dropdown');
const selectDropDownList = document.querySelector('.select-dropdown ul');

selectBtn.addEventListener('click', function() {
    selectBtn.classList.toggle('active');
    selectDropDown.classList.toggle('active');
});

selectDropDownList.children.forEach(element => {
    element.addEventListener('click', function(e) {
        const value = e.target.textContent;
        selectBtn.textContent = value;
        selectDropDown.classList.remove('active');
        selectBtn.classList.remove('active');
    });
});
