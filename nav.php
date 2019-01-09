<header class="d-none d-lg-block">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-auto">
				<a data-fancybox data-animation-duration="700" data-src="#getPriceModal" href="javascript:;">
					<button class="redBtn">Запросить прайс</button>
				<a>
			</div>
			<div style="display: none;" id="getPriceModal" class="animated-modal">
				<div class="card">
					<div class="card-body">
						<h2>Запросить прайс</h2>
						<form action = "javascript: void(null);" method="post" id="">
							<div class="row">
								<div class="col-12 form-group">
									<input type="text" class="form-control" name="name" placeholder="Ваше имя/наименование организации *" required>
								</div>
								<div class="col-12 form-group">
									<input type="email" class="form-control" name="phoneNumber" placeholder="Ваш E-mail *" required>
								</div>
								<div class="col-12 form-group">
									<input type="number" class="form-control" name="phoneNumber" placeholder="Ваш номер телефона *" required>
								</div>
								<div class="col-lg-6 col-12 captchaDiv recaptcha-wrapper"><div class="g-recaptcha captcha" data-sitekey="6Ldo2nsUAAAAAHtVQzC6Wlif4QzFftZHGoaq0EK7"></div></div>						
								<div class="col-lg-6 col-12">
									<p class="personalInformation">Нажимая на кнопку, вы даете свое согласие на обработку<br class="d-none d-lg-block">персональных данных. <a href="" target="blank" rel="noopener noreferrer">Узнать больше</a></p>
								</div>
								<div class="col-12 d-flex">
									<button type="submit" class="redBtn mx-auto">Отправить</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-auto d-flex socialImgs">
				<img src="img/icons/1.png">
				<img src="img/icons/2.png">
				<img src="img/icons/3.png">
				<img src="img/icons/4.png">
			</div>
			<div class="col-lg-auto">
				<p>Прием звонков с 07:00 до 16:00 МСК <img src="img/icons/slash.png"> Прием заявок  с сайта круглосуточно</p>
			</div>
			<div class="col-lg-auto d-flex">
				<img src="img/icons/mail.png" class="mailImg">
				<p>zavodmtm@mail.ru</p>
			</div>
			<div class="col-lg-2">
				<img src="img/icons/human.png" class="humanImg">
				<p class="redText"><a data-fancybox data-animation-duration="700" data-src="#signInModal" href="javascript:;" class="signInText">Вход</a></p>
				<div style="display: none;" id="signInModal" class="animated-modal">
					<div class="card">
						<div class="card-body">
							<h2>Личный кабинет</h2>
							<div class="col-12 d-flex modal-buttons">
								<button class="active signIn">Вход</button>
								<button class="logIn">Регистрация</button>
							</div>
							<form action = "javascript: void(null);" method="post" id="" class="signInForm">
								<div class="row">
									<div class="col-12 form-group">
										<input type="email" class="form-control" name="phoneNumber" placeholder="Ваш E-mail *" required>
									</div>
									<div class="col-12 form-group">
										<input type="text" class="form-control" name="phoneNumber" placeholder="Ваш пароль *" required>
									</div>
									<div class="col-lg-6 col-12 captchaDiv recaptcha-wrapper"><div class="g-recaptcha captcha" data-sitekey="6Ldo2nsUAAAAAHtVQzC6Wlif4QzFftZHGoaq0EK7"></div></div>						
									<div class="col-lg-6 col-12">
									<p class="personalInformation"><a data-fancybox data-animation-duration="700" data-src="#forgetPasswordModal" href="javascript:;" class="signInText">Забыли пароль ?</a></p>
										<div style="display: none;" id="forgetPasswordModal" class="animated-modal">
											<div class="card">
												<div class="card-body">
													<h2>Восстановить пароль</h2>
													<form action = "javascript: void(null);" method="post" id="">
														<div class="row">
															<div class="col-12 form-group">
																<input type="email" class="form-control" name="phoneNumber" placeholder="Ваш E-mail *" required>
															</div>
															<div class="col-lg-6 col-12 captchaDiv recaptcha-wrapper"><div class="g-recaptcha captcha" data-sitekey="6Ldo2nsUAAAAAHtVQzC6Wlif4QzFftZHGoaq0EK7"></div></div>
															<div class="col-12 d-flex">
																<button type="submit" class="redBtn mx-auto">Восстановить пароль</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 d-flex">
										<a href="personalPage.php" class="d-flex"><button type="submit" class="redBtn mx-auto">Войти</button></a>
									</div>
								</div>
							</form>
							<form action = "javascript: void(null);" method="post" id="" class="logInForm">
								<div class="row">
									<div class="col-12 form-group">
										<input type="email" class="form-control" name="phoneNumber" placeholder="Ваш E-mail *" required>
									</div>
									<div class="col-12 form-group">
										<input type="text" class="form-control" name="phoneNumber" placeholder="Придумайте пароль *" required>
									</div>
									<div class="col-12 form-group">
										<input type="text" class="form-control" name="phoneNumber" placeholder="Повротите пароль *" required>
									</div>
									<p>Пароль должен быть от 6 до 32 символов.</p>
									<div class="col-lg-6 col-12 captchaDiv recaptcha-wrapper"><div class="g-recaptcha captcha" data-sitekey="6Ldo2nsUAAAAAHtVQzC6Wlif4QzFftZHGoaq0EK7"></div></div>						
									<div class="col-lg-6 col-12">
									<p class="personalInformation">
										Нажимая на кнопку, вы даете свое согласие на обработку<br class="d-none d-lg-block">персональных данных. <a href="" target="blank" rel="noopener noreferrer">Узнать больше</a>
									</p>
									</div>
									<div class="col-12 d-flex">
										<a href="personalPage.php" class="d-flex"><button type="submit" class="redBtn mx-auto">Зарегистрироваться</button></a>
									</div>
									<p>Укажите Email, и мы пришлем вам на почту сообщение для подтверждения</p>
								</div>
							</form>
						</div>
					</div>
				</div>
				<p><a data-fancybox data-animation-duration="700" data-src="#logInModal" href="javascript:;" class="logInText">Регистрация</a></p>
				<div style="display: none;" id="logInModal" class="animated-modal">
					<div class="card">
						<div class="card-body">
							<h2>Личный кабинет</h2>
							<div class="col-12 d-flex modal-buttons">
								<button class="signIn">Вход</button>
								<button class="logIn active">Регистрация</button>
							</div>
							<form action = "javascript: void(null);" method="post" id="" class="signInForm">
								<div class="row">
									<div class="col-12 form-group">
										<input type="email" class="form-control" name="phoneNumber" placeholder="Ваш E-mail *" required>
									</div>
									<div class="col-12 form-group">
										<input type="text" class="form-control" name="phoneNumber" placeholder="Ваш пароль *" required>
									</div>
									<div class="col-lg-6 col-12 captchaDiv recaptcha-wrapper"><div class="g-recaptcha captcha" data-sitekey="6Ldo2nsUAAAAAHtVQzC6Wlif4QzFftZHGoaq0EK7"></div></div>						
									<div class="col-lg-6 col-12">
									<p class="personalInformation">Нажимая на кнопку, вы даете свое согласие на обработку<br class="d-none d-lg-block">персональных данных. <a href="" target="blank" rel="noopener noreferrer">Узнать больше</a></p>
									</div>
									<div class="col-12 d-flex">
										<a href="personalPage.php" class="d-flex"><button type="submit" class="redBtn mx-auto">Войти</button></a>
									</div>
								</div>
							</form>
							<form action = "javascript: void(null);" method="post" id="" class="logInForm">
								<div class="row">
									<div class="col-12 form-group">
										<input type="email" class="form-control" name="phoneNumber" placeholder="Ваш E-mail *" required>
									</div>
									<div class="col-12 form-group">
										<input type="text" class="form-control" name="phoneNumber" placeholder="Придумайте пароль *" required>
									</div>
									<div class="col-12 form-group">
										<input type="text" class="form-control" name="phoneNumber" placeholder="Повротите пароль *" required>
									</div>
									<p>Пароль должен быть от 6 до 32 символов.</p>
									<div class="col-lg-6 col-12 captchaDiv recaptcha-wrapper"><div class="g-recaptcha captcha" data-sitekey="6Ldo2nsUAAAAAHtVQzC6Wlif4QzFftZHGoaq0EK7"></div></div>						
									<div class="col-lg-6 col-12">
									<p class="personalInformation">
										Нажимая на кнопку, вы даете свое согласие на обработку<br class="d-none d-lg-block">персональных данных. <a href="" target="blank" rel="noopener noreferrer">Узнать больше</a>
									</p>
									</div>
									<div class="col-12 d-flex">
										<a href="personalPage.php" class="d-flex"><button type="submit" class="redBtn mx-auto">Зарегистрироваться</button></a>
									</div>
									<p>Укажите Email, и мы пришлем вам на почту сообщение для подтверждения</p>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<?php
	include('navSection.php');
