<?php

use app\components\helpers\Html;

?>

<footer id="footer" class="container-fluid">
	<div class="row">
		<div class="col-12 footer-container">
			<div class="d-block d-lg-none">
				<?php echo Html::a('中国商业伙伴', ['/about-company'], ['class' => 'btn btn-success request-button', 'style' => 'transform: scale(0.8);margin-top: 20px; margin-bottom: 15px;margin-left: -156px;']) ?>
			</div>
			<span class="brand-name">
				GREENLINE
				<span class="copyright">&copy; Greenline 2010 - 2026</span>
			</span>
			<div class="footer-legal-links">
				<?= Html::a(Yii::t('main', 'Политика обработки персональных данных'), ['/privacy-policy']) ?>
				<?= Html::a(Yii::t('main', 'Согласие на обработку персональных данных'), ['/consent']) ?>
			</div>
			<div class="line d-block d-lg-none"></div>
			<div class="subscribe-container">
				<div class="d-none d-lg-inline-block">
					<?php echo Html::a('中国商业伙伴', ['/about-company'], ['class' => 'btn btn-success request-button', 'style' => 'transform: scale(0.8);margin-right: 15px;']) ?>
				</div>
				<span class="subscribe-text"><?php echo Yii::t('main', 'Подписаться на рассылку') ?></span>
				<form action="/subscribe" method="post" id="footer-subscribe-form">
					<input type="email" required name="email" placeholder="<?php echo Yii::t('main', 'Ваша электронная почта') ?>" />
					<button type="submit" class="btn btn-success go-mail" data-sitekey="6Letmf8UAAAAAKasiQMt1Z9pxZBP9BkBK425Ii4h" data-callback="onSubmit">
						<img src="/img/icons/go-mail.svg" alt="<?php echo Yii::t('main', 'Подписаться на рассылку') ?>">
					</button>
				</form>
			</div>
		</div>
	</div>
</footer>

<!-- Modal -->
<div class="modal fade " id="requestModal" tabindex="-1" role="dialog" aria-labelledby="requestModalLabel" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog modal-dialog-centered ">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="request-form-container">
				<?= $this->render('_request_form', ['formId' => 'modal-request']) ?>
			</div>
		</div>
	</div>
</div>

<div id="success_modal" class="modal fade" tabindex="-1" role="dialog" style="color: black">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-body text-center pb-0">
				<p><?php echo Yii::t('main', 'Заявка успешно отправлена!') ?></p>
				<p><?php echo Yii::t('main', 'Мы свяжемся с Вами в ближайшее время') ?></p>
			</div>
			<div class="modal-footer text-center">
				<button data-dismiss="modal" aria-label="Close" type="button" class="btn col-12 btn-dark">Ок</button>
			</div>
		</div>
	</div>
</div>
<div id="success_modal_subscribe" class="modal fade" tabindex="-1" role="dialog" style="color: black">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-body text-center pb-0">
				<p><?php echo Yii::t('main', 'Подписка на рассылку <br> успешно оформлена!') ?></p>
			</div>
			<div class="modal-footer text-center">
				<button data-dismiss="modal" aria-label="Close" type="button" class="btn col-12 btn-dark">Ок</button>
			</div>
		</div>
	</div>
</div>
