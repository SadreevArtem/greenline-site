<?php

/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;
use yii\bootstrap\Tabs;
use yii\helpers\Url;



$this->title = Yii::t('main', 'Green Line - ') . Yii::t('main', 'Проектирование, изготовление и поставка cтационарных отгрузочных терминалов');

$this->registerMetaTag([
    'name' => 'description',
    'content' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'Проектирование, изготовление и поставка cтационарных отгрузочных терминалов'),
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => Yii::t('main', 'Проектирование, изготовление и поставка cтационарных отгрузочных терминалов'),
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
                    - <?php echo Yii::t('main', 'Проектирование, изготовление и поставка cтационарных отгрузочных терминалов') ?>
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
                    <h1 class="up-line green"><?php echo Yii::t('main', 'Проектирование, изготовление и поставка cтационарных отгрузочных терминалов') ?></h1>
                </div>
            </div>
        </div>
        <div class="  col-12">
            <div class="row item-container d-block">
                <?= Tabs::widget([
                    'items' => [
                        [
                            'label' =>  \Yii::t('main', 'Проектирование и поставка стационарных ВПУ'),
                            'content' => '
                            <div class="wr-cont w-100 mt-4 px-4 rounded-lg  overflow-hidden position-relative" style="aspect-ratio: 16 / 9;">
                                            <img class="stretched-img" src="/img/sales-markets/stu2.jpeg" alt="<?php echo Yii::t("main", "Шельфовые проекты и морские порты") ?>
                                
                            </div>
                            
                            
                            <div class="wr-text pt-lg-5 pt-3 mb-1 px-4 px-lg-0">
                                <p style="text-indent:30px;">' . Yii::t("main", "Стационарное Выносное Причальное Устройство, разработанное компанией Greenline Engineering совместно с крупнейшими лидерами отрасли обеспечивает безопасную круглогодичную погрузку танкеров с носовой станции как в открытом море, так и в водах, покрытых льдом, без необходимости в причале или волнорезе. Башня крана вращается неограниченно, как под управлением, так и свободно, когда наливная система присоединена к танкеру.") . '</p>
                            </div>

                            

                

               

                
                


                <div class="wr-text mb-3 px-4 px-lg-0">
                    <p style="text-indent:30px;">' . Yii::t("main", "Поскольку это беспилотный объект, он безопасно управляется с помощью удаленных портативных блоков управления и береговой базы. Башня оснащена высокоспециализированными конструкциями, материалами и оборудованием, которые были испытаны и работают в полевых условиях и имеют колоссальный рабочий опыт в различных климатических условиях.") . '</p>
                </div>
                 <div class="wr-text mb-5 px-4 px-lg-0">
                    <p style="text-indent:30px;">' . Yii::t("main", "Наши квалифицированные шланги Greenline Hoses © большого диаметра позволяют круглый год перекачивать углеводороды, а также криогенные жидкости, такие как СПГ. В комплект поставки могут входить линии возврата паров. На стадии разработки находятся системы перекачки сжиженного водорода и сжиженного CO2.") . '</p>
                </div>
                
                            
                            ',
                            'active' => true, // Открытый по умолчанию
                            'options' => ['class' => 'tab-content-item']
                        ],
                        [
                            'label' =>  \Yii::t('main', 'Основные компоненты'),
                            'content' => '
                       
                            
                           
                            
                            
                           
                            
                            
                            ',
                            'options' => ['class' => 'tab-content-item']
                        ],
                        [
                            'label' => \Yii::t('main', 'Поставка компонентов'),
                            'content' => '
                           
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