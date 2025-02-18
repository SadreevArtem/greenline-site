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
                    - <?php echo Yii::t('main', 'Проектирование, изготовление и поставка ВПУ') ?>
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
                    <h1 class="up-line green"><?php echo Yii::t('main', 'Проектирование, изготовление и поставка ВПУ') ?></h1>
                </div>
            </div>
        </div>
        <div class="  col-12">
            <div class="row item-container d-block">
                <?= Tabs::widget([
                    'items' => [
                        [
                            'label' => 'Производство и поставка ВПУ',
                            'content' => '
                            <div class="wr-cont flex-lg-row flex-column">
                                <div class="w-lg-50 img-block-1">
                                    <svg width="0" height="0">
                                        <defs>
                                            <clipPath id="bow-shape" clipPathUnits="objectBoundingBox">
                                                <path d="M0,0 L0.204971768,0.686013212 C0.267335649,0.895337737 0.3680394,1 0.507083023,1 C0.646126645,1 0.810432304,1 1,1 L1,0 L0,0 Z"></path>
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div class="image-container">
                                        <svg viewBox="0 0 600 350" class="clip-svg">
                                            <defs>
                                                <clipPath id="img-clip">
                                                    <path d="M0,0 L200,240 C250,310 350,350 500,350 C600,350 600,350 600,350 L600,0 L0,0 Z"></path>
                                                </clipPath>
                                            </defs>
                                            <image xlink:href="/img/sales-markets/vpu.jpg" width="600" height="350" clip-path="url(#img-clip)"></image>
                                        </svg>
                                    </div>
                                </div>
                                <div class="wr-text px-4 px-lg-0">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Производство и поставка ВПУ") . '</h3>
                                    <div class="content">
                                        <p class="mb-0">' . Yii::t("main", "Одним из основных направлений Green Line Offshore & Marine является проектирование, сервисное обслуживание и поставка с) как полностью в сборе, так и поставка узлов и деталей для проведения ремонтов и замены ранее изношенных.") . '</p>
                                    </div>
                                </div>
                            </div>
                            <div class="wr-text py-lg-5 px-4 px-lg-0">
                                <p>' . Yii::t("main", "Мы стремимся предоставлять инновационные решения, которые решают сложные задачи, связанные с морскими операциями по перекачке нефти. Мы осознаем, что морская индустрия постоянно развивается, и стремимся идти на опережение, используя новейшие технологии и передовой опыт для разработки новых инновационных решений.") . '</p>
                            </div>

                            <div class="col-12 mb-lg-5">
                    <div class="row item-container align-items-center mb-lg-5 mb-0">
                        <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                            <div class="content wr-text">
                                <p>' . Yii::t("main", "Мы сотрудничаем с нашими клиентами, чтобы определить их уникальные потребности и задачи, а затем разработать индивидуальные решения, соответствующие их конкретным требованиям. Наша приверженность качеству не имеет аналогов в отрасли. Мы уделяем первостепенное внимание безопасности, надежности и производительности на каждом этапе проектирования, изготовления и монтажа.") . '</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                            <div class="">
                                <img class="stretched-img" src="/img/sales-markets/vpu2.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 py-lg-5">
                    <div class="row item-container align-items-center mb-lg-5 mb-0">
                        <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                            <div class="content wr-text">
                                <p>' . Yii::t("main", "Наша команда опытных инженеров и технических экспертов осуществляет строгий контроль качества, чтобы гарантировать соответствие наших продуктов и услуг самым высоким стандартам. С Green Line клиенты могут быть уверены, что получают продукты и услуги самого высокого качества в отрасли.") . '</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                            <div class="">
                                <img class="stretched-img" src="/img/sales-markets/vpu3.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row item-container align-items-center mb-lg-5 mb-0">
                        <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5">
                            <div class="content wr-text">
                                <p>' . Yii::t("main", "Являясь ведущей инжиниринговой компанией в оффшорной отрасли, Green Line специализируется на проектировании, производстве и установке буевых терминалов, отвечающих самым высоким стандартам качества, безопасности и эффективности. ") . '</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                            <div class="">
                                <img class="stretched-img" src="/img/sales-markets/vpu4.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 py-lg-5">
                    <div class="row item-container align-items-center mb-lg-5 mb-0">
                        <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                            <div class="content wr-text">
                                <p>' . Yii::t("main", "Мы стремимся к постоянному совершенствованию всех аспектов нашей деятельности, от проектирования и производства до их установки и текущего технического обслуживания. Используя новейшие технологии и передовой опыт в отрасли, мы стремимся достигать превосходных результатов, которые максимально увеличивают стоимость оффшорных активов наших клиентов.") . '</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                            <div class="">
                                <img class="stretched-img" src="/img/sales-markets/vpu5.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row item-container align-items-center mb-5">
                        <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5">
                            <div class="content wr-text">
                                <p>' . Yii::t("main", "Компания Green Line с момента своего основания сотрудничает со многими авторитетными международными компаниями, реализуя множество проектов в интересах крупных национальных компаний, в связи с чем за все время появилось множество партнерских отношений с ведущими производителями подобного оборудования в мире.") . '</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                            <div class="">
                                <img class="stretched-img" src="/img/sales-markets/vpu4.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="wr-text mb-5 px-4 px-lg-0">
                    <p>' . Yii::t("main", "Green Line предоставляет комплексные услуги по поставкам, которые охватывают широкий спектр узлов и деталей ВПУ, а также их обвязки. Обладая глубокими знаниями и обширным опытом, Green Line стремится предоставлять материалы и услуги высочайшего качества по наиболее конкурентоспособной цене. Благодаря нашему опыту мы можем помочь заказчику с выбором оборудования по самой оптимальной цене и качеству. Служба закупок Green Line ориентирована не только на экономию средств заказчика, но и на обеспечение максимальной отдачи для компании в области оптимизации проектов. При этом учитываются такие факторы, как качество, надежность, скорость доставки и репутация поставщика.") . '</p>
                </div>
                <div class="col-12 mt-5">
                    <div class="row item-container align-items-center mb-0">
                        <div class="col-md-6 col-12 px-lg-0">
                            <div class="content wr-text">
                                <p>' . Yii::t("main", "Компания Green Line стремится стать ведущим поставщиком терминальных решений для морских операций по перевалке нефти. Мы стремимся помогать нашим клиентам в достижении их бизнес-целей благодаря нашему опыту, инновациям и стремлению к совершенству ") . '</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                            <div class="">
                                <img class="stretched-img" src="/img/sales-markets/vpu6.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                            </div>
                        </div>
                    </div>
                </div>
                            
                            ',
                            'active' => true, // Открытый по умолчанию
                            'options' => ['class' => 'tab-content-item']
                        ],
                        [
                            'label' => 'Основные компоненты',
                            'content' => '<p>В разработке</p>',
                            'options' => ['class' => 'tab-content-item']
                        ],
                        [
                            'label' => 'Аренда ВПУ',
                            'content' => '<p>В разработке</p>',
                            'options' => ['class' => 'tab-content-item']
                        ],
                        [
                            'label' => 'Этапы ведения проектов',
                            'content' => '<p>В разработке</p>',
                            'options' => ['class' => 'tab-content-item']
                        ],
                        [
                            'label' => 'Поставка компонентов',
                            'content' => '<p>В разработке</p>',
                            'options' => ['class' => 'tab-content-item']
                        ],
                        [
                            'label' => 'Складские и сервисные услуги',
                            'content' => '<p>В разработке</p>',
                            'options' => ['class' => 'tab-content-item']
                        ],
                    ],
                    'options' => ['class' => 'custom-tabs'], // Дополнительные классы для стилизации
                    'encodeLabels' => false, // Отключаем автоэкранирование, если нужны HTML-символы
                ]); ?>






            </div>
        </div>

</section>