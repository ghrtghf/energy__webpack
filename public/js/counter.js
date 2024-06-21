export function counter() {
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
}
