export function item() {
	new Swiper('.item__swiper', {
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
}
