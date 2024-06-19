<?php

/** 
 * @var \App\Kernel\View\View $view
 */
?>

<?php $view->component('start') ?>

<div class="overflow">
	<div class="preloading">
	</div>

	<section class='home'>
		<div class='wrapper'>
			<div class="home__inner">
				<div class="home__main">
					<div class="home__title">
						<div>en<p class="home__animation-e">e</p>rgy<p class="home__animation">+</p>
						</div>
						<svg class="home__logo" width="314" height="534" viewBox="0 0 314 534" fill="none" xmlns="http://www.w3.org/2000/svg">
							<mask id="path-1-inside-1_20_66" fill="white">
								<path d="M279.025 277.958C275.743 267.84 267.522 260.034 257.201 257.461L184.073 239.228L307.229 74.013C313.384 65.7467 315.008 54.9696 311.537 45.2685C308.053 35.5645 299.982 28.2361 289.984 25.7433L192.832 1.52058C179.601 -1.77834 165.763 4.07137 158.839 15.8123L4.57715 277.551C-0.358351 285.926 -1.03354 296.035 2.73094 305.003C6.48391 313.967 14.2703 320.528 23.7047 322.88L102.022 342.407L47.8774 501.292C44.0911 512.41 48.7377 524.701 58.9623 530.501C69.1927 536.278 82.0724 533.978 89.6505 525.003L273.249 307.302C280.108 299.199 282.284 288.071 279.025 277.958Z" />
							</mask>
							<path class="home__lightning" d="M279.025 277.958C275.743 267.84 267.522 260.034 257.201 257.461L184.073 239.228L307.229 74.013C313.384 65.7467 315.008 54.9696 311.537 45.2685C308.053 35.5645 299.982 28.2361 289.984 25.7433L192.832 1.52058C179.601 -1.77834 165.763 4.07137 158.839 15.8123L4.57715 277.551C-0.358351 285.926 -1.03354 296.035 2.73094 305.003C6.48391 313.967 14.2703 320.528 23.7047 322.88L102.022 342.407L47.8774 501.292C44.0911 512.41 48.7377 524.701 58.9623 530.501C69.1927 536.278 82.0724 533.978 89.6505 525.003L273.249 307.302C280.108 299.199 282.284 288.071 279.025 277.958Z" stroke="url(#paint0_linear_20_66)" stroke-width="16" mask="url(#path-1-inside-1_20_66)" stroke-dasharray="1506.11" stroke-dashoffset="1506.11">
								<animate attributeName="stroke-dashoffset" values="1506.11; 0; " dur="3s" repeatCount="1" fill="freeze" calcMode="linear"></animate>
							</path>
							<defs>
								<linearGradient id="paint0_linear_20_66" x1="211.269" y1="6.11738" x2="79.048" y2="536.425" gradientUnits="userSpaceOnUse">
									<stop offset="0.125" stop-color="#D9FBFC" stop-opacity="0.45" />
									<stop offset="0.425" stop-color="#CBDFF0" stop-opacity="0.6" />
									<stop offset="0.58" stop-color="#707ABD" stop-opacity="0.8" />
									<stop offset="1" stop-color="#9373BD" />
								</linearGradient>
							</defs>
						</svg>
						<svg class="home__plus" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="20.0002" cy="19.9999" r="19.5" fill="white" stroke="black" />
							<rect width="2" height="20" rx="1" transform="matrix(-1 0 0 1 22.0002 9.99994)" fill="black" />
							<rect x="10.0002" y="18.9999" width="20" height="2" rx="1" fill="black" />
						</svg>

					</div>

					<div class="home__footer">
						<button class="home__btn">
							<p>читать больше</p>
							<img src="./assets/img/home/singleArrow.svg" alt="">
						</button>

						<div class="home__info swiper">
							<div class="home__info-wrapper swiper-wrapper">
								<div class="home__text swiper-slide">здесь может быть любой
									ваш текст </div>
								<div class="home__text swiper-slide">здесь может быть любой
									ваш текст </div>
							</div>
							<div class="home__navigation">
								<div class="home__arrow-prev home__arrow"><img src="./assets/img/home/arrowLeft.svg" alt="arrowLeft"></div>
								<div class="home__arrow-next home__arrow"><img src="./assets/img/home/arrowRight.svg" alt="arrowRight"></div>
							</div>

						</div>
					</div>

				</div>
				<div class="home__swiper-main">
					<div class="home__swiper swiper">
						<div class="home__swiper-wrapper swiper-wrapper">
							<div class="home__slide swiper-slide">
								<img src="./assets/img/home/1.png" alt="1">
							</div>
							<div class="home__slide-2 swiper-slide">
								<img src="./assets/img/home/1-1.png" alt="2">
							</div>
							<div class="home__slide swiper-slide">
								<img src="./assets/img/home/1.png" alt="1">
							</div>
							<div class="home__slide-2 swiper-slide">
								<img src="./assets/img/home/1-1.png" alt="1">
							</div>
						</div>
					</div>
					<button class="home__scroll">
						<p>листать</p>
						<img src="./assets/img/home/doubleArrow.svg" alt="doubleArrow">
					</button>
				</div>
	</section>

	<section class='about'>
		<div class="navigation about__nav">
			<div class="navigation__inner">
				<div class="navigation__active">
					<button>
						<p>О нас <span>01</span></p>
					</button>
				</div>
				<div class="navigation__panel">
					<a href="#about"><button class="navigation__notActive navigation__current">
							<p><span>01</span>О нас</p>
						</button>
					</a>
					<a href="#catalog"><button class="navigation__notActive">
							<p><span>02</span>Каталог</p>
						</button>
					</a>
					<a href="#map"><button class="navigation__notActive">
							<p><span>03</span>Карта</p>
						</button>
					</a>
				</div>
			</div>
		</div>
		<div class='wrapper'>
			<div class="about__main" id="about">
				<div class="about__inner">
					<div class="about__title">
						<p class="about__title-1">новаторские станции <svg class="about__svg" width="182" height="24" viewBox="0 0 182 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M181.061 13.0607C181.646 12.4749 181.646 11.5251 181.061 10.9393L171.515 1.3934C170.929 0.807611 169.979 0.807611 169.393 1.3934C168.808 1.97919 168.808 2.92893 169.393 3.51472L177.879 12L169.393 20.4853C168.808 21.0711 168.808 22.0208 169.393 22.6066C169.979 23.1924 170.929 23.1924 171.515 22.6066L181.061 13.0607ZM0 13.5H180V10.5H0V13.5Z" fill="black" />
							</svg>
						</p>
						<p class="about__title-2">
							<span class="text__left">зарядки</span><svg class="about__svg" width="39" height="56" viewBox="0 0 39 56" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M35.7962 29.9163C35.3174 28.8441 34.2255 27.9821 32.8991 27.6513L23.5001 25.3079L38.1304 8.88107C38.8615 8.05912 39.0018 6.94838 38.5015 5.91834C37.9998 4.88793 36.9298 4.07648 35.6448 3.75609L23.1582 0.642821C21.4576 0.218821 19.736 0.742455 18.9285 1.92101L0.938408 28.1948C0.362831 29.0355 0.338933 30.0826 0.871893 31.0382C1.40337 31.9933 2.43239 32.7232 3.64497 33.0255L13.7109 35.5353L7.80651 51.7261C7.39367 52.859 8.059 54.1656 9.39302 54.8313C10.7276 55.4946 12.3493 55.3342 13.2568 54.4473L35.2421 32.9324C36.0637 32.1317 36.2719 30.9878 35.7962 29.9163Z" fill="url(#paint0_linear_118_9)" />
								<defs>
									<linearGradient id="paint0_linear_118_9" x1="25.5278" y1="1.23363" x2="11.9802" y2="55.5702" gradientUnits="userSpaceOnUse">
										<stop offset="0.15" stop-color="#9CFCFF" stop-opacity="0.45" />
										<stop offset="0.45" stop-color="#A599F0" stop-opacity="0.6" />
										<stop offset="0.6" stop-color="#D3B3FE" stop-opacity="0.8" />
										<stop offset="1" stop-color="#BB87FF" stop-opacity="0.733333" />
									</linearGradient>
								</defs>
							</svg>
							<span class="text__right">электромобилей, которые</span>
						</p>
						<p class="about__title-3">
							<span class="text__left">быстрее</span><svg class="about__svg" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="17" cy="17" r="16.5" fill="white" stroke="black" />
								<path d="M16.1506 23V14.8182H17.4077V23H16.1506ZM16.7898 13.4545C16.5447 13.4545 16.3335 13.3711 16.1559 13.2042C15.9819 13.0373 15.8949 12.8366 15.8949 12.6023C15.8949 12.3679 15.9819 12.1673 16.1559 12.0004C16.3335 11.8335 16.5447 11.75 16.7898 11.75C17.0348 11.75 17.2443 11.8335 17.4183 12.0004C17.5959 12.1673 17.6847 12.3679 17.6847 12.6023C17.6847 12.8366 17.5959 13.0373 17.4183 13.2042C17.2443 13.3711 17.0348 13.4545 16.7898 13.4545Z" fill="black" />
							</svg>
							& более <svg class="about__svg" width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="22.5" cy="22.5" r="22" fill="white" stroke="black" />
								<path d="M32.1656 15.6531L25.9831 23.9099L19.9989 19.4105C19.8936 19.3309 19.7736 19.2728 19.6459 19.2398C19.5181 19.2068 19.3851 19.1993 19.2544 19.218C19.1238 19.2367 18.9981 19.281 18.8847 19.3485C18.7713 19.4159 18.6723 19.5052 18.5936 19.6111L11.8073 28.6612C11.6476 28.8742 11.579 29.142 11.6166 29.4056C11.6543 29.6692 11.795 29.9071 12.008 30.0669C12.221 30.2267 12.4887 30.2954 12.7522 30.2577C13.0157 30.2201 13.2535 30.0793 13.4133 29.8663L19.5959 21.6095L25.5801 26.1089C25.6853 26.1886 25.8053 26.2466 25.933 26.2796C26.0608 26.3127 26.1939 26.3201 26.3245 26.3014C26.4551 26.2828 26.5808 26.2384 26.6942 26.1709C26.8076 26.1035 26.9066 26.0142 26.9853 25.9083L33.7716 16.8583C33.9313 16.6452 33.9999 16.3775 33.9623 16.1138C33.9247 15.8502 33.7839 15.6123 33.5709 15.4525C33.3579 15.2927 33.0902 15.2241 32.8267 15.2617C32.5632 15.2993 32.3254 15.4401 32.1656 15.6531Z" fill="black" />
							</svg>
							<span class="text__right-large">эффективнее.</span>
						</p>
					</div>
					<div class="about__main">
						<div class="about__img">
							<div class="about__img-left">
								<img src="./assets/img/home/4.jpg" alt="">
							</div>
							<div class="about__img-right">
								<img src="./assets/img/home/3.jpg" alt="">
								<div class="about__text">
									<p>Мы совершаем революцию в области зарядки электромобилей, предлагая возможности быстрой зарядки, экологичность и удобство использования.</p>
									<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="40" cy="40" r="40" fill="black" />
										<path d="M46.1321 27.8898L56.1051 37.8551C56.7017 38.4055 57 39.1553 57 39.981C57 40.8067 56.7017 41.547 56.1051 42.107L46.1321 52.1102C44.9489 53.2966 43.0199 53.2966 41.8366 52.1102C40.6534 50.9239 40.6534 49.0068 41.8366 47.8204L46.6193 43.0371H25.0426C23.3622 43.0371 22 41.6799 22 40C22 38.3201 23.3622 36.9629 25.0426 36.9629H46.6193L41.8267 32.1796C40.6435 30.9932 40.6435 29.0761 41.8267 27.8898C43.0199 26.7034 44.9389 26.7034 46.1321 27.8898Z" fill="white" />
									</svg>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
	</section>

	<section class='catalog-home'>
		<div class='wrapper'>
			<div class="catalog-home__wrapper" id="catalog">
				<div class="catalog-home__title">
					<h2>Что мы предлагаем</h2>
					<p>Компания energy+ стремится предоставлять исключительные услуги, которые идут рука об руку с современными станциями зарядки электромобилей. </p>
					<div class="catalog-home__ticker">
						<div class="catalog-home__ticker-wrapper">
							<div class="catalog-home__item ticker-1">
								<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M6.01935 6.17538C6.15435 6.17538 6.28382 6.12175 6.37927 6.02629C6.47473 5.93083 6.52836 5.80136 6.52836 5.66636V3.38327H12.7357V5.66637C12.7357 5.80137 12.7894 5.93084 12.8848 6.0263C12.9803 6.12176 13.1098 6.17539 13.2448 6.17539C13.3798 6.17539 13.5092 6.12176 13.6047 6.0263C13.7001 5.93084 13.7538 5.80137 13.7538 5.66637V2.97874C13.7551 2.81757 13.6924 2.66248 13.5795 2.54747C13.4666 2.43245 13.3127 2.36692 13.1515 2.36523H6.11262C5.95146 2.36692 5.79755 2.43245 5.68464 2.54746C5.57173 2.66247 5.50904 2.81757 5.51033 2.97874V5.66636C5.51033 5.80136 5.56396 5.93083 5.65942 6.02629C5.75488 6.12175 5.88435 6.17538 6.01935 6.17538Z" fill="black" />
									<path d="M12.7455 10.9367C12.1773 10.7689 11.5707 10.7844 11.0118 10.981C10.4529 11.1775 9.97016 11.5451 9.63205 12.0316C9.29391 11.5451 8.81113 11.1775 8.25223 10.981C7.69333 10.7844 7.08672 10.7689 6.51852 10.9367C6.40547 10.97 6.30749 11.0415 6.24129 11.139C6.17509 11.2365 6.14476 11.3539 6.1555 11.4713C6.21272 12.1062 6.44332 12.7131 6.82211 13.2259C7.2009 13.7386 7.71331 14.1373 8.30337 14.3786C8.42821 14.4299 8.56834 14.4296 8.69295 14.3777C8.81755 14.3257 8.91642 14.2264 8.96779 14.1016C9.01917 13.9767 9.01885 13.8366 8.9669 13.712C8.91496 13.5874 8.81564 13.4885 8.6908 13.4371C8.34668 13.2965 8.03886 13.0797 7.79039 12.8032C7.54193 12.5267 7.35925 12.1975 7.25606 11.8404C7.27647 11.8397 7.29689 11.8393 7.31733 11.8393C7.79584 11.8399 8.25458 12.0303 8.59288 12.3687C8.93118 12.7072 9.1214 13.166 9.12181 13.6445C9.12181 13.6523 9.12263 13.6599 9.12298 13.6676V15.8029C9.12298 15.9379 9.17661 16.0674 9.27207 16.1629C9.36753 16.2583 9.497 16.3119 9.632 16.3119C9.767 16.3119 9.89647 16.2583 9.99193 16.1629C10.0874 16.0674 10.141 15.9379 10.141 15.8029V13.6674C10.1414 13.6595 10.1422 13.6518 10.1422 13.6438C10.1427 13.1654 10.333 12.7067 10.6713 12.3684C11.0096 12.0301 11.4682 11.8399 11.9467 11.8393C11.9671 11.8393 11.9875 11.8397 12.0079 11.8403C11.9047 12.1975 11.722 12.5267 11.4736 12.8032C11.2251 13.0797 10.9173 13.2964 10.5732 13.4371C10.5113 13.4625 10.4552 13.4999 10.4078 13.5471C10.3604 13.5942 10.3228 13.6503 10.2971 13.712C10.2713 13.7737 10.258 13.8398 10.2579 13.9067C10.2577 13.9735 10.2707 14.0397 10.2962 14.1015C10.3216 14.1633 10.359 14.2195 10.4061 14.2669C10.4533 14.3143 10.5093 14.3519 10.571 14.3776C10.6327 14.4034 10.6989 14.4167 10.7657 14.4168C10.8326 14.417 10.8988 14.404 10.9606 14.3785C11.5506 14.1373 12.0631 13.7385 12.4418 13.2258C12.8206 12.7131 13.0512 12.1062 13.1084 11.4713C13.1192 11.3539 13.0889 11.2365 13.0227 11.139C12.9565 11.0415 12.8585 10.97 12.7455 10.9367Z" fill="black" />
									<path d="M19.3416 18.0337H15.8651V2.42244C15.8644 1.78019 15.609 1.16446 15.1548 0.710322C14.7007 0.256184 14.085 0.000728867 13.4427 0H5.82137C5.17913 0.000734245 4.5634 0.256191 4.10927 0.710328C3.65514 1.16447 3.3997 1.78019 3.39897 2.42244V18.0337H0.509013C0.374015 18.0337 0.244545 18.0874 0.149087 18.1828C0.053628 18.2783 0 18.4078 0 18.5428C0 18.6778 0.053628 18.8072 0.149087 18.9027C0.244545 18.9981 0.374015 19.0518 0.509013 19.0518H19.3416C19.4766 19.0518 19.6061 18.9981 19.7015 18.9027C19.797 18.8072 19.8506 18.6778 19.8506 18.5428C19.8506 18.4078 19.797 18.2783 19.7015 18.1828C19.6061 18.0874 19.4766 18.0337 19.3416 18.0337ZM5.82137 1.01803H13.4428C13.8151 1.01845 14.1721 1.16655 14.4353 1.42984C14.6986 1.69313 14.8467 2.0501 14.8471 2.42244V7.13505H4.41698V2.42244C4.4174 2.0501 4.56549 1.69312 4.82878 1.42984C5.09206 1.16655 5.44903 1.01845 5.82137 1.01803ZM4.417 18.0337V8.15307H14.8471V18.0337H4.417Z" fill="black" />
									<path d="M19.8509 4.88681L17.4785 2.51433C17.4312 2.46706 17.3751 2.42956 17.3133 2.40398C17.2516 2.3784 17.1854 2.36523 17.1185 2.36523C17.0517 2.36523 16.9855 2.3784 16.9237 2.40398C16.862 2.42956 16.8058 2.46706 16.7586 2.51433C16.7113 2.56159 16.6738 2.61771 16.6482 2.67947C16.6227 2.74123 16.6095 2.80742 16.6095 2.87426C16.6095 2.94111 16.6227 3.0073 16.6482 3.06906C16.6738 3.13082 16.7113 3.18694 16.7586 3.2342L18.982 5.45757V7.74452H18.0342V5.07369C18.0342 4.93869 17.9806 4.80922 17.8851 4.71376C17.7897 4.6183 17.6602 4.56467 17.5252 4.56467C17.3902 4.56467 17.2607 4.6183 17.1653 4.71376C17.0698 4.80922 17.0162 4.93869 17.0162 5.07369V8.25353C17.0162 8.38853 17.0698 8.518 17.1653 8.61346C17.2607 8.70891 17.3902 8.76254 17.5252 8.76254H18.0503V15.331C18.0501 15.4844 17.9891 15.6315 17.8806 15.74C17.7721 15.8485 17.625 15.9095 17.4716 15.9097H16.7032C16.5682 15.9097 16.4388 15.9634 16.3433 16.0588C16.2478 16.1543 16.1942 16.2837 16.1942 16.4187C16.1942 16.5537 16.2478 16.6832 16.3433 16.7787C16.4388 16.8741 16.5682 16.9278 16.7032 16.9278H17.4716C17.8949 16.9273 18.3008 16.7589 18.6001 16.4595C18.8995 16.1602 19.0678 15.7543 19.0683 15.331V8.76254H19.491C19.626 8.76254 19.7555 8.70891 19.8509 8.61346C19.9464 8.518 20 8.38853 20 8.25353V5.24675C20 5.11174 19.9464 4.98227 19.8509 4.88681Z" fill="black" />
								</svg>
								<p>установка зарядной станции</p>
							</div>
							<div class="catalog-home__item ticker-2"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="20" cy="20" r="20" fill="#9302FF" />
									<path d="M21.5034 30.0024H18.4995C18.3152 30.0024 18.1373 29.9342 18.0002 29.8109C17.8632 29.6876 17.7766 29.518 17.7571 29.3346L17.5347 27.2404C17.2242 27.1347 16.9209 27.009 16.6267 26.8642L14.9901 28.1877C14.8469 28.3031 14.6661 28.3615 14.4825 28.3518C14.2988 28.3421 14.1252 28.2649 13.995 28.135L11.8709 26.0109C11.741 25.8806 11.6638 25.707 11.6541 25.5234C11.6444 25.3397 11.7028 25.159 11.8181 25.0157L13.1422 23.3772C12.9971 23.083 12.8713 22.7797 12.7655 22.4692L10.6677 22.2452C10.4845 22.2258 10.3149 22.1393 10.1916 22.0023C10.0683 21.8654 10.0001 21.6876 10 21.5034V18.499C10.0001 18.3147 10.0683 18.137 10.1916 18C10.3149 17.8631 10.4845 17.7766 10.6677 17.7571L12.762 17.5347C12.8678 17.2242 12.9936 16.9209 13.1387 16.6267L11.8146 14.9882C11.6993 14.8449 11.6409 14.6641 11.6506 14.4805C11.6603 14.2968 11.7375 14.1232 11.8674 13.993L13.9915 11.8689C14.1218 11.739 14.2953 11.6618 14.479 11.6521C14.6627 11.6424 14.8434 11.7008 14.9867 11.8161L16.6252 13.1397C16.9194 12.9948 17.2227 12.8692 17.5332 12.7635L17.7557 10.6692C17.7748 10.4854 17.8614 10.3151 17.9988 10.1915C18.1363 10.0679 18.3147 9.99963 18.4995 10H21.5034C21.6877 9.99996 21.8656 10.0682 22.0027 10.1914C22.1397 10.3147 22.2263 10.4844 22.2457 10.6677L22.4677 12.762C22.7783 12.8677 23.0818 12.9933 23.3762 13.1382L25.0142 11.8146C25.1575 11.6993 25.3382 11.6409 25.5219 11.6506C25.7055 11.6603 25.8791 11.7375 26.0094 11.8674L28.1335 13.9915C28.2634 14.1218 28.3406 14.2954 28.3503 14.479C28.36 14.6627 28.3016 14.8434 28.1862 14.9867L26.8622 16.6252C27.0071 16.9195 27.1329 17.2228 27.2389 17.5332L29.3332 17.7557C29.5163 17.7752 29.6858 17.8617 29.809 17.9987C29.9321 18.1357 30.0003 18.3133 30.0004 18.4975V21.5019C30.0008 21.686 29.933 21.8638 29.8102 22.001C29.6874 22.1383 29.5182 22.2252 29.3351 22.2452L27.2409 22.4677C27.1349 22.7781 27.0091 23.0814 26.8642 23.3757L28.1882 25.0142C28.3036 25.1575 28.362 25.3382 28.3523 25.5219C28.3425 25.7055 28.2654 25.8791 28.1355 26.0094L26.0114 28.135C25.8811 28.2649 25.7075 28.3421 25.5239 28.3518C25.3402 28.3615 25.1595 28.3031 25.0162 28.1877L23.3782 26.8642C23.0838 27.0091 22.7803 27.1347 22.4696 27.2404L22.2477 29.3346C22.2283 29.5183 22.1414 29.6883 22.0039 29.8116C21.8664 29.9349 21.6881 30.0029 21.5034 30.0024ZM19.1698 28.5097H20.8311L21.0347 26.591C21.0506 26.4409 21.1118 26.2991 21.21 26.1844C21.3083 26.0697 21.439 25.9875 21.585 25.9487C22.1107 25.8085 22.6154 25.5988 23.0856 25.3252C23.2166 25.2489 23.3676 25.2143 23.5187 25.2259C23.6698 25.2376 23.8138 25.2949 23.9315 25.3904L25.4322 26.603L26.607 25.4282L25.3924 23.932C25.2969 23.8143 25.2396 23.6703 25.2279 23.5192C25.2163 23.3681 25.2509 23.2171 25.3272 23.0861C25.6002 22.6162 25.8092 22.1118 25.9487 21.5865C25.9875 21.4404 26.0698 21.3096 26.1846 21.2114C26.2994 21.1131 26.4413 21.052 26.5915 21.0361L28.5097 20.8321V19.1707L26.5915 18.9667C26.4413 18.9509 26.2994 18.8898 26.1846 18.7915C26.0698 18.6932 25.9875 18.5624 25.9487 18.4164C25.8093 17.8909 25.6003 17.3864 25.3272 16.9162C25.2509 16.7853 25.2163 16.6342 25.2279 16.4832C25.2396 16.3321 25.2969 16.1881 25.3924 16.0704L26.605 14.5697L25.4302 13.3949L23.9295 14.6075C23.8118 14.703 23.6678 14.7603 23.5167 14.772C23.3657 14.7836 23.2146 14.749 23.0837 14.6727C22.6136 14.3999 22.1092 14.1909 21.584 14.0512C21.438 14.0124 21.3073 13.9302 21.209 13.8155C21.1108 13.7008 21.0496 13.559 21.0337 13.4089L20.8321 11.4927H19.1698L18.9662 13.4114C18.9502 13.5616 18.889 13.7034 18.7907 13.8181C18.6923 13.9328 18.5615 14.015 18.4154 14.0537C17.8905 14.194 17.3867 14.4037 16.9172 14.6772C16.7863 14.7535 16.6352 14.7881 16.4841 14.7765C16.333 14.7648 16.1891 14.7075 16.0714 14.612L14.5722 13.3974L13.3979 14.5722L14.611 16.0729C14.7064 16.1906 14.7636 16.3346 14.7752 16.4857C14.7868 16.6368 14.752 16.7878 14.6757 16.9187C14.4031 17.3889 14.1941 17.8932 14.0542 18.4184C14.0154 18.5644 13.9332 18.6951 13.8185 18.7934C13.7038 18.8916 13.562 18.9528 13.4118 18.9687L11.4932 19.1727V20.8336L13.4118 21.0376C13.562 21.0536 13.7038 21.1148 13.8185 21.213C13.9332 21.3113 14.0154 21.442 14.0542 21.588C14.1941 22.1126 14.4029 22.6164 14.6752 23.0861C14.7515 23.217 14.7863 23.3681 14.7747 23.5192C14.7632 23.6703 14.7059 23.8143 14.6105 23.932L13.3979 25.4302L14.5727 26.605L16.0739 25.3924C16.1916 25.2969 16.3355 25.2396 16.4866 25.2279C16.6377 25.2163 16.7888 25.2509 16.9197 25.3272C17.3896 25.6001 17.8938 25.8091 18.4189 25.9487C18.565 25.9874 18.6958 26.0696 18.7942 26.1843C18.8925 26.2989 18.9537 26.4408 18.9697 26.591L19.1698 28.5097Z" fill="white" />
									<path d="M20.0012 24.547C19.1022 24.5469 18.2233 24.2802 17.4758 23.7806C16.7283 23.281 16.1458 22.5711 15.8018 21.7404C15.4578 20.9098 15.3679 19.9958 15.5433 19.114C15.7188 18.2322 16.1518 17.4223 16.7875 16.7866C17.4233 16.1509 18.2333 15.718 19.1151 15.5426C19.9968 15.3673 20.9108 15.4573 21.7414 15.8014C22.5721 16.1455 23.282 16.7281 23.7815 17.4757C24.2809 18.2232 24.5475 19.1021 24.5475 20.0011C24.5462 21.2064 24.0668 22.362 23.2145 23.2142C22.3621 24.0665 21.2065 24.5458 20.0012 24.547ZM20.0012 16.948C19.3974 16.9481 18.8072 17.1273 18.3051 17.4628C17.8031 17.7984 17.4119 18.2752 17.1809 18.8331C16.9499 19.391 16.8895 20.0049 17.0073 20.5971C17.1252 21.1893 17.416 21.7332 17.843 22.1602C18.27 22.5871 18.814 22.8778 19.4063 22.9956C19.9985 23.1134 20.6124 23.0529 21.1702 22.8218C21.7281 22.5907 22.2049 22.1994 22.5403 21.6973C22.8758 21.1952 23.0548 20.605 23.0548 20.0011C23.0539 19.1916 22.7319 18.4155 22.1594 17.8431C21.5869 17.2707 20.8108 16.9488 20.0012 16.948Z" fill="white" />
								</svg>
								<p>обслуживание и ремонт </p>
							</div>
							<div class="catalog-home__item ticker-3 ">
								<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="15" cy="15" r="15" fill="white" />
									<path d="M19.875 6.75H22.5C22.6989 6.75 22.8897 6.82902 23.0303 6.96967C23.171 7.11032 23.25 7.30109 23.25 7.5V10.125" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M19.875 23.25H22.5C22.6989 23.25 22.8897 23.171 23.0303 23.0303C23.171 22.8897 23.25 22.6989 23.25 22.5V19.875" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M10.125 23.25H7.5C7.30109 23.25 7.11032 23.171 6.96967 23.0303C6.82902 22.8897 6.75 22.6989 6.75 22.5V19.875" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M10.125 6.75H7.5C7.30109 6.75 7.11032 6.82902 6.96967 6.96967C6.82902 7.11032 6.75 7.30109 6.75 7.5V10.125" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M15 16.5C16.6569 16.5 18 15.1569 18 13.5C18 11.8431 16.6569 10.5 15 10.5C13.3431 10.5 12 11.8431 12 13.5C12 15.1569 13.3431 16.5 15 16.5Z" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M10.0219 19.5C10.5013 18.5956 11.218 17.8389 12.0951 17.3112C12.9722 16.7835 13.9764 16.5046 15 16.5046C16.0236 16.5046 17.0278 16.7835 17.9049 17.3112C18.782 17.8389 19.4987 18.5956 19.9781 19.5" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
								<p>индивидуальные решения</p>
							</div>
							<div class="catalog-home__item ticker-2">
								<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="20" cy="20" r="20" fill="#9302FF" />
									<path d="M20 30.5599C25.8321 30.5599 30.56 25.8321 30.56 19.9999C30.56 14.1678 25.8321 9.43994 20 9.43994C14.1679 9.43994 9.43999 14.1678 9.43999 19.9999C9.43999 25.8321 14.1679 30.5599 20 30.5599Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" />
									<path d="M20 30.5599C22.9161 30.5599 25.28 25.8321 25.28 19.9999C25.28 14.1678 22.9161 9.43994 20 9.43994C17.0839 9.43994 14.72 14.1678 14.72 19.9999C14.72 25.8321 17.0839 30.5599 20 30.5599Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" />
									<path d="M11.8006 26.7928C13.737 25.6008 16.6907 24.8401 20 24.8401C23.2639 24.8401 26.1815 25.5802 28.1184 26.7431" stroke="white" stroke-miterlimit="10" />
									<path d="M28.1994 13.2078C26.263 14.3993 23.3092 15.16 20 15.16C16.7365 15.16 13.8184 14.42 11.8816 13.257" stroke="white" stroke-miterlimit="10" />
									<path d="M9.43999 20H30.56" stroke="white" stroke-miterlimit="10" />
									<path d="M20 9.43994V30.5599" stroke="white" stroke-miterlimit="10" />
								</svg>
								<p>доступ к сети с тарификацией</p>
							</div>
							<div class="catalog-home__item ticker-1">
								<svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2.96875 14.4C3.44117 14.4 3.89424 14.2104 4.22829 13.8728C4.56234 13.5352 4.75 13.0774 4.75 12.6V7.8C4.75009 7.32879 4.56733 6.87632 4.24094 6.53977C3.91456 6.20322 3.47059 6.00943 3.00438 6C3.15038 4.68039 3.7724 3.4614 4.75159 2.57594C5.73079 1.69048 6.9985 1.20064 8.3125 1.20001H10.6875C12.0015 1.20064 13.2692 1.69048 14.2484 2.57594C15.2276 3.4614 15.8496 4.68039 15.9956 6C15.5294 6.00943 15.0854 6.20322 14.7591 6.53977C14.4327 6.87632 14.2499 7.32879 14.25 7.8V12.6C14.2492 13.0593 14.4221 13.5015 14.7334 13.8361C15.0446 14.1707 15.4707 14.3724 15.9244 14.4C15.8019 14.7501 15.5752 15.0534 15.2754 15.2682C14.9757 15.4831 14.6175 15.599 14.25 15.6H11.7681C11.6281 15.1997 11.3525 14.8623 10.99 14.6474C10.6276 14.4326 10.2017 14.3541 9.78753 14.4259C9.37339 14.4977 8.99771 14.7152 8.72688 15.0398C8.45604 15.3644 8.3075 15.7754 8.3075 16.2C8.3075 16.6246 8.45604 17.0356 8.72688 17.3602C8.99771 17.6848 9.37339 17.9023 9.78753 17.9741C10.2017 18.0459 10.6276 17.9674 10.99 17.7526C11.3525 17.5377 11.6281 17.2003 11.7681 16.8H14.25C14.9723 16.7967 15.6687 16.5274 16.2086 16.0425C16.7485 15.5576 17.095 14.8905 17.1831 14.166C17.7218 13.9369 18.1815 13.5522 18.5047 13.0601C18.8279 12.5681 19.0002 11.9906 19 11.4V9C19.0009 8.41551 18.8327 7.8435 18.5163 7.35424C18.1998 6.86499 17.7489 6.4798 17.2187 6.246C17.129 4.55765 16.4015 2.96849 15.1862 1.80631C13.971 0.644127 12.3607 -0.00242689 10.6875 6.84586e-06H8.3125C6.63933 -0.00242689 5.02904 0.644127 3.81378 1.80631C2.59853 2.96849 1.87099 4.55765 1.78125 6.246C1.25114 6.4798 0.800155 6.86499 0.48371 7.35424C0.167266 7.8435 -0.000855295 8.41551 3.27205e-06 9V11.4C3.27205e-06 12.1956 0.312781 12.9587 0.86953 13.5213C1.42628 14.0839 2.18139 14.4 2.96875 14.4ZM10.0937 16.8C9.97632 16.8 9.86152 16.7648 9.76388 16.6989C9.66624 16.633 9.59014 16.5392 9.5452 16.4296C9.50026 16.32 9.4885 16.1993 9.51141 16.0829C9.53432 15.9666 9.59087 15.8596 9.6739 15.7757C9.75694 15.6918 9.86274 15.6347 9.97791 15.6115C10.0931 15.5884 10.2125 15.6003 10.321 15.6457C10.4295 15.6911 10.5222 15.768 10.5874 15.8667C10.6527 15.9653 10.6875 16.0813 10.6875 16.2C10.6875 16.3591 10.6249 16.5117 10.5136 16.6243C10.4022 16.7368 10.2512 16.8 10.0937 16.8ZM17.8125 9V11.4C17.8125 11.8774 17.6248 12.3352 17.2908 12.6728C16.9567 13.0104 16.5037 13.2 16.0312 13.2C15.8738 13.2 15.7228 13.1368 15.6114 13.0243C15.5001 12.9117 15.4375 12.7591 15.4375 12.6V7.8C15.4375 7.64087 15.5001 7.48826 15.6114 7.37574C15.7228 7.26322 15.8738 7.2 16.0312 7.2C16.5037 7.2 16.9567 7.38964 17.2908 7.72721C17.6248 8.06478 17.8125 8.52261 17.8125 9ZM1.1875 9C1.1875 8.52261 1.37517 8.06478 1.70922 7.72721C2.04327 7.38964 2.49634 7.2 2.96875 7.2C3.12622 7.2 3.27725 7.26322 3.3886 7.37574C3.49995 7.48826 3.5625 7.64087 3.5625 7.8V12.6C3.5625 12.7591 3.49995 12.9117 3.3886 13.0243C3.27725 13.1368 3.12622 13.2 2.96875 13.2C2.49634 13.2 2.04327 13.0104 1.70922 12.6728C1.37517 12.3352 1.1875 11.8774 1.1875 11.4V9Z" fill="black" />
								</svg>
								<p>24/1 поддержка клиентов</p>
							</div>
							<div class="catalog-home__item ticker-6">
								<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="15" cy="15" r="15" fill="white" />
									<path d="M21.9852 8.41089C21.9286 8.16982 21.7148 8 21.4709 8C21.4698 8 21.4687 8 21.4677 8C18.6804 8.01768 11.9024 8.49071 9.16587 12.4893C7.74443 14.5668 7.62219 17.2641 8.80231 20.5062C8.8113 20.5314 8.82983 20.5486 8.842 20.5716C8.42022 21.6286 8.2567 22.332 8.25247 22.3518C8.19108 22.6411 8.37365 22.9261 8.65942 22.9882C8.69647 22.9963 8.73351 23 8.77055 23C9.01452 23 9.23414 22.828 9.28758 22.5768C9.2987 22.5221 10.6471 17.0198 15.4142 13.8029C15.6576 13.6389 15.7232 13.3062 15.5607 13.0598C15.3983 12.8134 15.0702 12.7464 14.8267 12.9114C12.1236 14.7355 10.4587 17.2014 9.47968 19.1557C8.77902 16.7032 8.96265 14.668 10.0364 13.0995C12.1495 10.0116 17.1616 9.26696 20.187 9.10946C19.5361 10.0743 18.8249 11.8432 18.8249 14.9643C18.8249 16.6357 18.3565 17.9225 17.4336 18.7893C15.9539 20.1773 13.5503 20.3075 11.7923 20.1736C11.5002 20.1495 11.2467 20.3723 11.2245 20.6675C11.2022 20.9621 11.4208 21.2193 11.7119 21.2418C12.0638 21.2691 12.4395 21.2857 12.8301 21.2857C14.6198 21.2857 16.7075 20.9305 18.1528 19.5746C19.3011 18.4973 19.8833 16.9464 19.8833 14.9648C19.8833 10.0904 21.6984 9.02054 21.7074 9.01571C21.9276 8.90375 22.0429 8.65304 21.9852 8.41089Z" fill="black" />
								</svg>
								<p>устойчивое развитие</p>
							</div>
						</div>
					</div>
				</div>
				<div class="catalog-home__main">
					<div class="catalog-home__container">
						<img class="catalog-home__img" src="./assets/img/home/5.jpg" alt="">
						<div class="catalog-home__footer">
							<svg class="catalog-home__arrow" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="35" cy="35" r="35" fill="#F3F2F3" />
								<path d="M26.1734 37.8535L34.5745 44.8535C34.8089 45.0488 35.1887 45.0488 35.4231 44.8535L43.8242 37.8535C44.0586 37.6582 44.0586 37.3417 43.8242 37.1464C43.5898 36.9511 43.1921 36.9511 42.9576 37.1464L35.5626 43.293V25.5C35.5626 25.2238 35.3314 25 35.0001 25C34.6687 25 34.4375 25.2238 34.4375 25.5V43.293L27.0414 37.1464C26.9242 37.0487 26.7608 36.9999 26.6074 36.9999C26.454 36.9999 26.2955 37.0487 26.1783 37.1464C25.9438 37.3418 25.939 37.6582 26.1734 37.8535Z" fill="black" />
							</svg>
							<div class="catalog-home__more">
								<p>узнать больше</p>
								<svg width="160" height="130" viewBox="0 0 160 130" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M142.454 130C153.433 116.304 160 98.9189 160 80C160 35.8172 124.183 0 80 0C35.8172 0 0 35.8172 0 80C0 98.9189 6.56718 116.304 17.5463 130H142.454Z" fill="#F3F2F3" />
								</svg>
							</div>
						</div>
						<img class="catalog__img-left" src="./assets/img/home/3.jpg" alt="">
						<img class="catalog__img-right" src="./assets/img/home/3.jpg" alt="">
						<img class="catalog__img-center" src="./assets/img/home/1.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class='map'>
		<div class="map__inner" id="map">
		</div>
	</section>
</div>



<?php $view->component('end') ?>