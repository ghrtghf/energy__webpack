export function profile() {
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
}
