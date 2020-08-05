<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;

?>
<div class="site-error">
	<section class="container article" style="height: 80vh">
		<div class="d-flex flex-column align-items-center justify-content-center h-100">
			<h1 class="text-center"><?= nl2br(Html::encode($message)) ?></h1>
			<p class="text-center"><i class="far fa-frown display-4"></i></p>
		</div>
	</section>
</div>
