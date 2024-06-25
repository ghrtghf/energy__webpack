<?php

/** 
 * @var \App\Kernel\View\View $view
 * @var array<\App\Models\Station> $stations
 * @var array<\App\Models\Model> $models
 * @var \App\Kernel\Storage\StorageInterface $storage
 */

?>

<?php $view->component('start') ?>

<section class='catalog'>
	<div class='wrapper'>
		<h1 class="catalog__title">Каталог</h1>
		<div class="catalog__filter">
			<form action="/catalog" method="get">
				<select name="filter">
					<option value="">все</option>
					<?php foreach ($stations as $station){ ?>
  						<option value="<?php echo  $station->id() ?>" <?php if(isset($_GET['filter'])){if($station->id() ==  $_GET['filter']){ echo 'selected'; }}?>><?php echo $station->name() ?></option>
                	<?php } ?>
				</select>
			<button>применить</button>
			</form>
		</div>

		<div class="catalog__inner">
			<?php foreach ($models as $model) { ?>
				<div class="catalog__item">
					<a href="/item?id=<?= $model->id() ?>" class="catalog__hover">
						<div class="catalog__price">
							<?= $model->price() ?> РУБ
						</div>
						<div class="catalog__more">
							<span>подробнее</span>
							<img src="./assets/img/catalog/arrow.svg" alt="">
						</div>
						<img class="catalog__img" src="<?= $storage->url($model->image()) ?>" alt="">
					</a>

					<a href="./" class="catalog__button">
						<span>
							<?php foreach ($stations as $station) {
								if ($station->id() == $model->station_id()) {
									echo $station->name();
								}
							} ?> <?= $model->name() ?></span>

					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</section>

<?php $view->component('end') ?>