<?php

/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;

$this->title = Yii::t('main', 'Greenline - ') . Yii::t('main', 'Контакты компании Greenline greenlinerussia');

$this->registerMetaTag([
	'name' => 'description',
	'content' => Yii::t('main', 'Greenline - ') . Yii::t('main', 'Контакты компании Greenline'),
]);
$this->registerMetaTag([
	'name' => 'keywords',
	'content' => Yii::t('main', 'высококачественное оборудование'),
]);
$this->registerMetaTag([
	'name' => 'robots',
	'content' => 'index, follow',
]);
?>

<header id="header" class="container-fluid navigate-header">
	<div class="img-container">
		<img src="/img/headers/contacts.jpg" alt="О нас">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 col-12 text-dark">
				<h1><?php echo Yii::t('main', 'Контакты') ?></h1>
				<!-- <span class="breadcrumbs text-dark">
					<?php echo Html::a(Yii::t('main', 'Главная'), ['/']) ?>
                    	- <?php echo Html::a(Yii::t('main', 'Контакты'), ['/contacts'], ['class' => 'current']) ?>
					</span> -->
			</div>
		</div>
	</div>
</header>

<section id="contacts" class="container no-copy">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="d-flex justify-content-between">
				<div class="left-block">
					<h2 class="up-line green"><?php echo Yii::t('main', 'Контакты') ?></h2>
					<div class="email">
						<a href="mailto:info@greenlinerussia.com"><img src="/img/icons/email.svg" alt="Email"></a>
						<p class="md-ml-10 text-1">E-mail:</p>
						<a class="md-ml-10 link-no-style font-weight-bold" href="mailto:info@greenlinerussia.com">info@greenlinerussia.com</a>
					</div>
					<div class="phone">
						<a href="tel:+74012994847"><img src="/img/icons/phone.svg" alt="Phone"></a>
						<p class="md-ml-10 text-1"><?php echo Yii::t('main', 'Телефон:') ?></p>
						<a class="md-ml-10 link-no-style font-weight-bold" href="tel:+74012994847">+7 (4012) 994 847</a>
					</div>
					<div class="geo">
						<a><img src="/img/icons/map-marker.svg" alt="Geo"></a>
						<p class="md-ml-10 text-1"><?php echo Yii::t('main', 'Адрес:') ?></p>
						<p class="md-ml-10 address font-weight-bold"><?php echo Yii::t('main', 'г. Калининград <br class="d-none d-lg-block"> ул. Пугачева <br> д. 16, офис 209') ?></p>
					</div>
				</div>
				<div class="right-block d-md-block d-none">
					<div class="request-form-container">
						<?= $this->render('//layouts/parts/_request_form', ['formId' => 'contacts-desktop']) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<h3 class="my-4"><?php echo Yii::t('main', 'Дополнительные офисы:') ?></h3>
			<p class="font-weight-bold h5"><?php echo Yii::t('main', 'Москва') ?></p>
			<p class=""><?php echo Yii::t('main', '123242, г. Москва, вн. тер. г. муниципальный округ Пресненский, ул. Большая Грузинская, д. 20, помещение ЗА/П') ?></p>
		</div>
		<div class="col-lg-10 offset-lg-1 col-12">
			<p class="font-weight-bold h5"><?php echo Yii::t('main', 'Санкт-Петербург') ?></p>
			<p class=""><?php echo Yii::t('main', '191028, г. Санкт-Петербург, Литейный пр., 26') ?></p>
		</div>
		<div class="col-lg-10 offset-lg-1 col-12">
			<p class="font-weight-bold h5"><?php echo Yii::t('main', 'Владивосток') ?></p>
			<p class=""><?php echo Yii::t('main', '690920, Российская Федерация, Приморский край, остров Русский') ?></p>
		</div>
		<div class="col-lg-10 offset-lg-1 col-12">
			<p class="font-weight-bold h5"><?php echo Yii::t('main', 'Гонконг') ?></p>
			<p class=""><?php echo Yii::t('main', 'Room 1208, 12/F, Eastern Commercial Centre 397, Hennessy Road, Hong Kong') ?></p>
		</div>
	</div> -->
</section>

<section id="contacts-mobile" class="container d-block d-md-none">
	<div class="row">
		<div class="request-form-container">
			<?= $this->render('//layouts/parts/_request_form', ['formId' => 'contacts-mobile', 'stacked' => true]) ?>
		</div>
	</div>
</section>

<section id="yandex-map" class="container-fluid">
	<div class="row" id="YaMaps">
	</div>
</section>
