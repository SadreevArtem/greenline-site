<?php

/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;
use yii\bootstrap\Tabs;
use yii\helpers\Url;



$this->title = Yii::t('main', 'Greenline - ') . Yii::t('main', 'Greenline - Трубоукладочные системы');

$this->registerMetaTag([
    'name' => 'description',
    'content' => Yii::t('main', 'Greenline - ') . Yii::t('main', 'Трубоукладочные системы'),
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => Yii::t('main', 'оффшорное оборудование - Трубоукладочные системы'),
]);
$this->registerMetaTag([
    'name' => 'robots',
    'content' => 'index, follow',
]);
?>




<header id="header" class="container-fluid navigate-header">
    <div class="img-container">
        <img src="/img/headers/sales-markets.jpg" alt="<?php echo Yii::t('main', 'Рынки сбыта') ?>">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <h2><?php echo Yii::t('main', 'Рынки сбыта') ?></h2>
                <span class="breadcrumbs">
                    <?php echo Html::a(Yii::t('main', 'Главная'), ['/']) ?>
                    - <span> <?php echo Yii::t('main', 'Рынки сбыта') ?></span>
                    - <span> <?php echo Html::a(Yii::t('main', 'Шельфовые проекты и морские порты'), ['/sales-markets/offshore-projects']) ?> </span>
                    - <?php echo Yii::t('main', 'Трубоукладочные системы') ?>
                </span>
            </div>
        </div>
    </div>
</header>

