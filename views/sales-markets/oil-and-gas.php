<?php

/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;

$this->title = Yii::t('main', 'Green Line - ') . Yii::t('main', 'Добыча нефти и газа');

$this->registerMetaTag([
	'name' => 'description',
	'content' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'Добыча нефти и газа')
]);
$this->registerMetaTag([
	'name' => 'keywords',
	'content' => Yii::t('main', 'рынки сбыта')
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
					- <?php echo Html::a(Yii::t('main', 'Добыча нефти и газа'), ['/sales-markets/oil-and-gas'], ['class' => 'current']) ?>
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
					<h1 class="up-line green"><?php echo Yii::t('main', 'Добыча нефти и газа') ?></h1>
				</div>
			</div>
		</div>
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="row item-container">
				<div class="col-md-6 col-12">
					<div class="content">
						<p><?php echo Yii::t('main', 'Green Line – один из лидеров по поставке оборудования для нефтегазовой промышленности, решениям которого доверяют. В сферу нашей деятельности входят исследования; модернизация производств, с помощью новейших технологий по очистке нефти и газа от сероводорода; транспортировка и хранение; разработка и поставка запорной арматуры, регулирующих устройств, обеспечивающих безопасность. Вся наша продукция спроектирована так, чтобы противостоять самым агрессивным рабочим средам.') ?></p>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="img-container">
						<img src="/img/sales-markets/oil_and_gas_1.jpg" alt="<?php echo Yii::t('main', 'Добыча нефти и газа') ?>">
					</div>
				</div>
			</div>
			<div class="row item-container">
				<div class="col-md-6 col-12">
					<div class="content">
						<p><?php echo Yii::t('main', 'Мы те, для кого защита окружающей среды является одним из важнейших приоритетов. Мы те, кто поставляет продукцию с нулевой утечкой согласно ISO 15848-1:2006. В соответствии с требованиями ISO/IEC 17025, для проверок нашей продукции мы привлекаем аттестованную лабораторию неразрушающего контроля, которая имеет многолетний успешный опыт службы на оффшорных буровых платформах. Мы те, кто делает мир чище ежедневно.') ?></p>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="img-container">
						<img src="/img/sales-markets/oil_and_gas_2.jpg" alt="Добыча нефти и газа">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>