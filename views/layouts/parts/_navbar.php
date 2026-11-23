<?php

use app\components\helpers\Html;
use yii\helpers\Url;

$pathInfo = Yii::$app->request->pathInfo;
$queryString = Yii::$app->request->queryString;
$queryString = $queryString ? '?' . $queryString : '';

$enLink = (!$pathInfo || $pathInfo === 'index') ? ('/en' . $queryString) : Url::current(['language' => 'en']);
$ruLink = (!$pathInfo || $pathInfo === 'index') ? ('/ru' . $queryString) : Url::current(['language' => 'ru']);

$this->registerCssFile('/css/greenline-header.css');
$isRussian = Yii::$app->language === 'ru';
$partnerLink = Html::a('中国商业伙伴', ['/about-company'], ['class' => 'greenline-header__partner', 'lang' => 'zh']);
?>

<div id="navbar-container" class="fixed-top greenline-header">
    <nav class="greenline-header__bar">
        <?= Html::a(Html::img('/img/greenline-logo.jpg', ['alt' => 'Greenline']), ['/'], ['class' => 'greenline-header__logo']) ?>

        <div class="collapse greenline-header__menu" id="navbarSupportedContent">
            <ul class="greenline-header__links">
                <li><?php echo Html::a(Yii::t('main', 'О нас'), ['/about'], ['class' => 'greenline-header__link']) ?></li>
                <li class="dropdown">
                    <button type="button" class="greenline-header__link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                        <?php echo Yii::t('main', 'Рынки сбыта') ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="dropdown-item"><?php echo Html::a(Yii::t('main', 'Космос и мобильные коммуникации'), ['/sales-markets/space-and-mobile']) ?></div>
                        <div class="dropdown-item"><?php echo Html::a(Yii::t('main', 'Добыча нефти и газа'), ['/sales-markets/oil-and-gas']) ?></div>
                        <div class="dropdown-item"><?php echo Html::a(Yii::t('main', 'Химия и нефтехимия'), ['/sales-markets/chemistry']) ?></div>
                        <div class="dropdown-item"><?php echo Html::a(Yii::t('main', 'Производство электроэнергии'), ['/sales-markets/electric-power']) ?></div>
                        <div class="dropdown-item"><?php echo Html::a(Yii::t('main', 'Нефтепереработка и транспортировка'), ['/sales-markets/oil-refining']) ?></div>
                        <div class="dropdown-item"><?php echo Html::a(Yii::t('main', 'Шельфовые проекты и морские порты'), ['/sales-markets/offshore-projects']) ?></div>
                        <div class="dropdown-item"><?php echo Html::a(Yii::t('main', 'Горная промышленность'), ['/sales-markets/mining']) ?></div>
                        <div class="dropdown-item"><?php echo Html::a(Yii::t('main', 'Инфраструктура'), ['/sales-markets/infrastructure']) ?></div>
                    </div>
                </li>
                <li><?php echo Html::a(Yii::t('main', 'Новости'), ['/news-list'], ['class' => 'greenline-header__link']) ?></li>
                <li><?php echo Html::a(Yii::t('main', 'Карьера'), ['/career'], ['class' => 'greenline-header__link']) ?></li>
                <li><?php echo Html::a(Yii::t('main', 'Контакты'), ['/contacts'], ['class' => 'greenline-header__link']) ?></li>
                <li><?php echo Html::a(Yii::t('main', 'Склад'), ['/sales-markets/offshore-projects/warehouse'], ['class' => 'greenline-header__link']) ?></li>
            </ul>
            <div class="greenline-header__mobile-partner"><?= $partnerLink ?></div>
        </div>

        <div class="greenline-header__tools">
            <div class="greenline-header__languages">
                <?= Html::a('RU', $ruLink, ['lang' => 'ru', 'hreflang' => 'ru-RU', 'aria-current' => $isRussian ? 'page' : null]) ?>
                <?= Html::a('EN', $enLink, ['lang' => 'en', 'hreflang' => 'en-EN', 'aria-current' => !$isRussian ? 'page' : null]) ?>
            </div>
            <?= $partnerLink ?>
            <button class="greenline-header__toggle" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?= $isRussian ? 'Переключить меню' : 'Toggle navigation' ?>">
                <span aria-hidden="true"></span>
            </button>
        </div>
    </nav>
</div>
