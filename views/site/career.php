<?php
/**
 * @var $this \yii\web\View
 */

$this->title = 'Green Line - Карьера в нашей кампании';

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Green Line - Устройся работать к нам!',
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
		<img src="/img/headers/career.jpg" alt="О нас">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 col-12">
				<h1>Карьера</h1>
				<span class="breadcrumbs">
						<a href="/">Главная</a>
						- <a href="/career" class="current">Карьера</a>
					</span>
			</div>
		</div>
	</div>
</header>

<section id="career" class="container">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<h2 class="up-line green">Компания Green Line объ являет набор молодых специалистов</h2>
			<div class="item">
				<div class="row first-row">
					<div class="col-md-6 col-12 name">
						<h3 class="title">Инженер по трубопроводной арматуре</h3>
					</div>
					<div class="col-md-6 col-12 responsibility">
						<span class="title">Обязанности</span>
						<ul>
							<li>Подбор оборудования по каталогу производителя</li>
							<li>Подготовка чертежей</li>
							<li>Составление технических предложений</li>
							<li>Расчет и выбор оборудования по программе производителя</li>
							<li>Техническое консультирование заказчиков по телефону</li>
							<li>Ведение деловой технической переписки и переговоров</li>
						</ul>
					</div>
				</div>
				<div class="row second-row">
					<div class="col-md-6 col-12 conditions">
						<span class="title">Условия</span>
						<ul>
							<li>Рабочий день: ПН-ПТ с 09.00 до 18.00</li>
							<li>Оформление в соответствии с Трудовым кодексом РФ</li>
							<li>Обучение за счет компании</li>
						</ul>
					</div>
					<div class="col-md-6 col-12 skills">
						<span class="title">Требования</span>
						<ul>
							<li>От 28 лет</li>
							<li>Профильное образование: высшее техническое, магистратура</li>
							<li>Уверенный пользователь ПК: MS Office, AutoCAD, SolidWorks</li>
							<li>Знание английского языка</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
