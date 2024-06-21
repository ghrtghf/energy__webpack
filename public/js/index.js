import animation from './animation.js';
import { initMap } from './map.js';
import { login } from './login.js';
import { admin } from './admin.js';
import { counter } from './counter.js';
import { profile } from './profile.js';
import { item } from './item.js';

const preloading = document.querySelector('.preloading');
const body = document.querySelector('body');

body.classList.add('hidden-scroll');
window.addEventListener('load', () => {
	body.classList.remove('hidden-scroll');
	preloading.style.display = 'none';
	animation();
	initMap();
});

if (window.location.pathname == '/admin') {
	admin();
} else if (window.location.pathname == '/login' || window.location.pathname == '/signUp') {
	login();
} else if (window.location.pathname == '/cart' || window.location.pathname == '/item') {
	counter();
	item();
} else if (window.location.pathname == '/profile') {
	profile();
} 
