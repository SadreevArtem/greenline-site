<?php

/**
 * @var $this \yii\web\View
 */

$this->title = Yii::t('main', 'Green Line - ') . Yii::t('main', 'Инфраструктура');

$this->registerMetaTag([
    'name' => 'description',
    'content' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'Инфраструктура'),
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
					- <a href="/sales-markets/infrastructure" class="current"><?php echo Yii::t('main', 'Инфраструктура') ?></a>
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
					<h1 class="up-line green"><?php echo Yii::t('main', 'Инфраструктура') ?></h1>
				</div>
			</div>
		</div>
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="row item-container">
				<div class="col-md-6 col-12">
					<div class="content">
						<p><?php echo Yii::t('main', 'У Green Line имеется обширный портфель передовых технологий по перекачке нефтепродуктов, системам управления, клапанам и различным услугам для нефтегазовой, горной, химической, энергетической отраслей, а также общего промышленного рынка. При необходимости мы можем привлекать международные EPC корпорации для реализации проектов любой сложности: ремонт зданий и сооружений; строительство «под ключ» дожимных компрессорных станций, станций налива жидких углеводородов, станций по компримированию и осушке газа.') ?></p>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="img-container">
						<img src="/img/sales-markets/infrastructure.jpg" alt="<?php echo Yii::t('main', 'Нефтепереработка и транспортировка') ?>">
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
						<img src="/img/brands/el_partner-cat.jpg" alt="CAT">
						<span class="link">
							<a target="_blank" href="https://www.cat.com/ru_RU.html">https://www.cat.com/</a>
							<a target="_blank" href="https://www.cat.com/ru_RU.html"><img src="/img/icons/link-square.svg" alt="CAT"></a>
						</span>
					</div>
					<div class="item">
						<img src="/img/brands/el_partner-kaeser.jpg" alt="Caeser">
						<span class="link">
							<a target="_blank" href="https://www.kaeser.com/">https://www.kaeser.com/</a>
							<a target="_blank" href="https://www.kaeser.com/"><img src="/img/icons/link-square.svg" alt="Kaeser"></a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>