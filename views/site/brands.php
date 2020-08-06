<?php
/**
 * @var $this \yii\web\View
 */

$this->title = Yii::t('main', 'Green Line - ') . Yii::t('main', 'Наши бренды');

$this->registerMetaTag([
    'name' => 'description',
    'content' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'Наши бренды'),
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
		<img src="/img/headers/brands.jpg" alt="<?php echo Yii::t('main', 'Наши бренды') ?>">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 col-12">
				<h1><?php echo Yii::t('main', 'Наши бренды') ?></h1>
				<span class="breadcrumbs">
						<a href="/"><?php echo Yii::t('main', 'Главная') ?></a>
						- <a href="/brands" class="current"><?php echo Yii::t('main', 'Наши бренды') ?></a>
					</span>
			</div>
		</div>
	</div>
</header>

<section id="brands" class="container">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="item">
				<div class="img-container"><img src="/img/brands/brand_1.jpg" alt="B.F.E. S.r.l. Bonney Forge"></div>
				<div class="body">
					<h2 class="title">B.F.E. S.r.l. Bonney Forge</h2>
					<span class="text"><?php echo Yii::t('main', 'Bonney Forge - мировое качество и абсолютная надежность в проектировании и изготовлении кованой арматуры.') ?></span>
					<span class="link">
							<a target="_blank" href="http://www.bfe.it">http://www.bfe.it</a>
							<a target="_blank" href="http://www.bfe.it"><img src="/img/icons/link-square.svg" alt="B.F.E. S.r.l. Bonney Forge"></a>
						</span>
				</div>
			</div>
			<div class="item">
				<div class="img-container"><img src="/img/brands/brand_2.jpg" alt="KITZ"></div>
				<div class="body">
					<h2 class="title">KITZ</h2>
					<span class="text"><?php echo Yii::t('main', 'Компания Kitz пользуется доверием по всему миру и предлагает продукцию высшего качества для нефтеперерабатывающей промышленности.') ?></span>
					<span class="link">
							<a target="_blank" href="https://www.kitz.co.jp/english/">https://www.kitz.co.jp</a>
							<a target="_blank" href="https://www.kitz.co.jp/english/"><img src="/img/icons/link-square.svg" alt="KITZ"></a>
						</span>
				</div>
			</div>
			<div class="item">
				<div class="img-container"><img src="/img/brands/brand_3.jpg" alt="Valvosider"></div>
				<div class="body">
					<h2 class="title">Valvosider</h2>
					<span class="text"><?php echo Yii::t('main', 'Valvosider - крупнейший европейский производитель трубопроводной арматуры для нефтегазовой, нефтехимической и энергетической промышленностей.') ?></span>
					<span class="link">
							<a target="_blank" href="https://www.valvosider.it/">https://www.valvosider.it</a>
							<a target="_blank" href="https://www.valvosider.it/"><img src="/img/icons/link-square.svg" alt="Valvosider"></a>
						</span>
				</div>
			</div>
			<div class="item">
				<div class="img-container"><img src="/img/brands/brand_4.jpg" alt="Allweiler"></div>
				<div class="body">
					<h2 class="title">Allweiler</h2>
					<span class="text"><?php echo Yii::t('main', 'Немецкая компания Allwailer уже более 150 лет производит высокотехнологичные насосы, которые успешно применяют предприятия химической, энергетической, нефтеперерабатывающей и других отраслей промышленности.') ?></span>
					<span class="link">
							<a target="_blank" href="https://www.allweiler.de/en">https://www.allweiler.de</a>
							<a target="_blank" href="https://www.allweiler.de/en"><img src="/img/icons/link-square.svg" alt="Allweiler"></a>
						</span>
				</div>
			</div>
			<div class="item">
				<div class="img-container"><img src="/img/brands/brand_5.jpg" alt="Auma"></div>
				<div class="body">
					<h2 class="title">Auma</h2>
					<span class="text"><?php echo Yii::t('main', 'Auma – лидер по производству электроприводов и редукторов для автоматизации трубопроводной арматуры.') ?></span>
					<span class="link">
							<a target="_blank" href="https://www.auma.com/ru/">https://www.auma.com</a>
							<a target="_blank" href="https://www.auma.com/ru/"><img src="/img/icons/link-square.svg" alt="Auma"></a>
						</span>
				</div>
			</div>
			<div class="item">
				<div class="img-container"><img src="/img/brands/brand_6.jpg" alt="Deller"></div>
				<div class="body">
					<h2 class="title">Deller</h2>
					<span class="text"><?php echo Yii::t('main', 'Deller - компания с мировым именем по производству промышленного теплообменного оборудования.') ?></span>
					<span class="link">
							<a target="_blank" href="https://www.deller-gmbh.de/en/">https://www.deller-gmbh.de</a>
							<a target="_blank" href="https://www.deller-gmbh.de/en/"><img src="/img/icons/link-square.svg" alt="Deller"></a>
						</span>
				</div>
			</div>
			<div class="item">
				<div class="img-container"><img src="/img/brands/brand_8.jpg" alt="GC Broach"></div>
				<div class="body">
					<h2 class="title">GC Broach</h2>
					<span class="text"><?php echo Yii::t('main', 'GC Broch специализируется на производстве нагревательного оборудования для нефтеперерабатывающей и нефтехимической промышленностей.') ?></span>
					<span class="link">
							<a target="_blank" href="https://www.broach.com/">https://www.broach.com</a>
							<a target="_blank" href="https://www.broach.com/"><img src="/img/icons/link-square.svg" alt="GC Broach"></a>
						</span>
				</div>
			</div>
			<div class="item">
				<div class="img-container"><img src="/img/brands/brand_9.jpg" alt="Maivisa"></div>
				<div class="body">
					<h2 class="title">Maivisa</h2>
					<span class="text"><?php echo Yii::t('main', 'Компания Maivisa – надежный производитель реакторов, теплообменного оборудования и другой спецтехники для ведущих отраслей промышленности.') ?></span>
					<span class="link">
							<a target="_blank" href="http://www.maivisa.com/es/">http://www.maivisa.com/</a>
							<a target="_blank" href="http://www.maivisa.com/es/"><img src="/img/icons/link-square.svg" alt="Maivisa"></a>
						</span>
				</div>
			</div>
		</div>
	</div>
</section>