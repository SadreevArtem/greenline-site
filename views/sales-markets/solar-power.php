<?php

/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;

$this->title = Yii::t('main', 'Green Line - ') . Yii::t('main', 'Солнечные электростанции');

$this->registerMetaTag([
	'name' => 'description',
	'content' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'Солнечные электростанции'),
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
					- <?php echo Html::a(Yii::t('main', 'Солнечные электростанции'), ['/sales-markets/solar-power'], ['class' => 'current']) ?>
				</span>
			</div>
		</div>
	</div>
</header>

<section class="item container no-copy">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="row">
				<div class="col-md-6 col-12">
					<h1 class="up-line green"><?php echo Yii::t('main', 'Солнечные электростанции') ?></h1>
				</div>
			</div>
		</div>
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="row item-container">
				<div class="col-md-6 col-12">
					<div class="content">
						<p><?php echo Yii::t('main', 'Солнечные электростанции') ?></p>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="img-container">
						<img src="/img/sales-markets/solar_power_1.jpg" alt="<?php echo Yii::t('main', 'Солнечные электростанции') ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>