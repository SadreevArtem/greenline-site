<?php
/**
 * @var $this \yii\web\View
 */

$this->title = 'Green Line - О нас';

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Green Line - О нас',
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
		<img src="/img/headers/about.jpg" alt="О нас">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 col-12">
				<h1>О нас</h1>
				<span class="breadcrumbs">
						<a href="/">Главная</a>
						- <a href="/about" class="current">О нас</a>
					</span>
			</div>
		</div>
	</div>
</header>

<section id="principles" class="container">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<h2 class="up-line green">Наши принципы</h2>
			<div class="item d-flex align-items-baseline">
				<div class="number">1.</div>
				<span class="text">Внимательность к требованиям Заказчика. Точность, высокое качество и скорость в решении поставленных перед нами задач.</span>
			</div>
			<div class="item d-flex align-items-baseline">
				<div class="number">2.</div>
				<span class="text">Мы ценим наших Заказчиков и их решение сотрудничать именно с нами, поэтому совершенствуем, и всякий раз улучшаем условия партнерства до 30% (сроки, цены и т.д.)</span>
			</div>
			<div class="item d-flex align-items-baseline">
				<div class="number">3.</div>
				<span class="text">Мы выбираем лучших мировых производителей. Каждый наш поставщик имеет многолетнюю историю и безупречную репутацию.</span>
			</div>
		</div>
	</div>
</section>

<section id="greenline" class="container-fluid">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-12">
					<div class="row item-container">
						<div class="col-12 col-lg-6 main-block">
							<h2 class="up-line green">Green Line</h2>
							<p>Компания Green Line специализируется на поставках оборудования и передовых технологий в нефтегазовую, нефтехимическую, энергетическую и иные ведущие отрасли промышленности.</p>
							<p>Уникальный опыт позволяет нам находить наилучшие технологические решения и превосходно справляться с любыми задачами Заказчика.</p>
							<p>Поставляемая нами продукция не имеет отечественных аналогов и производится на территории Европы, и США.</p>
							<p>Все оборудование сертифицировано и соответствует требованиям Государственных стандартов Российской Федерации, стандартов стран-производителей и Технических регламентов Таможенного союза (ЕАЭС), РМРС.</p>
						</div>
						<div class="col-12 col-lg-6 img-block">
							<img src="/img/about/greenline.jpg?t=1" alt="О компании">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="eko" class="container-fluid">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-12">
					<div class="row item-container">
						<div class="col-lg-6 col-12 img-block">
							<img src="/img/about/eko.jpg" alt="О компании">
						</div>
						<div class="col-lg-6 col-12 main-block">
							<h2 class="up-line green">Охрана окружающей среды и инновации</h2>
							<p>Мы осознаем актуальность проблемы негативного воздействия на окружающую среду. Поэтому оборудование и инновационные технологии, которые мы предлагаем, призваны не только повысить экономическую эффективность, но и обеспечить экологическую безопасность.</p>
							<p>Модернизация производств в нефтегазовой, нефтехимической и других отраслях позволяет снизить выбросы, и минимизировать экологический след.</p>
							<p>Мы стараемся отслеживать появление новых экологических решений на рынке и уделять внимание последним исследованиям в области охраны окружающей среды и борьбы с изменением климата.</p>
							<p>Оказываем поддержку научным разработкам и WWF.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="in-numbers" class="container">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<h2 class="up-line green">Мы в цифрах</h2>
			<div class="row">
				<div class="col-12 d-flex justify-content-between flex-column flex-lg-row">
					<div class="item">
						<div class="number">100</div>
						<span class="medium">Количество товара в асортименте</span>
						<span class="bold">более 100 наименований</span>
					</div>
					<div class="item">
						<div class="number">5 000</div>
						<span class="medium">В год поставляется</span>
						<span class="bold">более 5 000 единиц оборудования</span>
					</div>
					<div class="item">
						<div class="number">230</div>
						<span class="medium">Клиенты:</span>
						<span class="bold">Более 200 компаний <br> в России и 30 в СНГ</span>
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
					<h2 class="up-line white">Выставки</h2>
					<div class="exhibitions-carousel owl-carousel owl-theme">
						<div class="item"><a target="_blank" href="https://industrialvalvesummit.com/"><img src="/img/about/exhibition_1.jpg" alt="IVS"></a></div>
						<div class="item"><a target="_blank" href="https://www.valve-world.net/"><img src="/img/about/exhibition_2.jpg" alt="Valve world"></a></div>
						<div class="item"><a target="_blank" href="https://lnglatinamerica.com/"><img src="/img/about/exhibition_3.jpg" alt="LNG2020"></a></div>
						<div class="item"><a target="_blank" href="https://miningrussiaconference.com/"><img src="/img/about/exhibition_4.jpg" alt="Горнорудная промышленность России и СНГ"></a></div>
						<div class="item"><a target="_blank" href="https://www.lngrussiacongress.com/"><img src="/img/about/exhibition_5.jpg" alt="СПГ конгресс 2020"></a></div>
						<div class="item"><a target="_blank" href="http://2020.otcnet.org/"><img src="/img/about/exhibition_6.jpg" alt="OFFSHORE TECHNOLOGY CONFERENCE"></a></div>
						<div class="item"><a target="_blank" href="http://2020.otcasia.org/"><img src="/img/about/exhibition_7.jpg" alt="OTC ASIA 2020"></a></div>
						<div class="item"><a target="_blank" href="https://www.osea-asia.com/"><img src="/img/about/exhibition_8.jpg" alt="OSEA"></a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="loyality" class="container">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<h2 class="up-line green">Программа лояльности</h2>
			<div class="item d-flex align-items-baseline" style="margin-bottom:10px;">
				<span class="text">Мы ценим долговременное партнерство, поэтому создаем для своих Заказчиков комфортные и выгодные условия сотрудничества:</span>
			</div>
			<div class="item d-flex align-items-baseline">
				<div class="number">1.</div>
				<span class="text">Поставляем товар без предоплаты и увеличиваем срок постоплаты до 90 дней для постоянных партнеров.</span>
			</div>
			<div class="item d-flex align-items-baseline">
				<div class="number">2.</div>
				<span class="text">Ведём работу на условиях Заказчика для крупных нефтегазовых компаний.</span>
			</div>
			<div class="item d-flex align-items-baseline">
				<div class="number">3.</div>
				<span class="text">Осуществляем поставку образцов для опытно-промышленной эксплуатации оборудования.</span>
			</div>
		</div>
	</div>
