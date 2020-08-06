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
	<title><?= Html::encode($this->title) ?></title>

	<?php if (!Yii::$app->request->pathInfo || Yii::$app->request->pathInfo === 'index') { ?>
		<style><?= file_get_contents(YII_WEB_PATH . '/css/header_style.css') ?></style>
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

<?php if (!Yii::$app->request->pathInfo || Yii::$app->request->pathInfo === 'index') { ?>
	<style><?= file_get_contents(YII_WEB_PATH . '/css/style.css') ?></style>
<?php } ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
