<?php

/**
 * @var \App\Kernel\View\ViewInterface $view
 */
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Energy+</title>
	<link type="image/x-icon" rel="shortcut icon" href="../../assets/img/favicon.ico" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>
	<div class="app">
		<div class="wrapper">
			<header class="header">
				<div class="header__logo">
					<a href="./" class="header__logo-svg">
						<svg width="40" height="56" viewBox="0 0 40 56" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path class="header__gradient" d="M36.2484 29.9163C35.7697 28.8441 34.6778 27.9821 33.3513 27.6513L23.9524 25.3079L38.5826 8.88107C39.3137 8.05912 39.454 6.94838 38.9538 5.91834C38.452 4.88793 37.3821 4.07648 36.0971 3.75609L23.6104 0.642821C21.9099 0.218821 20.1882 0.742455 19.3807 1.92101L1.39066 28.1948C0.815087 29.0355 0.791188 30.0826 1.32415 31.0382C1.85563 31.9933 2.88465 32.7232 4.09723 33.0255L14.1631 35.5353L8.25876 51.7261C7.84592 52.859 8.51125 54.1656 9.84528 54.8313C11.1799 55.4946 12.8016 55.3342 13.7091 54.4473L35.6943 32.9324C36.5159 32.1317 36.7242 30.9878 36.2484 29.9163Z" fill="url(#g1)" />
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
					</a>
					<a href="./cart" class="header__cart">
						<img class="header__cart-img" src="./assets/img/home/cart.svg" alt="">
					</a>
				</div>

				<div class="header__share">
					<a href="#" class="header__circle">
						<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M19.1668 15.9195C18.6506 15.9194 18.1397 16.0158 17.6649 16.2031C17.1902 16.3904 16.7615 16.6647 16.4047 17.0093L7.5412 12.4031C7.71288 11.8076 7.71288 11.1809 7.5412 10.5854L16.4047 5.97922C17.0502 6.59729 17.9174 6.9768 18.8441 7.04665C19.7707 7.11649 20.6931 6.87189 21.4385 6.35865C22.1839 5.84542 22.7011 5.09877 22.8933 4.25859C23.0854 3.41841 22.9393 2.54234 22.4823 1.79451C22.0254 1.04667 21.2889 0.478389 20.4108 0.196116C19.5328 -0.0861574 18.5734 -0.0630509 17.7125 0.261106C16.8516 0.585263 16.1482 1.18823 15.734 1.95704C15.3198 2.72586 15.2234 3.60777 15.4627 4.43756L6.59914 9.04374C6.0697 8.53385 5.38719 8.18194 4.63943 8.03327C3.89166 7.88461 3.11284 7.94599 2.40316 8.20953C1.69347 8.47306 1.08538 8.92669 0.657118 9.51205C0.228853 10.0974 0 10.7878 0 11.4942C0 12.2007 0.228853 12.8911 0.657118 13.4764C1.08538 14.0618 1.69347 14.5154 2.40316 14.779C3.11284 15.0425 3.89166 15.1039 4.63943 14.9552C5.38719 14.8065 6.0697 14.4546 6.59914 13.9447L15.4627 18.5509C15.2572 19.2655 15.2991 20.0216 15.5825 20.7131C15.8659 21.4046 16.3766 21.9968 17.0429 22.4066C17.7093 22.8164 18.4978 23.0232 19.2978 22.9979C20.0979 22.9727 20.8693 22.7168 21.5039 22.266C22.1384 21.8152 22.6042 21.1922 22.8359 20.4845C23.0676 19.7768 23.0536 19.0198 22.7958 18.3198C22.5381 17.6198 22.0495 17.0119 21.3986 16.5814C20.7478 16.1509 19.9673 15.9195 19.1668 15.9195Z" fill="black" />
						</svg>
					</a>
					<a href="./profile" class="header__circle">
						<svg width="24" height="26" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M5.85002 5.90909C5.85002 2.64559 8.46916 0 11.7 0C14.9309 0 17.55 2.64559 17.55 5.90909C17.55 9.17259 14.9309 11.8182 11.7 11.8182C8.46916 11.8182 5.85002 9.17259 5.85002 5.90909ZM11.7 2.36364C9.76145 2.36364 8.19002 3.951 8.19002 5.90909C8.19002 7.86719 9.76145 9.45455 11.7 9.45455C13.6386 9.45455 15.21 7.86719 15.21 5.90909C15.21 3.951 13.6386 2.36364 11.7 2.36364Z" fill="black" />
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0 24.8182C0 18.2912 5.23827 13 11.7 13C18.1617 13 23.4 18.2912 23.4 24.8182V26H0V24.8182ZM2.41241 23.6364H20.9876C20.4118 18.9726 16.4731 15.3636 11.7 15.3636C6.92684 15.3636 2.98817 18.9726 2.41241 23.6364Z" fill="black" />
						</svg>
					</a>
				</div>

				<nav class="header__nav">
					<ul class="header__ul">
						<div class="header__li-1">
							<li class="header__li"><a href="#" class="header__link">позвонить</a></li>
							<svg width="24" height="12" viewBox="0 0 24 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M22.2865 0.294092L14.999 7.59409L9.71078 2.29409C9.61785 2.20036 9.50729 2.12597 9.38547 2.0752C9.26365 2.02443 9.13299 1.99829 9.00102 1.99829C8.86906 1.99829 8.73839 2.02443 8.61658 2.0752C8.49476 2.12597 8.3842 2.20036 8.29126 2.29409L0.293991 10.2941C0.105752 10.4824 0 10.7378 0 11.0041C0 11.2704 0.105752 11.5258 0.293991 11.7141C0.482231 11.9024 0.737539 12.0082 1.00375 12.0082C1.26996 12.0082 1.52527 11.9024 1.71351 11.7141L9.00102 4.41409L14.2892 9.71409C14.3822 9.80782 14.4927 9.88221 14.6145 9.93298C14.7363 9.98375 14.867 10.0099 14.999 10.0099C15.1309 10.0099 15.2616 9.98375 15.3834 9.93298C15.5052 9.88221 15.6158 9.80782 15.7087 9.71409L23.706 1.71409C23.8942 1.52579 24 1.27039 24 1.00409C24 0.73779 23.8942 0.482395 23.706 0.294092C23.5178 0.105788 23.2625 0 22.9963 0C22.73 0 22.4747 0.105788 22.2865 0.294092Z" fill="black" />
							</svg>

						</div>
						<li class="header__li"><a href="./login" class="header__link">войти в систему</a></li>
						<li class="header__li"><a href="./catalog" class="header__link">каталог</a></li>
					</ul>
				</nav>
			</header>
		</div>
</head>

<body>


