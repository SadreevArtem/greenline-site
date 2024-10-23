<?php

/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;

$this->title = Yii::t('main', 'Green Line - ') . Yii::t('main', 'Химия и нефтехимия');

$this->registerMetaTag([
    'name' => 'description',
    'content' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'Химия и нефтехимия'),
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
						- <?php echo Html::a(Yii::t('main', 'Химия и нефтехимия'), ['/sales-markets/chemistry'], ['class' => 'current']) ?>
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
					<h1 class="up-line green"><?php echo Yii::t('main', 'Химия и нефтехимия') ?></h1>
				</div>
			</div>
		</div>
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="row item-container">
				<div class="col-md-6 col-12">
					<div class="content">
						<p><?php echo Yii::t('main', 'Green Line осуществляет поставки оборудования для химической промышленности. Мы поставляем надежное ресурсосберегающее оборудование, которое предназначено для сложных технологических процессов и работы в условиях агрессивных, взрывоопасных, токсичных сред, высоких температур, и давлений. Уделяя особое внимание безопасности, наше оборудование соответствует ISO 15848-1:2006.') ?></p>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="img-container">
						<img src="/img/sales-markets/chemistry.jpg" alt="<?php echo Yii::t('main', 'Химия и нефтехимия') ?>">
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="row">
				<div class="col-12">
					<h2 class="up-line green"><?php echo Yii::t('main', 'Бренды') ?></h2>
				</div>
			</div>
			<div class="row links-container">
				<div class="col-12 d-flex justify-content-start flex-md-row flex-column">
					<div class="item">
						<img src="/img/brands/brand_4.jpg" alt="Allweiler">
						<span class="link">
							<a target="_blank" href="https://www.allweiler.de/en">https://www.allweiler.de/</a>
							<a target="_blank" href="https://www.allweiler.de/en"><img src="/img/icons/link-square.svg" alt="Allweiler"></a>
						</span>
					</div>
					<div class="item">
						<img class="bhdt" src="/img/brands/el_partner-bhdt.jpg" alt="bhdt">
						<span class="link">
							<a target="_blank" href="https://www.bhdt.at/">https://www.bhdt.at/</a>
							<a target="_blank" href="https://www.bhdt.at/"><img src="/img/icons/link-square.svg" alt="bhdt"></a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
