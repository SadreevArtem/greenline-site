<?php

/**
 * @var $this \yii\web\View
 * @var $id string
 */

use app\components\helpers\Html;

$pages = [
    '160420' => [
        'id' => '160420',
        'title' => Yii::t('main', 'Посетите мировую энергетическую выставку'),
        'meta' => [
            'description' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'Посетите мировую энергетическую выставку'),
            'keywords' => Yii::t('main', 'новости компании'),
            'robots' => 'index, follow',
        ],
        'content' => '
            <section id="news-item" class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-12">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <h2 class="up-line green">' . Yii::t('main', 'Посетите мировую энергетическую выставку') . '</h2>
                                <span class="time">4-7 Ноября 2024</span>
                                <div class="item-img d-block d-md-none"><img src="/img/news/news_2.jpg" alt="' . Yii::t('main', 'Посетите мировую энергетическую выставку') . '"></div>
                                <p>' . Yii::t('main', 'Проходящая с 4 по 7 ноября 2024 года в Абу-Даби выставка ADIPEC объединяет более 2200 организаций из всего спектра глобальной энергетической экосистемы, чтобы продемонстрировать последние достижения, формирующие будущее энергетики. Объединяя всю энергетическую отрасль, выставка предоставляет предприятиям уникальную возможность наладить партнерские отношения, необходимые для разработки новых бизнес-моделей и инновационных продуктов, которые соответствуют приоритетам развивающейся энергетической экосистемы. ADIPEC предоставит участникам уникальную возможность лично пообщаться с лидерами, новаторами, покупателями и продавцами, которые ведут энергетическую отрасль в будущее. Получите международную точку зрения вместе с профессионалами в области энергетики из 164 стран и присоединитесь к обсуждению вопросов ответственного и устойчивого энергетического перехода.') . '</p>
                                <a rel="nofollow" href="https://www.adipec.com/visit/">' . Yii::t('main', 'Ссылка на источник') .'</a>
                                </div>
                            <div class="col-md-6 col-12">
                                <div class="item-img d-md-block d-none"><img src="/img/news/news_2.jpg" alt="' . Yii::t('main', 'Посетите мировую энергетическую выставку') . '"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        '
    ],
    '220520' => [
        'id' => '220520',
        'title' => Yii::t('main', 'Сотрудники компании Гринлайн на выставке ADIPEC 2024'),
        'meta' => [
            'description' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'Сотрудники компании Гринлайн на выставке ADIPEC 2024'),
            'keywords' => Yii::t('main', 'новости компании'),
            'robots' => 'index, follow',
        ],
        'content' => '
            <section id="news-item" class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-12">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <h2 class="up-line green">' . Yii::t('main', 'Сотрудники компании Гринлайн на выставке ADIPEC 2024') . '</h2>
                                <span class="time">14.11.2024</span>
                                <div class="item-img d-block d-md-none"><img src="/img/news/news_3.jpg" alt="' . Yii::t('main', 'Сотрудники компании Гринлайн на выставке ADIPEC 2024') . '"></div>
                                <p>' . Yii::t('main', 'Сотрудники компании Гринлайн приняли участие в ежегодной выставке ADIPEC, которая прошла в Абу-Даби.') . '
                                ' . Yii::t('main', 'Это одно из крупнейших мировых мероприятий в сфере нефти и газа, объединяющее лидеров отрасли. В рамках выставки наша команда заключила важные международные договоры и партнерские соглашения, а также выделила ключевые направления развития компании на 2025 год.') . '</p>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="item-img d-md-block d-none"><img src="/img/news/news_3.jpg" alt="' . Yii::t('main', 'Сотрудники компании Гринлайн на выставке ADIPEC 2024') . '"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="our-brands" class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-12">
                        <h2 class="up-line green">' . Yii::t('main', 'ADIPEC 2024') . '</h2>
                        <div class="our-brands-carousel owl-carousel owl-theme">
                            <div class="item item-1">' . Html::img('/img/adipec2024/brand_1.jpg', ['alt' => 'Bot']) . '</div>
                            <div class="item item-2">' . Html::img('/img/adipec2024/brand_2.jpg', ['alt' => '']) . '</div>
                            <div class="item item-3">' . Html::img('/img/adipec2024/brand_3.jpg', ['alt' => '']) . '</div>
                            <div class="item item-4">' . Html::img('/img/adipec2024/brand_4.jpg', ['alt' => '']) . '</div>
                            <div class="item item-5">' . Html::img('/img/adipec2024/brand_5.jpg', ['alt' => '']) . '</div>
                            <div class="item item-6">' . Html::img('/img/adipec2024/brand_6.jpg', ['alt' => '']) . '</div>
                            <div class="item item-8">' . Html::img('/img/adipec2024/brand_8.jpg', ['alt' => '']) . '</div>
                            <div class="item item-9">' . Html::img('/img/adipec2024/brand_9.jpg', ['alt' => '`']) . '</div>
                        </div>
                    </div>
        
            </section>
        '
    ],
    '300320' => [
        'id' => '300320',
        'title' => Yii::t('main', 'Galp пробурила первую скважину Mopane 1-A'),
        'meta' => [
            'description' => Yii::t('main', 'Green Line - ') . Yii::t('main', 'Galp пробурила первую скважину Mopane 1-A'),
            'keywords' => Yii::t('main', 'новости компании'),
            'robots' => 'index, follow',
        ],
        'content' => '
            <section id="news-item" class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-12">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <h2 class="up-line green">' . Yii::t('main', 'Galp пробурила первую скважину Mopane 1-A') . '</h2>
                                <span class="time">25.10.2024</span>
                                <div class="item-img d-block d-md-none"><img src="/img/news/news_1.jpg" alt="' . Yii::t('main', 'Galp пробурила первую скважину Mopane 1-A') . '"></div>
                                <p>' . Yii::t('main', 'Португальская компания Galp Energia пробурила первую из четырех разведочных и оценочных скважин Mopane 1-A в ходе второй разведывательно-оценочной кампании на блоках 2813A и 2814B, расположенных в самом сердце Оранжевого бассейна Намибии, вблизи своего крупного нефтегазового месторождения Мопане.') . '</p>
                                <p>' . Yii::t('main', 'По данным португальской компании Galp, геологические ресурсы Мопане составляют 10 млрд бнэ.') . '</p>
                                <a rel="nofollow" href="https://ngv.ru/news/portugalskaya_galp_proburila_pervuyu_skvazhinu_mopane_1_a_v_rayone_mopane_na_shelfe_namibii/">' . Yii::t('main', 'Ссылка на источник') .'</a>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="item-img d-md-block d-none"><img src="/img/news/news_1.jpg" alt="' . Yii::t('main', 'Galp пробурила первую скважину Mopane 1-A') . '"></div>
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