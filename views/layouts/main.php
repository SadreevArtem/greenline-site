<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\LandingAsset;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use app\assets\AppAsset;

//if (Yii::$app->request->pathInfo) {
    AppAsset::register($this);
//} else {
//	LandingAsset::register($this);
//}

$bodyClass = Yii::$app->language . ' '
	. (Yii::$app->request->pathInfo ? ArrayHelper::getValue(explode('/', Yii::$app->request->pathInfo), 0) : 'index');

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="shortcut" href="/favicon.ico" type="image/x-icon" />
	<title><?= Html::encode($this->title) ?></title>

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(64581349, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/64581349" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

	<?php if (!Yii::$app->request->pathInfo) { ?>
<!--		<style>--><?//= file_get_contents(YII_WEB_PATH . '/css/header_style.css') ?><!--</style>-->
	<?php } ?>

    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body class="<?php echo $bodyClass ?>">
<?php $this->beginBody() ?>

<div id="wrapper">
	<?= $this->render('parts/_navbar') ?>
	<?= $content; ?>
	<?= $this->render('parts/_footer')?>
</div>

<?php if (!Yii::$app->request->pathInfo) { ?>
<!--	<style>--><?//= file_get_contents(YII_WEB_PATH . '/css/style.css') ?><!--</style>-->
<?php } ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
