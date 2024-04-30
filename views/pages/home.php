<?php

/** 
 * @var \App\Kernel\View\View $view
 */
?>

<?php $view->component('start') ?>

<section class='home'>
	<div class='wrapper'>
		<div class="home__inner">
			<div class="home__main">
				<h1 class="home__title">energy+
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
				</h1>

				<div class="home__footer">
					<button class="home__btn">
						<p>read more</p>
						<img src="./assets/img/home/singleArrow.svg" alt="">
					</button>

					<div class="home__info swiper">
						<div class="home__info-wrapper swiper-wrapper">
							<div class="home__text swiper-slide">это гениальная электростанция
								зарядит тебя до краёв </div>
							<div class="home__text swiper-slide">это гениальная электростанция
								зарядит тебя до краёв </div>
						</div>
						<div class="home__navigation">
							<div class="home__arrow-prev"><img src="./assets/img/home/arrowLeft.svg" alt="arrowLeft"></div>
							<div class="home__arrow-next"><img src="./assets/img/home/arrowRight.svg" alt="arrowRight"></div>
						</div>

					</div>
				</div>

			</div>
			<div class="home__swiper swiper">
				<div class="home__swiper-wrapper swiper-wrapper">
					<div class="home__slide swiper-slide"><img src="./assets/img/home/1.png" alt="1"><img src="./assets/img/home/1-1.png" alt="2"></div>
					<div class="home__slide swiper-slide">
						<img src="./assets/img/home/1.png" alt="1"><img src="./assets/img/home/1-1.png" alt="2">
					</div>

				</div>
				<button class="home__scroll">
					<p>scroll</p>
					<img src="./assets/img/home/doubleArrow.svg" alt="doubleArrow">
				</button>
			</div>
		</div>
	</div>
</section>




<?php $view->component('end') ?>