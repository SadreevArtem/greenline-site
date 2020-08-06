<?php
/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;

$this->title = Yii::t('main', 'Green Line - ') . Yii::t('main', 'Карьера в нашей кампании');

$this->registerMetaTag([
    'name' => 'description',
    'content' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'Устройся работать к нам!'),
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
		<img src="/img/headers/career.jpg" alt="О нас">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 col-12">
				<h1><?php echo Yii::t('main', 'Карьера') ?></h1>
				<span class="breadcrumbs">
					<?php echo Html::a(Yii::t('main', 'Главная'), ['/']) ?>
                    	- <?php echo Html::a(Yii::t('main', 'Карьера'), ['/career'], ['class' => 'current']) ?>
					</span>
			</div>
		</div>
	</div>
</header>

<section id="career" class="container">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<h2 class="up-line green"><?php echo Yii::t('main', 'Компания Green Line объявляет набор молодых специалистов') ?></h2>
			<div class="item">
				<div class="row first-row">
					<div class="col-md-6 col-12 name">
						<h3 class="title"><?php echo Yii::t('main', 'Инженер по трубопроводной арматуре') ?></h3>
					</div>
					<div class="col-md-6 col-12 responsibility">
						<span class="title"><?php echo Yii::t('main', 'Обязанности') ?></span>
						<ul>
							<li><?php echo Yii::t('main', 'Подбор оборудования по каталогу производителя') ?></li>
							<li><?php echo Yii::t('main', 'Подготовка чертежей') ?></li>
							<li><?php echo Yii::t('main', 'Составление технических предложений') ?></li>
							<li><?php echo Yii::t('main', 'Расчет и выбор оборудования по программе производителя') ?></li>
							<li><?php echo Yii::t('main', 'Техническое консультирование заказчиков по телефону') ?></li>
							<li><?php echo Yii::t('main', 'Ведение деловой технической переписки и переговоров') ?></li>
						</ul>
					</div>
				</div>
				<div class="row second-row">
					<div class="col-md-6 col-12 conditions">
						<span class="title"><?php echo Yii::t('main', 'Условия') ?></span>
						<ul>
							<li><?php echo Yii::t('main', 'Рабочий день: ПН-ПТ с 09.00 до 18.00') ?></li>
							<li><?php echo Yii::t('main', 'Оформление в соответствии с Трудовым кодексом РФ') ?></li>
							<li><?php echo Yii::t('main', 'Обучение за счет компании') ?></li>
						</ul>
					</div>
					<div class="col-md-6 col-12 skills">
						<span class="title"><?php echo Yii::t('main', 'Требования') ?></span>
						<ul>
							<li><?php echo Yii::t('main', 'От 28 лет') ?></li>
							<li><?php echo Yii::t('main', 'Профильное образование: высшее техническое, магистратура') ?></li>
							<li><?php echo Yii::t('main', 'Уверенный пользователь ПК: MS Office, AutoCAD, SolidWorks') ?></li>
							<li><?php echo Yii::t('main', 'Знание английского языка') ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<br>
	<br>
	<br>
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="item">
				<div class="row d-flex justify-content-center align-items-center text-md-left text-center">
					<p><b><?php echo Yii::t('main', 'Для рассмотрения вашей кандидатуры отправьте резюме на электронный адрес: ') ?></b></p> &nbsp;&nbsp;
					<p><?php echo yii\helpers\Html::a('career@greenlinerussia.com', 'mailto:career@greenlinerussia.com') ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
