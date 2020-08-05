<footer id="footer" class="container-fluid">
	<div class="row">
		<div class="col-12 footer-container">
			<span class="brand-name">
				GREEN LINE
				<span class="copyright">@ Green Line. 2020.</span>
			</span>
			<div class="line d-block d-lg-none"></div>
			<div class="subscribe-container">
				<span class="subscribe-text">Подписаться на рассылку</span>
				<form action="/action" method="post" id="footer-subscribe-form">
					<input type="email" required name="email" placeholder="Ваша электронная почта" />
					<button type="submit" class="btn btn-success go-mail" data-sitekey="6Letmf8UAAAAAKasiQMt1Z9pxZBP9BkBK425Ii4h" data-callback="onSubmit">
						<img src="/img/icons/go-mail.svg" alt="Подписаться на рассылку">
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
				<form action="/action" method="post" class="request-form">
					<div class="row">
						<h5 class="col-12">Оставить заявку</h5>
						<div class="form-group col-md-6 col-12">
							<input required type="text" class="form-control" name="request-form_name_1" placeholder="Имя">
							<i style="display: none;" class="fas fa-exclamation-circle" data-trigger="hover" data-toggle="popover" data-content="Заполните поле"></i>
						</div>
						<div class="form-group col-md-6 col-12">
							<input required type="text" class="form-control" name="request-form_name_2" placeholder="Фамилия">
							<i style="display: none;" class="fas fa-exclamation-circle" data-trigger="hover" data-toggle="popover" data-content="Заполните поле"></i>
						</div>
						<div class="form-group col-12">
							<input required type="email" class="form-control" name="request-form_email" placeholder="Электронная почта">
							<i style="display: none;" class="fas fa-exclamation-circle" data-trigger="hover" data-toggle="popover" data-content="Заполните поле"></i>
						</div>
						<div class="form-group col-12">
							<textarea placeholder="Комментарий" class="form-control" name="request-form_comment" rows="1"></textarea>
							<i style="display: none;" class="fas fa-exclamation-circle" data-trigger="hover" data-toggle="popover" data-content="Заполните поле"></i>
						</div>
						<div id="captcha-1" class="captcha_container" data-id="1"></div>
						<div class="col-12">
							<button type="submit" class="btn btn-dark" data-sitekey="6Letmf8UAAAAAKasiQMt1Z9pxZBP9BkBK425Ii4h" data-callback="onSubmit">
								Отправить
								<i class="fas fa-spinner fa-spin" style="display: none;"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div id="success_modal" class="modal fade" tabindex="-1" role="dialog" style="color: black">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-body text-center pb-0">
				<p>Заявка успешно отправлена!</p>
				<p>Мы свяжемся с Вами в ближайшее время</p>
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
				<p>Подписка на рассылку <br> успешно оформлена!</p>
			</div>
			<div class="modal-footer text-center">
				<button data-dismiss="modal" aria-label="Close" type="button" class="btn col-12 btn-dark">Ок</button>
			</div>
		</div>
	</div>
</div>