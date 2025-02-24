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

<section id="news-list" class="container no-copy">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="item">
				<div class="left">
					<span class="time">20.02.2025</span>
					<h2 class="title"><?php echo Yii::t('main', 'Green Line подписывает договор на поставку ВПУ в Африке.') ?></h2>
					<div class="text"><?php echo Yii::t('main', 'Департамент Offshore & Marine компании Green Line подписывает договор по проектированию, поставке и установке Выносного Причального Устройства в Африке. Ранее установленные ВПУ в морском порту не обеспечивают возросшей потребности данного региона. За основу будут взяты ВПУ поставленные в Ливию.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160410'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_13.jpg" alt="<?php echo Yii::t('main', 'Galp пробурила первую скважину Mopane 1-A') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">18.02.2025</span>
					<h2 class="title"><?php echo Yii::t('main', 'Поставки измерительного оборудования в Оман.') ?></h2>
					<div class="text"><?php echo Yii::t('main', 'Green Line впервые получил экспортный контракт на поставку Российского измерительного оборудования в г. Маскат (Оман). Выбор в пользу Российского оборудования был сделан OQ SAOC в связи с более доступной ценой и более точными показаниями измерения.  Данная поставка подчеркивает качество Российского оборудования на мировом рынке.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160411'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_12.jpg" alt="<?php echo Yii::t('main', 'Galp пробурила первую скважину Mopane 1-A') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">10.02.2025</span>
					<h2 class="title"><?php echo Yii::t('main', 'Сотрудники компании провели выездную встречу на острове Сахалин. ') ?></h2>
					<div class="text"><?php echo Yii::t('main', 'Сотрудники компании Green Line из Департамента Offshore & Marine провели выездную встречу на острове Сахалин с подрядчиками проектов «Сахалин-1» и «Сахалин-2». «Сахалин-1» — нефтегазовый проект на острове Сахалин, управляемый российской компанией «Сахалинморнефтегаз — Шельф». В рамках проекта предусмотрена разработка нефти и газа на северо-восточном шельфе острова.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160412'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_11.jpg" alt="<?php echo Yii::t('main', 'Galp пробурила первую скважину Mopane 1-A') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">07.02.2025</span>
					<h2 class="title"><?php echo Yii::t('main', 'Переговоры в г. Стамбул с крупнейшим EPC.') ?></h2>
					<div class="text"><?php echo Yii::t('main', 'Green Line провели важные переговоры на самом высоком уровне с крупнейшим оффшорным EPC подрядчиком в регионе. Во время переговоров были согласованы договоры о намерении и взаимопомощи по строительству объектов в Африке, а также в акватории Каспийского моря. Успешный тандем позволит компании Green Line расширить количество новых проектов в мире. Сумма предстоящей сделки составляет 600 миллионов долларов США, оператором проекта будет компания Green Line International Гонконг.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160413'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_10.jpg" alt="<?php echo Yii::t('main', 'Посетите мировую энергетическую выставку') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">22.01.2025</span>
					<h2 class="title"><?php echo Yii::t('main', 'Green Line усиливает сотрудничество с Роскосмос.') ?></h2>
					<div class="text"><?php echo Yii::t('main', 'Green Line получила задание от дочернего общества корпорации Роскосмос на разработку и поставку гибких линий для перекачки жидких газов при крайне низких температурах. Началом разработки займется Департамент Green Line Engineering имеющие огромный опыт в проектирование и изготовлении подобных линий для турбин.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160414'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_9.jpg" alt="<?php echo Yii::t('main', 'Green Line начинает строительство нового офиса') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">15.12.2024</span>
					<h2 class="title"><?php echo Yii::t('main', 'Green Line открывает офис в Гонконге.') ?></h2>
					<div class="text"><?php echo Yii::t('main', 'Компания Green Line согласовала с партнерами открытие офиса в г. Гонконг (Китай) в 2025-м для работы над проектами Российских заказчиков из нефтегазового рынка в Мексике, Казахстане, Вьетнаме и странах Африки. Новый Департамент получил название Green Line International (GLI) и приступит к работе с началом Нового года в первую очередь по проектам в Африке и Казахстане.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160415'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_8.jpg" alt="<?php echo Yii::t('main', 'Green Line начинает строительство нового офиса') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">14.11.2024</span>
					<h2 class="title"><?php echo Yii::t('main', 'Сотрудники компании Гринлайн на выставке ADIPEC 2024') ?></h2>
					<div class="text"><?php echo Yii::t('main', 'Сотрудники компании Гринлайн приняли участие в ежегодной выставке ADIPEC, которая прошла в Абу-Даби.') ?>
						<?php echo Yii::t('main', 'Это одно из крупнейших мировых мероприятий в сфере нефти и газа, объединяющее лидеров отрасли. В рамках выставки наша команда заключила важные международные договоры и партнерские соглашения, а также выделила ключевые направления развития компании на 2025 год.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/220520'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_3.jpg" alt="<?php echo Yii::t('main', 'Сотрудники компании Гринлайн на выставке ADIPEC 2024') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">11.2024</span>
					<h2 class="title"><?php echo Yii::t('main', 'Посетите мировую энергетическую выставку') ?></h2>
					<div class="text"><?php echo Yii::t('main', 'Проходящая с 4 по 7 ноября 2024 года в Абу-Даби выставка ADIPEC объединяет более 2200 организаций из всего спектра глобальной энергетической экосистемы, чтобы продемонстрировать последние достижения, формирующие будущее энергетики. Объединяя всю энергетическую отрасль, выставка предоставляет предприятиям уникальную возможность наладить партнерские отношения, необходимые для разработки новых бизнес-моделей и инновационных продуктов, которые соответствуют приоритетам развивающейся энергетической экосистемы. ADIPEC предоставит участникам уникальную возможность лично пообщаться с лидерами, новаторами, покупателями и продавцами, которые ведут энергетическую отрасль в будущее. Получите международную точку зрения вместе с профессионалами в области энергетики из 164 стран и присоединитесь к обсуждению вопросов ответственного и устойчивого энергетического перехода.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160420'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_2.jpg" alt="<?php echo Yii::t('main', 'Посетите мировую энергетическую выставку') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">10.10.2024</span>
					<h2 class="title"><?php echo Yii::t('main', 'Green Line подписала контракт на поставку ЗИП для верфи в г. Кронштадт.') ?></h2>
					<div class="text"><?php echo Yii::t('main', 'Green Line подписала крупный контракт на поставку запанных частей для ремонта Плавучей Буровой Установки для одной из верфей в г. Кронштадт. Часть запасных частей будет импортозамещена и изготовлена на предприятии в г. Санкт-Петербург. Разработкой рабочих чертежей занимается Green Line Engineering.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160416'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_7.jpg" alt="<?php echo Yii::t('main', 'Green Line начинает строительство нового офиса') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">18.09.2024</span>
					<h2 class="title"><?php echo Yii::t('main', 'Green Line заключили сделку г. Абу-Даби (ОАЭ). ') ?></h2>
					<div class="text"><?php echo Yii::t('main', 'Green Line Offshore & Marine заключил повторную сделку на поставку шлангов для компании ADNOC в ОАЭ. Несмотря на высокую конкуренцию в очередной раз право на реализацию проекта получила Green Line International.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160417'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_6.jpg" alt="<?php echo Yii::t('main', 'Green Line начинает строительство нового офиса') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">04.09.2024</span>
					<h2 class="title"><?php echo Yii::t('main', 'Green Line начинает строительство нового офиса в г. Владивосток.') ?></h2>
					<div class="text"><?php echo Yii::t('main', 'Green Line окончательно согласовала участок для строительства Офисного Здания для филиала компании в г. Владивосток на острове Русский, Приморский край. Расширение площади нового офиса позволять набрать дополнительный штат сервисных инженеров, а также менеджеров по работе с Азиатским рынком. Основной задачей филиала в г. Владивосток по-прежнему остается обслуживание заказчиков в Хабаровском и Приморском крае, а также на острове Сахалин и Камчатке. В настоящий момент начинается проектирование офисных построек и склада запасных частей. Также открыт прием сотрудников, просьба направлять свои резюме по адресу: career@greenlinerussia.com со ссылкой г. Владивосток.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160418'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_5.jpg" alt="<?php echo Yii::t('main', 'Green Line начинает строительство нового офиса') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">21.07.2024</span>
					<h2 class="title"><?php echo Yii::t('main', 'Green Line Offshore & Marine отгрузили шланги по GMPHOM 2009.') ?></h2>
					<div class="text"><?php echo Yii::t('main', 'Green Line отгрузили крупную партию арктических шлангов для Российского заказчика в Арктике. Сумма сделки вновь превысила 2 миллиона долларов США. Это уже девятая отгрузка шлангов подобного класса на данный объект начиная с 2015-го года. Проработкой техники снова занимался Департамент Green Line Engineering. В новой партии во время производства были внесены значительные доработки, рассчитанные на увеличение срока эксплуатации шлангов в условиях крайнего севера. Поставляемые шланги способны работать при температурах до минус 50 С.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160419'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_4.jpg" alt="<?php echo Yii::t('main', 'Green Line Offshore & Marine отгрузили шланги по GMPHOM 2009.') ?>">
				</div>
			</div>
		</div>
	</div>
</section>