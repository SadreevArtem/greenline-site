<?php

/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;

$this->title = Yii::t('main', 'Greenline - ') . Yii::t('main', 'О компании Greenline greenlinerussia');

$this->registerMetaTag([
	'name' => 'description',
	'content' => Yii::t('main', 'Greenline - ') . Yii::t('main', 'О компании'),
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
		<img src="/img/headers/about.jpg" alt="<?php echo Yii::t('main', 'О нас') ?>">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 col-12">
				<h1><?php echo Yii::t('main', 'О компании Greenline') ?></h1>
				<span class="breadcrumbs">
					<?php echo Html::a(Yii::t('main', 'Главная'), ['/']) ?>
					- <?php echo Html::a(Yii::t('main', 'О нас'), ['/about'], ['class' => 'current']) ?>
				</span>
			</div>
		</div>
	</div>
</header>



<section id="greenline" class="container-fluid no-copy">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-12">
					<div class="row item-container align-items-center">
						<div class="col-12 col-lg-6 main-block">
							<h2 class="up-line green"><?php echo Yii::t('main', 'Greenline') ?></h2>
							<p><?php echo Yii::t('main', 'Компания Greenline основана в 2010 году и уже более 15 лет поставляет высокотехнологичное промышленное оборудование на российский рынок. Мы сотрудничаем с ведущими мировыми производителями, обеспечивая отечественные предприятия решениями, соответствующими самым высоким стандартам.') ?></p>
							<p><?php echo Yii::t('main', 'Greenline — надёжный поставщик высокотехнологичного оборудования и инженерных решений для нефтегазовой, энергетической, химической и других отраслей промышленности. Мы работаем с ведущими производителями Европы и США, предлагая продукцию, не имеющую отечественных аналогов, сертифицированную по международным и национальным стандартам.') ?></p>
						</div>
						<div class="col-12 col-lg-6 img-block order-1">
							<img src="/img/about/greenline.jpg" alt="<?php echo Yii::t('main', 'О компании') ?>">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="eko" class="container-fluid no-copy bg-white">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-12">
					<div class="row item-container align-items-center">
						<div class="col-lg-6 col-12 img-block">
							<img src="/img/about/eco.png" alt="<?php echo Yii::t('main', 'О компании') ?>">
						</div>
						<div class="col-lg-6 col-12 main-block">
							<h2 class="up-line green"><?php echo Yii::t('main', 'Наше видение') ?></h2>
							<p><?php echo Yii::t('main', 'Мы стремимся быть ключевым звеном между мировыми инновациями и российской промышленностью, повышая эффективность и экологическую безопасность производств. В центре нашей философии — технологическое лидерство, ответственность перед клиентом и устойчивое развитие.') ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="principles" class="container no-copy">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<h2 class="up-line green"><?php echo Yii::t('main', 'Наши преимущества') ?></h2>
			<div class="item d-flex align-items-center">
				<div class="number">·</div>
				<span class="text wr-text"><?php echo Yii::t('main', 'Складская программа и быстрые поставки') ?></span>
			</div>
			<div class="item d-flex align-items-center">
				<div class="number">·</div>
				<span class="text wr-text"><?php echo Yii::t('main', 'Постоплата до 90 дней для постоянных клиентов') ?></span>
			</div>
			<div class="item d-flex align-items-center">
				<div class="number">·</div>
				<span class="text wr-text"><?php echo Yii::t('main', 'Гарантированное качество и технический надзор') ?></span>
			</div>
			<div class="item d-flex align-items-center">
				<div class="number">·</div>
				<span class="text wr-text"><?php echo Yii::t('main', 'Обучение персонала заказчика') ?></span>
			</div>
			<div class="item d-flex align-items-center">
				<div class="number">·</div>
				<span class="text wr-text"><?php echo Yii::t('main', 'Доверие со стороны госкорпораций и ведущих компаний отрасли') ?></span>
			</div>
		</div>
	</div>
</section>

<section id="greenline" class="container-fluid no-copy">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-12">
					<div class="row item-container align-items-center">
						<div class="col-12 col-lg-6 main-block">
							<h2 class="up-line green"><?php echo Yii::t('main', 'Экологические инициативы') ?></h2>
							<p><?php echo Yii::t('main', 'Мы поддерживаем инициативы по защите окружающей среды, инвестируем в технологии, снижающие выбросы и ресурсопотребление, и сотрудничаем с НКО и научными организациями в области устойчивого развития.') ?></p>
						</div>
						<div class="col-12 col-lg-6 img-block order-1">
							<img src="/img/about/eco2.jpeg" alt="<?php echo Yii::t('main', 'О компании') ?>">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="eko" class="container-fluid no-copy bg-white">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-12">
					<div class="row item-container align-items-center">
						<div class="col-lg-6 col-12 img-block">
							<img src="/img/about/team.jpeg" alt="<?php echo Yii::t('main', 'Команда и экспертиза') ?>">
						</div>
						<div class="col-lg-6 col-12 main-block">
							<h2 class="up-line green"><?php echo Yii::t('main', 'Команда и экспертиза') ?></h2>
							<p><?php echo Yii::t('main', 'Наша команда — это эксперты с многолетним опытом в реализации сложных технологических проектов. Мы сопровождаем клиента на всех этапах — от технического задания до запуска оборудования в эксплуатацию.') ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="in-numbers" class="container no-copy">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<h2 class="up-line green"><?php echo Yii::t('main', 'Мы в цифрах') ?></h2>
			<div class="row">
				<div class="col-12 d-flex justify-content-between flex-column flex-lg-row">
					<div class="item">
						<div class="number">100</div>
						<span class="medium"><?php echo Yii::t('main', 'Количество товара в асортименте') ?></span>
						<span class="bold"><?php echo Yii::t('main', 'более 100 наименований') ?></span>
					</div>
					<div class="item">
						<div class="number">5 000</div>
						<span class="medium"><?php echo Yii::t('main', 'В год поставляется') ?></span>
						<span class="bold"><?php echo Yii::t('main', 'более 5 000 единиц оборудования') ?></span>
					</div>
					<div class="item">
						<div class="number">230</div>
						<span class="medium"><?php echo Yii::t('main', 'Клиенты:') ?></span>
						<span class="bold"><?php echo Yii::t('main', 'Более 200 компаний <br> в России и 30 в СНГ') ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="exhibitions" class="container-fluid">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-12">
					<h2 class="up-line white"><?php echo Yii::t('main', 'Выставки') ?></h2>
					<div class="exhibitions-carousel owl-carousel owl-theme">
						<div class="item"><a target="_blank" href="https://oeec.biz/oeec2025/"><img src="/img/about/exhibition_9.jpg" alt="oeec2025"></a></div>
						<div class="item"><a target="_blank" href="https://www.adipec.com/exhibition/"><img src="/img/about/exhibition_10.jpg" alt="ADIPEC"></a></div>
						<div class="item"><a target="_blank" href="https://www.valveworldexpo.com/en/Exhibit/Overview"><img src="/img/about/exhibition_11.jpg" alt="VALVE WORLD EXPO"></a></div>
						<div class="item"><a target="_blank" href="https://imexmanagement.com/shows/osea-2026"><img src="/img/about/exhibition_12.jpg" alt="OSEA"></a></div>
						<div class="item"><a target="_blank" href="https://industrialvalvesummit.com/"><img src="/img/about/exhibition_13.jpg" alt="IVS"></a></div>
						<div class="item"><a target="_blank" href="https://www.nevainter.com/about/"><img src="/img/about/exhibition_14.jpg" alt="NEVA2025"></a></div>
						<div class="item"><a target="_blank" href="https://industrialvalvesummit.com/"><img src="/img/about/exhibition_1.jpg" alt="IVS"></a></div>
						<div class="item"><a target="_blank" href="https://www.valve-world.net/"><img src="/img/about/exhibition_2.jpg" alt="Valve world"></a></div>
						<!-- <div class="item"><a target="_blank" href="https://lnglatinamerica.com/"><img src="/img/about/exhibition_3.jpg" alt="LNG2020"></a></div> -->
						<!-- <div class="item"><a target="_blank" href="https://miningrussiaconference.com/"><img src="/img/about/exhibition_4_<?php echo Yii::$app->language ?>.jpg" alt="<?php echo Yii::t('main', 'Горнорудная промышленность России и СНГ') ?>"></a></div> -->
						<!-- <div class="item"><a target="_blank" href="https://www.lngrussiacongress.com/"><img src="/img/about/exhibition_5_<?php echo Yii::$app->language ?>.jpg" alt="<?php echo Yii::t('main', 'СПГ конгресс 2020') ?>"></a></div> -->
						<!-- <div class="item"><a target="_blank" href="http://2020.otcnet.org/"><img src="/img/about/exhibition_6.jpg" alt="OFFSHORE TECHNOLOGY CONFERENCE"></a></div>
						<div class="item"><a target="_blank" href="http://2020.otcasia.org/"><img src="/img/about/exhibition_7.jpg" alt="OTC ASIA 2020"></a></div> -->
						<div class="item"><a target="_blank" href="https://www.osea-asia.com/"><img src="/img/about/exhibition_8.jpg" alt="OSEA"></a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="loyality" class="container no-copy">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<h2 class="up-line green"><?php echo Yii::t('main', 'Программа лояльности') ?></h2>
			<div class="item d-flex align-items-baseline" style="margin-bottom:10px;">
				<span class="text"><?php echo Yii::t('main', 'Мы ценим долговременное партнерство, поэтому создаем для своих Заказчиков комфортные и выгодные условия сотрудничества:') ?></span>
			</div>
			<div class="item d-flex align-items-baseline">
				<div class="number">1.</div>
				<span class="text"><?php echo Yii::t('main', 'Поставляем товар без предоплаты и увеличиваем срок постоплаты до 90 дней для постоянных партнеров.') ?></span>
			</div>
			<div class="item d-flex align-items-baseline">
				<div class="number">2.</div>
				<span class="text"><?php echo Yii::t('main', 'Ведём работу на условиях Заказчика для крупных нефтегазовых компаний.') ?></span>
			</div>
			<div class="item d-flex align-items-baseline">
				<div class="number">3.</div>
				<span class="text"><?php echo Yii::t('main', 'Осуществляем поставку образцов для опытно-промышленной эксплуатации оборудования.') ?></span>
			</div>
		</div>
	</div>
</section>

<section id="difference" class="container-fluid no-copy">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-12">
					<h2 class="up-line green"><?php echo Yii::t('main', 'Чем мы отличаемся от остальных') ?></h2>
					<div class="item d-flex align-items-baseline">
						<div class="number">1.</div>
						<span class="text"><?php echo Yii::t('main', 'Производим отгрузку запаса продукции со склада, что позволяет существенно сократить сроки поставки.') ?></span>
					</div>
					<div class="item d-flex align-items-baseline">
						<div class="number">2.</div>
						<span class="text"><?php echo Yii::t('main', 'Передаем Заказчику полный комплект документов.') ?></span>
					</div>
					<div class="item d-flex align-items-baseline">
						<div class="number">3.</div>
						<span class="text"><?php echo Yii::t('main', 'Контролируем качество выпускаемой продукции.') ?></span>
					</div>
					<div class="item d-flex align-items-baseline">
						<div class="number">4.</div>
						<span class="text"><?php echo Yii::t('main', 'Проводим любые испытания по требованию заказчика.') ?></span>
					</div>
					<div class="item d-flex align-items-baseline">
						<div class="number">5.</div>
						<span class="text"><?php echo Yii::t('main', 'Обучаем персонал заказчика.') ?></span>
					</div>
					<div class="item d-flex align-items-baseline">
						<div class="number">6.</div>
						<span class="text"><?php echo Yii::t('main', 'Нам доверяют госкомпании.') ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <section id="steps" class="container-fluid no-copy">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-12">
					<div class="title w-100 d-flex flex-column justify-content-between align-items-center">
						<h2><?php echo Yii::t('main', 'Этапы работы') ?></h2>
						<div class="steps-line"></div>
					</div>
					<div class="steps-body d-lg-block d-none">
						<div class="line d-flex">
							<div class="item item-1">
								<div class="circle-container line-right">
									<div class="circle">1</div>
								</div>
								<div class="text"><?php echo Yii::t('main', 'Получение заявки, <br> технических условий') ?></div>
							</div>
							<div class="item item-2">
								<div class="circle-container">
									<div class="circle">2</div>
								</div>
								<div class="text"><?php echo Yii::t('main', 'Отработка') ?></div>
							</div>
							<div class="item item-3">
								<div class="circle-container">
									<div class="circle">3</div>
								</div>
								<div class="text"><?php echo Yii::t('main', 'Предложение') ?></div>
							</div>
							<div class="item item-4">
								<div class="circle-container">
									<div class="circle">4</div>
								</div>
								<div class="text"><?php echo Yii::t('main', 'Совещание, согласование, утверждение') ?></div>
							</div>
							<div class="item item-5">
								<div class="circle-container">
									<div class="circle">5</div>
								</div>
								<div class="text"><?php echo Yii::t('main', 'Надзор за <br> производством') ?></div>
							</div>
						</div>
						<div class="line d-flex">
							<div class="item item-6">
								<div class="circle-container">
									<div class="circle">6</div>
								</div>
								<div class="text"><?php echo Yii::t('main', 'Приемка <br> <span>совместно <br> с заказчиком</span>') ?></div>
							</div>
							<div class="item item-7">
								<div class="circle-container line-left">
									<div class="circle">7</div>
								</div>
								<div class="text"><?php echo Yii::t('main', 'Отгрузка') ?></div>
							</div>
							<div class="item item-8">
								<div class="circle-container">
									<div class="circle">8</div>
								</div>
								<div class="text">
									<?php echo Yii::t('main', 'Установка, обсуждение с Заказчиком <span>результата установки и эксплуатации оборудования с целью усовершенствования продукции</span>') ?>
								</div>
							</div>
						</div>
					</div>
					<div class="steps-body d-block d-lg-none">
						<div class="line d-flex">
							<div class="item item-1">
								<div class="circle-container line-right">
									<div class="circle">1</div>
								</div>
								<div class="text"><?php echo Yii::t('main', 'Получение заявки, <br> технических условий') ?></div>
							</div>
							<div class="item item-2">
								<div class="circle-container">
									<div class="circle">2</div>
								</div>
								<div class="text"><?php echo Yii::t('main', 'Отработка') ?></div>
							</div>
							<div class="item item-3">
								<div class="circle-container">
									<div class="circle">3</div>
								</div>
								<div class="text"><?php echo Yii::t('main', 'Предложение') ?></div>
							</div>
						</div>
						<div class="line d-flex">
							<div class="item item-4">
								<div class="circle-container">
									<div class="circle">4</div>
								</div>
								<div class="text"><?php echo Yii::t('main', 'Совещание, согласование, утверждение') ?></div>
							</div>
							<div class="item item-5">
								<div class="circle-container line-left">
									<div class="circle">5</div>
								</div>
								<div class="text"><?php echo Yii::t('main', 'Надзор за <br> производством') ?></div>
							</div>
							<div class="item item-6">
								<div class="circle-container">
									<div class="circle">6</div>
								</div>
								<div class="text">
									<?php echo Yii::t('main', 'Приемка <br> <span>совместно <br> с заказчиком</span>') ?>
								</div>
							</div>
						</div>
						<div class="line d-flex">
							<div class="item item-7">
								<div class="circle-container line-left">
									<div class="circle">7</div>
								</div>
								<div class="text"><?php echo Yii::t('main', 'Отгрузка') ?></div>
							</div>
							<div class="item item-8">
								<div class="circle-container">
									<div class="circle">8</div>
								</div>
								<div class="text">
									<?php echo Yii::t('main', 'Установка, обсуждение <br class="d-block d-md-none"> с Заказчиком <span>результата установки и эксплуатации оборудования с целью усовершенствования продукции</span>') ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<!-- <section id="questions" class="container no-copy">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<h2 class="up-line green"><?php echo Yii::t('main', 'Часто задаваемые вопросы') ?></h2>
			<div class="item item-1">
				<div class="question"><?php echo Yii::t('main', 'Как происходит транспортировка товара?') ?></div>
				<div class="answer"><?php echo Yii::t('main', 'Транспортировка можеть быть осуществлена автомобильным, железнодорожным, морским или воздушным видом транспорта. В зависимости от веса, объема и места назначения подбираем наиболее оптимальный вариант. Мы обладаем ресурсами для проведения нестандартных транспортных операций, с задействованием спецтранспорта.') ?></div>
			</div>
			<div class="item item-2">
				<div class="question"><?php echo Yii::t('main', 'Как продукт хранится на складе?') ?></div>
				<div class="answer"><?php echo Yii::t('main', 'Хранится в деревянных ящиках в сухом закрытом и отапливаемом складском помещении.') ?></div>
			</div>
			<div class="item item-3">
				<div class="question"><?php echo Yii::t('main', 'Нужно ли утилизировать товар?') ?></div>
				<div class="answer"><?php echo Yii::t('main', 'Утилизация нефтегазового оборудования - это возможность переработки значительного объема металлов для вторичного использования. Списанное оборудование отправляется на переработку.') ?></div>
			</div>
			<div class="item item-4">
				<div class="question"><?php echo Yii::t('main', 'Как вы контролируете качество выпускаемой продукции?') ?></div>
				<div class="answer"><?php echo Yii::t('main', 'Выпускаемая продукция проходит испытания под личным контролем нашей команды инженеров на базе завода-изготовителя.') ?></div>
			</div>
		</div>
	</div>
</section> -->