</section>

<section id="difference" class="container-fluid">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-12">
					<h2 class="up-line green">Чем мы отличаемся от остальных</h2>
					<div class="item d-flex align-items-baseline">
						<div class="number">1.</div>
						<span class="text">Производим отгрузку запаса продукции со склада, что позволяет существенно сократить сроки поставки.</span>
					</div>
					<div class="item d-flex align-items-baseline">
						<div class="number">2.</div>
						<span class="text">Передаем Заказчику полный комплект документов.</span>
					</div>
					<div class="item d-flex align-items-baseline">
						<div class="number">3.</div>
						<span class="text">Контролируем качество выпускаемой продукции.</span>
					</div>
					<div class="item d-flex align-items-baseline">
						<div class="number">4.</div>
						<span class="text">Проводим любые испытания по требованию заказчика.</span>
					</div>
					<div class="item d-flex align-items-baseline">
						<div class="number">5.</div>
						<span class="text">Обучаем персонал заказчика.</span>
					</div>
					<div class="item d-flex align-items-baseline">
						<div class="number">6.</div>
						<span class="text">Участвуем в выставке Нефтегаз.</span>
					</div>
					<div class="item d-flex align-items-baseline">
						<div class="number">7.</div>
						<span class="text">Нам доверяют госкомпании.</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="steps" class="container-fluid">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-12">
					<div class="title w-100 d-flex flex-column justify-content-between align-items-center">
						<h2>Этапы работы</h2>
						<div class="steps-line"></div>
					</div>
					<div class="steps-body d-lg-block d-none">
						<div class="line d-flex">
							<div class="item item-1">
								<div class="circle-container line-right"><div class="circle">1</div></div>
								<div class="text">Получение заявки, <br> технических условий</div>
							</div>
							<div class="item item-2">
								<div class="circle-container"><div class="circle">2</div></div>
								<div class="text">Отработка</div>
							</div>
							<div class="item item-3">
								<div class="circle-container"><div class="circle">3</div></div>
								<div class="text">Предложение</div>
							</div>
							<div class="item item-4">
								<div class="circle-container"><div class="circle">4</div></div>
								<div class="text">Совещание, согласование, утверждение</div>
							</div>
							<div class="item item-5">
								<div class="circle-container"><div class="circle">5</div></div>
								<div class="text">Надзор за <br> производством</div>
							</div>
						</div>
						<div class="line d-flex">
							<div class="item item-6">
								<div class="circle-container"><div class="circle">6</div></div>
								<div class="text">Приемка <br> <span>совместно <br> с заказчиком</span></div>
							</div>
							<div class="item item-7">
								<div class="circle-container line-left"><div class="circle">7</div></div>
								<div class="text">Отгрузка</div>
							</div>
							<div class="item item-8">
								<div class="circle-container"><div class="circle">8</div></div>
								<div class="text">
									Установка, обсуждение с Заказчиком <span>результата установки и эксплуатации оборудования с целью усовершенствования продукции</span>
								</div>
							</div>
						</div>
					</div>
					<div class="steps-body d-block d-lg-none">
						<div class="line d-flex">
							<div class="item item-1">
								<div class="circle-container line-right"><div class="circle">1</div></div>
								<div class="text">Получение заявки, <br> технических условий</div>
							</div>
							<div class="item item-2">
								<div class="circle-container"><div class="circle">2</div></div>
								<div class="text">Отработка</div>
							</div>
							<div class="item item-3">
								<div class="circle-container"><div class="circle">3</div></div>
								<div class="text">Предложение</div>
							</div>
						</div>
						<div class="line d-flex">
							<div class="item item-4">
								<div class="circle-container"><div class="circle">4</div></div>
								<div class="text">Совещание, согласование, утверждение</div>
							</div>
							<div class="item item-5">
								<div class="circle-container line-left"><div class="circle">5</div></div>
								<div class="text">Надзор за <br> производством</div>
							</div>
							<div class="item item-6">
								<div class="circle-container"><div class="circle">6</div></div>
								<div class="text">Приемка <br> <span>совместно <br> с заказчиком</span></div>
							</div>
						</div>
						<div class="line d-flex">
							<div class="item item-7">
								<div class="circle-container line-left"><div class="circle">7</div></div>
								<div class="text">Отгрузка</div>
							</div>
							<div class="item item-8">
								<div class="circle-container"><div class="circle">8</div></div>
								<div class="text">
									Установка, обсуждение  <br class="d-block d-md-none"> с Заказчиком <span>результата установки и эксплуатации оборудования с целью усовершенствования продукции</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="questions" class="container">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<h2 class="up-line green">Часто задаваемые вопросы</h2>
			<div class="item item-1">
				<div class="question">Как происходит транспортировка товара?</div>
				<div class="answer">Транспортировка можеть быть осуществлена автомобильным, железнодорожным, морским или воздушным видом транспорта. В зависимости от веса, объема и места назначения подбираем наиболее оптимальный вариант. Мы обладаем ресурсами для проведения нестандартных транспортных операций, с задействованием спецтранспорта.</div>
			</div>
			<div class="item item-2">
				<div class="question">Как продукт хранится на складе?</div>
				<div class="answer">Хранится в деревянных ящиках в сухом закрытом и отапливаемом складском помещении.</div>
			</div>
			<div class="item item-3">
				<div class="question">Нужно ли утилизировать товар?</div>
				<div class="answer">Утилизация нефтегазового оборудования - это возможность переработки значительного объема металлов для вторичного использования. Списанное оборудование отправляется на переработку.</div>
			</div>
			<div class="item item-4">
				<div class="question">Как вы контролируете качество выпускаемой продукции?</div>
				<div class="answer">Выпускаемая продукция проходит испытания под личным контролем нашей команды инженеров на базе завода-изготовителя.</div>
			</div>
		</div>
	</div>
</section>