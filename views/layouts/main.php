<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\LandingAsset;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use app\assets\AppAsset;




if (Yii::$app->request->pathInfo) {
	AppAsset::register($this);
} else {
	LandingAsset::register($this);
}

$bodyClass = Yii::$app->language . ' '
	. (Yii::$app->request->pathInfo ? ArrayHelper::getValue(explode('/', Yii::$app->request->pathInfo), 0) : 'index');

$this->registerLinkTag([
	'rel' => 'alternate',
	'hreflang' => 'x-default',
	'href' => \yii\helpers\Url::current(['language' => 'ru'])
]);
$this->registerLinkTag([
	'rel' => 'alternate',
	'hreflang' => 'ru',
	'href' => \yii\helpers\Url::current(['language' => 'ru'])
]);
$this->registerLinkTag([
	'rel' => 'alternate',
	'hreflang' => 'en',
	'href' => \yii\helpers\Url::current(['language' => 'en'])
])

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="shortcut" href="/favicon.ico" type="image/x-icon" />
	<meta name="yandex-verification" content="7c01bb7443d655a8" />
	<title><?= Html::encode($this->title) ?></title>

	<?php if (!Yii::$app->request->pathInfo || Yii::$app->request->pathInfo === 'index') { ?>
		<style>
			<?= file_get_contents(YII_WEB_PATH . '/css/header_style.css') ?>
		</style>
	<?php } ?>

	<?php $this->registerCsrfMetaTags() ?>
	<?php $this->head() ?>

	<script>
		window.mapLanguage = '<?php echo Yii::$app->language === 'ru' ? 'ru_RU' : 'en_US' ?>'
	</script>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function(m, e, t, r, i, k, a) {
			m[i] = m[i] || function() {
				(m[i].a = m[i].a || []).push(arguments)
			};
			m[i].l = 1 * new Date();
			for (var j = 0; j < document.scripts.length; j++) {
				if (document.scripts[j].src === r) {
					return;
				}
			}
			k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
		})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(99965115, "init", {
			clickmap: true,
			trackLinks: true,
			accurateTrackBounce: true
		});
	</script>
	<noscript>
		<div><img src="https://mc.yandex.ru/watch/99965115" style="position:absolute; left:-9999px;" alt="" /></div>
	</noscript>
	<!-- /Yandex.Metrika counter -->
</head>

<body class="<?php echo $bodyClass ?>">
	<?php $this->beginBody() ?>

	<div id="wrapper">
		<?= $this->render('parts/_navbar') ?>
		<?= $content; ?>
		<?= $this->render('parts/_footer') ?>
	</div>

	<?php if (!Yii::$app->request->pathInfo || Yii::$app->request->pathInfo === 'index') { ?>
		<style>
			<?= file_get_contents(YII_WEB_PATH . '/css/style.css') ?>
		</style>
	<?php } ?>

	<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>