<?php

/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;

$this->title = Yii::t('main', 'Green Line - ') . Yii::t('main', 'Шельфовые проекты и морские порты');

$this->registerMetaTag([
	'name' => 'description',
	'content' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'Шельфовые проекты и морские порты'),
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
					- <?php echo Html::a(Yii::t('main', 'Шельфовые проекты и морские порты'), ['/sales-markets/offshore-projects'], ['class' => 'current']) ?>
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
					<h1 class="up-line green"><?php echo Yii::t('main', 'Шельфовые проекты и морские порты') ?></h1>
				</div>
			</div>
		</div>
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="row item-container">
				<div class="col-md-6 col-12">
					<h3 class="h4 font-weight-bold scaled-text"><?php echo Yii::t('main', 'Аренда технологического оборудования') ?></h3>
					<div class="content">
						<p><?php echo Yii::t('main', 'Наша компания предоставляет в аренду современное технологическое оборудование для шельфовых проектов и морских портов. В наличии широкий выбор специализированной техники, включая подъёмные механизмы, буровые установки, насосные станции и морские шланги для перегрузки нефтепродуктов и других жидкостей. Мы гарантируем надежность, своевременное обслуживание и поддержку на всех этапах аренды.') ?></p>
						<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/sales-markets/offshore-projects'], ['class' => 'btn btn-success more-btn']) ?>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="img-container">
						<img src="/img/sales-markets/offshore.jpg" alt="<?php echo Yii::t('main', 'Шельфовые проекты и морские порты') ?>">
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="row item-container">
				<div class="col-md-6 col-12 order-md-2">
					<h3 class="h4 font-weight-bold scaled-text"><?php echo Yii::t('main', 'Проектирование, изготовление и поставка ВПУ') ?></h3>
					<div class="content">
						<p><?php echo Yii::t('main', 'Мы занимаемся комплексным проектированием, производством и поставкой выносных причальных устройств (ВПУ) для шельфовых проектов и морских портов. Наши решения обеспечивают безопасную и эффективную швартовку судов в различных эксплуатационных условиях. Используем только высококачественные материалы и современные технологии, гарантируя надежность и долговечность оборудования.') ?></p>
						<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/sales-markets/offshore-projects'], ['class' => 'btn btn-success more-btn']) ?>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="img-container">
						<img src="/img/sales-markets/offshore/vpu.jpg" alt="<?php echo Yii::t('main', 'Шельфовые проекты и морские порты') ?>">
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="row item-container">
				<div class="col-md-6 col-12">
					<h3 class="h4 font-weight-bold scaled-text"><?php echo Yii::t('main', 'Проектирование, изготовление и поставка стационарных отгрузочных терминалов') ?></h3>
					<div class="content">
						<p><?php echo Yii::t('main', 'Наша компания разрабатывает, производит и поставляет стационарные отгрузочные терминалы для шельфовых проектов и морских портов. Мы предлагаем комплексные решения для эффективной погрузки и разгрузки нефтепродуктов, сжиженного газа и других грузов. Оборудование соответствует высоким стандартам безопасности и надежности, обеспечивая бесперебойную работу в сложных эксплуатационных условиях.') ?></p>
						<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/sales-markets/offshore-projects'], ['class' => 'btn btn-success more-btn']) ?>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="img-container">
						<img src="/img/sales-markets/offshore/stu.jpg" alt="<?php echo Yii::t('main', 'Шельфовые проекты и морские порты') ?>">
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="row item-container">
				<div class="col-md-6 col-12 order-md-2">
					<h3 class="h4 font-weight-bold scaled-text"><?php echo Yii::t('main', 'Поставка технологического морского оборудования') ?></h3>
					<div class="content">
						<p><?php echo Yii::t('main', 'Мы занимаемся поставкой современного технологического оборудования для шельфовых проектов и морских портов. В ассортименте – грузоподъемные механизмы, швартовочные системы, насосные станции, выносные причальные устройства (ВПУ) и другое специализированное оборудование. Обеспечиваем высокое качество, соответствие международным стандартам и поддержку на всех этапах эксплуатации.') ?></p>
						<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/sales-markets/offshore-projects'], ['class' => 'btn btn-success more-btn']) ?>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="img-container">
						<img src="/img/sales-markets/offshore/equipment.jpg" alt="<?php echo Yii::t('main', 'Шельфовые проекты и морские порты') ?>">
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="row item-container">
				<div class="col-md-6 col-12">
					<h3 class="h4 font-weight-bold scaled-text"><?php echo Yii::t('main', 'Сервисное обслуживание') ?></h3>
					<div class="content">
						<p><?php echo Yii::t('main', 'Мы предоставляем полный комплекс сервисного обслуживания технологического оборудования для шельфовых проектов и морских портов. Наши услуги включают диагностику, техническое обслуживание, ремонт и модернизацию оборудования. Гарантируем оперативный выезд специалистов, использование оригинальных запчастей и высокий уровень надежности оборудования на протяжении всего срока эксплуатации.') ?></p>
						<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/sales-markets/offshore-projects'], ['class' => 'btn btn-success more-btn']) ?>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="img-container">
						<img src="/img/sales-markets/offshore/service.jpg" alt="<?php echo Yii::t('main', 'Шельфовые проекты и морские порты') ?>">
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="row item-container">
				<div class="col-md-6 col-12 order-md-2">
					<h3 class="h4 font-weight-bold scaled-text"><?php echo Yii::t('main', 'Склад собственной продукции') ?></h3>
					<div class="content">
						<p><?php echo Yii::t('main', 'Мы располагаем собственным складом продукции, что позволяет обеспечить оперативные поставки технологического оборудования для шельфовых проектов и морских портов. В наличии широкий ассортимент готового оборудования и комплектующих, что сокращает сроки выполнения заказов и гарантирует бесперебойное снабжение наших клиентов.') ?></p>
						<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/sales-markets/offshore-projects'], ['class' => 'btn btn-success more-btn']) ?>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="img-container">
						<img src="/img/sales-markets/offshore/warehouse.jpg" alt="<?php echo Yii::t('main', 'Шельфовые проекты и морские порты') ?>">
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