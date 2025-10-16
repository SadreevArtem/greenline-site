<?php

/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;
use yii\bootstrap\Tabs;




$this->title = Yii::t('main', 'Greenline - ') . Yii::t('main', 'Greenline - Проектирование, изготовление и поставка БПЛА');

$this->registerMetaTag([
    'name' => 'description',
    'content' => Yii::t('main', 'Greenline - ') . Yii::t('main', 'Greenline - Проектирование, изготовление и поставка БПЛА'),
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => Yii::t('main', ''),
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
                    - <span> <?php echo Html::a(Yii::t('main', 'Космос и мобильные коммуникации'), ['/sales-markets/space-and-mobile']) ?> </span>
                    - <?php echo Yii::t('main', 'Проектирование, изготовление и поставка БПЛА') ?>
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
                    <h1 class="up-line green"><?php echo Yii::t('main', 'Проектирование, изготовление и поставка БПЛА') ?></h1>
                </div>
            </div>
        </div>
        <div class="  col-12">
            <div class="row item-container d-block">
                <?= Tabs::widget([
                    'items' => [
                        [
                            'label' => \Yii::t('main', 'О разработках'),
                            'content' => '
                            <div class="col-12 pt-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Greenline Space ©: Инновации в беспилотной авиации от идеи до реализации") . '</h3>
                                        <div class="content wr-text">
                                            <p style="text-indent:20px;">' . Yii::t("main", "Департамент Greenline Space © специализируется на создании передовых решений в области беспилотных авиационных систем. Мы осуществляем полный цикл работ: от научных исследований и разработок до серийного производства крупногабаритных беспилотных вертолетов и аппаратов вертикального взлета и посадки (БПЛА).") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/bpla1.jpg" alt="<?php echo Yii::t("main", "Greenline Space ©: Инновации в беспилотной авиации от идеи до реализации") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wr-text py-lg-1 px-4 px-lg-0">
                                <p style="text-indent:20px;">' . Yii::t("main", "Компания обладает глубокими компетенциями в ключевых областях, включая: <br>· Автономные системы управления полетом <br>· Алгоритмы машинного зрения с искусственным интеллектом <br>· Электронно-оптические системы наблюдения <br>· Надежные каналы передачи данных") . '</p>
                            </div>
                            <div class="wr-text py-lg-1 px-4 px-lg-0">
                                <p style="text-indent:20px;">' . Yii::t("main", "Вся деятельность сосредоточена на собственной высокотехнологичной базе в Калининграде, которая объединяет центры исследований и разработок, современное производство, испытательные полигоны, сервисную службу и учебный центр. Это позволяет нам гарантировать высочайшее качество на каждом этапе.") . '</p>
                            </div>
                            <div class="wr-text py-lg-1 px-4 px-lg-0">
                                <p style="text-indent:20px;">' . Yii::t("main", "Мы предлагаем широкий портфель продукции: <br>· Беспилотные вертолеты и БПЛА <br>· Специальная авионика для БПЛА <br>· Беспилотные летательные аппараты с композитным крылом <br>· Интеллектуальные средства тушения пожаров (огнетушащие бомбы)") . '</p>
                            </div>
                            <div class="wr-text py-lg-1 px-4 px-lg-0">
                                <p style="text-indent:20px;">' . Yii::t("main", "Наши технологии надежно служат в таких сферах, как: оборонно-промышленный комплекс, правоохранительная деятельность, гражданская безопасность и чрезвычайное реагирование, энергетика, нефтегазовый сектор, охрана границ и морская навигация и установка буев.") . '</p>
                            </div>
                            ',
                            'active' => true, // Открытый по умолчанию
                            'options' => ['class' => 'tab-content-item']
                        ],
                        [
                            'label' => \Yii::t('main', 'БПЛА GLV-2000'),
                            'content' => '
                            <div class="col-12 py-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "БПЛА GLV-2000") . '</h3>
                                        <div class="content wr-text">
                                            <p style="text-indent:20px;">' . Yii::t("main", "Департамент Greenline Space © разработал модель БПЛА GLV-2000 для нужд Российских потребителей двухвинтовой БПЛА грузоподьемностью до 300 кг, временем полета до 12 часов, и для работы в условиях Арктики при температурах до минус 50 градусов цельсия.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/bpla2.jpg" alt="<?php echo Yii::t("main", "БПЛА GLV-2000") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wr-text py-lg-1 px-4 px-lg-0">
                                <p style="text-indent:20px;">' . Yii::t("main", "GLV-2000 способен работать в любое время суток, т.к. оснащен камерами видео наблюдения и камерами ночного видения, интерфейс устройства полностью на русском языке, поставляется с сертификатом летной годности РОСАВИАЦИИ, сертификатами ТР ТС и РМРС, способен взлетать и садиться в ограниченных пространствах, в том числе и на морские суда, как в ручном, так и в автоматическом режиме, при отсутствии сигнала автоматически возвращается на место взлета.") . '</p>
                            </div>
                             <div class="wr-text py-lg-1 px-4 px-lg-0">
                                <p style="text-indent:20px;">' . Yii::t("main", "GLV-2000 поставляется в специальном морском блок-контейнере с рабочим местом оператора способным работать как автономно, так и подключённым к внешним источникам коммуникаций. Блок-контейнер включает в себя ремонтную зону, в которой в рабочем режиме произвести техническое обслуживание, замену всех без исключения деталей. Максимальная скорость до 90 км/ч, радиус действия до 320 км, размах крыльев – 2,9 метра. Гарантийный срок эксплуатации 36 месяцев.") . '</p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                    <div class="text-center">
                                        <img class="stretched-img img-fluid" src="/img/sales-markets/bpla3.jpg" alt="<?php echo Yii::t("main", "БПЛА GLV-2000")>
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