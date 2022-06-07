const catalogBtn = document.querySelector('.header-list-menus a');
const headerWrapper = document.querySelector('.header-wrapper');
const headerDrop = document.querySelector('.header-dropdown');
const headerSearch = document.querySelector('.header-search');
const headerPhonenumber = document.querySelector('body > header > div > div > div.header-infos.col-2 > a:nth-child(3)')
const headerEmail = document.querySelector('.header-infos .header-infos-email');
const header = document.querySelector('.header');
const headerMiddle = document.querySelector('.header-middle');
const headerList = document.querySelector('.header-list');
const mobileMenu = document.querySelector('.mob-menu');
const mobileDropBtn = document.querySelector('.mobile-menu-drop');
const mobileDropList = document.querySelector('.mobile-drop-list');
const menuCloseBtn = document.querySelector('.menu-close-btn');
const mobileBurger = document.querySelector('.header-mobile-burger');
const aboutNextBtn = document.querySelector('.about-mob-next');
const aboutNextWrapper = document.querySelector('.about-wrapper');
const productsCards = document.querySelectorAll('.products-card');

//Sale classes

productsCards.forEach((card) => {
	if (card.classList.contains('with-sale')) {
		const oldPrice = card.querySelector('.products-card-priceold');
		if (oldPrice) {
			oldPrice.style.display = 'block';
		}
	} else {
		const oldPrice = card.querySelector('.products-card-priceold');
		if (oldPrice) {
			oldPrice.style.display = 'none';
		}
	}
})

// Hide header with scroll

window.addEventListener('scroll', function () {
	if ((this.document.body.scrollTop > 0 || this.document.documentElement.scrollTop > 0) && !headerDrop.classList.contains('is-active')) {
		headerSearch.classList.remove('is-active')
		headerPhonenumber.classList.remove('is-active')
		headerEmail.classList.remove('is-active')
		header.style.background = 'rgba(0, 65, 71, .8)';
		headerMiddle.style.minHeight = 0;
		headerWrapper.style.height = '65px';
		// headerMiddle.style.marginTop = '18px';
	} else {
		headerDrop.classList.remove('is-active');
		headerSearch.classList.add('is-active');
		headerEmail.classList.add('is-active');
		headerPhonenumber.classList.add('is-active');
		catalogBtn.style.color = '#fff';
		header.style.background = 'rgba(0, 65, 71, .5)';
		headerWrapper.style.height = "119px";
		headerMiddle.style.minHeight = "80px";
		headerList.style.marginBottom = 0
		// headerMiddle.style.marginTop = 0;
	}
});

// Hide header with scroll

/* catalog */
function handleOpen(e) {
	e.preventDefault();
	headerDrop.classList.add('is-active')
	headerSearch.classList.remove('is-active')
	headerPhonenumber.classList.remove('is-active')
	headerEmail.classList.remove('is-active')
	catalogBtn.style.color = '#FF7A3E'
	header.style.background = 'rgba(0, 65, 71, .8)'


	if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
		// headerMiddle.style.marginTop = '18px';
		// headerMiddle.style.minHeight = 0;
		// headerWrapper.style.height = '119px';
		// headerMiddle.style.minHeight = '119px'
		headerDrop.style.marginTop = '60px'
	} else {
		headerMiddle.style.minHeight = '80px';
		headerWrapper.style.height = '119px';
		headerDrop.style.marginTop = '20px'
	}

};

function handleClose() {
	if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
		headerDrop.classList.remove('is-active')
		// headerMiddle.style.minHeight = 0;
		// headerWrapper.style.minHeight = 0;
		catalogBtn.style.color = '#fff'
		// headerMiddle.style.marginTop = '18px';
		headerDrop.style.marginTop = 0
		// headerMiddle.style.minHeight = '50px'
	} else {
		headerDrop.classList.remove('is-active')
		headerSearch.classList.add('is-active')
		headerEmail.classList.add('is-active')
		headerPhonenumber.classList.add('is-active')
		// headerMiddle.style.minHeight = 0;
		// headerWrapper.style.minHeight = 0;
		catalogBtn.style.color = '#fff'
		header.style.background = 'rgba(0, 65, 71, .5)'
		headerDrop.style.marginTop = 0
	}
}

catalogBtn.addEventListener('mouseenter', handleOpen);
catalogBtn.addEventListener('click', handleOpen);

header.addEventListener('mouseleave', handleClose);
/* catalog */

/* Burger menu */
mobileDropBtn.addEventListener('click', function (e) {
	e.preventDefault();
	mobileDropList.classList.toggle('active')
})
menuCloseBtn.addEventListener('click', function (e) {
	mobileMenu.classList.remove('active');
	document.body.classList.remove('_lock')
})
mobileBurger.addEventListener('click', function (e) {
	mobileMenu.classList.add('active')
	document.body.classList.add('_lock')
})
/* Burger menu */
