import animation from './animation.js';
import { initMap } from './map.js';

const preloading = document.querySelector('.preloading');
const body = document.querySelector('body');
// body.classList.add('hidden-scroll');

window.addEventListener('load', () => {
	preloading.style.display = 'none';
	animation();
	initMap();
	// body.classList.remove('hidden-scroll');
});

new Swiper('.item__swiper', {
	// Optional parameters
	direction: 'horizontal',
	simulateTouch: true,
	grabCursor: true,

	pagination: {
		el: '.swiper-pagination',
	},

	navigation: {
		nextEl: '.swiper__circle-next',
		prevEl: '.swiper__circle-prev',
	},
});

VANTA.HALO({
	el: '.picture',
	mouseControls: true,
	touchControls: false,
	gyroControls: false,
	minHeight: 200.0,
	minWidth: 200.0,
	// backgroundColor: 0x0C2EB4,
});

const counters = document.querySelectorAll('[data-counter]');

counters.forEach(counter => {
	counter.addEventListener('click', ev => {
		const target = ev.target;

		if (target.closest('.cart__button')) {
			let value = target.closest('.cart__counter').querySelector('input').value;

			if (target.classList.contains('counter-plus') || target.classList.contains('svg-plus')) {
				value++;
			} else {
				--value;
			}
			if (value <= 0) {
				value = 0;
			}
			target.closest('.cart__counter').querySelector('input').value = value;
		}
	});
});

const select = document.querySelectorAll('.cart__item > svg');
select.forEach(item => {
	item.addEventListener('click', ev => {
		const target = ev.target;
		let rect = target.closest('.cart__item').querySelector('.cart__item > svg rect');
		let path = target.closest('.cart__item').querySelector('.cart__item > svg path');

		if (rect.style.fill == 'black') {
			rect.style.fill = 'white';
			path.style.fill = 'black';
		} else {
			rect.style.fill = 'black';
			path.style.fill = 'white';
		}
	});
});

const buttonPerson = document.querySelector('.person__title span');
const buttonAddress = document.querySelector('.address__title span');
const inputInfo = document.querySelectorAll('.profile__input-info');
const inputAddress = document.querySelectorAll('.profile__input');
const submitPerson = document.querySelector('.profile__submit-info');
const submitAddress = document.querySelector('.profile__submit-address');

buttonPerson.addEventListener('click', ev => {
	ev.preventDefault();
	buttonPerson.style.opacity = 0;
	buttonPerson.style.viability = 'hidden';
	buttonPerson.style.overflow = 'hidden';

	for (const input of inputInfo) {
		input.removeAttribute('disabled');
	}
	submitPerson.style.display = 'block';
});

buttonAddress.addEventListener('click', ev => {
	ev.preventDefault();
	buttonAddress.style.opacity = 0;
	buttonAddress.style.viability = 'hidden';
	buttonAddress.style.overflow = 'hidden';

	for (const input of inputAddress) {
		input.removeAttribute('disabled');
	}
	submitAddress.style.display = 'block';
});

const inputPass = document.getElementById('login__password');
const eye = document.querySelector('.login__eye');
const closeEye = document.querySelector('.login__closeEye');

eye.addEventListener('click', ev => {
	if (inputPass.getAttribute('type') == 'password') {
		inputPass.setAttribute('type', 'text');
		eye.setAttribute('class', 'hidden');
		closeEye.setAttribute('class', 'login__closeEye in-closeEye');
	}
});

closeEye.addEventListener('click', () => {
	inputPass.setAttribute('type', 'password');
	eye.setAttribute('class', 'login__eye in-eye');
	closeEye.setAttribute('class', 'login__closeEye in-closeEye hidden');
});