?>
<nav class="d-none d-lg-block">
	<div class="container">
		<div class="row justify-content-between pages">
			<div class="col-auto nav-store storeBtn">
				<a href="store.php">Интернет - магазин</a><img src="img/icons/bottom.png" class="pl-1 bottomArrow"><img src="img/icons/topRed.png" class="pl-1 topArrow">
				<ul class="nav-store-sections">
					<li>Основной раздел 1<img src="img/icons/navLiArrow.png" class="navLiArrow">
						<ul class="nav-store-sections-to-sections">
							<li>Подраздел 1</li>
							<li>Подраздел 2</li>
							<li>Подраздел 3</li>
						</ul>
					</li>
					<li>Основной раздел 2<img src="img/icons/navLiArrow.png" class="navLiArrow">
						<ul class="nav-store-sections-to-sections">
							<li>Подраздел 1</li>
							<li>Подраздел 2</li>
							<li>Подраздел 3</li>
						</ul>
					</li>
					<li>Основной раздел 3<img src="img/icons/navLiArrow.png" class="navLiArrow">
						<ul class="nav-store-sections-to-sections">
							<li>Подраздел 1</li>
							<li>Подраздел 2</li>
							<li>Подраздел 3</li>
						</ul>
					</li>
					<li>Основной раздел 4<img src="img/icons/navLiArrow.png" class="navLiArrow">
						<ul class="nav-store-sections-to-sections">
							<li>Подраздел 1</li>
							<li>Подраздел 2</li>
							<li>Подраздел 3</li>
						</ul>
					</li>
					<li>Основной раздел 5<img src="img/icons/navLiArrow.png" class="navLiArrow">
						<ul class="nav-store-sections-to-sections">
							<li>Подраздел 1</li>
							<li>Подраздел 2</li>
							<li>Подраздел 3</li>
						</ul>
					</li>
					<li>Основной раздел 6<img src="img/icons/navLiArrow.png" class="navLiArrow">
						<ul class="nav-store-sections-to-sections">
							<li>Подраздел 1</li>
							<li>Подраздел 2</li>
							<li>Подраздел 3</li>
						</ul>
					</li>
					<li>Основной раздел 7<img src="img/icons/navLiArrow.png" class="navLiArrow">
						<ul class="nav-store-sections-to-sections">
							<li>Подраздел 1</li>
							<li>Подраздел 2</li>
							<li>Подраздел 3</li>
						</ul>
					</li>
					<li>Основной раздел 8<img src="img/icons/navLiArrow.png" class="navLiArrow">
						<ul class="nav-store-sections-to-sections">
							<li>Подраздел 1</li>
							<li>Подраздел 2</li>
							<li>Подраздел 3</li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="col-auto">
				<a href="index.php" class="aboutCompanyA">Главная</a>
			</div>
			<div class="col-auto">
				<a href="aboutCompanyPage.php" class="aboutCompanyA">О компании</a>
			</div>
			<div class="col-auto">
				<a href="servicesPage.php" class="aboutCompanyA">Услуги</a>
			</div>
			<div class="col-auto">
				<a href="paymentAndDelivery.php" class="aboutCompanyA">Оплата и доставка</a>
			</div>
			<div class="col-auto">
				<a href="contactsPage.php" class="aboutCompanyA">Контакты</a>
			</div>
		</div>
	</div>
