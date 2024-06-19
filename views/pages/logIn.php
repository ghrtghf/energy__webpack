<?php

/** 
 * @var \App\Kernel\View\View $view
 * @var \App\Kernel\Session\SessionInterface $session
 */
?>

<?php $view->component('easeStart') ?>
	<div class="app">
		<div class="login">
			<div class="wrapper">
				<div class="login__main">
					<div class="login__header">
						<a href="./" class="login__logo in-logo">
							<svg width="40" height="56" viewBox="0 0 40 56" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M36.2484 29.9163C35.7697 28.8441 34.6778 27.9821 33.3513 27.6513L23.9524 25.3079L38.5826 8.88107C39.3137 8.05912 39.454 6.94838 38.9538 5.91834C38.452 4.88793 37.3821 4.07648 36.0971 3.75609L23.6104 0.642821C21.9099 0.218821 20.1882 0.742455 19.3807 1.92101L1.39066 28.1948C0.815087 29.0355 0.791188 30.0826 1.32415 31.0382C1.85563 31.9933 2.88465 32.7232 4.09723 33.0255L14.1631 35.5353L8.25876 51.7261C7.84592 52.859 8.51125 54.1656 9.84528 54.8313C11.1799 55.4946 12.8016 55.3342 13.7091 54.4473L35.6943 32.9324C36.5159 32.1317 36.7242 30.9878 36.2484 29.9163Z" fill="url(#g1)" />
								<defs>
									<linearGradient xmlns="http://www.w3.org/2000/svg" id="g1" x1="25.5278" y1="1.23363" x2="11.9802" y2="55.5702" gradientUnits="userSpaceOnUse">
										<stop offset="0.15" stop-color="#9CFCFF" stop-opacity="0.45">
											<animate attributeName="stop-color" values="#000; #BB87FF; #BB87FF; #000" dur="4s" repeatCount="indefinite">
											</animate>
										</stop>
										<stop offset="0.45" stop-color="#A599F0" stop-opacity="0.6">
											<animate attributeName="stop-color" values="#000; #D3B3FE;#D3B3FE; #000 " dur="4s" repeatCount="indefinite">
											</animate>
										</stop>
										<stop offset="0.6" stop-color="#D3B3FE" stop-opacity="0.8">
											<animate attributeName="stop-color" values="#000; #A599F0;#A599F0; #000 " dur="4s" repeatCount="indefinite">
											</animate>
										</stop>
										<stop offset="1" stop-color="#BB87FF" stop-opacity="0.733333">
											<animate attributeName="stop-color" values="#000; #9CFCFF;#9CFCFF; #000 " dur="4s" repeatCount="indefinite">
											</animate>
										</stop>
									</linearGradient>
								</defs>
							</svg>
							<p>energy+</p>
						</a>
					</div>

					<h1 class="login__title in-title">
						Добро пожаловать
					</h1>
					<h2 class="login__subtitle in-subtitle">
						Пожалуйста введите данные
					</h2>

					<form action="/login" method="POST" class="login__form in-form">
						<div class="login__form-email in-form-email">
							<label>
								<div class="login__error error"></div>
								<input type="text" placeholder="Почта" name="email">
								<img class="signUp__email in-emailImg" src="./assets/img/signUp/mail.svg" alt="">
							</label>
						</div>
						<div class="login__form-password in-form-password">
							<label>
								<?php if($session->has('error')){ ?>
									<div class="login__error error">
										<?php echo $session->getFlash('error') ?>
									</div>
								<?php } ?>
								
								<input id="login__password" type="password" placeholder="Пароль" name="password">
								<img class="login__eye in-eye" src="./assets/img/login/eye.svg" alt="">
								<img class="login__closeEye in-closeEye hidden" src="./assets/img/login/eye-close.svg" alt="">
							</label>
							
						</div>
						<p class="login__signUp in-signUp">Нет аккаунта? <a href="./register">Зарегистрироваться</a></p>
						<input type="submit" value="Войти" class="login__submit in-submit">
					</form>

				</div>
			</div>
			<div class="login__picture picture"></div>
		</div>

	</div>
	<?php $view->component('end') ?>