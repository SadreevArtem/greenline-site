<?php

/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;

$this->title = Yii::t('main', 'Green Line - ') . Yii::t('main', 'Официальный сайт компании Гринлайн, greenlinerussia');

$this->registerMetaTag([
	'name' => 'description',
	'content' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'компания Гринлайн - специализируется на поставках оборудования в нефтегазовую, нефтехимическую, энергетическую отрасли промышленности'),
]);
$this->registerMetaTag([
	'name' => 'keywords',
	'content' => Yii::t('main', 'поставка нефтегазового оборудования для оффшорной добычи'),
]);

?>

<header id="header" class="container-fluid no-copy">
	<div class="row">
		<div class="item w-100">
			<img class="w-100 back-img d-none d-md-block" src="/img/header_img_test2.jpg" alt="header_1">
			<img class="w-100 back-img d-block d-md-none" src="/img/header_img_test2.jpg" alt="header_1">
			<div class="desc">
				<div class="row">
					<div class="col-10">
						<div class="row">
							<div class="col-12">
								<h1 class="title"><?php echo Yii::t('main', 'Оснащение и модернизация <br> ведущих отраслей промышленности') ?></h1>
							</div>
							<div class="col-12"><span class="text"><?php echo Yii::t('main', 'России и СНГ, не имеющим отечественных аналогов высококачественным оборудованием из Европы и США') ?></span></div>
						</div>
					</div>
					<div class="col-12 col-md-2 d-flex justify-content-md-end justify-content-start align-items-end">
						<?php echo Html::a(Yii::t('main', 'ПОДРОБНЕЕ'), ['/about'], ['class' => 'btn btn-success more-btn']) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<section id="provide" class="container no-copy">
	<div class="row">
		<div class="col-12 col-lg-10 offset-lg-1">
			<h2 class="up-line green"><?php echo Yii::t('main', 'Что мы предоставляем') ?></h2>
			<div class="provide-list row d-lg-flex flex-lg-row justify-content-lg-between align-items-lg-start">
				<div class="item col-lg col-md-4 col-6 d-flex flex-column justify-content-start align-items-start">
					<img src="/img/icons/provide_1.svg" alt="<?php echo Yii::t('main', 'Поставка оборудования') ?>">
					<span><?php echo Yii::t('main', 'Поставка <br> оборудования') ?></span>
				</div>
				<div class="item col-lg col-md-4 col-6 d-flex flex-column justify-content-start align-items-start">
					<img src="/img/icons/provide_2.svg" alt="<?php echo Yii::t('main', 'Надзор за производством') ?>">
					<span><?php echo Yii::t('main', 'Надзор за <br> производством') ?></span>
				</div>
				<div class="item col-lg col-md-4 col-6 d-flex flex-column justify-content-start align-items-start">
					<img src="/img/icons/provide_3.svg" alt="<?php echo Yii::t('main', 'Гарантийное обслуживание') ?>">
					<span><?php echo Yii::t('main', 'Гарантийное <br> обслуживание') ?></span>
				</div>
				<div class="item col-lg col-md-4 col-6 d-flex flex-column justify-content-start align-items-start">
					<img src="/img/icons/provide_4.svg" alt="<?php echo Yii::t('main', 'Шефмонтаж и пусконаладка') ?>">
					<span><?php echo Yii::t('main', 'Шефмонтаж <br> и пусконаладка') ?></span>
				</div>
				<div class="item col-lg col-md-4 col-6 d-flex flex-column justify-content-start align-items-start">
					<img src="/img/icons/provide_5.svg" alt="<?php echo Yii::t('main', 'Свой парк сервисных инженеров 24/7') ?>">
					<span><?php echo Yii::t('main', 'Свой парк сервисных <br> инженеров 24/7') ?></span>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="about" class="container-fluid no-copy">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-12">
					<div class="row">
						<div class="col-6 col-lg-6 col-md-5 col-12">
							<h2 class="up-line white"><?php echo Yii::t('main', 'О компании') ?></h2>
							<p><?php echo Yii::t('main', 'Компания Green Line специализируется на поставках оборудования и передовых технологий в нефтегазовую, нефтехимическую, энергетическую и иные ведущие отрасли промышленности.') ?></p>
							<p><?php echo Yii::t('main', 'Уникальный опыт позволяет нам находить наилучшие технологические решения и превосходно справляться с любыми задачами Заказчика.') ?></p>
							<?php echo Html::a(Yii::t('main', 'УЗНАТЬ БОЛЬШЕ О НАС'), ['/about'], ['class' => 'btn btn-default more-btn']) ?>
						</div>
						<div class="col-6 col-lg-6 col-md-7 col-12">
							<img class="d-none d-md-block h-100 w-100" src="/img/about_company.jpg" alt="<?php echo Yii::t('main', 'Компания Greenline') ?>">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="why-trust" class="container no-copy">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<h2 class="up-line green"><?php echo Yii::t('main', 'Почему нам доверяют') ?></h2>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="row">
				<div class="col-12 col-md">
					<div class="item item-1">
						<div class="img-container">
							<img src="/img/icons/why_trust_1.svg" alt="<?php echo Yii::t('main', 'Сопровождение сделок') ?>">
						</div>
						<span class="number">1.</span>
						<div class="text-container">
							<p><?php echo Yii::t('main', 'Превосходное <br class="d-block d-md-none"><b>сопровождение сделок</b>') ?></p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md px-md-0">
					<div class="item item-2">
						<div class="img-container">
							<img src="/img/icons/why_trust_2.svg" alt="<?php echo Yii::t('main', 'Защита перед проверяющими органами') ?>">
						</div>
						<span class="number">2.</span>
						<div class="text-container">
							<p><?php echo Yii::t('main', 'Заказчики защищены перед проверяющими органами <b>абсолютной прозрачностью компании</b>') ?></p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md">
					<div class="item item-3">
						<div class="img-container">
							<img src="/img/icons/why_trust_3.svg" alt="<?php echo Yii::t('main', 'Собственная приёмка и аудит') ?>">
						</div>
						<span class="number">3.</span>
						<div class="text-container">
							<p><?php echo Yii::t('main', 'Собственная приемка оборудования и аудит <b>во время производства продукции</b>') ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="sales-markets" class="container-fluid py-0 d-none d-lg-block">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 col-12 d-flex justify-content-center align-items-center items-container">
				<img src="/img/landing/sales_markets_<?php echo Yii::$app->language ?>.jpg" alt="<?php echo Yii::t('main', 'Рынки сбыта') ?>">
				<?php echo Html::a('<u>' . Yii::t('main', 'космос и мобильные <br> коммуникации') . '</u>', ['/sales-markets/space-and-mobile'], ['class' => 'item-1']) ?>
				<?php echo Html::a('<u>' . Yii::t('main', 'добыча нефти<br>и газа') . '</u>', ['/sales-markets/oil-and-gas'], ['class' => 'item-2']) ?>
				<?php echo Html::a('<u>' . Yii::t('main', 'химия<br> и нефтехимия') . '</u>', ['/sales-markets/chemistry'], ['class' => 'item-3']) ?>
				<?php echo Html::a('<u>' . Yii::t('main', 'производство<br>электроэнергии') . '</u>', ['/sales-markets/electric-power'], ['class' => 'item-4']) ?>
				<?php echo Html::a('<u>' . Yii::t('main', 'нефтепереработка<br>и транспортировка') . '</u>', ['/sales-markets/oil-refining'], ['class' => 'item-5']) ?>
				<span class="item-6"><u><?php echo Yii::t('main', 'солнечные<br>электростанции') ?></u></span>
				<?php echo Html::a('<u>' . Yii::t('main', 'горная<br>промышленность') . '</u>', ['/sales-markets/mining'], ['class' => 'item-7']) ?>
				<?php echo Html::a('<u>' . Yii::t('main', 'инфраструктура') . '</u>', ['/sales-markets/infrastructure'], ['class' => 'item-8']) ?>
				<span class="item-9"><u><?php echo Yii::t('main', 'судостроение<br>') ?></u></span>
				<span class="item-10"><u><?php echo Yii::t('main', 'железные<br>дороги') ?></u></span>
			</div>
		</div>
	</div>
