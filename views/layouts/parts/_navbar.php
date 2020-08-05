<?php

use yii\helpers\Html;
use yii\helpers\Url;

$pathInfo = Yii::$app->request->pathInfo;
$queryString = Yii::$app->request->queryString;
$queryString = $queryString ? '&' . $queryString : '';

?>

<div id="navbar-container" class="fixed-top top">
    <nav class="navbar container-fluid navbar-expand-lg">

        <a class="active navbar-brand" href="/">GREEN LINE</a>
        <div class="d-flex d-lg-none btns-mobile-container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div id="fade-container" class="d-block d-lg-none fade-container"></div>
            <div class="d-flex d-lg-none sidebar-navs">
                <div class="right-btns-container">
					<div class="switch-language">
                        <?php echo Html::a('RU', Url::to([$pathInfo . $queryString, 'language' => 'ru']), ['class' => 'link ru' . (Yii::$app->language === 'ru' ? ' active' : '')]) ?>
						/
                        <?php echo Html::a('EN', Url::to([$pathInfo . $queryString, 'language' => 'en']), ['class' => 'link en' . (Yii::$app->language === 'en' ? ' active' : '')]) ?>
					</div>
                    <button type="button" class="btn btn-success request-button" data-toggle="modal" data-target="#requestModal">
                        Оставить заявку
                    </button>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="/about">О нас</a></li>
                <li class="nav-item dropdown">
					<span class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Рынки сбыта
					</span>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="dropdown-item"><a href="/sales-markets/space-and-mobile">Космос и мобильные коммуникации</a></div>
                        <div class="dropdown-item"><a href="/sales-markets/oil-and-gas">Добыча нефти и газа</a></div>
                        <div class="dropdown-item"><a href="/sales-markets/chemistry">Химия и нефтехимия</a></div>
                        <div class="dropdown-item"><a href="/sales-markets/electric-power">Производство электроэнергии</a></div>
                        <div class="dropdown-item"><a href="/sales-markets/oil-refining">Нефтепереработка и транспортировка</a></div>
                        <!--						<div class="dropdown-item"><a href="/sales-markets/solar-power">Солнечные электростанции</a></div>-->
                        <div class="dropdown-item"><a href="/sales-markets/mining">Горная промышленность</a></div>
                        <div class="dropdown-item"><a href="/sales-markets/infrastructure">Инфраструктура</a></div>
                        <!--						<div class="dropdown-item"><a href="/sales-markets/shipbuilding">Судостроение</a></div>-->
                        <!--						<div class="dropdown-item"><a href="/sales-markets/railways">Железные дороги</a></div>-->
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="/brands">Наши бренды</a></li>
                <li class="nav-item"><a class="nav-link" href="/news-list">Новости</a></li>
                <li class="nav-item"><a class="nav-link" href="/career">Карьера</a></li>
                <li class="nav-item"><a class="nav-link" href="/contacts">Контакты</a></li>
            </ul>
        </div>

        <div class="right-btns-container d-none d-lg-block">
			<div class="switch-language">
				<?php echo Html::a('RU', Url::to([$pathInfo . $queryString, 'language' => 'ru']), ['class' => 'link ru' . (Yii::$app->language === 'ru' ? ' active' : '')]) ?>
				/
                <?php echo Html::a('EN', Url::to([$pathInfo . $queryString, 'language' => 'en']), ['class' => 'link en' . (Yii::$app->language === 'en' ? ' active' : '')]) ?>
			</div>
            <button type="button" class="btn btn-success request-button" data-toggle="modal" data-target="#requestModal">
                Оставить заявку
            </button>
        </div>
    </nav>
</div>