<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $legal array */

$isEnglish = strpos(Yii::$app->language, 'en') === 0;
$effectiveDate = $isEnglish ? $legal['effectiveDateEn'] : $legal['effectiveDate'];
$operatorName = $isEnglish ? $legal['operatorNameEn'] : $legal['operatorName'];
$address = $isEnglish ? $legal['addressEn'] : $legal['address'];

$this->title = $isEnglish
    ? 'Personal Data Processing Policy'
    : 'Политика в отношении обработки персональных данных';
$this->registerMetaTag([
    'name' => 'description',
    'content' => $isEnglish
        ? 'Greenline policy on the processing of website users’ personal data.'
        : 'Политика Greenline в отношении обработки персональных данных пользователей сайта.',
]);
?>

<main class="legal-page">
    <div class="container">
        <article class="legal-document">
            <h1><?= Html::encode($this->title) ?></h1>
            <?php if ($isEnglish): ?>
            <p class="legal-document__meta">Effective from <?= Html::encode($effectiveDate) ?> · Version <?= Html::encode($legal['privacyPolicyVersion']) ?></p>

            <h2>1. General Provisions</h2>
            <p>This Policy has been prepared in accordance with Federal Law No. 152-FZ “On Personal Data” dated July 27, 2006. It applies to all information received by the Operator through the website and is publicly available.</p>

            <h2>2. Operator Details</h2>
            <dl class="legal-details">
                <dt>Operator</dt><dd><?= Html::encode($operatorName) ?></dd>
                <dt>Taxpayer Identification Number (INN)</dt><dd><?= Html::encode($legal['inn']) ?></dd>
                <dt>Primary State Registration Number (OGRN)</dt><dd><?= Html::encode($legal['registrationNumber']) ?></dd>
                <dt>Address</dt><dd><?= Html::encode($address) ?></dd>
                <dt>Email for personal data enquiries</dt><dd><?= Html::encode($legal['privacyEmail']) ?></dd>
            </dl>

            <h2>3. Key Terms</h2>
            <p><strong>Personal data</strong> means any information relating directly or indirectly to an identified or identifiable individual. <strong>Personal data processing</strong> means any operation or set of operations performed on personal data. <strong>Operator</strong> means the person that determines the purposes, scope, and operations involved in processing. <strong>Automated processing</strong> means processing by means of computing equipment. <strong>Blocking</strong> means temporarily suspending processing. <strong>Destruction</strong> means actions after which the data cannot be restored. <strong>Anonymisation</strong> means actions after which the data cannot be attributed to an individual without additional information.</p>

            <h2>4. Categories of Users</h2>
            <p>Website visitors and users who submit enquiries through the contact form.</p>

            <h2>5. Data Processed</h2>
            <p>The “Submit Your Request” form processes the user’s name, email address, organisation name (if provided), and comment.</p>
            <p>When the website is visited, Yandex Metrica and Yandex Maps may receive an IP address, cookies and analytics identifiers, browser and device information, the date and time of the visit, the address of the page visited, the referral source, and information about interaction with the page. The web server may also generate standard technical request logs containing the IP address, date and time, page address, and browser information.</p>

            <h2>6. Purposes of Processing</h2>
            <p>Receiving and processing enquiries, providing feedback, preparing responses, ensuring the operation and security of the website, and compiling website traffic statistics.</p>

            <h2>7. Legal Bases</h2>
            <p>The data subject’s consent; Federal Law No. 152-FZ and other applicable laws of the Russian Federation; and processing necessary to respond to a request and take action at the user’s initiative.</p>

            <h2>8. Processing Procedures and Conditions</h2>
            <p>The Operator collects, records, organises, accumulates, stores, rectifies, retrieves, uses, discloses to processors acting on its behalf, blocks, deletes, and destroys data using automated, non-automated, and combined methods. Access is granted only to authorised persons who require the data to perform their duties.</p>
            <p>The content of an enquiry is transmitted through the email infrastructure used by the Operator for delivery. Yandex receives technical data when Metrica and the embedded map are used. The Font Awesome CDN may receive technical network-request data when fonts and styles are loaded. The Operator does not disclose data to other third parties without consent or another lawful basis.</p>

            <h2>9. Retention and Destruction</h2>
            <p>Data is retained no longer than necessary for the purposes of processing. Once a purpose has been achieved or consent has been withdrawn, the data is deleted or destroyed within the time limits established by Russian law, unless another legal basis for retention applies.</p>

            <h2>10. User Rights</h2>
            <p>Users may obtain information about the processing of their data; request rectification, blocking, or deletion; withdraw consent; demand that processing cease; and lodge a complaint with Roskomnadzor or a court. Requests may be sent to <?= Html::encode($legal['privacyEmail']) ?>.</p>

            <h2>11. Data Protection</h2>
            <p>The Operator implements necessary legal, organisational, and technical safeguards, including access restrictions, operation records, security controls, backups, and incident monitoring, in a manner appropriate to the nature of the processing and current threats.</p>

            <h2>12. Data Localisation and Cross-Border Transfers</h2>
            <p>When collecting data of Russian citizens, the Operator must ensure that the initial recording, organisation, accumulation, storage, rectification, and retrieval of such data use databases located in the Russian Federation. The website owner must confirm the location of its hosting infrastructure and compliance with this requirement.</p>
            <p>The use of external email and network infrastructure providers may result in cross-border data transfers. Before any such transfer, the Operator must comply with the requirements of Russian law applicable to cross-border transfers of personal data.</p>

            <h2>13. Cookies and Analytics</h2>
            <p>The website uses essential framework cookies for security and operation, as well as Yandex Metrica analytics cookies and identifiers to compile traffic statistics and analyse referrals and interactions with pages. The retention period for analytics cookies is determined by Yandex. Acknowledgement of the cookie notice is stored in the browser’s localStorage.</p>
            <p>Users may restrict or delete cookies in their browser settings; doing so may affect certain website functions. Information about specific cookies and their retention periods is available in browser developer tools and the Yandex Metrica documentation.</p>

            <h2>14. Final Provisions</h2>
            <p>This Policy is effective from <?= Html::encode($effectiveDate) ?>. The Operator may update it; the current version is always available at <a href="<?= Html::encode(Url::to(['/privacy-policy'])) ?>"><?= Html::encode(Url::to(['/privacy-policy'])) ?></a>. Questions may be sent to <?= Html::encode($legal['privacyEmail']) ?>.</p>
            <?php else: ?>
            <p class="legal-document__meta">Действует с <?= Html::encode($effectiveDate) ?> · Версия <?= Html::encode($legal['privacyPolicyVersion']) ?></p>

            <h2>1. Общие положения</h2>
            <p>Настоящая Политика разработана в соответствии с Федеральным законом от 27.07.2006 № 152-ФЗ «О персональных данных», применяется ко всей информации, которую оператор получает через сайт, и опубликована в свободном доступе.</p>

            <h2>2. Сведения об операторе</h2>
            <dl class="legal-details">
                <dt>Оператор</dt><dd><?= Html::encode($operatorName) ?></dd>
                <dt>ИНН</dt><dd><?= Html::encode($legal['inn']) ?></dd>
                <dt>ОГРН/ОГРНИП</dt><dd><?= Html::encode($legal['registrationNumber']) ?></dd>
                <dt>Адрес</dt><dd><?= Html::encode($address) ?></dd>
                <dt>Email для обращений по персональным данным</dt><dd><?= Html::encode($legal['privacyEmail']) ?></dd>
            </dl>

            <h2>3. Основные понятия</h2>
            <p><strong>Персональные данные</strong> — информация, относящаяся к прямо или косвенно определённому физическому лицу. <strong>Обработка персональных данных</strong> — любое действие или совокупность действий с персональными данными. <strong>Оператор</strong> — лицо, определяющее цели, состав и действия по обработке данных. <strong>Автоматизированная обработка</strong> — обработка с помощью средств вычислительной техники. <strong>Блокирование</strong> — временное прекращение обработки. <strong>Уничтожение</strong> — действия, после которых восстановить содержание данных невозможно. <strong>Обезличивание</strong> — действия, после которых без дополнительной информации нельзя определить принадлежность данных субъекту.</p>

            <h2>4. Категории пользователей</h2>
            <p>Посетители сайта и пользователи, направляющие обращения через форму обратной связи.</p>

            <h2>5. Обрабатываемые данные</h2>
            <p>Через форму «Оставить заявку» обрабатываются имя, адрес электронной почты, наименование организации (если указано) и комментарий.</p>
            <p>При посещении сайта Яндекс.Метрика и Яндекс.Карты могут получать IP-адрес, cookie и идентификаторы аналитики, сведения о браузере и устройстве, дату и время посещения, адрес посещённой страницы, источник перехода и сведения о взаимодействии со страницей. Веб-сервер также может формировать стандартные технические журналы запросов, содержащие IP-адрес, дату и время, адрес страницы и сведения о браузере.</p>

            <h2>6. Цели обработки</h2>
            <p>Приём и обработка обращений, обратная связь, подготовка ответа, обеспечение работы и безопасности сайта, а также ведение статистики посещаемости.</p>

            <h2>7. Правовые основания</h2>
            <p>Согласие субъекта персональных данных; Федеральный закон № 152-ФЗ и иные применимые нормы законодательства РФ; обработка, необходимая для ответа на запрос и совершения действий по инициативе пользователя.</p>

            <h2>8. Порядок и условия обработки</h2>
            <p>Оператор осуществляет сбор, запись, систематизацию, накопление, хранение, уточнение, извлечение, использование, предоставление обработчикам по поручению, блокирование, удаление и уничтожение данных автоматизированным, неавтоматизированным и смешанным способами. Доступ получают только уполномоченные лица, которым данные необходимы для выполнения служебных обязанностей.</p>
            <p>Содержание заявки передаётся через используемую оператором почтовую инфраструктуру для доставки обращения. Яндекс получает технические данные при работе Метрики и встроенной карты. CDN Font Awesome может получать технические данные сетевого запроса при загрузке шрифтов и стилей. Оператор не раскрывает данные иным третьим лицам без согласия или другого законного основания.</p>

            <h2>9. Сроки хранения и уничтожение</h2>
            <p>Данные хранятся не дольше, чем требуется для достижения целей обработки. После достижения цели или получения отзыва данные удаляются или уничтожаются в сроки, установленные законодательством РФ, если отсутствуют другие законные основания для хранения.</p>

            <h2>10. Права пользователя</h2>
            <p>Пользователь вправе получать сведения об обработке данных, требовать их уточнения, блокирования или удаления, отозвать согласие, потребовать прекращения обработки, а также обратиться в Роскомнадзор или суд. Обращения принимаются по адресу <?= Html::encode($legal['privacyEmail']) ?>.</p>

            <h2>11. Защита данных</h2>
            <p>Оператор принимает необходимые правовые, организационные и технические меры, включая ограничение доступа, учёт операций, применение средств защиты, резервирование и контроль инцидентов, в объёме, соответствующем характеру обработки и актуальным угрозам.</p>

            <h2>12. Локализация и трансграничная передача</h2>
            <p>При сборе данных граждан РФ оператор обязан обеспечить первичную запись, систематизацию, накопление, хранение, уточнение и извлечение с использованием баз данных на территории РФ. Владельцу сайта необходимо подтвердить размещение используемого хостинга и выполнение этого требования.</p>
            <p>Использование внешних поставщиков почтовой и сетевой инфраструктуры может повлечь трансграничную передачу данных. До такой передачи оператор обязан выполнить требования законодательства РФ, применимые к трансграничной передаче персональных данных.</p>

            <h2>13. Cookies и аналитика</h2>
            <p>Сайт использует необходимые cookie фреймворка для защиты и работы веб-приложения, а также аналитические cookie и идентификаторы Яндекс.Метрики для статистики посещаемости, анализа переходов и взаимодействия со страницами. Срок хранения аналитических cookie определяется Яндексом. В уведомлении о cookies факт ознакомления сохраняется в localStorage браузера.</p>
            <p>Пользователь может ограничить или удалить cookie в настройках браузера; это может повлиять на работу отдельных функций сайта. Получить сведения о конкретных cookie и сроках их хранения можно в инструментах браузера и документации Яндекс.Метрики.</p>

            <h2>14. Заключительные положения</h2>
            <p>Политика действует с <?= Html::encode($effectiveDate) ?>. Оператор вправе обновлять её; актуальная версия постоянно доступна по адресу <a href="<?= Html::encode(Url::to(['/privacy-policy'])) ?>"><?= Html::encode(Url::to(['/privacy-policy'])) ?></a>. Вопросы можно направить по адресу <?= Html::encode($legal['privacyEmail']) ?>.</p>
            <?php endif; ?>
        </article>
    </div>
</main>
