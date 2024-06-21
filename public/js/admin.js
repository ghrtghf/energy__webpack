export function admin() {
	const button = document.querySelector('.admin__order-btn');
	const content = document.querySelector('.admin__order-wrapper');
	const button2 = document.querySelector('.admin__item-btn');
	const content2 = document.querySelector('.admin__item-wrapper');
	button.addEventListener('click', () => {
		if (content.style.overflowY == 'scroll') {
			content.style.overflowY = 'hidden';
			button.innerHTML = 'смотреть всё';
		} else {
			content.style.overflowY = 'scroll';
			button.innerHTML = 'отмена';
		}
	});

	button2.addEventListener('click', () => {
		if (content2.style.overflowY == 'scroll') {
			content2.style.overflowY = 'hidden';
			button2.innerHTML = 'смотреть всё';
		} else {
			content2.style.overflowY = 'scroll';
			button2.innerHTML = 'отмена';
		}
	});
}
