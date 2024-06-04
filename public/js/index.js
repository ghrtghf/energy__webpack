import animation from './animation.js';
animation();
const swiper = new Swiper('.home__swiper', {
	// Optional parameters
	direction: 'horizontal',
	loop: true,

	slidesPerGroup: 1,
	simulateTouch: false,
	spaceBetween: 20,
	mousewheel: {
		sensitivity: 1,
		eventTarget: '.home__swiper-wrapper',
	},
});
const swiperText = new Swiper('.home__info', {
	// Optional parameters
	direction: 'horizontal',
	loop: true,
	simulateTouch: false,

	navigation: {
		nextEl: '.home__arrow-next',
		prevEl: '.home__arrow-prev',
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
