<?php

/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;

$this->title = Yii::t('main', 'Green Line - ') . Yii::t('main', 'Производство электроэнергии');

$this->registerMetaTag([
    'name' => 'description',
    'content' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'Производство электроэнергии'),
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
						- <?php echo Html::a(Yii::t('main', 'Производство электроэнергии'), ['/sales-markets/electric-power'], ['class' => 'current']) ?>
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
					<h1 class="up-line green"><?php echo Yii::t('main', 'Производство электроэнергии') ?></h1>
				</div>
			</div>
		</div>
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="row item-container">
				<div class="col-md-6 col-12">
					<div class="content">
						<p><?php echo Yii::t('main', 'Green Line осуществляет поставки энергетического оборудования и его комплектующих для производства электроэнергии. Насосы, запорная арматура, системы мониторинга, контрольно-измерительные приборы и многое другое от лучших мировых производителей. Продукция, которую мы предлагаем сверхнадежна и долговечна, обеспечивает снижение затрат на эксплуатацию.') ?></p>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="img-container">
						<img src="/img/sales-markets/electro_1.jpg" alt="<?php echo Yii::t('main', 'Производство электроэнергии') ?>">
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
						<img src="/img/brands/el_partner-ksb.png" alt="KSB Group">
							<span class="link">
							<a target="_blank" href="https://www.ksb.com/ksb-en/">https://www.ksb.com/</a>
							<a target="_blank" href="https://www.ksb.com/ksb-en/"><img src="/img/icons/link-square.svg" alt="KSB Group"></a>
						</span>
					</div>
					<div class="item">
						<img class="armaturen" src="/img/brands/el_partner-ari.jpg" alt="ARI armaturen">
							<span class="link">
							<a target="_blank" href="https://www.ari-armaturen.com">https://www.ari-armaturen.com/</a>
							<a target="_blank" href="https://www.ari-armaturen.com"><img src="/img/icons/link-square.svg" alt="ARI armaturen"></a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>