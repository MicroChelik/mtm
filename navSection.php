<div class="searchSection d-lg-flex d-none">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-auto">
				<img src="img/logos/mtm.png" class="logoMtm">
			</div>
			<div class="col-lg-5">
				<a href="searchPage.php">
					<input class="form-control" type="search" placeholder="Поиск">
				</a>
			</div>
			<div class="col-lg-auto">
				<button class="redBtn"><a data-fancybox data-animation-duration="700" data-src="#callBackModal" href="javascript:;">Обратный звонок</a></button>
			</div>
			<div style="display: none;" id="callBackModal" class="animated-modal">
				<div class="card">
					<div class="card-body">
						<h2>ОБРАТНЫЙ ЗВОНОК</h2>
						<form action = "javascript: void(null);" method="post" id="">
							<div class="row">
								<div class="col-12 form-group">
									<input type="text" class="form-control" name="name" placeholder="Ваше имя/наименование организации *" required>
								</div>
								<div class="col-12 form-group">
									<input type="number" class="form-control" name="phoneNumber" placeholder="Ваш номер телефона *" required>
								</div>
								<div class="col-12 form-group">
									<input type="text" class="form-control" name="phoneNumber" placeholder="Город *" required>
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
			<div class="col-lg-2 mobileNavPhoneNumbers">
				<img src="img/icons/phone.png" class="phoneImg">
				<p>8 (800) 800 80 80</p>
				<p>+7 (3412) 48-73-83</p>
			</div>
			<div class="col-lg-auto">
				<div>
					<a href="basketPage.php" class="d-flex productCart">
						<img src="img/icons/cart.png">
						<div class="productsNumber d-flex m-auto">
							<p class="m-auto">2</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>