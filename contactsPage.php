<?php
	include('htmlHead.php');
?>
<body class="contactsPage">	
	<?php
		include('nav.php');
	?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12 contactsPageContacts">
					<h2>Контакты</h2>
				</div>
				<div class="col-lg-3 contacts">
					<p class="office-address contacts-black">Офис  "Молтехмаш", г. Ижевск, ул. Карла Либкнехта, 6</p>
					<p class="contacts-black">
						<span>Время работы:</span>
						<br>
						Прием звонков с 07:00 до 16:00 МСК
					</p>
					<p class="contacts-black">
						<span>Телефоны:</span>
						<br>
						+7 (912) 800-80-80
						<br>
						8 (3412) 80-80-80
					</p>
					<p class="contacts-black">
						<span>Email:</span>
						<br>
						login@mail.ru
					</p>
					<div class="d-flex socialImgs">
						<img src="img/icons/1.png">
						<img src="img/icons/2.png">
						<img src="img/icons/3.png">
						<img src="img/icons/4.png">
					</div>
					<a href="" class="requisites">
						<p><img src="img/icons/download.png">Скачать реквизиты компании</p>
					</a>
				</div>
				<div class="col-lg-8 offset-lg-1 contactsPageForm">
					<h2>Напишите нам</h2>
					<form>								
						<div class="form-row">
							<div class="col-lg-6">
								<input type="text" class="form-control" placeholder="Ваше имя*">
								<input type="email" class="form-control" placeholder="Ваш email*">
								<input type="number" class="form-control" placeholder="Ваш номер телефона*">
							</div>
							<div class="col-lg-6">
								<textarea class="form-control" rows="3" placeholder='Ваш комментарий*'></textarea>
								<p class="personalInformation">Нажимая на кнопку, вы даете свое согласие на обработку персональных данных.  <a href="">Узнать больше</a></p>
							</div>
							<div class="col-lg-6 col-12 recaptcha-wrapper" id="contactsPageCaptcha">
								<div class="g-recaptcha captcha" data-sitekey="6Ldo2nsUAAAAAHtVQzC6Wlif4QzFftZHGoaq0EK7"></div>
							</div>
							<div class="col-lg-6 col-12">
								<button class="redBtn mx-auto" type="submit">Отправить</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-12 map">
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Afb2d0c265a2309da5a665e99425d6cb7fb953c2cf45bd72f1513416dfd8c01cc&amp;width=100%25&amp;height=342&amp;lang=ru_RU&amp;scroll=true"></script>
				</div>
			</div>
		</div>
	</section>
	<?php
		include('footer.php');
	?>
<?php
	include('htmlEndBody.php');
?>