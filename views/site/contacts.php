<?php
/**
 * @var $this \yii\web\View
 */

$this->title = 'Green Line - Контакты компании';

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Green Line - Контакты компании',
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'высококачественное оборудование',
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
			<div class="col-lg-10 offset-lg-1 col-12">
				<h1>Контакты</h1>
				<span class="breadcrumbs">
						<a href="/">Главная</a>
						- <a href="/contacts" class="current">Контакты</a>
					</span>
			</div>
		</div>
	</div>
</header>

<section id="contacts" class="container">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="d-flex justify-content-between">
				<div class="left-block">
					<h2 class="up-line green">Контакты</h2>
					<div class="email">
						<a href="mailto:info@greenlinerussia.com"><img src="/img/icons/email.svg" alt="Email"></a>
						<p class="md-ml-10 text-1">E-mail:</p>
						<a class="md-ml-10 link-no-style font-weight-bold" href="mailto:info@greenlinerussia.com">info@greenlinerussia.com</a>
					</div>
					<div class="phone">
						<a href="tel:+71234567890"><img src="/img/icons/phone.svg" alt="Phone"></a>
						<p class="md-ml-10 text-1">Телефон:</p>
						<a class="md-ml-10 link-no-style font-weight-bold" href="tel:+71234567890">+7 (4012) 926 962</a>
					</div>
					<div class="geo">
						<a><img src="/img/icons/geo.svg" alt="Geo"></a>
						<p class="md-ml-10 text-1">Адрес:</p>
						<p class="md-ml-10 address font-weight-bold">г. Калининград <br class="d-none d-lg-block"> ул. Пугачева <br> д. 16, офис 209</p>
					</div>
				</div>
				<div class="right-block d-md-block d-none">
					<div class="request-form-container">
						<form action="/action" method="post" class="request-form">
							<div class="row">
								<h5 class="col-12">Оставить заявку</h5>
								<div class="form-group col-6">
									<input required type="text" class="form-control" name="request-form_name_1" placeholder="Имя">
									<i style="display: none;" class="fas fa-exclamation-circle" data-trigger="hover" data-toggle="popover" data-content="Заполните поле"></i>
								</div>
								<div class="form-group col-6">
									<input required type="text" class="form-control" name="request-form_name_2" placeholder="Фамилия">
									<i style="display: none;" class="fas fa-exclamation-circle" data-trigger="hover" data-toggle="popover" data-content="Заполните поле"></i>
								</div>
								<div class="form-group col-12">
									<input required type="email" class="form-control" name="request-form_email" placeholder="Электронная почта">
									<i style="display: none;" class="fas fa-exclamation-circle" data-trigger="hover" data-toggle="popover" data-content="Заполните поле"></i>
								</div>
								<div class="form-group col-12">
									<textarea placeholder="Комментарий" class="form-control" name="request-form_comment" rows="1"></textarea>
									<i style="display: none;" class="fas fa-exclamation-circle" data-trigger="hover" data-toggle="popover" data-content="Заполните поле"></i>
								</div>
								<div id="captcha-1" class="captcha_container" data-id="1"></div>
								<div class="col-12">
									<button type="submit" class="btn btn-dark" data-sitekey="6Letmf8UAAAAAKasiQMt1Z9pxZBP9BkBK425Ii4h" data-callback="onSubmit">
										Отправить
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
			<form action="/action" method="post" class="request-form">
				<div class="row">
					<h5 class="col-12">Оставить заявку</h5>
					<div class="form-group col-12">
						<input required type="text" class="form-control" name="request-form_name_1" placeholder="Имя">
						<i style="display: none;" class="fas fa-exclamation-circle" data-trigger="hover" data-toggle="popover" data-content="Заполните поле"></i>
					</div>
					<div class="form-group col-12">
						<input required type="text" class="form-control" name="request-form_name_2" placeholder="Фамилия">
						<i style="display: none;" class="fas fa-exclamation-circle" data-trigger="hover" data-toggle="popover" data-content="Заполните поле"></i>
					</div>
					<div class="form-group col-12">
						<input required type="email" class="form-control" name="request-form_email" placeholder="Электронная почта">
						<i style="display: none;" class="fas fa-exclamation-circle" data-trigger="hover" data-toggle="popover" data-content="Заполните поле"></i>
					</div>
					<div class="form-group col-12">
						<textarea placeholder="Комментарий" class="form-control" name="request-form_comment" rows="3"></textarea>
						<i style="display: none;" class="fas fa-exclamation-circle" data-trigger="hover" data-toggle="popover" data-content="Заполните поле"></i>
					</div>
					<div id="captcha-1" class="captcha_container" data-id="1"></div>
					<div class="col-12">
						<button type="submit" class="btn btn-dark" data-sitekey="6Letmf8UAAAAAKasiQMt1Z9pxZBP9BkBK425Ii4h" data-callback="onSubmit">
							Отправить
							<i class="fas fa-spinner fa-spin" style="display: none;"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<section id="yandex-map" class="container-fluid">
	<div class="row">
		<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A5c7197ad5e4a1d80b17547e239e088798f966b7fff2a67b416a7f6c899e0030c&amp;source=constructor" width="100%" height="300" frameborder="0"></iframe>
	</div>
</section>