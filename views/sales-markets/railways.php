<?php

/**
 * @var $this \yii\web\View
 */

$this->title = Yii::t('main', 'Green Line - ') . Yii::t('main', 'Железные дороги');

$this->registerMetaTag([
    'name' => 'description',
    'content' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'Железные дороги'),
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
					<a href="/"><?php echo Yii::t('main', 'Главная') ?></a>
					- <span> <?php echo Yii::t('main', 'Рынки сбыта') ?></span>
					- <a href="/sales-markets/railways" class="current"><?php echo Yii::t('main', 'Железные дороги') ?></a>
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
					<h1 class="up-line green"><?php echo Yii::t('main', 'Железные дороги') ?></h1>
				</div>
			</div>
		</div>
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="row item-container">
				<div class="col-md-6 col-12">
					<div class="content">
						<p><?php echo Yii::t('main', 'Железные дороги') ?></p>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="img-container">
						<img src="/img/sales-markets/railways.jpg" alt="<?php echo Yii::t('main', 'Железные дороги') ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>