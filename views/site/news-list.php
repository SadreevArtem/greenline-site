<?php
/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;

$this->title = Yii::t('main', 'Green Line - ') . Yii::t('main', 'Новости');;

$this->registerMetaTag([
    'name' => 'description',
    'content' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'Новости'),
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
		<img src="/img/headers/news.jpg" alt="О нас">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 col-12">
				<h1><?php echo Yii::t('main', 'Новости') ?></h1>
				<span class="breadcrumbs">
					<?php echo Html::a(Yii::t('main', 'Главная'), ['/']) ?>
                    	- <?php echo Html::a(Yii::t('main', 'Новости'), ['/news-list'], ['class' => 'current']) ?>
					</span>
			</div>
		</div>
	</div>
</header>

<section id="news-list" class="container">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="item">
				<div class="left">
					<span class="time">25.10.2024</span>
					<h2 class="title"><?php echo Yii::t('main', 'Galp пробурила первую скважину Mopane 1-A') ?></h2>
					<div class="text"><?php echo Yii::t('main', 'Португальская компания Galp Energia пробурила первую из четырех разведочных и оценочных скважин Mopane 1-A в ходе второй разведывательно-оценочной кампании на блоках 2813A и 2814B, расположенных в самом сердце Оранжевого бассейна Намибии, вблизи своего крупного нефтегазового месторождения Мопане.') ?></div>
                    <?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/300320'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_1.jpg" alt="<?php echo Yii::t('main', 'Galp пробурила первую скважину Mopane 1-A') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">4-7 Ноября 2024</span>
					<h2 class="title"><?php echo Yii::t('main', 'Посетите мировую энергетическую выставку') ?></h2>
					<div class="text"><?php echo Yii::t('main', 'Проходящая с 4 по 7 ноября 2024 года в Абу-Даби выставка ADIPEC объединяет более 2200 организаций из всего спектра глобальной энергетической экосистемы, чтобы продемонстрировать последние достижения, формирующие будущее энергетики. Объединяя всю энергетическую отрасль, выставка предоставляет предприятиям уникальную возможность наладить партнерские отношения, необходимые для разработки новых бизнес-моделей и инновационных продуктов, которые соответствуют приоритетам развивающейся энергетической экосистемы. ADIPEC предоставит участникам уникальную возможность лично пообщаться с лидерами, новаторами, покупателями и продавцами, которые ведут энергетическую отрасль в будущее. Получите международную точку зрения вместе с профессионалами в области энергетики из 164 стран и присоединитесь к обсуждению вопросов ответственного и устойчивого энергетического перехода.') ?></div>
                    <?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160420'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_2.jpg" alt="<?php echo Yii::t('main', 'Посетите мировую энергетическую выставку') ?>">
				</div>
			</div>
			<!-- <div class="item">
				<div class="left">
					<span class="time">22.05.2020</span>
					<h2 class="title"><?php echo Yii::t('main', 'Расширяем ассортимент') ?></h2>
					<div class="text"><?php echo Yii::t('main', 'В связи с пандемией короновируса COVID-19 компания Greenline расширила ассортимент поставки продукции на Российский рынок, который сейчас включает в себя:') ?>
						<ul style="list-style:none;padding-left:0;">
							<li>- <?php echo Yii::t('main', 'Моментальные тесты на вирус и антитела COVID-19') ?></li>
							<li>- <?php echo Yii::t('main', 'Защитные маски') ?></li>
							<li>- <?php echo Yii::t('main', 'Защитные латексные перчатки') ?></li>
							<li>- <?php echo Yii::t('main', 'Защитные одноразовые медицинские костюмы') ?></li>
						</ul>
                        <?php echo Yii::t('main', 'Все оборудование производится в Корее и отвечает самым высоким мировым стандартам качества.') ?></div>
                    <?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/220520'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_3.jpg" alt="<?php echo Yii::t('main', 'Расширяем ассортимент') ?>">
				</div>
			</div> -->
		</div>
	</div>
</section>