<section class="item container no-copy">
    <div class="row">
        <div class="  col-12">
            <div class="row">
                <div class="col-md-6 col-12">
                    <h1 class="up-line green"><?php echo Yii::t('main', 'Трубоукладочные системы') ?></h1>
                </div>
            </div>
        </div>
        <!-- <div class="  col-12">
            <h2 class='h2'><?php echo Yii::t('main', 'Основные типы проектируемых обьектов:') ?></h2>

        </div> -->
        <div class="col-12 mt-lg-5">
            <div class="row item-container align-items-center mb-lg-5 mb-0">
                <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                    <h3 class="h2 mb-4 font-weight-bold scaled-text">
                        <?php echo Yii::t('main', 'Flex-lay'); ?>
                    </h3>
                    <div class="content wr-text">
                        <p><?php echo Yii::t("main", "За годы работы Greenline разработала и поставила множество систем Flex-lay. Их ключевые особенности — вертикальная рампа с натяжителями, что делает метод эффективным для укладки гибких труб. Главное преимущество — сниженная усталость трубопровода, что упрощает его монтаж и восстановление. Накопленный опыт позволяет нам адаптировать системы для работы на больших глубинах и с крупногабаритными элементами.") ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                    <div>
                        <img class="stretched-img" src="/img/sales-markets/plet1.jpg" alt="<?php echo Yii::t('main', 'Шельфовые проекты и морские порты'); ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row item-container align-items-center mb-lg-5 mb-0">
                <div class="col-md-6 col-12 px-lg-0 pl-lg-5 order-lg-1">
                    <h3 class="h2 mb-4 font-weight-bold scaled-text">
                        <?php echo Yii::t('main', 'Reel-lay'); ?>
                    </h3>
                    <div class="content wr-text">
                        <p><?php echo Yii::t("main", "Метод Reel-lay обеспечивает высокоскоростную укладку гибких и жёстких труб. Основное преимущество — перенос сварочных работ на берег, что повышает качество и скорость. Оборудование включает барабаны, натяжители и лебёдки. Инновация Greenline — модульная система со сменными катушками, позволяющая проводить замену прямо в море, без возврата на базу, что значительно повышает эффективность.") ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                    <div class=''>
                        <img class="stretched-img" src="/img/sales-markets/plet2.jpg" alt="<?php echo Yii::t('main', 'Шельфовые проекты и морские порты'); ?>">
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 mt-lg-5">
            <div class="row item-container align-items-center mb-lg-5 mb-0">
                <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                    <h3 class="h2 mb-4 font-weight-bold scaled-text">
                        <?php echo Yii::t('main', 'S-lay'); ?>
                    </h3>
                    <div class="content wr-text">
                        <p><?php echo Yii::t("main", "Метод S-lay позволяет сваривать трубы прямо на судне с высокой производительностью. Он идеален для мелководья и работы с бетонным покрытием. Ключевой элемент — стренер, контролирующий изгиб трубы при укладке. Greenline создала мощную 600-тонную систему S-lay, интегрированную с J-lay tower и краном для сложных проектов.") ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                    <div>
                        <img class="stretched-img" src="/img/sales-markets/plet3.jpg" alt="<?php echo Yii::t('main', 'Шельфовые проекты и морские порты'); ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row item-container align-items-center mb-lg-5 mb-0">
                <div class="col-md-6 col-12 px-lg-0 pl-lg-5 order-lg-1">
                    <h3 class="h2 mb-4 font-weight-bold scaled-text">
                        <?php echo Yii::t('main', 'J-lay'); ?>
                    </h3>
                    <div class="content wr-text">
                        <p><?php echo Yii::t("main", "Метод J-lay предназначен для укладки жёстких труб на большой глубине. Трубные секции свариваются в вертикальной башне, что минимизирует изгиб и защищает трубы от усталости. Хотя скорость работы ниже из-за цикличности процесса, этот метод оптимален для глубоководья. Мы поставляем полные J-lay системы, включая башни, оборудование для handling и системы управления.") ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                    <div class=''>
                        <img class="stretched-img" src="/img/sales-markets/plet4.jpg" alt="<?php echo Yii::t('main', 'Шельфовые проекты и морские порты'); ?>">
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 mt-lg-5">
            <div class="row item-container align-items-center mb-lg-5 mb-0">
                <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                    <h3 class="h2 mb-4 font-weight-bold scaled-text">
                        <?php echo Yii::t('main', 'Multi-lay'); ?>
                    </h3>
                    <div class="content wr-text">
                        <p><?php echo Yii::t("main", "Система Multi-lay объединяет различные методы укладки труб на одном судне, что обеспечивает гибкость и экономическую эффективность. Это позволяет одному судну работать на разных глубинах, используя оптимальный метод для каждого типа трубы. Ключевое преимущество — возможность быстрого переключения между технологиями, например, между скоростным Reel-lay и бережным J-lay для сложных участков.") ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                    <div>
                        <img class="stretched-img" src="/img/sales-markets/plet5.jpg" alt="<?php echo Yii::t('main', 'Шельфовые проекты и морские порты'); ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row item-container align-items-center mb-lg-5 mb-0">
                <div class="col-md-6 col-12 px-lg-0 pl-lg-5 order-lg-1">
                    <h3 class="h2 mb-4 font-weight-bold scaled-text">
                        <?php echo Yii::t('main', 'Cable Lay Systems'); ?>
                    </h3>
                    <div class="content wr-text">
                        <p><?php echo Yii::t("main", "Greenline предлагает модульную систему Cable-Lay для быстрого оснащения судов. Решение позволяет за несколько дней превратить многопрофильное судно в кабелеукладчик. Также доступна система с морской компенсацией, которая стабилизирует процесс укладки, позволяя работать в более сложных погодных условиях и расширяя операционное окно.") ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                    <div class=''>
                        <img class="stretched-img" src="/img/sales-markets/plet6.jpg" alt="<?php echo Yii::t('main', 'Шельфовые проекты и морские порты'); ?>">
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 mt-lg-5">
            <div class="row item-container align-items-center mb-lg-5 mb-0">
                <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                    <h3 class="h2 mb-4 font-weight-bold scaled-text">
                        <?php echo Yii::t('main', 'Pipelay Components PLET'); ?>
                    </h3>
                    <div class="content wr-text">
                        <p><?php echo Yii::t("main", "Greenline — мировой лидер в поставке глубоководных систем для укладки труб и сопутствующего оборудования. Наш уникальный комплекс услуг включает проектирование, производство и тестирование. Мы также разрабатываем автономное оборудование: барабаны, натяжители, лебедки и системы для работы с трубами. Постоянные инновации позволяют предлагать клиентам самые эффективные решения..") ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                    <div>
                        <img class="stretched-img" src="/img/sales-markets/plet7.jpg" alt="<?php echo Yii::t('main', 'Шельфовые проекты и морские порты'); ?>">
                    </div>
                </div>
            </div>
        </div>

</section>