<?php

/**
 * @var $this \yii\web\View
 * @var $id string
 */

$pages = [
    '160420' => [
        'id' => '160420',
        'title' => 'УКПГ для Семаковского ГМ',
        'meta' => [
            'description' => 'Green Line - УКПГ для Семаковского ГМ',
            'keywords' => 'новости компании',
            'robots' => 'index, follow',
        ],
        'content' => '
            <section id="news-item" class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-12">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <h2 class="up-line green">УКПГ для Семаковского ГМ</h2>
                                <span class="time">16.04.2020</span>
                                <div class="item-img d-block d-md-none"><img src="/img/news/news_2.jpg" alt="УКПГ для Семаковского ГМ"></div>
                                <p>Компания Greenline завершила разработку дизайна установок УКПГ, и направила свои предложения  ПАО «Газпром» и АО «РусГазДобыча» по проекту разработки Семаковского газового месторождения, расположенного в Ямало-Ненецком автономном округе (ЯНАО).</p>
                                <p>Месторождение расположено в акватории Тазовской губы и частично на суше Тазовского полуострова, относится к категории «крупных» — извлекаемые запасы газа составляют более 320 млрд куб. м.</p>
                                <p>Активная фаза строительно-монтажных работ, в соответствии с графиком реализации проекта, начнется во второй половине 2020 года.</p>
                                <p>Начало промышленной добычи на Семаковском месторождении запланировано на 2022 год. Всего к этому сроку будет построено 19 скважин. Газ будет направляться в газотранспортную систему «Газпрома».</p>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="item-img d-md-block d-none"><img src="/img/news/news_2.jpg" alt="УКПГ для Семаковского ГМ"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        '
    ],
    '220520' => [
        'id' => '220520',
        'title' => 'Расширяем ассортимент',
        'meta' => [
            'description' => 'Green Line - Расширяем ассортимент',
            'keywords' => 'новости компании',
            'robots' => 'index, follow',
        ],
        'content' => '
            <section id="news-item" class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-12">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <h2 class="up-line green">Расширяем ассортимент</h2>
                                <span class="time">10.05.2020</span>
                                <div class="item-img d-block d-md-none"><img src="/img/news/news_3.jpg" alt="Расширяем ассортимент"></div>
                                <p>В связи с пандемией короновируса COVID-19 компания Greenline расширила ассортимент поставки продукции на Российский рынок, который сейчас включает в себя:
                                <ul>
                                    <li>Моментальные тесты на вирус и антитела COVID-19</li>
                                    <li>Защитные маски</li>
                                    <li>Защитные латексные перчатки</li>
                                    <li>Защитные одноразовые медицинские костюмы</li>
                                </ul>
                                Все оборудование производится в Корее и отвечает самым высоким мировым стандартам качества.</p>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="item-img d-md-block d-none"><img src="/img/news/news_3.jpg" alt="Расширяем ассортимент"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        '
    ],
    '300320' => [
        'id' => '300320',
        'title' => 'Работаем в штатном режиме',
        'meta' => [
            'description' => 'Green Line - Работаем в штатном режиме',
            'keywords' => 'новости компании',
            'robots' => 'index, follow',
        ],
        'content' => '
            <section id="news-item" class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-12">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <h2 class="up-line green">Работаем в штатном режиме</h2>
                                <span class="time">30.03.2020</span>
                                <div class="item-img d-block d-md-none"><img src="/img/news/news_1.jpg" alt="Работаем в штатном режиме"></div>
                                <p>В условиях пандемии новой коронавирусной инфекции COVID-19 работники компании Greenline работают в плановом режиме. Заказчики получают поставки оборудования в полном объеме и без просрочек.</p>
                                <p>Так, за время карантинных мер нами были заключены контракты на сопровождение поставок высокотехнологичного оборудования для нужд компании ПАО Газпром нефть, проект Арктические ворота.</p>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="item-img d-md-block d-none"><img src="/img/news/news_1.jpg" alt="Работаем в штатном режиме"></div>
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
                <h1>Новости</h1>
                <span class="breadcrumbs">
						<a href="/">Главная</a>
						- <a href="/news-list">Новости</a>
						- <a href="/news/<?php echo $page['id'] ?>>" class="current"><?php echo $page['title'] ?></a>
					</span>
            </div>
        </div>
    </div>
</header>

<?php echo $page['content']; ?>