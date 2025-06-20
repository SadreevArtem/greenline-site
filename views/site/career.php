<?php

/**
 * @var $this \yii\web\View
 */

use app\components\helpers\Html;

$this->title = Yii::t('main', 'Greenline - ') . Yii::t('main', 'Карьера в компании Greenline greenlinerussia');

$this->registerMetaTag([
	'name' => 'description',
	'content' => Yii::t('main', 'Greenline - ') . Yii::t('main', 'Актуальные вакансии в компании Greenline'),
]);
$this->registerMetaTag([
	'name' => 'robots',
	'content' => 'index, follow',
]);
?>

<header id="header" class="container-fluid navigate-header">
	<div class="img-container">
		<img src="/img/headers/career.jpg" alt="О нас">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 col-12">
				<h1><?php echo Yii::t('main', 'Карьера') ?></h1>
				<span class="breadcrumbs">
					<?php echo Html::a(Yii::t('main', 'Главная'), ['/']) ?>
					- <?php echo Html::a(Yii::t('main', 'Карьера'), ['/career'], ['class' => 'current']) ?>
				</span>
			</div>
		</div>
	</div>
</header>

<section id="career" class="container no-copy">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<h2 class="up-line green"><?php echo Yii::t('main', 'Текущие вакансии') ?></h2>
			<div class=" d-flex  align-items-center text-md-left">
				<p><?php echo Yii::t('main', 'Спасибо, что ознакомились с нашими вакансиями. Видите что-то, что вас интересует? Подайте заявку') ?>&nbsp;<?php echo yii\helpers\Html::a(Yii::t('main', 'здесь'), 'mailto:career@greenlinerussia.com') ?></p>
				<p></p>
			</div>
			<table class='table'>
				<tbody>
					<tr>
						<th><?php echo Html::a(Yii::t('main', 'Инженер по трубопроводной арматуре'), ['/career/160420'], ['class' => '']) ?></th>
						<td>
							<svg class="fabric-fbhpyj-svg" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
								<path xmlns="http://www.w3.org/2000/svg" d="M336 192c0-79.5-64.5-144-144-144S48 112.5 48 192c0 12.4 4.5 31.6 15.3 57.2c10.5 24.8 25.4 52.2 42.5 79.9c28.5 46.2 61.5 90.8 86.2 122.6c24.8-31.8 57.8-76.4 86.2-122.6c17.1-27.7 32-55.1 42.5-79.9C331.5 223.6 336 204.4 336 192zm48 0c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192zm-160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-112 0a80 80 0 1 1 160 0 80 80 0 1 1 -160 0z"></path>
							</svg>&nbsp;<?php echo Yii::t('main', 'Калининград') ?>
						</td>
						<td><?php echo Yii::t('main', 'Полная занятость') ?></td>
					</tr>
					<tr>
						<th><?php echo Html::a(Yii::t('main', 'Менеджер по работе с клиентами'), ['/career/160410'], ['class' => '']) ?></th>
						<td>
							<svg class="fabric-fbhpyj-svg" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
								<path xmlns="http://www.w3.org/2000/svg" d="M336 192c0-79.5-64.5-144-144-144S48 112.5 48 192c0 12.4 4.5 31.6 15.3 57.2c10.5 24.8 25.4 52.2 42.5 79.9c28.5 46.2 61.5 90.8 86.2 122.6c24.8-31.8 57.8-76.4 86.2-122.6c17.1-27.7 32-55.1 42.5-79.9C331.5 223.6 336 204.4 336 192zm48 0c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192zm-160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-112 0a80 80 0 1 1 160 0 80 80 0 1 1 -160 0z"></path>
							</svg>&nbsp;<?php echo Yii::t('main', 'Гонконг') ?>
						</td>
						<td><?php echo Yii::t('main', 'Частичная занятость') ?></td>
					</tr>
					<tr>
						<th><?php echo Html::a(Yii::t('main', 'Менеджер по работе с клиентами'), ['/career/160430'], ['class' => '']) ?></th>
						<td>
							<svg class="fabric-fbhpyj-svg" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
								<path xmlns="http://www.w3.org/2000/svg" d="M336 192c0-79.5-64.5-144-144-144S48 112.5 48 192c0 12.4 4.5 31.6 15.3 57.2c10.5 24.8 25.4 52.2 42.5 79.9c28.5 46.2 61.5 90.8 86.2 122.6c24.8-31.8 57.8-76.4 86.2-122.6c17.1-27.7 32-55.1 42.5-79.9C331.5 223.6 336 204.4 336 192zm48 0c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192zm-160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-112 0a80 80 0 1 1 160 0 80 80 0 1 1 -160 0z"></path>
							</svg>&nbsp;<?php echo Yii::t('main', 'Владивосток') ?>
						</td>
						<td><?php echo Yii::t('main', 'Полная занятость') ?></td>
					</tr>
					<tr>
						<th><?php echo Html::a(Yii::t('main', 'Администратор'), ['/career/160440'], ['class' => '']) ?></th>
						<td>
							<svg class="fabric-fbhpyj-svg" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
								<path xmlns="http://www.w3.org/2000/svg" d="M336 192c0-79.5-64.5-144-144-144S48 112.5 48 192c0 12.4 4.5 31.6 15.3 57.2c10.5 24.8 25.4 52.2 42.5 79.9c28.5 46.2 61.5 90.8 86.2 122.6c24.8-31.8 57.8-76.4 86.2-122.6c17.1-27.7 32-55.1 42.5-79.9C331.5 223.6 336 204.4 336 192zm48 0c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192zm-160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-112 0a80 80 0 1 1 160 0 80 80 0 1 1 -160 0z"></path>
							</svg>&nbsp;<?php echo Yii::t('main', 'Владивосток') ?>
						</td>
						<td><?php echo Yii::t('main', 'Полная занятость') ?></td>
					</tr>
					<tr>
						<th><?php echo Html::a(Yii::t('main', 'Администратор'), ['/career/160450'], ['class' => '']) ?></th>
						<td>
							<svg class="fabric-fbhpyj-svg" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
								<path xmlns="http://www.w3.org/2000/svg" d="M336 192c0-79.5-64.5-144-144-144S48 112.5 48 192c0 12.4 4.5 31.6 15.3 57.2c10.5 24.8 25.4 52.2 42.5 79.9c28.5 46.2 61.5 90.8 86.2 122.6c24.8-31.8 57.8-76.4 86.2-122.6c17.1-27.7 32-55.1 42.5-79.9C331.5 223.6 336 204.4 336 192zm48 0c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192zm-160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-112 0a80 80 0 1 1 160 0 80 80 0 1 1 -160 0z"></path>
							</svg>&nbsp;<?php echo Yii::t('main', 'Гонконг') ?>
						</td>
						<td><?php echo Yii::t('main', 'Полная занятость') ?></td>
					</tr>
					<tr>
						<th><?php echo Html::a(Yii::t('main', 'Специалист по техническому обслуживанию'), ['/career/160460'], ['class' => '']) ?></th>
						<td>
							<svg class="fabric-fbhpyj-svg" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
								<path xmlns="http://www.w3.org/2000/svg" d="M336 192c0-79.5-64.5-144-144-144S48 112.5 48 192c0 12.4 4.5 31.6 15.3 57.2c10.5 24.8 25.4 52.2 42.5 79.9c28.5 46.2 61.5 90.8 86.2 122.6c24.8-31.8 57.8-76.4 86.2-122.6c17.1-27.7 32-55.1 42.5-79.9C331.5 223.6 336 204.4 336 192zm48 0c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192zm-160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-112 0a80 80 0 1 1 160 0 80 80 0 1 1 -160 0z"></path>
							</svg>&nbsp;<?php echo Yii::t('main', 'Калининград') ?>
						</td>
						<td><?php echo Yii::t('main', 'Полная занятость') ?></td>
					</tr>
					<tr>
						<th><?php echo Html::a(Yii::t('main', 'Морской техник-механик'), ['/career/160470'], ['class' => '']) ?></th>
						<td>
							<svg class="fabric-fbhpyj-svg" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
								<path xmlns="http://www.w3.org/2000/svg" d="M336 192c0-79.5-64.5-144-144-144S48 112.5 48 192c0 12.4 4.5 31.6 15.3 57.2c10.5 24.8 25.4 52.2 42.5 79.9c28.5 46.2 61.5 90.8 86.2 122.6c24.8-31.8 57.8-76.4 86.2-122.6c17.1-27.7 32-55.1 42.5-79.9C331.5 223.6 336 204.4 336 192zm48 0c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192zm-160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-112 0a80 80 0 1 1 160 0 80 80 0 1 1 -160 0z"></path>
							</svg>&nbsp;<?php echo Yii::t('main', 'Калининград') ?>
						</td>
						<td><?php echo Yii::t('main', 'Полная занятость') ?></td>
					</tr>
					<tr>
						<th><?php echo Html::a(Yii::t('main', 'Техник-механик на суше'), ['/career/160480'], ['class' => '']) ?></th>
						<td>
							<svg class="fabric-fbhpyj-svg" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
								<path xmlns="http://www.w3.org/2000/svg" d="M336 192c0-79.5-64.5-144-144-144S48 112.5 48 192c0 12.4 4.5 31.6 15.3 57.2c10.5 24.8 25.4 52.2 42.5 79.9c28.5 46.2 61.5 90.8 86.2 122.6c24.8-31.8 57.8-76.4 86.2-122.6c17.1-27.7 32-55.1 42.5-79.9C331.5 223.6 336 204.4 336 192zm48 0c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192zm-160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-112 0a80 80 0 1 1 160 0 80 80 0 1 1 -160 0z"></path>
							</svg>&nbsp;<?php echo Yii::t('main', 'Санкт-Петербург') ?>
						</td>
						<td><?php echo Yii::t('main', 'Полная занятость') ?></td>
					</tr>
					<tr>
						<th><?php echo Html::a(Yii::t('main', 'Менеджер по работе с ключевыми клиентами'), ['/career/160490'], ['class' => '']) ?></th>
						<td>
							<svg class="fabric-fbhpyj-svg" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
								<path xmlns="http://www.w3.org/2000/svg" d="M336 192c0-79.5-64.5-144-144-144S48 112.5 48 192c0 12.4 4.5 31.6 15.3 57.2c10.5 24.8 25.4 52.2 42.5 79.9c28.5 46.2 61.5 90.8 86.2 122.6c24.8-31.8 57.8-76.4 86.2-122.6c17.1-27.7 32-55.1 42.5-79.9C331.5 223.6 336 204.4 336 192zm48 0c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192zm-160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-112 0a80 80 0 1 1 160 0 80 80 0 1 1 -160 0z"></path>
							</svg>&nbsp;<?php echo Yii::t('main', 'Санкт-Петербург') ?>
						</td>
						<td><?php echo Yii::t('main', 'Полная занятость') ?></td>
					</tr>
				</tbody>
			</table>

		</div>
	</div>

	<br>
	<br>
	<br>
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-12">
			<div class="item">
				<div class="row d-flex justify-content-center align-items-center text-md-left text-center">
					<p><b><?php echo Yii::t('main', 'Для рассмотрения вашей кандидатуры отправьте резюме на электронный адрес: ') ?></b></p> &nbsp;&nbsp;
					<p><?php echo yii\helpers\Html::a('career@greenlinerussia.com', 'mailto:career@greenlinerussia.com') ?></p>
				</div>
			</div>
		</div>
	</div>
</section>