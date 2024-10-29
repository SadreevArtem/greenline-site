<?php
/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;

$this->title = Yii::t('main', 'Green Line - ') . Yii::t('main', 'Контакты компании');

$this->registerMetaTag([
    'name' => 'description',
    'content' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'Контакты компании'),
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

<section id="contacts" class="container">
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
						<p class="md-ml-10 address font-weight-bold"><?php echo Yii::t('main', 'г. Калининград <br class="d-none d-lg-block"> ул. Фрунзе <br> д. 51, офис 13') ?></p>
					</div>
				</div>
				<div class="right-block d-md-block d-none">
					<div class="request-form-container">
						<form action="/request" method="post" class="request-form">
							<div class="row">
								<h5 class="col-12"><?php echo Yii::t('main', 'Оставить заявку') ?></h5>
								<div class="form-group col-6">
									<input required type="text" class="form-control" name="request-form_name_1" placeholder="<?php echo Yii::t('main', 'Имя') ?>">
									<i style="display: none;" class="fas fa-exclamation-circle" data-trigger="hover" data-toggle="popover" data-content="<?php echo Yii::t('main', 'Заполните поле') ?>"></i>
								</div>
								<div class="form-group col-6">
									<input required type="text" class="form-control" name="request-form_name_2" placeholder="<?php echo Yii::t('main', 'Фамилия') ?>">
									<i style="display: none;" class="fas fa-exclamation-circle" data-trigger="hover" data-toggle="popover" data-content="<?php echo Yii::t('main', 'Заполните поле') ?>"></i>
								</div>
								<div class="form-group col-12">
									<input required type="email" class="form-control" name="request-form_email" placeholder="<?php echo Yii::t('main', 'Электронная почта') ?>">
									<i style="display: none;" class="fas fa-exclamation-circle" data-trigger="hover" data-toggle="popover" data-content="<?php echo Yii::t('main', 'Заполните поле') ?>"></i>
								</div>
								<div class="form-group col-12">
									<textarea placeholder="<?php echo Yii::t('main', 'Комментарий') ?>" class="form-control" name="request-form_comment" rows="1"></textarea>
									<i style="display: none;" class="fas fa-exclamation-circle" data-trigger="hover" data-toggle="popover" data-content="<?php echo Yii::t('main', 'Заполните поле') ?>"></i>
								</div>
								<div id="captcha-1" class="captcha_container" data-id="1"></div>
								<div class="col-12">
									<button type="submit" class="btn btn-dark" data-sitekey="6Letmf8UAAAAAKasiQMt1Z9pxZBP9BkBK425Ii4h" data-callback="onSubmit">
                                        <?php echo Yii::t('main', 'Отправить') ?>
										<i class="fas fa-spinner fa-spin" style="display: none;"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="contacts-mobile" class="container d-block d-md-none">
	<div class="row">
		<div class="request-form-container">
			<form action="/request" method="post" class="request-form">
				<div class="row">
					<h5 class="col-12"><?php echo Yii::t('main', 'Оставить заявку') ?></h5>
					<div class="form-group col-12">
						<input required type="text" class="form-control" name="request-form_name_1" placeholder="<?php echo Yii::t('main', 'Имя') ?>">
						<i style="display: none;" class="fas fa-exclamation-circle" data-trigger="hover" data-toggle="popover" data-content="<?php echo Yii::t('main', 'Заполните поле') ?>"></i>
					</div>
					<div class="form-group col-12">
						<input required type="text" class="form-control" name="request-form_name_2" placeholder="<?php echo Yii::t('main', 'Фамилия') ?>">
						<i style="display: none;" class="fas fa-exclamation-circle" data-trigger="hover" data-toggle="popover" data-content="<?php echo Yii::t('main', 'Заполните поле') ?>"></i>
					</div>
					<div class="form-group col-12">
						<input required type="email" class="form-control" name="request-form_email" placeholder="<?php echo Yii::t('main', 'Электронная почта') ?>">
						<i style="display: none;" class="fas fa-exclamation-circle" data-trigger="hover" data-toggle="popover" data-content="<?php echo Yii::t('main', 'Заполните поле') ?>"></i>
					</div>
					<div class="form-group col-12">
						<textarea placeholder="<?php echo Yii::t('main', 'Комментарий') ?>" class="form-control" name="request-form_comment" rows="3"></textarea>
						<i style="display: none;" class="fas fa-exclamation-circle" data-trigger="hover" data-toggle="popover" data-content="<?php echo Yii::t('main', 'Заполните поле') ?>"></i>
					</div>
					<div id="captcha-1" class="captcha_container" data-id="1"></div>
					<div class="col-12">
						<button type="submit" class="btn btn-dark" data-sitekey="6Letmf8UAAAAAKasiQMt1Z9pxZBP9BkBK425Ii4h" data-callback="onSubmit">
                            <?php echo Yii::t('main', 'Отправить') ?>
							<i class="fas fa-spinner fa-spin" style="display: none;"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<section id="yandex-map" class="container-fluid">
	<div class="row" id="YaMaps">
	</div>
</section>