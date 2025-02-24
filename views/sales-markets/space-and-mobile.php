<?php

/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;

$this->title = Yii::t('main', 'Green Line - ') . Yii::t('main', 'Космос и мобильные коммуникации');

$this->registerMetaTag([
	'name' => 'description',
	'content' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'Космос и мобильные коммуникации')
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
	<div class="img-container bg-gradient">
		<img src="/img/headers/sales-markets.jpg" alt="<?php echo Yii::t('main', 'Рынки сбыта') ?>">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 col-12">
				<h2><?php echo Yii::t('main', 'Рынки сбыта') ?></h2>
				<span class="breadcrumbs">
					<?php echo Html::a(Yii::t('main', 'Главная'), ['/']) ?>
					- <span> <?php echo Yii::t('main', 'Рынки сбыта') ?></span>
					- <?php echo Html::a(Yii::t('main', 'Космос и мобильные коммуникации'), ['/sales-markets/space-and-mobile'], ['class' => 'current']) ?>
				</span>
			</div>
		</div>
	</div>
</header>

<section class="item container no-copy">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="row">
				<div class="col-md-6 col-12">
					<h1 class="up-line green"><?php echo Yii::t('main', 'Космос и мобильные коммуникации') ?></h1>
				</div>
			</div>
		</div>
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="row item-container">
				<div class="col-md-6 col-12">
					<div class="content">
						<p><?php echo Yii::t('main', 'Отдельным направлением деятельности компании Green Line является проектирование и производство летательных аппаратов, которые незаменимы при постановке и достижении определенных целей, таких как обеспечение безопасности, проведение исследовательских работ, и многого другого. Наши разработки включают беспилотные, автопилотные, парашютные системы, сервоприводы, трекинг платформы, компоненты и аксессуары для БПЛА. Наши модели варьируются от небольших промышленных наблюдательных беспилотников до крупных БПЛА и атмосферных спутниковых систем. Кроме этого у нас имеются решения, позволяющие распространять LTE и 5G сигналы на большие площади.') ?></p>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="img-container">
						<img src="/img/sales-markets/kosmos_1.jpg" alt="<?php echo Yii::t('main', 'Космос и мобильные коммуникации') ?>">
					</div>
				</div>
			</div>
			<div class="row item-container">
				<div class="col-md-6 col-12">
					<div class="content">
						<p><?php echo Yii::t('main', 'Вы можете воспользоваться услугами беспилотников от Green Line в коммерческих, гражданских и оборонных отраслях. Наши беспилотники предназначены для решения целого комплекса задач в нефтегазовом, энергетическом и других промышленных секторах: мониторинг газопровода; инспекция линий электропередач; обследование инфраструктуры; контроль за ходом выполнения работ в строительстве; мониторинг прогресса в сельском хозяйстве, экологический мониторинг. Мы предоставляем профессиональную аэросъемку, в том числе картографическую, тепловизионную съемки. Наша техника очень эффективна в проведении видео и фотосъемок, обеспечивая высокую четкость получаемого изображения. Применение БПЛА – возможность значительной экономии средств и времени.') ?></p>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="img-container">
						<img src="/img/sales-markets/kosmos_2.jpg" alt="<?php echo Yii::t('main', 'Космос и мобильные коммуникации') ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>