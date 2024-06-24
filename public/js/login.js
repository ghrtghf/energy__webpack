export function login() {
	VANTA.HALO({
		el: '.picture',
		mouseControls: true,
		touchControls: false,
		gyroControls: false,
		minHeight: 200.0,
		minWidth: 200.0,
	});

	const inputPass = document.getElementById('login__password');
	const eye = document.querySelector('.login__eye');
	const closeEye = document.querySelector('.login__closeEye');

	eye.addEventListener('click', () => {
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
}
