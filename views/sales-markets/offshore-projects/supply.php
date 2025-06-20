<?php

/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;
use yii\bootstrap\Tabs;




$this->title = Yii::t('main', 'Greenline - ') . Yii::t('main', 'Greenline - поставка технологического морского оборудования');

$this->registerMetaTag([
    'name' => 'description',
    'content' => Yii::t('main', 'Greenline - ') . Yii::t('main', 'Greenline - поставки современного технологического оборудования для шельфовых проектов и морских портов'),
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => Yii::t('main', 'поставка технологического морского оборудования'),
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
                    - <?php echo Yii::t('main', 'Поставка морского оборудования') ?>
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
                    <h1 class="up-line green"><?php echo Yii::t('main', 'Поставка технологического морского оборудования') ?></h1>
                </div>
            </div>
        </div>
        <div class="  col-12">
            <div class="row item-container d-block">
                <?= Tabs::widget([
                    'items' => [
                        [
                            'label' => \Yii::t('main', 'Носовая загрузочная система'),
                            'content' => '
                            <div class="wr-cont w-100 mt-4 rounded-lg d-lg-block d-none overflow-hidden position-relative" style="aspect-ratio: 16 / 9;">
                                <video autoplay muted loop playsinline 
                                    class="w-100 h-100"
                                    style="object-fit: cover; transform: scale(1.02)">
                                    <source src="/video/iris3.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                            </div>
                            <video autoplay muted loop playsinline 
                                    class="w-100 h-100 d-lg-none"
                                    style="object-fit: cover;">
                                    <source src="/video/iris3.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                            <div class="col-12 py-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Носовая загрузочная система (Арктического типа)") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Greenline Engineering произвел разработку Тандемных швартовных и отгрузочных системы позволяющих безопасно и эффективно производить швартовные и отгрузочные операции между плавучими установками добычи, хранения и отгрузки и нефтяными танкерами, как на миделе, так и с носа судна. Арктическая носовая загрузочная система позволяет осуществлять швартовку челночного танкера к морскому отгрузочному терминалу (стационарному или плавучему), и затем производить отгрузку нефти с морского отгрузочного терминала в челночный танкер. Эта система также может использоваться для отгрузки нефти из танкера на береговой нефтеналивной терминал.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/supply.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 mb-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Арктическая швартовая система (типовая)") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Обеспечивает способ швартовки челночного танкера к морскому или береговому отгрузочному терминалу с помощью синтетического швартова. Соединительной точкой в системе является цепной стопор, предназначенный для фиксации швартова/цепной вставки, и расположенный на открытой палубе бака в диаметральной плоскости носовой части челночного танкера.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/supply2.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                    <div class="text-center">
                                        <img class="stretched-img img-fluid" src="/img/sales-markets/supply3.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты")>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Компоновка системы перекачки жидких грузов") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Обеспечивает способ соединения челночного танкера с морским или береговым отгрузочным терминалом для перекачки нефти с помощью гибкого грузового шланга. Соединительной точкой в ситемме является соединительная муфта грузового шланга, предназначенная для присоединения и удержания концевого крана грузового шланга в фиксированном положении, необходимом для перекачки нефти по грузовому шлангу. Муфта грузового шланга расположена на площадке внутри закрытого помещения манифольда. Помещение манифольда обычно расположено со смещением в сторону левого борта челночного танкера.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/supply4.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-1 pl-lg-5 ">
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Оборудование, успешно опробованное в условиях эксплуатации, сконструированное и изготовленное для применения в самых суровых морских условиях. Все компоненты изготавливаются по заказу компании Greenline на заводе в г. Санкт-Петербург. Все компоненты изделия произведены в России.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/supply5.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ',
                            'active' => true, // Открытый по умолчанию
                            'options' => ['class' => 'tab-content-item']
                        ],
                        [
                            'label' => \Yii::t('main', 'Носовая система налива '),
                            'content' => '
                            <div class="col-12 py-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Носовая загрузочная система (Арктического типа)") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Greenline Engineering произвел разработку Тандемных швартовных и отгрузочных системы позволяющих безопасно и эффективно производить швартовные и отгрузочные операции между плавучими установками добычи, хранения и отгрузки и нефтяными танкерами, как на миделе, так и с носа судна.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/supply6.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-1 pl-lg-5 ">
                                    
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Арктическая носовая загрузочная система позволяет осуществлять швартовку челночного танкера к морскому отгрузочному терминалу (стационарному или плавучему), и затем производить отгрузку нефти с морского отгрузочного терминала в челночный танкер. Эта система также может использоваться для отгрузки нефти из танкера на береговой нефтеналивной терминал.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/supply4.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ',
                            'options' => ['class' => 'tab-content-item']
                        ],
                        [
                            'label' => \Yii::t('main', 'Greenline hoses ®'),
                            'content' => '
                            <div class="col-12 py-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Шланговое оборудование") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Компания Greenline использует современные методы исследований и разработок, связанные с передовыми методами работы с морскими шлангами, что позволяет нам удовлетворять и превосходить требования клиентов в различных условиях эксплуатации, в зависимости от местоположения и среды, в которой будут эксплуатироваться шланги.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <video autoplay muted loop playsinline 
                                    class="w-100 h-100"
                                    style="object-fit: cover;">
                                    <source src="/video/iris4-web.mp4" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                                    </div>
                                </div>
                            </div>
                            ',
                            'options' => ['class' => 'tab-content-item']
                        ],
                    ],
                    'options' => ['class' => 'custom-tabs'], // Дополнительные классы для стилизации
                    'encodeLabels' => false, // Отключаем автоэкранирование, если нужны HTML-символы
                ]); ?>
            </div>
        </div>

</section>