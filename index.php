<?php
	include('htmlHead.php');
?>
<body id="mainPage">	
	<?php
		include('nav.php');
	?>
	<section id="aboutCompany">
		<div class="container">
			<div class="headSlider row">
				<div>
					<div class="row align-items-center">
						<div class="col-lg-9 col-12">
							<p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.</p>
						</div>
						<div class="col-lg-4 col-12 d-flex">
							<a href="aboutCompanyPage.php">
								<button class="redBtn">Подробнее</button>
							</a>
						</div>
					</div>
				</div>
				<div>
					<div class="row align-items-center">
						<div class="col-lg-9 col-12">
							<p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.</p>
						</div>
						<div class="col-lg-4 col-12 d-flex">
							<a href="aboutCompanyPage.php">
								<button class="redBtn">Подробнее</button>
							</a>
						</div>
					</div>
				</div>
				<div>
					<div class="row align-items-center">
						<div class="col-lg-9 col-12">
							<p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.</p>
						</div>
						<div class="col-lg-4 col-12 d-flex">
							<a href="aboutCompanyPage.php">
								<button class="redBtn">Подробнее</button>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-between headSliderarrows d-lg-flex d-none">
				<div class="col-auto prev1">
				</div>
				<div class="col-auto next1">
				</div>
			</div>
		</div>
	</section>
	<!-- <section id="aboutCompany">
		<div class="container">
			<div class="headSlider row">
				<div>
					<div class="row align-items-center">
						<div class="col-lg-9 col-12">
							<p>ООО "Хай-Тандем" - стабильно развивающееся предприятие, которое осуществляет деятельность по обучению рабочих специалистов и радиационному контролю</p>
						</div>
						<div class="col-lg-4 col-12 d-flex">
							<a href="aboutCompanyPage.php">
								<button class="lightBlueBtn">Подробнее</button>
							</a>
						</div>
					</div>
				</div>
				<div>
					<div class="row align-items-center">
						<div class="col-lg-9 col-12">
							<p>ООО "Хай-Тандем" - стабильно развивающееся предприятие, которое осуществляет деятельность по обучению рабочих специалистов и радиационному контролю</p>
						</div>
						<div class="col-lg-4 col-12 d-flex">
							<a href="aboutCompanyPage.php">
								<button class="lightBlueBtn">Подробнее</button>
							</a>
						</div>
					</div>
				</div>
				<div>
					<div class="row align-items-center">
						<div class="col-lg-9 col-12">
							<p>ООО "Хай-Тандем" - стабильно развивающееся предприятие, которое осуществляет деятельность по обучению рабочих специалистов и радиационному контролю</p>
						</div>
						<div class="col-lg-4 col-12 d-flex">
							<a href="aboutCompanyPage.php">
								<button class="lightBlueBtn">Подробнее</button>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-between headSliderarrows d-lg-flex d-none">
				<div class="col-auto prev1">
				</div>
				<div class="col-auto next1">
				</div>
			</div>
		</div>
	</section>
	<?php
		include('services.php');
	?>
	<?php
		include('comments.php')
	?>
	<section id="certificates">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3>Сертификаты компании</h3>
				</div>
			</div>
			<div class="row justify-content-between align-items-center certificatesSlider">
				<div class="col-auto d-flex">
					<img src="img/sertificates/1.1.png">
				</div>
				<div class="col-auto d-flex">
					<img src="img/sertificates/1.2.png">
				</div>
				<div class="col-auto d-flex">
					<img src="img/sertificates/1.3.png">
				</div>
				<div class="col-auto d-flex">
					<img src="img/sertificates/1.4.png">
				</div>
				<div class="col-auto d-flex">
					<img src="img/sertificates/1.5.png">
				</div>
			</div>
		</div>
	</section>
	<section class="consultation">
		<hr>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-4">
					<h3>Получить консультацию</h3>
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
							<div class="col-lg-6 col-12 recaptcha-wrapper">
									<div class="g-recaptcha captcha" data-sitekey="6Ldo2nsUAAAAAHtVQzC6Wlif4QzFftZHGoaq0EK7"></div>
							</div>
							<div class="col-lg-6 d-flex">
								<button class="blueBtn mx-auto" type="submit">Отправить</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<hr>
	</section> -->
	<?php
		// include('partners.php');
	?>
	<?php
		// include('footer.php');
	?>
	<?php
		include('htmlEndBody.php');
	?>