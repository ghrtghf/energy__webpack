<?php

/** 
 * @var \App\Kernel\View\View $view
 * @var \App\Models\Model $model
 * @var \App\Models\Station $station
 * @var \App\Kernel\Storage\StorageInterface $storage
 */
?>

<?php $view->component('start') ?>

<section class='item'>
	<div class='wrapper'>
		<h1 class="item__title"><?= $station->name() ?> <?= $model->name() ?></h1>
		<div class="item__main">
			<div class="item__swiper-overflow">
				<div class="item__swiper swiper">
					<div class="item__swiper-wrapper swiper-wrapper">
						<div class="item__slide swiper-slide">
							<img src="<?= $storage->url($model->image())?>" alt="">
						</div>
						<div class="item__slide swiper-slide">
							<img src="<?= $storage->url($model->image())?>" alt="">
						</div>

					</div>
				</div>
				<div class="item__navigation">
					<div class="swiper__circle-prev">
						<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="32" cy="32" r="31" stroke="black" stroke-width="2" />
							<path d="M21.2929 31.2929C20.9024 31.6834 20.9024 32.3166 21.2929 32.7071L27.6569 39.0711C28.0474 39.4616 28.6805 39.4616 29.0711 39.0711C29.4616 38.6805 29.4616 38.0474 29.0711 37.6569L23.4142 32L29.0711 26.3431C29.4616 25.9526 29.4616 25.3195 29.0711 24.9289C28.6805 24.5384 28.0474 24.5384 27.6569 24.9289L21.2929 31.2929ZM42 31L22 31V33H42V31Z" fill="black" />
						</svg>
					</div>
					<div class="swiper__circle-next">
						<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="32" cy="32" r="31" stroke="black" stroke-width="2" />
							<path d="M42.7071 32.7071C43.0976 32.3166 43.0976 31.6834 42.7071 31.2929L36.3431 24.9289C35.9526 24.5384 35.3195 24.5384 34.9289 24.9289C34.5384 25.3195 34.5384 25.9526 34.9289 26.3431L40.5858 32L34.9289 37.6569C34.5384 38.0474 34.5384 38.6805 34.9289 39.0711C35.3195 39.4616 35.9526 39.4616 36.3431 39.0711L42.7071 32.7071ZM22 33H42V31H22V33Z" fill="black" />
						</svg>
					</div>
				</div>
				<div class="swiper-pagination">
				</div>
			</div>


			<div class="item__content">
				<div class="item__header">
					<button class="item__price">
						<?= $model->price() ?> <span>РУБ</span>
					</button>
					<div class="item__info">
						<p><?= $station->body_protection() ?> </p>
						<p><?= $model->description() ?></p>
					</div>
				</div>
				<form action="/item" method="post">
				<div class="item__footer">
					<h2>количество:</h2>
					<div class="item__bottom">
						<div class="cart__counter" data-counter>
							<div class="cart__button counter-minus">
								<svg width="13" height="1" viewBox="0 0 13 1" fill="none" xmlns="http://www.w3.org/2000/svg">
									<line y1="0.5" x2="13" y2="0.5" stroke="black" />
								</svg>
							</div>
							
							<input class="cart__input" type="text" name="count"  value="1">
							<div class="cart__button counter-plus">
								<svg class="svg-plus" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
									<line class="svg-plus" y1="6.5" x2="13" y2="6.5" stroke="black" />
									<line class="svg-plus" x1="6.5" x2="6.5" y2="13" stroke="black" />
								</svg>
							</div>
						</div>
						<input type="hidden" name="id" value="<?= $id ?>">
						<button class="item__add">
							<span>добавить в корзину</span>
							<svg width="15" height="8" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M14.3536 4.35355C14.5488 4.15829 14.5488 3.84171 14.3536 3.64645L11.1716 0.464466C10.9763 0.269204 10.6597 0.269204 10.4645 0.464466C10.2692 0.659728 10.2692 0.976311 10.4645 1.17157L13.2929 4L10.4645 6.82843C10.2692 7.02369 10.2692 7.34027 10.4645 7.53553C10.6597 7.7308 10.9763 7.7308 11.1716 7.53553L14.3536 4.35355ZM0 4.5H14V3.5H0V4.5Z" fill="white" />
							</svg>
						</button>
						
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</section>


<?php $view->component('end') ?>