</section>
<section id="our-brands" class="container" style="display: none;"> // hide block Our brands
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<h2 class="up-line green"><?php echo Yii::t('main', 'Наши бренды') ?></h2>
			<div class="our-brands-carousel owl-carousel owl-theme">
				<div class="item item-1"><?php echo Html::a(Html::img('/img/brands/brand_1.jpg', ['alt' => 'B.F.E. S.r.l.']), ['/brands']) ?></div>
				<div class="item item-2"><?php echo Html::a(Html::img('/img/brands/brand_2.jpg', ['alt' => 'KITZ']), ['/brands']) ?></div>
				<div class="item item-3"><?php echo Html::a(Html::img('/img/brands/brand_3.jpg', ['alt' => 'Valvosider']), ['/brands']) ?></div>
				<div class="item item-4"><?php echo Html::a(Html::img('/img/brands/brand_4.jpg', ['alt' => 'Allweiler']), ['/brands']) ?></div>
				<div class="item item-5"><?php echo Html::a(Html::img('/img/brands/brand_5.jpg', ['alt' => 'Auma']), ['/brands']) ?></div>
				<div class="item item-6"><?php echo Html::a(Html::img('/img/brands/brand_6.jpg', ['alt' => 'Deller']), ['/brands']) ?></div>
				<div class="item item-8"><?php echo Html::a(Html::img('/img/brands/brand_8.jpg', ['alt' => 'Broach']), ['/brands']) ?></div>
				<div class="item item-9"><?php echo Html::a(Html::img('/img/brands/brand_9.jpg', ['alt' => 'Maivisa']), ['/brands']) ?></div>
			</div>
		</div>
	</div>
