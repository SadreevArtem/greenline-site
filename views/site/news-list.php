<?php

/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;

$this->title = Yii::t('main', 'Greenline - ') . Yii::t('main', 'Новости компании Greenline');;

$this->registerMetaTag([
	'name' => 'description',
	'content' => Yii::t('main', 'Greenline - ') . Yii::t('main', 'Новости компании Greenline Россия'),
]);
$this->registerMetaTag([
	'name' => 'keywords',
	'content' => Yii::t('main', 'поставка нефтегазового оборудования'),
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
					<span class="time">26.01.2026</span>
					<h2 class="title text-break"><?php echo Yii::t('main', 'Greenline признана «Лучшим предприятием отрасли 2025»') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Компания Greenline удостоена почётного статуса «Лучшее предприятие отрасли 2025» по итогам ежегодного экспертного анализа, проводимого Центром аналитических исследований. Награда присуждена за значительный вклад в социально-экономическое развитие региона и устойчивые финансово-экономические показатели.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/260126'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_36.jpg" alt="<?php echo Yii::t('main', 'Greenline признана «Лучшим предприятием отрасли 2025»') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">30.11.2025</span>
					<h2 class="title text-break"><?php echo Yii::t('main', 'Компания Greenline приступила к проработке доставки складского буя для Морского терминала КТК') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Компания Greenline оперативно включилась в работу по обеспечению Морского терминала КТК складским буем собственного производства. Решение о поставке было принято в связи с повреждением выносного причального устройства ВПУ-2 в результате террористической атаки 29 ноября 2025 года.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/301125'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_34.jpg" alt="<?php echo Yii::t('main', 'Компания Greenline приступила к проработке доставки складского буя для Морского терминала КТК') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">31.10.2025</span>
					<h2 class="title text-break"><?php echo Yii::t('main', 'Сотрудники компании Greenline приняли участие в конференции «Подряды на нефтегазовом шельфе» (НЕФТЕГАЗШЕЛЬФ-2025)') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Наши сотрудники присутствовали на отраслевом форуме НЕФТЕГАЗШЕЛЬФ-2025, посвящённом современным подрядным практикам, логистике и импортозамещению оборудования на нефтегазовом шельфе. Участие в мероприятии стало важным шагом для расширения компетенций и укрепления профессиональных связей.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/311025'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img class='ml-n5' src="/img/sales-markets/const1.jpg" alt="<?php echo Yii::t('main', 'Сотрудники компании Greenline приняли участие в конференции «Подряды на нефтегазовом шельфе» (НЕФТЕГАЗШЕЛЬФ-2025)') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">07.10.2025</span>
					<h2 class="title text-break"><?php echo Yii::t('main', 'Сотрудники компании Greenline приняли участие в Петербургском Международном Газовом Форуме') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Наши сотрудники приняли участие в одном из ведущих бизнес-мероприятий в газовой отрасли. Форум собрал свыше 34 000 участников из 54 стран, более 600 экспонентов, более 110 событий деловой программы. Это отличная возможность обменяться опытом, познакомиться с инновациями и укрепить партнёрские связи.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/071025'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_31.jpg" alt="<?php echo Yii::t('main', 'Сотрудники компании Greenline приняли участие в Петербургском Международном Газовом Форуме') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">29.09.2025</span>
					<h2 class="title text-break"><?php echo Yii::t('main', 'Greenline International (GLI) изготовил для складских нужд Выносное Причальное Устройство (ВПУ/CALM Buoy)') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Департамент Greenline Offshore & Marine совместно с компанией Bluewater (Нидерланды) подготовили для складских нужд Выносное Причальное Устройство (CALM Buoy terminal). ВПУ можно приобрести непосредственно со клада компании Greenline в Омане, все проверки ABS пройдены, данные работоспособности и оригинальность производства верфей подтверждена.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/290925'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_29.jpg" alt="<?php echo Yii::t('main', 'Greenline International (GLI) изготовил для складских нужд Выносное Причальное Устройство (ВПУ/CALM Buoy)') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">26.09.2025</span>
					<h2 class="title text-break"><?php echo Yii::t('main', 'Сотрудники компании Greenline посетили международную выставку «НЕВА 2025»') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Наши сотрудники приняли участие в 18-й Международной выставке и конференции «НЕВА 2025», которая проходит с 23 по 26 сентября в Санкт-Петербурге, в КВЦ «Экспофорум». Мероприятие традиционно собирает ведущих представителей гражданского судостроения и судоходства со всего мира.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/260925'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_30.jpg" alt="<?php echo Yii::t('main', 'Сотрудники компании Greenline посетили международную выставку «НЕВА 2025»') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">30.07.2025</span>
					<h2 class="title text-break"><?php echo Yii::t('main', 'Greenline International (GLI) ведёт переговоры о строительстве завода в Омане') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Департамент Greenline International (GLI) провёл первые переговоры с Министерством промышленности Султаната Оман о строительстве завода по производству морских шлангов Greenline Hoses ©️ в специальной экономической зоне Сохар Фризон.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/300725'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_27.jpg" alt="<?php echo Yii::t('main', 'Компания Greenline в Омане') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">06.06.2025</span>
					<h2 class="title text-break"><?php echo Yii::t('main', '15 лет успеха: вместе с вами мы создаем будущее!') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Наша компания отмечает 15-летие успешной работы. За эти годы мы реализовали сотни проектов, помогли тысячам клиентов и сохранили верность своим ценностям. Спасибо, что вы с нами — впереди еще больше достижений!') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/060625'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_26.jpg" alt="<?php echo Yii::t('main', 'Компания Greenline 15 лет') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">26.05.2025</span>
					<h2 class="title text-break"><?php echo Yii::t('main', 'Сотрудники компании Greenline посетили международную выставку «Металлообработка-2025»') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Сотрудники Greenline приняли участие в международной выставке «Металлообработка-2025», которая прошла в Москве. Это крупнейшее мероприятие в России и СНГ в области станкостроения и металлообработки, ежегодно объединяющее ведущих игроков отрасли на одной площадке.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/260525'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_23.jpg" alt="<?php echo Yii::t('main', 'Компания Greenline на выставке Металлообработка-2025') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">25.05.2025</span>
					<h2 class="title text-break"><?php echo Yii::t('main', 'Компания Greenline включена в реестр Ассоциации судостроительного кластера Калининградской области') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'ООО «Greenline» вступило в Ассоциацию «Кластер судостроения и судоремонта Калининградской области». Кластер создан для обеспечения высоких темпов развития отрасли судостроения и судоремонта за счет внутренней кооперации участников и эффективной реализации перспективных проектов.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/250525'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_24.jpg" alt="<?php echo Yii::t('main', 'Компания Greenline реестр судостроительного кластера Калининградской области') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">20.05.2025</span>
					<h2 class="title text-break"><?php echo Yii::t('main', 'Департамент Greenline Space © разработал модель БПЛА GLV-2000') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Greenline Space © разработал модель БПЛА GLV-2000 для нужд Российских потребителей двухвинтовой БПЛА грузоподьемностью до 300 кг, временем полета до 12 часов, и для работы в условиях Арктики при температурах до минус 50 градусов цельсия.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/200525'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_32.jpg" alt="<?php echo Yii::t('main', 'Компания Greenline реестр судостроительного кластера Калининградской области') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">16.04.2025</span>
					<h2 class="title"><?php echo Yii::t('main', 'Компания Greenline вступила в Калининградскую ТПП и начала активное участие в деловой повестке региона') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Компания Greenline стала членом Калининградской торгово-промышленной палаты — крупнейшего бизнес-сообщества региона. Участие в заседаниях комитетов, новые деловые связи и обучающие семинары расширяют возможности компании на всех уровнях.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160425'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_22.jpg" alt="<?php echo Yii::t('main', 'Компания Greenline вступила в Калининградскую ТПП') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">31.03.2025</span>
					<h2 class="title"><?php echo Yii::t('main', 'Greenline Engineering разработала арктическую загрузочную станцию') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Департамент Greenline Engineering разработал шланговую плавучую арктическую загрузочную станцию, установленную на плавучем ледостойком понтоне. Станция полностью собрана из отечественных компонентов и снабжена шлангами Greenline Hoses ® изготовленными на предприятии в г. Санкт-Петербург по заказу компании Greenline.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/310325'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_19.jpg" alt="<?php echo Yii::t('main', 'шланговая плавучая арктическая загрузочная станция') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">25.03.2025</span>
					<h2 class="title"><?php echo Yii::t('main', 'OCIMF обновляет руководство по безопасной одноточечной швартовке танкеров') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Международный морской форум нефтяных компаний (OCIMF) опубликовал пересмотренное издание Руководства по закупке и испытанию тросов SPM — важнейшего оборудования, используемого для обеспечения безопасной швартовки танкеров во время погрузки и выгрузки нефтяных грузов с морских объектов.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/250325'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_17.jpg" alt="<?php echo Yii::t('main', 'OCIMF') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">27.02.2025</span>
					<h2 class="title"><?php echo Yii::t('main', 'Greenline поставит жизненно важное оборудование для шельфовых проектов Газпрома') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Департамент Offshore & Marine поставит компоненты для подводной добычи на Арктическом шельфе компании Газпром. Greenline Offshore & Marine займется поставкой и монтажом подводных линий, приводов, кабелей и подключения подводных манифольдов на глубине 200 метров.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/270225'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_14.jpg" alt="<?php echo Yii::t('main', 'Galp пробурила первую скважину Mopane 1-A') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">20.02.2025</span>
					<h2 class="title"><?php echo Yii::t('main', 'Greenline подписывает договор на поставку ВПУ в Африке.') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Департамент Offshore & Marine компании Greenline подписывает договор по проектированию, поставке и установке Выносного Причального Устройства в Африке. Ранее установленные ВПУ в морском порту не обеспечивают возросшей потребности данного региона. За основу будут взяты ВПУ поставленные в Ливию.') ?></div>
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
					<div class="text text-justify"><?php echo Yii::t('main', 'Greenline впервые получил экспортный контракт на поставку Российского измерительного оборудования в г. Маскат (Оман). Выбор в пользу Российского оборудования был сделан OQ SAOC в связи с более доступной ценой и более точными показаниями измерения.  Данная поставка подчеркивает качество Российского оборудования на мировом рынке.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160411'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_12.jpg" alt="<?php echo Yii::t('main', 'Galp пробурила первую скважину Mopane 1-A') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">10.02.2025</span>
					<h2 class="title"><?php echo Yii::t('main', 'Сотрудники компании провели выездную встречу на острове Сахалин.') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Сотрудники компании Greenline из Департамента Offshore & Marine провели выездную встречу на острове Сахалин с подрядчиками проектов «Сахалин-1» и «Сахалин-2». «Сахалин-1» — нефтегазовый проект на острове Сахалин, управляемый российской компанией «Сахалинморнефтегаз — Шельф». В рамках проекта предусмотрена разработка нефти и газа на северо-восточном шельфе острова.') ?></div>
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
					<div class="text text-justify"><?php echo Yii::t('main', 'Greenline провели важные переговоры на самом высоком уровне с крупнейшим оффшорным EPC подрядчиком в регионе. Во время переговоров были согласованы договоры о намерении и взаимопомощи по строительству объектов в Африке, а также в акватории Каспийского моря. Успешный тандем позволит компании Greenline расширить количество новых проектов в мире. Сумма предстоящей сделки составляет 600 миллионов долларов США, оператором проекта будет компания Greenline International Гонконг.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160413'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_10.jpg" alt="<?php echo Yii::t('main', 'Посетите мировую энергетическую выставку') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">22.01.2025</span>
					<h2 class="title"><?php echo Yii::t('main', 'Greenline усиливает сотрудничество с Роскосмос.') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Greenline получила задание от дочернего общества корпорации Роскосмос на разработку и поставку гибких линий для перекачки жидких газов при крайне низких температурах. Началом разработки займется Департамент Greenline Engineering имеющие огромный опыт в проектирование и изготовлении подобных линий для турбин.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160414'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_9.jpg" alt="<?php echo Yii::t('main', 'Greenline начинает строительство нового офиса') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">15.12.2024</span>
					<h2 class="title"><?php echo Yii::t('main', 'Greenline открывает офис в Гонконге.') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Компания Greenline согласовала с партнерами открытие офиса в г. Гонконг (Китай) в 2025-м для работы над проектами Российских заказчиков из нефтегазового рынка в Мексике, Казахстане, Вьетнаме и странах Африки. Новый Департамент получил название Greenline International (GLI) и приступит к работе с началом Нового года в первую очередь по проектам в Африке и Казахстане.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160415'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_8.jpg" alt="<?php echo Yii::t('main', 'Greenline начинает строительство нового офиса') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">14.11.2024</span>
					<h2 class="title"><?php echo Yii::t('main', 'Сотрудники компании Greenline на выставке ADIPEC 2024') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Сотрудники компании Greenline приняли участие в ежегодной выставке ADIPEC, которая прошла в Абу-Даби.') ?>
						<?php echo Yii::t('main', 'Это одно из крупнейших мировых мероприятий в сфере нефти и газа, объединяющее лидеров отрасли. В рамках выставки наша команда заключила важные международные договоры и партнерские соглашения, а также выделила ключевые направления развития компании на 2025 год.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/220520'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_3.jpg" alt="<?php echo Yii::t('main', 'Сотрудники компании Greenline на выставке ADIPEC 2024') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">11.2024</span>
					<h2 class="title"><?php echo Yii::t('main', 'Посетите мировую энергетическую выставку') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Проходящая с 4 по 7 ноября 2024 года в Абу-Даби выставка ADIPEC объединяет более 2200 организаций из всего спектра глобальной энергетической экосистемы, чтобы продемонстрировать последние достижения, формирующие будущее энергетики. Объединяя всю энергетическую отрасль, выставка предоставляет предприятиям уникальную возможность наладить партнерские отношения, необходимые для разработки новых бизнес-моделей и инновационных продуктов, которые соответствуют приоритетам развивающейся энергетической экосистемы. ADIPEC предоставит участникам уникальную возможность лично пообщаться с лидерами, новаторами, покупателями и продавцами, которые ведут энергетическую отрасль в будущее. Получите международную точку зрения вместе с профессионалами в области энергетики из 164 стран и присоединитесь к обсуждению вопросов ответственного и устойчивого энергетического перехода.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160420'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_2.jpg" alt="<?php echo Yii::t('main', 'Посетите мировую энергетическую выставку') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">10.10.2024</span>
					<h2 class="title"><?php echo Yii::t('main', 'Greenline подписала контракт на поставку ЗИП для верфи в г. Кронштадт.') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Greenline подписала крупный контракт на поставку запанных частей для ремонта Плавучей Буровой Установки для одной из верфей в г. Кронштадт. Часть запасных частей будет импортозамещена и изготовлена на предприятии в г. Санкт-Петербург. Разработкой рабочих чертежей занимается Greenline Engineering.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160416'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_7.jpg" alt="<?php echo Yii::t('main', 'Greenline начинает строительство нового офиса') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">18.09.2024</span>
					<h2 class="title"><?php echo Yii::t('main', 'Greenline заключили сделку г. Абу-Даби (ОАЭ). ') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Greenline Offshore & Marine заключил повторную сделку на поставку шлангов для компании ADNOC в ОАЭ. Несмотря на высокую конкуренцию в очередной раз право на реализацию проекта получила Greenline International.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160417'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_6.jpg" alt="<?php echo Yii::t('main', 'Greenline начинает строительство нового офиса') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">04.09.2024</span>
					<h2 class="title"><?php echo Yii::t('main', 'Greenline начинает строительство нового офиса в г. Владивосток.') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Greenline окончательно согласовала участок для строительства Офисного Здания для филиала компании в г. Владивосток на острове Русский, Приморский край. Расширение площади нового офиса позволять набрать дополнительный штат сервисных инженеров, а также менеджеров по работе с Азиатским рынком. Основной задачей филиала в г. Владивосток по-прежнему остается обслуживание заказчиков в Хабаровском и Приморском крае, а также на острове Сахалин и Камчатке. В настоящий момент начинается проектирование офисных построек и склада запасных частей. Также открыт прием сотрудников, просьба направлять свои резюме по адресу: career@greenlinerussia.com со ссылкой г. Владивосток.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160418'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_5.jpg" alt="<?php echo Yii::t('main', 'Greenline начинает строительство нового офиса') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">21.07.2024</span>
					<h2 class="title"><?php echo Yii::t('main', 'Greenline Offshore & Marine отгрузили шланги по GMPHOM 2009.') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Greenline отгрузили крупную партию арктических шлангов для Российского заказчика в Арктике. Сумма сделки вновь превысила 2 миллиона долларов США. Это уже девятая отгрузка шлангов подобного класса на данный объект начиная с 2015-го года. Проработкой техники снова занимался Департамент Greenline Engineering. В новой партии во время производства были внесены значительные доработки, рассчитанные на увеличение срока эксплуатации шлангов в условиях крайнего севера. Поставляемые шланги способны работать при температурах до минус 50 С.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/160419'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_4.jpg" alt="<?php echo Yii::t('main', 'Greenline Offshore & Marine отгрузили шланги по GMPHOM 2009.') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">30.08.2021</span>
					<h2 class="title text-break"><?php echo Yii::t('main', 'Департамент Greenline Offshore & Marine произвел отгрузку арктических шлангов для проекта «Ворота Арктики»') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Компания Greenline произвела отгрузку морских шлангов арктического класса производства Dunlop Oil & Marine (Великобритания). Особенностью шлангов является специально разработанная для арктического терминала конструкция компанией Dunlop способная выдерживать рабочие температуры до минус 50 Градусов.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/300821'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_28.jpg" alt="<?php echo Yii::t('main', 'Компания Greenline произвел отгрузку арктических шлангов для проекта «Ворота Арктики»') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">29.04.2021</span>
					<h2 class="title"><?php echo Yii::t('main', 'Greenline поставила комплект ЗИП для клапана рукава для нужд Газпром нефть') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Департамент Offshore & Marine провел диагностику и поставил комплект ЗИП для клапана рукава (HEV) для нужд дочернего общества компании Газпром нефть для Арктического терминала. Greenline поставил полный комплект ЗИП для замены, который позволит бесперебойно использовать клапан в течение 3-х лет. Запасной комплект ЗИП компания Greenline постоянно имеет в наличии на складе в г. Калининград.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/290421'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_15.jpg" alt="<?php echo Yii::t('main', 'Greenline поставила комплект ЗИП для клапана рукава для нужд Газпром нефть') ?>">
				</div>
			</div>
			<div class="item">
				<div class="left">
					<span class="time">14.02.2021</span>
					<h2 class="title"><?php echo Yii::t('main', 'Greenline Industries подписал контракт о сдаче в аренду 4 АЗС в Московской области') ?></h2>
					<div class="text text-justify"><?php echo Yii::t('main', 'Департамент Greenline Industries занимающийся обслуживаем предприятий инфраструктуры подписал долгосрочные контракты о сдаче 4-х Автомобильных Заправочных Станций в Московской области. Срок аренды каждой АЗС составит 3 года.') ?></div>
					<?php echo Html::a(Yii::t('main', 'Подробнее'), ['/news/140221'], ['class' => 'btn btn-success more-btn']) ?>
				</div>
				<div class="right">
					<img src="/img/news/news_16.jpg" alt="<?php echo Yii::t('main', 'Greenline поставила комплект ЗИП для клапана рукава для нужд Газпром нефть') ?>">
				</div>
			</div>
		</div>
	</div>
</section>