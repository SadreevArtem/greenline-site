<?php

/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;

$this->title = Yii::t('main', 'Greenline - ') . Yii::t('main', 'Горная промышленность');

$this->registerMetaTag([
	'name' => 'description',
	'content' => Yii::t('main', 'Greenline - ') . Yii::t('main', 'Горная промышленность'),
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
					- <?php echo Html::a(Yii::t('main', 'Горная промышленность'), ['/sales-markets/mining'], ['class' => 'current']) ?>
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
					<h1 class="up-line green"><?php echo Yii::t('main', 'Горная промышленность') ?></h1>
				</div>
			</div>
		</div>
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="row item-container">
				<div class="col-md-6 col-12">
					<div class="content">
						<p><?php echo Yii::t('main', 'Greenline – это качество и надежность в поставке оборудования, а также в оказании услуг для предприятий, работающих в горной промышленности. Горное производство играет важнейшую роль в экономике. Оно снабжает сырьем и энергоносителями ведущие промышленные отрасли. Для обеспечения стабильной и эффективной работы по добыче и обработке минералов мы предлагаем передовое оборудование из ЮАР, грохоты, питатели и так далее.') ?></p>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="img-container">
						<img src="/img/sales-markets/mining.jpg" alt="<?php echo Yii::t('main', 'Горная промышленность') ?>">
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-10 offset-lg-1 col-12" style="display: none;">
			<div class="row">
				<div class="col-12">
					<h2 class="up-line green"><?php echo Yii::t('main', 'Партнёры') ?></h2>
				</div>
			</div>
			<div class="row links-container">
				<div class="col-12 d-flex justify-content-start flex-md-row flex-column">
					<div class="item">
						<img src="/img/brands/el_partner-amtech.jpg" alt="AMMtech">
						<span class="link">
							<a target="_blank" href="https://www.amm-tech.it/">https://www.amm-tech.it/</a>
							<a target="_blank" href="https://www.amm-tech.it/"><img src="/img/icons/link-square.svg" alt="AMMtech"></a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>