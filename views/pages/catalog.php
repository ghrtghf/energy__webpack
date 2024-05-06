<?php

/** 
 * @var \App\Kernel\View\View $view
 */
?>

<?php $view->component('start') ?>

<section class='catalog'>
	<div class='wrapper'>
		<h1 class="catalog__title">Каталог</h1>

		<div class="catalog__inner">
			<div class="catalog__item">
				<a href="./" class="catalog__hover">
					<div class="catalog__price">
						500000 РУБ
					</div>
					<div class="catalog__more">
						<span>подробнее</span>
						<img src="./assets/img/catalog/arrow.svg" alt="">
					</div>
					<img class="catalog__img" src="./assets/img/catalog/1.png" alt="">
				</a>

				<a href="./" class="catalog__button">
					<span>зарядное устройство universal</span>
				</a>
			</div>
		</div>
	</div>
</section>

<?php $view->component('end') ?>