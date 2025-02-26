<?php

/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;
use yii\bootstrap\Tabs;
use yii\helpers\Url;



$this->title = Yii::t('main', 'Green Line - ') . Yii::t('main', 'Проектирование и строительство морских буровых платформ');

$this->registerMetaTag([
    'name' => 'description',
    'content' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'Проектирование и строительство морских буровых платформ'),
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => Yii::t('main', 'рынки сбыта'),
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
                    - <span> <?php echo Yii::t('main', 'Шельфовые проекты и морские порты') ?></span>
                    - <?php echo Yii::t('main', 'Проектирование и строительство морских буровых платформ') ?>
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
                    <h1 class="up-line green"><?php echo Yii::t('main', 'Проектирование и строительство морских буровых платформ') ?></h1>
                </div>
            </div>
        </div>
        <div class="  col-12">
            <h2 class='h2'><?php echo Yii::t('main', 'Основные типы проектируемых обьектов:') ?></h2>

        </div>
        <div class="col-12 mt-lg-5">
            <div class="row item-container align-items-center mb-lg-5 mb-0">
                <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                    <h3 class="h2 mb-4 font-weight-bold scaled-text text-center">
                        <?php echo Yii::t('main', 'Погружные'); ?>
                    </h3>
                </div>
                <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                    <div>
                        <img class="stretched-img" src="/img/sales-markets/const1.jpg" alt="<?php echo Yii::t('main', 'Шельфовые проекты и морские порты'); ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row item-container align-items-center mb-lg-5 mb-0">
                <div class="col-md-6 col-12 px-lg-0 pr-lg-5 order-lg-1">
                    <h3 class="h2 mb-4 font-weight-bold scaled-text text-center">
                        <?php echo Yii::t('main', 'Полупогружные'); ?>
                    </h3>
                </div>
                <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                    <div class=''>
                        <img class="stretched-img" src="/img/sales-markets/const2.jpg" alt="<?php echo Yii::t('main', 'Шельфовые проекты и морские порты'); ?>">
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 mt-lg-5">
            <div class="row item-container align-items-center mb-lg-5 mb-0">
                <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                    <h3 class="h2 mb-4 font-weight-bold scaled-text text-center">
                        <?php echo Yii::t('main', 'Самоподьемные'); ?>
                    </h3>
                </div>
                <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                    <div>
                        <img class="stretched-img" src="/img/sales-markets/const3.jpg" alt="<?php echo Yii::t('main', 'Шельфовые проекты и морские порты'); ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row item-container align-items-center mb-lg-5 mb-0">
                <div class="col-md-6 col-12 px-lg-0 pr-lg-5 order-lg-1">
                    <h3 class="h2 mb-4 font-weight-bold scaled-text text-center">
                        <?php echo Yii::t('main', 'Стационарные'); ?>
                    </h3>
                </div>
                <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                    <div class=''>
                        <img class="stretched-img" src="/img/sales-markets/const4.jpg" alt="<?php echo Yii::t('main', 'Шельфовые проекты и морские порты'); ?>">
                    </div>

                </div>
            </div>
        </div>

</section>