<?php

use app\components\helpers\Html;
use yii\helpers\Url;

$pathInfo = Yii::$app->request->pathInfo;
$queryString = Yii::$app->request->queryString;
$queryString = $queryString ? '?' . $queryString : '';

$enLink = (!$pathInfo || $pathInfo === 'index') ? ('/en' . $queryString) : Url::current(['language' => 'en']);
$ruLink = (!$pathInfo || $pathInfo === 'index') ? ('/ru' . $queryString) : Url::current(['language' => 'ru']);

?>

<div id="navbar-container" class="fixed-top top">
    <nav class="navbar container-fluid navbar-expand-lg">

        <?php echo Html::a('GREEN LINE', ['/'], ['class' => 'active navbar-brand']) ?>
        <div class="d-flex d-lg-none btns-mobile-container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo Yii::t('main', 'Переключить') ?>">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div id="fade-container" class="d-block d-lg-none fade-container"></div>
            <div class="d-flex d-lg-none sidebar-navs">
                <div class="right-btns-container">
					<div class="switch-language">
                        <?php echo Html::a('RU', $ruLink, ['class' => 'link ru' . (Yii::$app->language === 'ru' ? ' active' : ''), 'hreflang' => 'ru-RU']) ?>
						/
                        <?php echo Html::a('EN', $enLink, ['class' => 'link en' . (Yii::$app->language === 'en' ? ' active' : ''), 'hreflang' => 'en-EN']) ?>
					</div>
	                <?php echo Html::a('中国商业伙伴', ['/about-company'], ['class' => 'btn btn-success request-button']) ?>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><?php echo Html::a(Yii::t('main', 'О нас'), ['/about'], ['class' => 'nav-link']) ?></li>
                <li class="nav-item dropdown">
					<span class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo Yii::t('main', 'Рынки сбыта') ?>
					</span>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="dropdown-item"><?php echo Html::a(Yii::t('main', 'Космос и мобильные коммуникации'), ['/sales-markets/space-and-mobile']) ?></div>
                        <div class="dropdown-item"><?php echo Html::a(Yii::t('main', 'Добыча нефти и газа'), ['/sales-markets/oil-and-gas']) ?></div>
                        <div class="dropdown-item"><?php echo Html::a(Yii::t('main', 'Химия и нефтехимия'), ['/sales-markets/chemistry']) ?></div>
                        <div class="dropdown-item"><?php echo Html::a(Yii::t('main', 'Производство электроэнергии'), ['/sales-markets/electric-power']) ?></div>
                        <div class="dropdown-item"><?php echo Html::a(Yii::t('main', 'Нефтепереработка и транспортировка'), ['/sales-markets/oil-refining']) ?></div>
<!--                        						<div class="dropdown-item"><a href="/sales-markets/solar-power">--><?php //echo Yii::t('main', 'Солнечные электростанции') ?><!--</a></div>-->
                        <div class="dropdown-item"><?php echo Html::a(Yii::t('main', 'Горная промышленность'), ['/sales-markets/mining']) ?></div>
                        <div class="dropdown-item"><?php echo Html::a(Yii::t('main', 'Инфраструктура'), ['/sales-markets/infrastructure']) ?></div>
<!--                        						<div class="dropdown-item"><a href="/sales-markets/shipbuilding"--><?php //echo Yii::t('main', 'Судостроение') ?><!--</a></div>-->
<!--                        						<div class="dropdown-item"><a href="/sales-markets/railways">--><?php //echo Yii::t('main', 'Железные дороги') ?><!--</a></div>-->
                    </div>
                </li>
                <li class="nav-item"><?php echo Html::a(Yii::t('main', 'Наши бренды'), ['/brands'], ['class' => 'nav-link']) ?></li>
                <li class="nav-item"><?php echo Html::a(Yii::t('main', 'Новости'), ['/news-list'], ['class' => 'nav-link']) ?></li>
                <li class="nav-item"><?php echo Html::a(Yii::t('main', 'Карьера'), ['/career'], ['class' => 'nav-link']) ?></li>
                <li class="nav-item"><?php echo Html::a(Yii::t('main', 'Контакты'), ['/contacts'], ['class' => 'nav-link']) ?></li>
            </ul>
        </div>

        <div class="right-btns-container d-none d-lg-block">
			<div class="switch-language">
				<?php echo Html::a('RU', $ruLink, ['class' => 'link ru' . (Yii::$app->language === 'ru' ? ' active' : ''), 'hreflang' => 'ru-RU']) ?>
				/
                <?php echo Html::a('EN', $enLink, ['class' => 'link en' . (Yii::$app->language === 'en' ? ' active' : ''), 'hreflang' => 'en-EN']) ?>
			</div>
            <?php echo Html::a('中国商业伙伴', ['/about-company'], ['class' => 'btn btn-success request-button']) ?>
        </div>
    </nav>
</div>