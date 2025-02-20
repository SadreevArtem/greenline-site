<?php

/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;
use yii\bootstrap\Tabs;
use yii\helpers\Url;



$this->title = Yii::t('main', 'Green Line - ') . Yii::t('main', 'Шельфовые проекты и морские порты');

$this->registerMetaTag([
    'name' => 'description',
    'content' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'Шельфовые проекты и морские порты'),
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
                    - <?php echo Yii::t('main', 'Склад собственной продукции') ?>
                </span>
            </div>
        </div>
    </div>
</header>

<section class="item container">
    <div class="row">
        <div class="  col-12">
            <div class="row">
                <div class="col-md-6 col-12">
                    <h1 class="up-line green"><?php echo Yii::t('main', 'Склад собственной продукции') ?></h1>
                </div>
            </div>
        </div>
        <div class="  col-12">
            <div class="row item-container d-block">
                <?= Tabs::widget([
                    'items' => [
                        [
                            'label' => 'Концевой клапан рукава (HEV)',
                            'content' => '
                            <div class="col-12 py-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Концевой клапан рукава 20” Класс 300# (HEV)") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Концевой клапан шланга типа Северное море - 20, Класс 300#, Корпус нержавеющая сталь SS316, для соединения разгрузочного шланга с носовым клапаном системы загрузки. Диапазон температур от минус 50 С до плюс 52 С<br>Производитель: TechFlow Marine Ltd.<br>Наличие: в наличии – 1 шт.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/wh.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                    <div class="text-center">
                                        <img class="stretched-img img-fluid" src="/img/sales-markets/wh2.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты")>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Концевой клапан рукава 20” Класс 300# (HEV)") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Концевой клапан шланга типа Северное море - 20, Класс 300#, Корпус нержавеющая сталь SS316, для соединения разгрузочного шланга с носовым клапаном системы загрузки. Диапазон температур от минус 50 С до плюс 52 С<br>Производитель: MacGregor Pusnes AS<br>Наличие: в наличии – 1 шт.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/wh3.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ',
                            'active' => true, // Открытый по умолчанию
                            'options' => ['class' => 'tab-content-item']
                        ],
                        [
                            'label' => 'Разрывная муфта (MBC)',
                            'content' => '
                            <div class="col-12 py-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Муфта разрывная 16” Класс 150#") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Тип SPM, лепестковый с двойным закрытием, автоматический, Контролируемое двойное закрытие, Индикатор состояния устройства (USI) , Фиксирующие лепестки, Подъемные выступы, Корпус ASTM A105N. Диапазон температур от минус 30 С до плюс 70 С<br>Производитель: Gall Thomson Environmental Ltd.<br>Наличие: в наличии – 4 шт.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/wh4.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                    <div class="text-center">
                                        <img class="stretched-img img-fluid" src="/img/sales-markets/wh5.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты")>
                                    </div>
                                </div>
                            </div>
                            ',
                            'options' => ['class' => 'tab-content-item']
                        ],
                        [
                            'label' => 'Морские шланги (Marine hoses)',
                            'content' => '
                            <h3 class="h1 mb-4 font-weight-bold scaled-text mt-lg-5">' . Yii::t("main", "Шланг арктический усиленный 12” Класс 300#") . '</h3>
                            <div class="wr-text py-lg-5 px-4 px-lg-0">
                                <p>' . Yii::t("main", "Рукав с усиленными армированными концами 12”x35’ Класс 300# FF для Арктического Стационарного ВПУ (Artic loading tower), Фиттинги Низкотемпературная углеродистая сталь. Фланец ASTM A350 LF2. Диапазон температур от минус 50 С до плюс 70 С<br>Производитель: GLMH (Green Line Marine Hoses)<br>Наличие: в настоящий момент идет пополнение склада.") . '</p>
                            </div>
                            ',
                            'options' => ['class' => 'tab-content-item']
                        ],
                        [
                            'label' => 'Запорная арматура (Valves)',
                            'content' => '
                            <h3 class="h1 mb-4 font-weight-bold scaled-text mt-lg-5">' . Yii::t("main", "Кран шаровой Ду 20” Класс 1500#") . '</h3>
                            <div class="wr-text py-lg-5 px-4 px-lg-0">
                                <p>' . Yii::t("main", "Кран шаровой, Полнопроходной, Разборный, Корпус A350 LF2, Шар SS316+ENP, Фланцевый ASME B16.5 RTJ<br>Производитель: KMZSV<br>Наличие: в наличии – 1 шт.") . '</p>
                            </div>
                            <h3 class="h1 mb-4 font-weight-bold scaled-text mt-lg-5">' . Yii::t("main", "Задвижка клиновая Ду 2” Класс 150#") . '</h3>
                            <div class="wr-text py-lg-5 px-4 px-lg-0">
                                <p>' . Yii::t("main", "Задвижка клиновая, Корпус A182 F44, Клин A182 F44, Фланцевый ASME B16.5 RF L=178 мм<br>Количество: 2 шт.<br>Производитель: KMZSV<br>Наличие: в наличии – 2 шт.") . '</p>
                            </div>
                            <h3 class="h1 mb-4 font-weight-bold scaled-text mt-lg-5">' . Yii::t("main", "Кран шаровой Ду 12” Класс 150#") . '</h3>
                            <div class="wr-text py-lg-5 px-4 px-lg-0">
                                <p>' . Yii::t("main", "Кран шаровой, Полнопроходной, Свартной, Корпус A350 LF2, Шар A350 LF2+ENP, Фланцевый ASME B16.5 RF L=605<br>Производитель: KMZSV<br>Наличие: в наличии – 1 шт.") . '</p>
                            </div>
                            <h3 class="h1 mb-4 font-weight-bold scaled-text mt-lg-5">' . Yii::t("main", "Затвор поворотный Ду 6” Класс 150#") . '</h3>
                            <div class="wr-text py-lg-5 px-4 px-lg-0">
                                <p>' . Yii::t("main", "Затвор поворотный, Вакуумный, Футерованый, Корпус A352 LCC, Диск A352 LCC+PFA, Фланцевый ASME B16.5 RF L=56<br>Производитель: KMZSV<br>Наличие: в наличии – 4 шт.") . '</p>
                            </div>
                            <h3 class="h1 mb-4 font-weight-bold scaled-text mt-lg-5">' . Yii::t("main", "Вентиль запорный Ду 4” Класс 150#") . '</h3>
                            <div class="wr-text py-lg-5 px-4 px-lg-0">
                                <p>' . Yii::t("main", "Вентиль поворотный, Полнопроходной, Корпус A351 CF8M Диск A182 F316+HF, Фланцевый ASME B16.5 RF L=56<br>Производитель: KMZSV<br>Наличие: в наличии – 4 шт") . '</p>
                            </div>',
                            'options' => ['class' => 'tab-content-item']
                        ],
                    ],
                    'options' => ['class' => 'custom-tabs'], // Дополнительные классы для стилизации
                    'encodeLabels' => false, // Отключаем автоэкранирование, если нужны HTML-символы
                ]); ?>






            </div>
        </div>

</section>