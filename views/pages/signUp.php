<?php

/** 
 * @var \App\Kernel\View\View $view
 */
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Energy+</title>
	<link type="image/x-icon" rel="shortcut icon" href="../assets/img/favicon.ico" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
	<div class="app">
		<div class="signUp">
			<div class="wrapper">
				<div class="signUp__main">
					<a href="./home" class="signUp__logo in-logo">
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
					<h1 class="signUp__title in-title">
						Регистрация
					</h1>
					<form action="" class="signUp__form in-form">
						<div class="signUp__form-email in-form-email">
							<label>
								<div class="signUp__error error"></div>
								<input type="text" placeholder="Почта" name="email">
								<img class="signUp__email in-emailImg" src="./assets/img/signUp/mail.svg" alt="">
							</label>
						</div>
						<div class="signUp__row">
							<div class="signUp__form-name">
								<label>
									<div class="signUp__error error"></div>
									<input type="text" placeholder="Имя" name="name">
									<img class="signUp__name" src="./assets/img/signUp/profile.svg" alt="">
								</label>
							</div>
							<div class="signUp__form-telephone">
								<label>
									<div class="signUp__error error"></div>
									<input type="telephone" placeholder="Телефон" name="telephone">
									<img class="signUp__telephone" src="./assets/img/signUp/telephone.svg" alt="">
								</label>
							</div>
						</div>
						<div class="signUp__form-password in-form-password">
							<label>
								<div class="signUp__error error"></div>
								<input id="signUp__password" type="password" placeholder="Пароль" name="password">
								<img class="singUp__password in-lock" src="./assets/img/signUp/lock.svg" alt="">
							</label>
						</div>
						<div class="signUp__form-passwordConfirm in-form-password">
							<label>
								<div class="signUp__error error"></div>
								<input type="password" placeholder="Повторите пароль" name="password">
								<img class="singUp__password in-lock" src="./assets/img/signUp/lock.svg" alt="">
							</label>
						</div>
						<p class="signUp__login in-signUp">Уже есть аккаунт? <a href="./login">Войти</a></p>
						<input type="submit" value="Зарегистрироваться" class="singUp__submit in-submit">
					</form>
				</div>
			</div>
			<div class="signUp__picture picture"></div>
		</div>
	</div>

	<?php $view->component('end') ?>