</nav>
<section class="mobileNav d-lg-none d-block">
	<div class="container">
		<div class="row justify-content-between align-items-center mobileNavRow">
			<div class="col-2">
				<button class="navbar-toggler d-lg-none d-inline-block" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	   				<span class="navbar-toggler-icon" id="toggle"><img src="img/icons/burger.png"></span>
		  		</button>
			</div>
			<div class="col-auto">
				<img src="img/logos/mtmMobile.png">
			</div>
			<div class="col-2">
				<img src="img/icons/loupeWhite.png">
			</div>
			<div class="collapse navbar-collapse" id="navbarNav">
		 		<ul class="navbar-nav">
		 			<li class="nav-item nav-item-first">
 						<a class="nav-link" href="store.php"><p>Интернет - магазин</p></a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="index.php"><p>Главная</p><span class="sr-only">(current)</span></a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="aboutCompanyPage.php"><p>О компании</p></a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="servicesPage.php"><p>Услуги</p></a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="paymentAndDelivery.php"><p>Оплата и доставка</p></a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="contactsPage.php"><p>Контакты</p></a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="personalPage.php"><p>Личный кабинет</p></a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="basketPage.php"><p>Корзина</p></a>
 					</li>
		 		</ul>
		 		<hr>
			 	<div class="row ml-12 mobileNavFooter">
			 		<div class="col-6">
			 			<p>+7 (3412) 48-73-83</p>
			 			<p>8 (800) 800 80 80</p>
			 		</div>
			 		<div class="col-6 pl-0">
			 			<p class="mailOverBtn">zavodmtm@mail.ru</p>
			 			<a data-fancybox data-animation-duration="700" data-src="#callBackModal" href="javascript:;">
			 				<button class="redBtn">Обратный звонок</button>
			 			</a>
			 		</div>
			 	</div>
		 	</div>
		</div>
	</div>
</section>