<?php

/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;
use yii\bootstrap\Tabs;
use yii\helpers\Url;



$this->title = Yii::t('main', 'Green Line - ') . Yii::t('main', 'Проектирование, изготовление и поставка Выносных причальных устройств ВПУ');

$this->registerMetaTag([
    'name' => 'description',
    'content' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'Производство и поставка ВПУ, Аренда ВПУ, Ведение проектов, поставка компонентов'),
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => Yii::t('main', 'изготовление и поставка Выносных причальных устройств ВПУ'),
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
                    - <?php echo Yii::t('main', 'Проектирование, изготовление и поставка ВПУ') ?>
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
                    <h1 class="up-line green"><?php echo Yii::t('main', 'Проектирование, изготовление и поставка ВПУ') ?></h1>
                </div>
            </div>
        </div>
        <div class="  col-12">
            <div class="row item-container d-block">
                <?= Tabs::widget([
                    'items' => [
                        [
                            'label' =>  \Yii::t('main', 'Производство и поставка ВПУ'),
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
                                        <p class="mb-0">' . Yii::t("main", "Одним из основных направлений Green Line Offshore & Marine является проектирование, сервисное обслуживание и поставка как полностью в сборе, так и поставка узлов и деталей для проведения ремонтов и замены ранее изношенных.") . '</p>
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
                                <p>' . Yii::t("main", "Являясь ведущей инжиниринговой компанией в оффшорной отрасли, Green Line специализируется на проектировании, производстве и установке буевых терминалов, отвечающих самым высоким стандартам качества, безопасности и эффективности.") . '</p>
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
                                <img class="stretched-img" src="/img/sales-markets/vpu7.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="wr-text mb-5 px-4 px-lg-0">
                    <p>' . Yii::t("main", "Green Line предоставляет комплексные услуги по поставкам, которые охватывают широкий спектр узлов и деталей ВПУ, а также их обвязки. Обладая глубокими знаниями и обширным опытом, Green Line стремится предоставлять материалы и услуги высочайшего качества по наиболее конкурентоспособной цене. Благодаря нашему опыту мы можем помочь заказчику с выбором оборудования по самой оптимальной цене и качеству. Служба закупок Green Line ориентирована не только на экономию средств заказчика, но и на обеспечение максимальной отдачи для компании в области оптимизации проектов. При этом учитываются такие факторы, как качество, надежность, скорость доставки и репутация поставщика.") . '</p>
                </div>
                <div class="col-12 mt-5">
                    <div class="row item-container align-items-center mb-0">
                        <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                            <div class="content wr-text">
                                <p>' . Yii::t("main", "Компания Green Line стремится стать ведущим поставщиком терминальных решений для морских операций по перевалке нефти. Мы стремимся помогать нашим клиентам в достижении их бизнес-целей благодаря нашему опыту, инновациям и стремлению к совершенству.") . '</p>
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
                            'label' =>  \Yii::t('main', 'Основные компоненты'),
                            'content' => '
                             <div class="col-12 mb-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Буй с вращающейся частью и оборудованием") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Корпус буя представляет собой круглую, полностью сварную стальную конструкцию, разделенную минимум на семь (минимум шесть радиальных и одна центральная) частей, отделенных радиальными переборками. Днище оснащено юбкой и вмещает 6 (шесть) стопоров якорной цепи. На верхней палубе в конструкцию корпуса центрального колодца встроена механически обработанная опорная конструкция для главного роликоподшипника.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/main.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wr-text py-lg-5 px-4 px-lg-0">
                                <p>' . Yii::t("main", "Сварная пластинчатая поворотная платформа имеет коробчатую конструкцию и устанавливается над корпусом буя при помощи главного роликоподшипника. В целом поворотная платформа включает в состав следующие элементы: швартовную платформу, трубопроводную платформу, балластную платформу и центральную поворотную платформу.") . '</p>
                            </div>
                            <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Швартовные тросы и якорная система (сваи и цепи)") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Шесть опор стопора якорной цепи соединяются в юбке корпуса выносного причала, обеспечивая работу цепного стопора. Для крепления выносного точечного причала в стопорах якорной цепи устанавливаются шесть якорных опор без распорок. Якорная система включает 6 свай.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/main2.jpeg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Система перекачки среды, включая подводные и плавучие шланги") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Компоненты:<br>Система плавучих шлангов (плавучий шланг, разрывные муфты, муфты с эксцентриковым зажимом, шаровые краны и т. д.),<br>Система трубопроводов на корпусе буя (трубопровод, вертлюг, клапаны, трубный компенсатор и т. д.),<br>Система подводных шлангов (подводные шланги, поплавки и т. д.),<br>Система оконечного манифольда (трубопроводы, шаровые краны с дистанционным управлением и т. д.)") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/main3.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Система швартовных тросов для танкеров") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Длина швартовного троса, включая трос и цепь в обмотке, определяется таким образом, чтобы сохранять расстояние между причальным буем CALM и носовой частью танкера. Во время разгрузочных операций швартовной трос будет постоянно натянут благодаря помощи одного буксира, прикрепленного к корме танкера и оттягивающего танкер.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/main4.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wr-text py-lg-5 px-4 px-lg-0">
                                <p>' . Yii::t("main", "В состоянии простоя (без выполнения разгрузки) трос остается присоединенным к причальному бую CALM. Следует предусмотреть защиту троса от зацепления/повреждения при его трении о буй CALM и прочие приспособления. Также нужно следить за тем, чтобы концы отсоединенного якорного троса не погружались в воду.") . '</p>
                            </div>
                            <div class="col-12 mb-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Оконечный манифольд") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Оконечный манифольд обеспечивает соединение между причальным буем и трубопроводами через подводные шланги. Он представляет собой сеть трубопроводов, расположенных на металлоконструкции. Компоненты оконечного манифольда: трубопровод, опорная конструкция, клеть.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/main5.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Система управления выносными точечными причалами ВПУ") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Система управления выносными точечными причалами ВПУ разрабатывается в строгом соответствии с международными и местными нормами и стандартами. Система солнечных панелей, Навигационное оборудование, в том числе сигнальный фонарь, туманный горн, радиолокационный отражатель, Беспроводная система, Блок управления RTUa/RTUB") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/main6.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Датчик давления, датчик температуры, датчик скребков и т. д., Система проверки натяжения швартовного троса, Блок управления PTU, Блок управления MTU, Гидравлический силовой агрегат, Кабель управления") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/main7.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ',
                            'options' => ['class' => 'tab-content-item']
                        ],
                        [
                            'label' =>  \Yii::t('main', 'Аренда ВПУ'),
                            'content' => '
                            <div class="col-12 mb-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Аренда ВПУ") . '</h3>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/rent.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Инжиниринг") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Мы выполняем любое инженерное проектирование или расчеты, связанные с морскими швартовными системами. Наша команда конструкторов будет тесно сотрудничать с заказчиком, чтобы предложить решения, соответствующие потребностям каждого клиента.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/rent2.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Сборка") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Наша команда состоит из высококвалифицированного и мотивированного персонала, который способен выполнить все работы, связанные с изготовлением и конструкцией буевых систем.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/rent3.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Установка") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Наши морские инженеры контролируют этапы монтажа и ввода в эксплуатацию каждого проекта.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/rent4.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Производимые в г. Санкт-Петербург Выносные Причальные Устройства по заказу компании Green Line могут быть предоставлены в аренду на длительный период эксплуатации в комплекте со шланговым оборудованием, за более подробной информацией просьба обратиться в Департамент Green Line Offshore & Marine.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/rent5.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wr-text py-lg-5 px-4 px-lg-0">
                                <p>' . Yii::t("main", "Аренда ВПУ у компании Green Line убирает проблемы заказчиков связанные с сервисным обслуживанием ВПУ, т. к. оборудование меняется на новое в каждый период аренды.  Все поставляемое оборудование имеет сертификацию РМРС. Компания Green Line уделяет большое внимание качеству и надежности во всех своих услугах. Это обязательство гарантирует, что проекты выполняются в соответствии с самыми высокими стандартами. Срок производства ВПУ после согласования технической документации составляет 8 месяцев.") . '</p>
                            </div>
                            <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Компания Green Line первая в мире переработала «классическую» конструкцию по изготовлению ВПУ и может предоставить заказчику доставку ВПУ с помощью автоперевозок в любой порт, где будет произведена финальная сборка. Данное предложение позволит заказчику убрать морскую перевозку и снизить ряд логистических затрат. Перевозка осуществляется с помощью обычных морских контейнеров и исключает необходимость привлекать спецтранспорт и наносить урон дорожному полотну.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/rent6.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ',
                            'options' => ['class' => 'tab-content-item']
                        ],
                        [
                            'label' => \Yii::t('main', 'Этапы ведения проектов'),
                            'content' => '
                            <div class="col-12 mb-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Ведение проекта") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Опираясь на помощь крупных партнёров, Компания Green Line осуществляет реализацию проекта в рамках единого консолидированного контракта, начиная с этапов проектирования и закупок и заканчивая строительством и передачей объекта в эксплуатацию.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/pr.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wr-text py-lg-5 px-4 px-lg-0">
                                <p>' . Yii::t("main", "Пример основных этапов работы компании Green Line над проектами разработки, изготовления и поставок ВПУ:") . '</p>
                            </div>
                            <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Первый этап: Получение и размещение заказа") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "На первом этапе проводится юридическая проверка контрактных обязательств, происходит предварительное изготовление и подписание первичных договоров с субпоставщиками, а также согласование банковских гарантий и выделение бюджета на реализацию проекта.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/pr2.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Второй этап: Выделение отдельной команды для работы над проектом") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "После подписания договора и передачи проекта в Отдел по реализации проектов на каждый проект по изготовлению ВПУ выделяется отдельный ряд сотрудников, которые контролируют процесс изготовления 24/7. По согласованию с заказчиком возможно нахождения сотрудников Green Line непосредственно в офисе заказчика, для проведения более оперативной работы над проектом.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/pr3.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Руководитель Проекта управляет проектами строительства морских объектов более пятнадцати лет. Члены команды имеют не менее десяти лет опыта работы на аналогичных проектах. Система комплексного управления проектами строительства морских объектов: система управления качеством, система ОТ, ПБ и ОС, система управления планированием, система управления документооборотом и т. д.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/pr4.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Этап третий: Разработка конструкторской документации") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Компания Green Line имеет в штате инженеров по проектированию систем ВПУ и имеет богатый опыт проектирования морских объектов. Для разработки новых узлов или обвязки ВПУ Green Line привлекает для работы партнерскую компанию со штатом более 200 конструкторов, имеющих огромный опыт в подобных проектах.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/pr5.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Этап четвертый: Согласование документации с заказчиком и РМРС") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Проектная группа имеет многолетний опыт проектирования и согласования рабочей документации морских объектов, в частности систем выносных причальных установок ВПУ. Штат укомплектован высококвалифицированным персоналом и включает специалистов по всем соответствующим дисциплинам по проектированию ВПУ, включая анализ швартовки, анализ водоотделительной колонны, статический анализ оконечного манифольда, анализ свайного фундамента, проектирование конструкций, расчет прочности конструкций, технологические трубопроводы, механические, электрические, гидравлические системы и т. д.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/pr6.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Этап пятый: Согласование финальных рабочих чертежей") . '</h3>
                                       
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/pr7.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Для разработки чертежей и проведения расчетов, компания Green Line использует целый ряд программного обеспечения, такие как:<br>AUTOCAD, КОМПАС: Проектные чертежи<br>ANSYS и AQWA:	Гидродинамический анализ, анализ движения, анализ швартовки<br>Solidworks: Проектные чертежи<br>MSC Patran и Nastran:Расчет и анализ конструкций<br>Hammer V8i: Анализ потока в трубопроводах <br>DNV Sesam:	Анализ устойчивости<br>Solidworks Electrical:	Проектирование электротехнической части") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/pr8.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Этап шестой: План контроля качества / ITP / PQR/ WPS") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Имея в штате менеджеров по качеству, компания в непрерывном режиме следует согласованному производственному плану и присутствует на всех этапах испытаний.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/pr9.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Этап седьмой: Закупка материалов") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Для изготовления ВПУ компания Green Line производит закупку только высококачественных материалов, аудит поставщиков производится на ежегодной основе.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/pr10.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Этап восьмой: Изготовление корпуса буя, поворотного стола, цепных стопоров") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "По согласованию с заказчиком, компания Green Line производит основные компоненты как на производстве в г. Санкт-Петербург или г. Калининград, так и Голландии или ОАЭ на высококвалифицированных вервях имеющих огромный опыт по изготовлению подобных конструкций.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/pr11.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Этап девятый: Покраска готовых деталей") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Компания Green Line использует передовые лакокрасочные компоненты производства компании Hempel или Luton. Толщина покрытия грунтом и краской одинакова на всех поверхностях и соответствует согласованному Техническому Заданию.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/pr12.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Этап десятый: Поставка основных подшипников, шарнирных соединений, незакрепленных деталей") . '</h3>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/pr13.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Этап одиннадцатый: Сборка и внутренние испытания") . '</h3>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/pr14.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Этап Двенадцатый: Финальные приемочные испытания с заказчиком") . '</h3>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/pr15.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                        <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Этап тринадцатый: Упаковка и отгрузка") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Транспортировка готовых изделий производится как силами заказчика, так и Отделом логистики компании Green Line, имеющей многолетний опыт отгрузок подобного оборудования по всему миру.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/pr16.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ',
                            'options' => ['class' => 'tab-content-item']
                        ],
                        [
                            'label' => \Yii::t('main', 'Поставка компонентов'),
                            'content' => '
                            <div class="col-12 mb-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Шланговое оборудование") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "В рамках нашего бизнеса мы очень гордимся качеством и надежностью продуктами и услугами наших партнеров, которые являются лидерами отрасли, и мы уверены, что они превосходят потребности отрасли. Наше стремление превзойти ожидания заказчиков и предоставить непревзойденный опыт является ключом к тому, чтобы мы обеспечивали заказчикам высокую отдачу от их инвестиций, что ведет к более успешному партнерству и полной удовлетворенности клиентов.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/hose.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Благодаря нашей приверженности качеству, продукция наших партнеров не только соответствует стандартам, используемым в нашей отрасли, но и превосходит их, Green Line гордится тем, что является партнером производителей шлангов, который имеют сертификаты API Q1, API 17K, ISO 9001:2015 и оборудования, работающего под давлением с аккредитацией по директиве PED 2014/68/EU.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/hose2.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Шланги по стандарту API 17K") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Специализированные методы проектирования и испытаний, разработанные квалифицированными специалистами сторонних организаций, дополняют наш многолетний опыт работы в полевых условиях. Это позволяет разрабатывать шланги на определенный срок службы в определенных заказчиком условиях. Линейка морских разгрузочных шлангов API 17K разработана и изготовлена таким образом, чтобы обеспечить решение для самых сложных условий эксплуатации, как правило, превосходящее самые современные отраслевые показатели.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/hose3.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                    <h3 class="h3 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Почему стоит выбрать шланг API 17K?") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "&#8226; Решения с большими выбором проходных диаметров до 30 дюймов<br>&#8226; Расчетный срок службы до 20 лет <br>&#8226; Конструкция с гладкими внутренними поверхностями обеспечивает экономию затрат на перекачку (по сравнению с традиционными решениями без склеивания) <br>&#8226; Экономия затрат на монтаж (по сравнению с линиями из стали или карбона) <br>&#8226; Более высокое расчетное давление") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/hose4.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Швартовые канаты") . '</h3>
                                       
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/hose5.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Компания Green Line является одним из немногих одобренных и сертифицированных поставщиков одноточечных швартовных канатов на ряд Российских объектов, компания соединяет снабжение канатов, шекелей и шекелей в одной связке для крупнейших нефтегазовых компаний с транспортными узлами на промежуточном этапе цепочки поставок.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/hose6.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Шаровые краны") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Green Line поставляет Подводные шаровые краны по API 6DSS <br>&#8226; С одним или двумя шарами <br>&#8226; Боковой или верхний ввод <br>&#8226; В размерах От ½  до 64 <br>&#8226; Класс давления от 150 до API 6A 15.000") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/valve.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">

                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Компания Green Line – единственная компания России, которая может производить шаровые краны по API 6DSS в России. Для каждого случая применения разрабатывается специальная конструкция, гарантирующая требуемый уровень производительности в течение всего прогнозируемого срока службы клапана.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/valve2.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wr-text py-lg-5 px-4 px-lg-0">
                                <p>' . Yii::t("main", "Специальная команда занимается проектированием, изготовлением и испытаниями специально изготовленных клапанов для подводного использования (мелководного или глубоководного).  Тщательный контроль качества и испытания, а также передовые инструменты проектирования (конечно-элементное моделирование, анализ усталости, вычислительная гидродинамика и т.д.) способствуют повышению производительности клапанов. Имеется внутреннее испытательное оборудование для проведения гидростатических и газовых испытаний при давлении до 1500 бар.") . '</p>
                            </div>
                            <div class="col-12 mb-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Поворотный блок (Вертлюг) и Основной подшипник") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Основанный на проверенных технологиях, лучших отраслевых практиках и богатом опыте проектирования подход к индивидуальному проектированию с использованием модульных компонентов позволяет Green Line использовать широкий спектр конфигураций труб с одно-, двух- и трехходовыми поворотными узлами.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/ver1.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Благодаря использованию самых современных систем уплотнений и подшипников, поворотный буй обеспечивает полное вращение, обеспечивая при этом перекачку широкого спектра продуктов, включая нефть, сжиженный газ, воду и другие жидкости, а также может быть оснащен электрическими и гидравлическими магистралями. Благодаря встроенной системы подшипников и уплотнений в модульную центральную поворотную ступицу верхний или нижний поворотный узел или поворотную ступицу можно легко демонтировать и отремонтировать в течение проектного срока службы или заменить по мере изменения проектных требований.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/ver2.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Эта модульная система также позволяет Green Line проводить статические и динамические заводские приемочные испытания системы уплотнения подшипников, в то время как остальные верхние и нижние узлы изготавливаются и подвергаются механической обработке, что сокращает время выполнения заказа и снижает риск. Это также обеспечивает большую гибкость при проектировании поворотных интерфейсов, поскольку Green Line предлагает одно-, двух- и трехканальные конструкции с каналами подачи жидкости диаметром от 16 дюймов и выше.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/ver3.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Прецизионные системы уплотнения позволяют перекачивать различные жидкости, включая нефть, газ и воду, а шарнирные соединения ВПУ могут также оснащаться электричеством, волоконной оптикой и гидравлическим питанием с помощью электрических контактных колец и/или многоходовых гидравлических шарнирных соединений. Поворотный блок (Вертлюг) является важнейшим компонентом в конструкции буев, поскольку он обеспечивает передачу жидкостей, электроэнергии и волоконной оптики между неподвижной геостационарной частью и вращающейся флюгерной частью системы.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/ver4.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wr-text py-lg-5 px-4 px-lg-0">
                                <p>' . Yii::t("main", "Поворотные трубы могут различаться по сложности, и в Green Line мы разрабатываем и изготавливаем наши собственные поворотные трубы на производственной площадке в г. Санкт-Петербург, используя запатентованные гидравлические, электрические и волоконно-оптические поворотные элементы. Наши разработки включают в себя шарниры для сырой нефти, газа, пневматические и тороидальные гидравлические шарниры высокого давления для различных применений.") . '</p>
                            </div>
                            <div class="col-12 mb-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Цепи и бридели") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Мы стремимся превзойти ожидания наших клиентов, предоставляя экономичные и эффективные решения для швартовки с помощью качественных продуктов и услуг.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/chain.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Морская цепь - это специально разработанные цепи, используемые в различных морских целях, в частности для постановки на якорь и швартовки. Эти цепи спроектированы таким образом, чтобы выдерживать суровые условия морской среды, включая коррозию, истирание и высокие нагрузки.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/chain2.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Лебедки") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Компания Green Line готова поставить различные лебедочные системы как собственного производства, изготовленного в г. Санкт-Петербург, так и лебедки от ведущих мировых производителей. Канатная лебедка представляет собой разновидность барабанной лебедки, на которую наматывается канат. Барабан предназначен для спуска, извлечения и хранения каната. Во время работы лебедки барабан вращается таким образом, чтобы наматывать канат внутрь и наружу.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/winch.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Возникающее в результате этого натяжение позволяет поднимать или тянуть тяжелый груз. Наши лебедки бывают различных конструкций - от лебедок с электрическим приводом до лебедок с гидравлическим приводом. Мы также можем спроектировать и сконструировать лебедку по индивидуальному заказу в соответствии с вашими конкретными требованиями к подъему и вытягиванию.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/winch2.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                    <h3 class="h1 mb-4 font-weight-bold scaled-text">' . Yii::t("main", "Разрывная муфта и клапан рукава") . '</h3>
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Компания Green Line устанавливает на свои наливные системы лучшие клапаны рукава и разрывные муфты.") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/valv.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="wr-text py-lg-5 px-4 px-lg-0">
                                <p>' . Yii::t("main", "Из особенностей поставляемых клапанов можно выделить следующие:") . '</p>
                            </div>
                            <div class="col-12 py-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 pr-lg-5">
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "• Лепестки клапанов снабжены нитриловыми уплотнительными кольцами и имеют конструкцию с перекрытием, обеспечивающую минимальную утечку <br>• Новые болты из титанового сплава увеличивают срок службы и обеспечивают постоянную разрывную нагрузку. <br>• Повторная сборка на месте после активации <br>• 5-летние интервалы технического обслуживания, а также профилактическое обслуживание и испытания на месте") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/valv2.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-lg-5 mt-lg-5">
                                <div class="row item-container align-items-center mb-lg-5 mb-0">
                                    <div class="col-md-6 col-12 px-lg-0 order-lg-1 pl-lg-5 ">
                                        <div class="content wr-text">
                                            <p>' . Yii::t("main", "Полнопроходное отверстие – отсутствие помех на пути потока при нулевой потере давления <br>• Центральная втулка защищает лепестки клапана от загрязнения продуктом <br>• Инновационная система демпфирования <br>• Пассивная работа, внешний источник энергии не требуется <br>• Снабжен фланцами для прямого крепления болтами к фланцу шланга") . '</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 px-lg-0 mb-4 mb-lg-0">
                                        <div class="">
                                            <img class="stretched-img" src="/img/sales-markets/valv3.jpg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ',
                            'options' => ['class' => 'tab-content-item']
                        ],
                        // [
                        //     'label' => 'Складские и сервисные услуги',
                        //     'content' => '<p>В разработке</p>',
                        //     'options' => ['class' => 'tab-content-item']
                        // ],
                    ],
                    'options' => ['class' => 'custom-tabs'], // Дополнительные классы для стилизации
                    'encodeLabels' => false, // Отключаем автоэкранирование, если нужны HTML-символы
                ]); ?>






            </div>
        </div>

</section>