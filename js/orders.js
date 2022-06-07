const select = document.getElementById('select');
const hiddenBlock = document.querySelector('.orders-delivery-selected');
const hiddenMap = document.querySelector('.company-map');
const btns = document.querySelectorAll('.counter-btn');

/* Hide/Show block */
select.addEventListener('change', function (){
    if (select.value === "1"){
        hiddenMap.style.display = "block";
        hiddenBlock.style.display = "none";
    }
    if (select.value === "2"){
        hiddenBlock.style.display = "block";
        hiddenMap.style.display = "none";
    }
})



/* Counter */
btns.forEach(btn =>{
    btn.addEventListener('click', function (){
        const direction = this.dataset.direction;
        const inp = this.parentElement.parentElement.querySelector('.form-control');
        const currentValue = +inp.value;
        let newValue;

        if (direction === "plus") {
            newValue = currentValue + 1;
        } else {
            newValue = currentValue - 1 > 0 ? currentValue - 1 : 0;
        }

        inp.value = newValue;
    })
})

/* mob Counter */

const mobBtns = document.querySelectorAll('.mob-btn-counter');

mobBtns.forEach(e => {
    e.addEventListener('click', function() {
        const direction = this.dataset.direction;
        const inp = this.parentElement.parentElement.querySelector('.form-control');
        const currentValue = +inp.value;
        let newValue;

        if (direction === "plus") {
            newValue = currentValue + 1;
        } else {
            newValue = currentValue - 1 > 0 ? currentValue - 1 : 0;
        }

        inp.value = newValue;
    })
})

// orders sale

const orderCards = document.querySelectorAll('.cart-item')

orderCards.forEach((card) => {
    if (card.classList.contains('with-sale')) {
        const oldPrice = card.querySelector('.price-old');
        oldPrice.style.display = 'block';
    } else {
        const oldPrice = card.querySelector('.price-old');
        oldPrice.style.display = 'none';
    }
})