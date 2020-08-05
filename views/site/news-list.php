<?php
/**
 * @var $this \yii\web\View
 */

$this->title = 'Green Line - Новости';

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Green Line - Новости',
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
		<img src="/img/headers/news.jpg" alt="О нас">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 col-12">
				<h1>Новости</h1>
				<span class="breadcrumbs">
						<a href="/">Главная</a>
						- <a href="/news-list" class="current">Новости</a>
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
					<span class="time">30.03.2020</span>
					<h2 class="title">Работаем в штатном режиме</h2>
					<div class="text">В условиях пандемии новой коронавирусной инфекции COVID-19 работники компании Greenline работают в плановом режиме. Заказчики получают поставки оборудования в полном объеме и без просрочек. Так, за время карантинных мер нами были заключены контракты на сопровождение поставок высокотехнологичного оборудования для нужд компании ПАО Газпром нефть, проект Арктические ворота.</div>
					<a href="/news/300320" class="btn btn-success more-btn">Подробнее</a>
				</div>
				<div class="right">
					<img src="/img/news/news_1.jpg" alt="Работаем в штатном режиме">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">16.04.2020</span>
					<h2 class="title">УКПГ для Семаковского ГМ</h2>
					<div class="text">Компания Greenline завершила разработку дизайна установок УКПГ, и направила свои предложения  ПАО «Газпром» и АО «РусГазДобыча» по проекту разработки Семаковского газового месторождения, расположенного в Ямало-Ненецком автономном округе (ЯНАО).
						Месторождение расположено в акватории Тазовской губы и частично на суше Тазовского полуострова, относится к категории «крупных» — извлекаемые запасы газа составляют более 320 млрд куб. м.
						Активная фаза строительно-монтажных работ, в соответствии с графиком реализации проекта, начнется во второй половине 2020 года.
						Начало промышленной добычи на Семаковском месторождении запланировано на 2022 год. Всего к этому сроку будет построено 19 скважин. Газ будет направляться в газотранспортную систему «Газпрома».</div>
					<a href="/news/160420" class="btn btn-success more-btn">Подробнее</a>
				</div>
				<div class="right">
					<img src="/img/news/news_2.jpg" alt="УКПГ для Семаковского ГМ">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">22.05.2020</span>
					<h2 class="title">Расширяем ассортимент</h2>
					<div class="text">В связи с пандемией короновируса COVID-19 компания Greenline расширила ассортимент поставки продукции на Российский рынок, который сейчас включает в себя:
						<ul style="list-style:none;padding-left:0;">
							<li>- Моментальные тесты на вирус и антитела COVID-19</li>
							<li>- Защитные маски</li>
							<li>- Защитные латексные перчатки</li>
							<li>- Защитные одноразовые медицинские костюмы</li>
						</ul>
						Все оборудование производится в Корее и отвечает самым высоким мировым стандартам качества.</div>
					<a href="/news/220520" class="btn btn-success more-btn">Подробнее</a>
				</div>
				<div class="right">
					<img src="/img/news/news_3.jpg" alt="Расширяем ассортимент">
				</div>
			</div>
		</div>
	</div>
</section>