export default function animation() {
	gsap.registerPlugin(ScrollTrigger);
	const home = gsap.timeline();
	const aboutTimeLine = gsap.timeline();

	gsap.fromTo(
		'.navigation',
		{
			opacity: 0,
			autoAlpha: 0,
			y: -30,
		},
		{
			opacity: 1,
			autoAlpha: 1,
			y: 0,
			duration: 1,
			scrollTrigger: {
				trigger: '.about__main',
				start: '55% center',
				end: '+=100',
				scrub: true,
				// pin: '.navigation',
			},
		}
	);
	gsap.fromTo(
		'.navigation button',
		{
			scale: 0.8,
		},
		{
			scale: 1,
			scrollTrigger: {
				trigger: '.about__main',
				start: '55% center',
				end: '+=100',
				scrub: true,
				// pin: '.navigation',
			},
		}
	);
	// let value = 1;
	// const name = ['О нас', 'Каталог', 'Карта'];
	// const navButton = document.querySelector('.navigation__active button p');
	// const section = document.querySelectorAll('section');
	// section.forEach(elem => {
	// 	elem.className;
	// });
	// // const nameSection = section.className;
	// let observer = new IntersectionObserver(
	// 	(entries, observer) => {
	// 		entries.forEach(entry => {
	// 			if (entry.isIntersecting) {
	// 				name.forEach((elem, index) => {
	// 					navButton.innerHTML = `${elem}<span>${value++}<span>`;
	// 				});
	// 				// navButtonCount.innerHTML = value++;
	// 				console.log(section);
	// 				observer.unobserve(entry.target);
	// 			}
	// 		});
	// 	}
	// 	// { threshold: 1 }
	// );
	// document.querySelectorAll('section:nth-child(n+4)').forEach(sec => {
	// 	observer.observe(sec);
	// });

	if (!sessionStorage.getItem('first')) {
		gsap.fromTo('.home__title', { left: 500 }, { left: 0, duration: 2, delay: 3.4 });
		gsap.fromTo('.home__title div', { y: 50, opacity: 0 }, { y: 0, opacity: 1, delay: 1, duration: 1 });
		gsap.fromTo('.home__animation-e', { color: '#A5EEFF', rotationX: -590 }, { color: '#000', rotationX: 0, delay: 1.2, duration: 2 });
		gsap.fromTo('.home__animation', { rotate: -180, color: '#E4C0FF' }, { color: '#000', rotate: 0, delay: 1.2, duration: 2 });
		home
			.fromTo('.home__title', {}, { duration: 4, delay: 4 })
			.fromTo('.home__plus', { opacity: 0 }, { opacity: 1, duration: 1 }, '-=3')
			.fromTo('.header', { y: -120, opacity: 0 }, { y: 0, opacity: 1, duration: 1 }, '-=4')
			.fromTo('.home__swiper', { autoAlpha: 0 }, { autoAlpha: 1, duration: 1 }, '-=4')
			.fromTo('.home__slide', { opacity: 0, x: 1000 }, { opacity: 1, x: 0, duration: 1 }, '-=4')
			.fromTo('.home__slide-2', { opacity: 0, x: 1000 }, { opacity: 1, x: 0, duration: 1 }, '-=3.9')
			.fromTo('.home__btn', { opacity: 0, autoAlpha: 0 }, { autoAlpha: 1, opacity: 1, x: 0, duration: 1 }, '-=2.8')
			.fromTo('.home__text', { opacity: 0, y: 50, autoAlpha: 0 }, { opacity: 1, y: 0, duration: 1, autoAlpha: 1 }, '-=2.8')
			.fromTo('.home__btn img', { opacity: 0, x: -50 }, { opacity: 1, x: 0, duration: 1 }, '-=2.7')
			.fromTo('.home__arrow', { scale: 0.6, opacity: 0, rotate: -50, autoAlpha: 0 }, { scale: 1, rotate: 0, opacity: 1, stagger: 0.2, duration: 1, autoAlpha: 1 }, '-=2.7')
			.fromTo('.home__scroll', { opacity: 0, x: -50 }, { opacity: 1, x: 0, duration: 1 }, '-=2.6');
	}
	sessionStorage.setItem('first', 1);

	aboutTimeLine.fromTo('.about__title', { opacity: 0, autoAlpha: 0, y: 400 }, { opacity: 1, autoAlpha: 1, y: 300 });

	aboutTimeLine
		.fromTo(
			'.about__title-1',
			{
				x: 80,
			},
			{
				x: 0,
			},
			0.2
		)
		.fromTo(
			'.text__left',
			{
				x: 20,
			},
			{
				x: -10,
			},
			0.2
		)
		.fromTo(
			'.text__right',
			{
				x: -15,
			},
			{
				x: 0,
			},
			0.2
		)
		.fromTo(
			'.text__right-large',
			{
				x: -45,
			},
			{
				x: 0,
			},
			0.2
		)
		.fromTo(
			'.about__svg',
			{
				opacity: 0,
				autoAlpha: 0,
			},
			{
				opacity: 1,
				autoAlpha: 1,
			},
			0.5
		)
		.to(
			'.about__title p',
			{
				scale: 0.7,
				duration: 1,
			},
			0.8
		)
		.to(
			'.about__title',
			{
				y: 50,
			},
			0.8
		)
		.fromTo(
			'.about__img-left',
			{
				opacity: 0,
				autoAlpha: 0,
				y: 150,
			},
			{
				opacity: 1,
				autoAlpha: 1,
				y: 0,
			},
			1
		)
		.fromTo(
			'.about__img-right img',
			{
				opacity: 0,
				autoAlpha: 0,
				y: 150,
			},
			{
				opacity: 1,
				y: 0,
				autoAlpha: 1,
			},
			1.2
		)
		.fromTo(
			'.about__text p',
			{
				opacity: 0,
				autoAlpha: 0,
				y: 50,
			},
			{
				opacity: 1,
				y: 0,
				autoAlpha: 1,
			},
			1.3
		)
		.fromTo(
			'.about__text svg',
			{
				opacity: 0,
				autoAlpha: 0,
				x: -110,
			},
			{
				opacity: 1,
				x: 0,
				autoAlpha: 1,
			},
			1.5
		);
	ScrollTrigger.create({
		animation: aboutTimeLine,
		trigger: '.about__main',
		start: 'center center',
		end: '+=1000',
		scrub: true,
		anticipatePin: 1,
		pin: '.about__main',
	});

	//////////////////////////////////////////////////////////////////
	const catalog = gsap.timeline({ duration: 2 });
	gsap.to('.catalog__img-left', {
		opacity: 0,
		autoAlpha: 0,
		y: -500,
		x: -100,
		width: '400px',
		height: '450px',
	});
	gsap.to('.catalog__img-right', {
		opacity: 0,
		autoAlpha: 0,
		y: -500,
		x: 800,
		width: '400px',
		height: '450px',
	});
	gsap.to('.catalog__img-center', {
		opacity: 0,
		autoAlpha: 0,
		y: -100,
		x: -360,
		width: '500px',
		height: '400px',
	});
	catalog
		.fromTo(
			'.catalog-home__title h2',
			{
				opacity: 0,
				y: 50,
				autoAlpha: 0,
			},
			{
				y: 0,
				opacity: 1,
				autoAlpha: 1,
				// duration: 1,
				scrollTrigger: {
					trigger: '.catalog-home__wrapper',
					start: 'top center',
					end: '+=200',
					scrub: true,
				},
			},
			1
		)
		.fromTo(
			'.catalog-home__img',
			{
				opacity: 0,
				autoAlpha: 0,
				y: 50,
			},
			{
				opacity: 1,
				autoAlpha: 1,
				duration: 1,
				y: 0,
				scrollTrigger: {
					trigger: '.catalog-home__wrapper',
					start: 'top center',
					end: '+=400',
					scrub: true,
				},
			},
			1
		)
		.fromTo(
			'.catalog-home__title  > p',
			{
				opacity: 0,
				autoAlpha: 0,
			},
			{
				opacity: 1,
				autoAlpha: 1,
				scrollTrigger: {
					trigger: '.catalog-home__wrapper',
					start: '10% center',
					end: '+=200',
					scrub: true,
				},
			},
			3
		)
		.fromTo(
			'.catalog-home__arrow',
			{
				opacity: 0,
				autoAlpha: 0,
				y: -150,
			},
			{
				y: 0,
				opacity: 1,
				autoAlpha: 1,
				scrollTrigger: {
					trigger: '.catalog-home__wrapper',
					start: '35% center',
					end: '+=100',
					scrub: 2,
				},
			}
		);

	ScrollTrigger.create({
		animation: catalog,
		trigger: '.catalog-home__wrapper',
		start: '40% center',
		end: '+=1000',
		scrub: true,
		anticipatePin: 1,
		pin: '.catalog-home__wrapper',
	});
	catalog
		.to(
			'.catalog-home__title h2',
			{
				y: -50,
				opacity: 0,
				autoAlpha: 0,
			},
			1
		)
		.to(
			'.catalog-home__title  > p',
			{
				opacity: 0,
				autoAlpha: 0,
			},
			1
		)

		.to(
			'.catalog-home__ticker',
			{
				opacity: 0,
				autoAlpha: 0,
			},
			1
		)
		.to(
			'.catalog-home__footer',
			{
				y: 100,
				opacity: 0,
				autoAlpha: 0,
			},
			1
		)
		.to(
			'.catalog-home__img',
			{
				y: -300,
				x: 450,
				// left: '50%',
				// xPercent: -50,
				width: '500px',
				height: '400px',
			},
			1.4
		)
		.to(
			'.catalog__img-left',
			{
				y: -500,
				x: 15,
				width: '400px',
				height: '450px',
				opacity: 1,
				autoAlpha: 1,
			},
			1.6
		)
		.to(
			'.catalog__img-right',
			{
				y: -500,
				x: 580,
				width: '400px',
				height: '450px',
				opacity: 1,
				autoAlpha: 1,
			},
			1.6
		)
		.to(
			'.catalog__img-center',
			{
				y: -320,
				x: -360,
				width: '500px',
				height: '400px',
				opacity: 1,
				autoAlpha: 1,
			},
			1.6
		);

	new Swiper('.home__swiper', {
		direction: 'horizontal',
		loop: true,

		slidesPerView: 'auto',
		simulateTouch: false,
		spaceBetween: 16,

		mousewheel: {
			sensitivity: 1,
			eventTarget: '.home__swiper-wrapper',
		},
	});
	new Swiper('.home__info', {
		// Optional parameters
		direction: 'horizontal',
		loop: true,
		simulateTouch: false,

		navigation: {
			nextEl: '.home__arrow-next',
			prevEl: '.home__arrow-prev',
		},
	});
}
