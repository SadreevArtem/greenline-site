<?php

/**
 * @var $this \yii\web\View
 * @var $id string
 */

use app\components\helpers\Html;

$pages = [
    '160420' => [
        'id' => '160420',
        'title' => Yii::t('main', 'УКПГ для Семаковского ГМ'),
        'meta' => [
            'description' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'УКПГ для Семаковского ГМ'),
            'keywords' => Yii::t('main', 'новости компании'),
            'robots' => 'index, follow',
        ],
        'content' => '
            <section id="news-item" class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-12">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <h2 class="up-line green">' . Yii::t('main', 'УКПГ для Семаковского ГМ') . '</h2>
                                <span class="time">16.04.2020</span>
                                <div class="item-img d-block d-md-none"><img src="/img/news/news_2.jpg" alt="' . Yii::t('main', 'УКПГ для Семаковского ГМ') . '"></div>
                                <p>' . Yii::t('main', 'Компания Greenline завершила разработку дизайна установок УКПГ, и направила свои предложения  ПАО «Газпром» и АО «РусГазДобыча» по проекту разработки Семаковского газового месторождения, расположенного в Ямало-Ненецком автономном округе (ЯНАО).') . '</p>
                                <p>' . Yii::t('main', 'Месторождение расположено в акватории Тазовской губы и частично на суше Тазовского полуострова, относится к категории «крупных» — извлекаемые запасы газа составляют более 320 млрд куб. м.') . '</p>
                                <p>' . Yii::t('main', 'Активная фаза строительно-монтажных работ, в соответствии с графиком реализации проекта, начнется во второй половине 2020 года.') . '</p>
                                <p>' . Yii::t('main', 'Начало промышленной добычи на Семаковском месторождении запланировано на 2022 год. Всего к этому сроку будет построено 19 скважин. Газ будет направляться в газотранспортную систему «Газпрома».') . '</p>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="item-img d-md-block d-none"><img src="/img/news/news_2.jpg" alt="' . Yii::t('main', 'УКПГ для Семаковского ГМ') . '"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        '
    ],
    '220520' => [
        'id' => '220520',
        'title' => Yii::t('main', 'Расширяем ассортимент'),
        'meta' => [
            'description' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'Расширяем ассортимент'),
            'keywords' => Yii::t('main', 'новости компании'),
            'robots' => 'index, follow',
        ],
        'content' => '
            <section id="news-item" class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-12">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <h2 class="up-line green">' . Yii::t('main', 'Расширяем ассортимент') . '</h2>
                                <span class="time">10.05.2020</span>
                                <div class="item-img d-block d-md-none"><img src="/img/news/news_3.jpg" alt="' . Yii::t('main', 'Расширяем ассортимент') . '"></div>
                                <p>' . Yii::t('main', 'В связи с пандемией короновируса COVID-19 компания Greenline расширила ассортимент поставки продукции на Российский рынок, который сейчас включает в себя:') . '
                                <ul>
                                    <li>' . Yii::t('main', 'Моментальные тесты на вирус и антитела COVID-19') . '</li>
                                    <li>' . Yii::t('main', 'Защитные маски') . '</li>
                                    <li>' . Yii::t('main', 'Защитные латексные перчатки') . '</li>
                                    <li>' . Yii::t('main', 'Защитные одноразовые медицинские костюмы') . '</li>
                                </ul>
                                ' . Yii::t('main', 'Все оборудование производится в Корее и отвечает самым высоким мировым стандартам качества.') . '</p>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="item-img d-md-block d-none"><img src="/img/news/news_3.jpg" alt="' . Yii::t('main', 'Расширяем ассортимент') . '"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        '
    ],
    '300320' => [
        'id' => '300320',
        'title' => Yii::t('main', 'Работаем в штатном режиме'),
        'meta' => [
            'description' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'Работаем в штатном режиме'),
            'keywords' => Yii::t('main', 'новости компании'),
            'robots' => 'index, follow',
        ],
        'content' => '
            <section id="news-item" class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-12">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <h2 class="up-line green">' . Yii::t('main', 'Работаем в штатном режиме') . '</h2>
                                <span class="time">30.03.2020</span>
                                <div class="item-img d-block d-md-none"><img src="/img/news/news_1.jpg" alt="' . Yii::t('main', 'Работаем в штатном режиме') . '"></div>
                                <p>' . Yii::t('main', 'В условиях пандемии новой коронавирусной инфекции COVID-19 работники компании Greenline работают в плановом режиме. Заказчики получают поставки оборудования в полном объеме и без просрочек.') . '</p>
                                <p>' . Yii::t('main', 'Так, за время карантинных мер нами были заключены контракты на сопровождение поставок высокотехнологичного оборудования для нужд компании ПАО Газпром нефть, проект Арктические ворота.') . '</p>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="item-img d-md-block d-none"><img src="/img/news/news_1.jpg" alt="' . Yii::t('main', 'Работаем в штатном режиме') . '"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        '
    ],
];

$page = $pages[$id];

$this->title = 'Green Line - ' . $page['title'];

foreach ($page['meta'] as $name => $content) {
    $this->registerMetaTag(['name' => $name, 'content' => $content]);
}

?>

<header id="header" class="container-fluid navigate-header">
    <div class="img-container">
        <img src="/img/headers/news.jpg" alt="Новости">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-12">
                <h1><?php echo Yii::t('main', 'Новости') ?></h1>
                <span class="breadcrumbs">
						<?php echo Html::a(Yii::t('main', 'Главная'), ['/']) ?>
						- <?php echo Html::a(Yii::t('main', 'Новости'), ['/news-list']) ?>
						- <?php echo Html::a($page['title'], ['/news/'. $page['id']], ['class' => 'current']) ?>
					</span>
            </div>
        </div>
    </div>
</header>

<?php echo $page['content']; ?>