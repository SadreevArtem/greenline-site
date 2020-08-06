<?php

/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;

$this->title = Yii::t('main', 'Green Line - ') . Yii::t('main', 'Нефтепереработка и транспортировка');

$this->registerMetaTag([
    'name' => 'description',
    'content' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'Нефтепереработка и транспортировка'),
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => Yii::t('main', 'рынки сбыта'),
]);
$this->registerMetaTag([
    'name' => 'robots',
    'content' => 'index, follow',
]);
?>

<header id="header" class="container-fluid navigate-header">
	<div class="img-container">
		<img src="/img/headers/sales-markets.jpg" alt="<?php echo Yii::t('main', 'Рынки сбыта') ?>">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 col-12">
				<h2><?php echo Yii::t('main', 'Рынки сбыта') ?></h2>
				<span class="breadcrumbs">
					<?php echo Html::a(Yii::t('main', 'Главная'), ['/']) ?>
						- <span> <?php echo Yii::t('main', 'Рынки сбыта') ?></span>
						- <?php echo Html::a(Yii::t('main', 'Нефтепереработка и транспортировка'), ['/sales-markets/oil-refining'], ['class' => 'current']) ?>
				</span>
			</div>
		</div>
	</div>
</header>

<section class="item container">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="row">
				<div class="col-md-6 col-12">
					<h1 class="up-line green"><?php echo Yii::t('main', 'Нефтепереработка и транспортировка') ?></h1>
				</div>
			</div>
		</div>
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="row item-container">
				<div class="col-md-6 col-12">
					<div class="content">
						<p><?php echo Yii::t('main', 'Green line постоянно совершенствуется и сотрудничает с ведущими лицензиарами мира в области поставки оборудования глубокой переработки нефти, а также имеет широкий список поставщиков оборудования для транспортировки газа. Мы как никто другой понимаем насколько важно поставлять передовое оборудование не только с точки зрения экологии, но и самое главное с точки зрения промышленной безопасности. Наше оборудование отвечает стандартам API.') ?></p>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="img-container">
						<img src="/img/sales-markets/oil_refining_1.jpg" alt="<?php echo Yii::t('main', 'Нефтепереработка и транспортировка') ?>">
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="row">
				<div class="col-12">
					<h2 class="up-line green"><?php echo Yii::t('main', 'Партнёры') ?></h2>
				</div>
			</div>
			<div class="row links-container">
				<div class="col-12 d-flex justify-content-start flex-md-row flex-column">
					<div class="item">
						<img src="/img/brands/brand_7.jpg" alt="Villabonaldi">
						<span class="link">
							<a target="_blank" href="http://www.villabonaldi.com">http://www.villabonaldi.com/</a>
							<a target="_blank" href="http://www.villabonaldi.com"><img src="/img/icons/link-square.svg" alt="Villabonaldi"></a>
						</span>
					</div>
					<div class="item">
						<img src="/img/brands/brand_8.jpg" alt="broach">
						<span class="link">
							<a target="_blank" href="https://www.broach.com/">https://www.broach.com/</a>
							<a target="_blank" href="https://www.broach.com/"><img src="/img/icons/link-square.svg" alt="broach"></a>
						</span>
					</div>
					<div class="item">
						<img src="/img/brands/brand_6.jpg" alt="Deller">
						<span class="link">
							<a target="_blank" href="https://www.deller-gmbh.de/en/">https://www.deller-gmbh.de/</a>
							<a target="_blank" href="https://www.deller-gmbh.de/en/"><img src="/img/icons/link-square.svg" alt="Deller"></a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>