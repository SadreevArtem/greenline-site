<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $legal array */

$isEnglish = strpos(Yii::$app->language, 'en') === 0;
$effectiveDate = $isEnglish ? $legal['effectiveDateEn'] : $legal['effectiveDate'];
$operatorName = $isEnglish ? $legal['operatorNameEn'] : $legal['operatorName'];
$address = $isEnglish ? $legal['addressEn'] : $legal['address'];

$this->title = $isEnglish
    ? 'Consent to Personal Data Processing'
    : 'Согласие на обработку персональных данных';
$this->registerMetaTag([
    'name' => 'description',
    'content' => $isEnglish
        ? 'Consent of a Greenline website user to personal data processing.'
        : 'Согласие пользователя сайта Greenline на обработку персональных данных.',
]);
?>

<main class="legal-page">
    <div class="container">
        <article class="legal-document">
            <h1><?= Html::encode($this->title) ?></h1>
            <?php if ($isEnglish): ?>
            <p class="legal-document__meta">Revision dated <?= Html::encode($effectiveDate) ?> · Version <?= Html::encode($legal['consentVersion']) ?></p>

            <p>Acting freely, voluntarily and in my own interest, I hereby consent to the personal data operator specified below processing my personal data under the terms of this Consent.</p>

            <h2>1. Personal Data Operator</h2>
            <dl class="legal-details">
                <dt>Operator</dt><dd><?= Html::encode($operatorName) ?></dd>
                <dt>Taxpayer Identification Number (INN)</dt><dd><?= Html::encode($legal['inn']) ?></dd>
                <dt>Primary State Registration Number (OGRN)</dt><dd><?= Html::encode($legal['registrationNumber']) ?></dd>
                <dt>Address</dt><dd><?= Html::encode($address) ?></dd>
                <dt>Email for personal data enquiries</dt><dd><?= Html::encode($legal['privacyEmail']) ?></dd>
            </dl>

            <h2>2. Personal Data</h2>
            <p>This Consent applies to the name, email address, organisation name (if provided), and comment submitted through the “Submit Your Request” form.</p>

            <h2>3. Purposes of Processing</h2>
            <p>Receiving and processing the user’s enquiry; contacting the user; preparing and sending a response; and providing information about services at the user’s request.</p>

            <h2>4. Processing Operations and Methods</h2>
            <p>The Operator may collect, record, organise, accumulate, store, rectify and update, retrieve, use, disclose to persons processing data on the Operator’s behalf, block, delete, and destroy personal data.</p>
            <p>Processing may be automated, non-automated, or combined.</p>

            <h2>5. Duration and Withdrawal</h2>
            <p>This Consent remains valid until the purposes of processing have been achieved or until it is withdrawn by the user, unless another legal basis for processing applies.</p>
            <p>To withdraw consent, the user must send a request to <?= Html::encode($legal['privacyEmail']) ?>. The request must make it possible to identify the previously submitted enquiry and must contain a demand to stop processing personal data.</p>

            <h2>6. Public Disclosure</h2>
            <p>Personal data is not intended for distribution to an unlimited number of persons and is not made publicly available.</p>

            <p class="legal-document__meta">Revision date: <?= Html::encode($effectiveDate) ?>.</p>
            <?php else: ?>
            <p class="legal-document__meta">Редакция от <?= Html::encode($effectiveDate) ?> · Версия <?= Html::encode($legal['consentVersion']) ?></p>

            <p>Я свободно, своей волей и в своём интересе даю согласие оператору персональных данных, указанному ниже, на обработку моих персональных данных на условиях настоящего согласия.</p>

            <h2>1. Оператор персональных данных</h2>
            <dl class="legal-details">
                <dt>Оператор</dt><dd><?= Html::encode($operatorName) ?></dd>
                <dt>ИНН</dt><dd><?= Html::encode($legal['inn']) ?></dd>
                <dt>ОГРН/ОГРНИП</dt><dd><?= Html::encode($legal['registrationNumber']) ?></dd>
                <dt>Адрес</dt><dd><?= Html::encode($address) ?></dd>
                <dt>Email для обращений по персональным данным</dt><dd><?= Html::encode($legal['privacyEmail']) ?></dd>
            </dl>

            <h2>2. Персональные данные</h2>
            <p>Согласие распространяется на имя, адрес электронной почты, наименование организации (если указано) и текст комментария, переданные через форму «Оставить заявку».</p>

            <h2>3. Цели обработки</h2>
            <p>Получение и обработка обращения пользователя; связь с пользователем; подготовка и направление ответа; предоставление информации об услугах по инициативе пользователя.</p>

            <h2>4. Действия и способы обработки</h2>
            <p>Оператор вправе осуществлять сбор, запись, систематизацию, накопление, хранение, уточнение и обновление, извлечение, использование, предоставление лицам, обрабатывающим данные по поручению оператора, блокирование, удаление и уничтожение персональных данных.</p>
            <p>Обработка может выполняться автоматизированным, неавтоматизированным и смешанным способами.</p>

            <h2>5. Срок действия и отзыв</h2>
            <p>Согласие действует до достижения целей обработки либо до его отзыва пользователем, если отсутствуют другие законные основания для обработки.</p>
            <p>Для отзыва согласия пользователь направляет обращение на email <?= Html::encode($legal['privacyEmail']) ?>. Обращение должно позволять идентифицировать ранее направленную заявку и содержать требование прекратить обработку персональных данных.</p>

            <h2>6. Распространение данных</h2>
            <p>Персональные данные не предназначены для распространения среди неограниченного круга лиц и не публикуются.</p>

            <p class="legal-document__meta">Дата редакции: <?= Html::encode($effectiveDate) ?>.</p>
            <?php endif; ?>
        </article>
    </div>
</main>