</section>
<!--<section id="news" class="container-fluid">-->
<!--	<div class="row">-->
<!--		<div class="container">-->
<!--			<div class="row">-->
<!--				<div class="col-lg-10 offset-lg-1 col-12 d-flex justify-content-between">-->
<!--					<h2 class="up-line white">--><?php //echo Yii::t('main', 'Новости') 
														?><!--</h2>-->
<!--                    --><?php //echo Html::a(Yii::t('main', 'КО ВСЕМ НОВОСТЯМ'), ['/news-list'], ['class' => 'btn btn-default more-btn']) 
							?>
<!--				</div>-->
<!--				<div class="col-lg-10 offset-lg-1 col-12">-->
<!--					<div class="news-carousel owl-carousel owl-theme">-->
<!--						<div class="item d-flex">-->
<!--                            --><?php //echo Html::a(Html::img('/img/news/news_1.jpg', ['alt' => Yii::t('main', 'Galp пробурила первую скважину Mopane 1-A')]),
									//									['/news-list'], ['class' => 'img-link']) 
									?>
<!--							<div class="desc d-flex flex-column justify-content-between">-->
<!--								<div class="title-container">-->
<!--									<span class="date">25.10.2024</span>-->
<!--									<h3 class="news-title">--><?php //echo Yii::t('main', 'Galp пробурила первую скважину Mopane 1-A') 
																	?><!--</h3>-->
<!--								</div>-->
<!--								<p class="news-body">--><?php //echo Yii::t('main', 'В условиях пандемии новой коронавирусной инфекции...') 
															?><!--</p>-->
<!--								--><?php //echo Html::a(Yii::t('main', 'Подробнее'), ['/news/300320'], ['class' => 'more-link']) 
										?>
<!--							</div>-->
<!--						</div>-->
<!--						<div class="item d-flex">-->
<!--                            --><?php //echo Html::a(Html::img('/img/news/news_2.jpg', ['alt' => Yii::t('main', 'УКПГ для Семаковского газового месторождения')]),
									//                                ['/news-list'], ['class' => 'img-link']) 
									?>
<!--							<div class="desc d-flex flex-column justify-content-between">-->
<!--								<div class="title-container">-->
<!--									<span class="date">4-7 Ноября 2024</span>-->
<!--									<h3 class="news-title">--><?php //echo Yii::t('main', 'Посетите мировую энергетическую выставку') 
																	?><!--</h3>-->
<!--								</div>-->
<!--								<p class="news-body">--><?php //echo Yii::t('main', 'Компания Greenline завершила разработку дизайна установок...') 
															?><!--</p>-->
<!--								--><?php //echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160420'], ['class' => 'more-link']) 
										?>
<!--							</div>-->
<!--						</div>-->
<!--						<div class="item d-flex">-->
<!--                            --><?php //echo Html::a(Html::img('/img/news/news_3.jpg', ['alt' => Yii::t('main', 'Сотрудники компании Гринлайн на выставке ADIPEC 2024')]),
									//                                ['/news-list'], ['class' => 'img-link']) 
									?>
<!--							<div class="desc d-flex flex-column justify-content-between">-->
<!--								<div class="title-container">-->
<!--									<span class="date">22.05.2020</span>-->
<!--									<h3 class="news-title">--><?php //echo Yii::t('main', 'Сотрудники компании Гринлайн на выставке ADIPEC 2024') 
																	?><!--</h3>-->
<!--								</div>-->
<!--								<p class="news-body">--><?php //echo Yii::t('main', 'В связи с пандемией короновируса COVID-19 компания Greenline...') 
															?><!--</p>-->
<!--								--><?php //echo Html::a(Yii::t('main', 'Подробнее'), ['/news/220520'], ['class' => 'more-link']) 
										?>
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</section>-->
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
				<div class="right-block d-none d-lg-block">
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
	<div class="row">
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
	</div>
</section>

<section id="yandex-map" class="container-fluid">
	<div class="row" id="YaMaps">

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