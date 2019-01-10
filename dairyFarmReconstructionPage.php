<?php
	include('htmlHead.php');
?>
<body class="dairyFarmReconstructionPage">	
	<?php
		include('nav.php');
	?>
	<section>
		<div class="container mainContainer">
			<div aria-label="breadcrumb" class="breadcrumbNav">
				<div class="container px-0">
					<ol class="breadcrumb pl-0">
				    	<li class="breadcrumb-item"><a href="index.php">Главная</a></li>
				    	<li class="breadcrumb-item"><a href="servicePage.php">Услуги</a></li>
			    		<li class="breadcrumb-item active" aria-current="page">Реконструкция молочных ферм</li>
				 	</ol>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<h2>Реконструкция молочных ферм</h2>
				</div>
				<div class="col-lg-5">
					<img src="img/services/3.3.png" class="w-100">
				</div>
				<div class="col-lg-7">
					<p>
						Многие молочные фермы и животноводческие комплексы в сельских хозяйствах России сегодня остро нуждаются в реконструкции и модернизации.
					</p>
					<p>
						Компания ООО «Сельстрой» предлагает услуги по качественной реконструкции и модернизации сельскохозяйственных предприятий в кратчайшие сроки. При этом всю бумажную работу и подготовку документации компания берет на себя.
					</p>
					<p>
						Мы разработали несколько технологических схем, с помощью которых производится быстрая реконструкция молочных ферм и коровников стандартного типа. Несколько реконструкционных проектов от ООО «Сельстрой» уже были реализованы в ряде фермерских хозяйств России.
					</p>
					<p>
						Примерная стоимость модернизации коровника на 200 голов составляет 9,5 млн. рублей, а все работы длятся не более месяца. Все работы могут быть проведены в любое время года, так как не зависят от погодных условий.
					</p>
					<p>
						Возможна полная реконструкция фермы: стоимость работ выясняется в процессе переговоров с Заказчиком при составлении технического задания.
					</p>
				</div>
				<div class="col-12 serviceTheme">
					<h3>Основные задачи модернизации</h3>
					<p>
						Реконструкция, модернизация и расширение сельскохозяйственного предприятия необходима для его успешной деятельности и улучшения производительности. Как правило, даже полная реконструкция коровников или молочных ферм в оценочном итоге оказывается дешевле, чем строительство новых предприятий.

					</p>
					<p>
						Основная задача модернизации — улучшить состояние предприятия и обновить его техническое оснащение. Часто реконструкция сельскохозяйственных предприятий производится одновременно с социальным благоустройством села.
					</p>
				</div>
				<div class="col-12 lastServiceTheme">
					<h3>Реконструкция сельскохозяйственных предприятий преследует следующие цели:</h3>
					<p>
						- Улучшение качества производимой на предприятии продукции.
					</p>
					<p>
						- Цель выполняется с изменением технологий содержания животных, оптимизации систем поения, кормления, уборки навоза, установки новых систем      доения и так далее.
					</p>
					<p>
						- Улучшение функционала комплекса и условий труда для работников.
					</p>
					<p>
						- Ввозможно расширение фермы до комплекса, строительство и пристройка к основному зданию новых зданий. При этом площадь этих построек не      должна превышать площадь основной модернизируемой фермы, а ее специализация должна быть сохранена, иначе все эти мероприятия приравниваются к новому строительству.
					</p>
					<p>
						- Оптимизация трудовых ресурсов и перераспределение ценных кадров.
					</p>
					<p>
						- Повышение экологической безопасности предприятия.
					</p>
					<p>
						- Выполняется одновременно с заменой оборудования.
					</p>
					<p>
						- Повышение уровня технического оснащения предприятия.
					</p>
					<p>
						- Изношенное и устаревшее техническое оборудование заменяют новым и современным. Средний срок службы оборудования составляет 10-14 лет.
					</p>
				</div>
			</div>
			<div class="row justify-content-lg-end justify-content-center buttons">
				<div class="col-lg-auto col-auto">
					<button class="redWhiteBtn"><a data-fancybox data-animation-duration="700" data-src="#getServicePriceModal" href="javascript:;">Узнать цену на услугу</a></button>
				</div>
				<div style="display: none;" id="getServicePriceModal" class="animated-modal">
					<div class="card">
						<div class="card-body">
							<h2>Узнать цену на услугу</h2>
							<form action = "javascript: void(null);" method="post" id="">
								<div class="row">
									<div class="col-12 form-group">
										<input type="text" class="form-control" name="name" placeholder="Ваше имя">
									</div>
									<div class="col-12 form-group">
										<input type="number" class="form-control" name="phoneNumber" placeholder="Ваш номер телефона *" required>
									</div>
									<div class="col-12 form-group">
										<input type="email" class="form-control" name="phoneNumber" placeholder="Ваш e-mail *" required>
									</div>
									<div class="col-12 form-group">
										<textarea class="form-control" name="text" rows="3" placeholder="Ваш комментарий *" required=""></textarea>
									</div>
									<div class="col-lg-6 col-12 captchaDiv recaptcha-wrapper"><div class="g-recaptcha captcha" data-sitekey="6Ldo2nsUAAAAAHtVQzC6Wlif4QzFftZHGoaq0EK7"></div></div>						
									<div class="col-lg-6 col-12">
										<p class="personalInformation">
											Нажимая на кнопку, вы даете свое согласие на обработку<br class="d-none d-lg-block">персональных данных. <a href="" target="blank" rel="noopener noreferrer">Узнать больше</a>
										</p>
									</div>
									<div class="col-12 d-flex">
										<button type="submit" class="redBtn mx-auto">Отправить</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-auto col-auto">
					<button class="blueBtn"><a data-fancybox data-animation-duration="700" data-src="#takeQuestionModal" href="javascript:;">Задать вопрос</a></button>
				</div>
				<div style="display: none;" id="takeQuestionModal" class="animated-modal">
					<div class="card">
						<div class="card-body">
							<h2>Задать вопрос</h2>
							<form action = "javascript: void(null);" method="post" id="">
								<div class="row">
									<div class="col-12 form-group">
										<input type="text" class="form-control" name="name" placeholder="Ваше имя">
									</div>
									<div class="col-12 form-group">
										<input type="number" class="form-control" name="phoneNumber" placeholder="Ваш номер телефона *" required>
									</div>
									<div class="col-12 form-group">
										<input type="email" class="form-control" name="phoneNumber" placeholder="Ваш e-mail *" required>
									</div>
									<div class="col-12 form-group">
										<textarea class="form-control" name="text" rows="3" placeholder="Ваш комментарий *" required=""></textarea>
									</div>
									<div class="col-lg-6 col-12 captchaDiv recaptcha-wrapper"><div class="g-recaptcha captcha" data-sitekey="6Ldo2nsUAAAAAHtVQzC6Wlif4QzFftZHGoaq0EK7"></div></div>						
									<div class="col-lg-6 col-12">
										<p class="personalInformation">
											Нажимая на кнопку, вы даете свое согласие на обработку<br class="d-none d-lg-block">персональных данных. <a href="" target="blank" rel="noopener noreferrer">Узнать больше</a>
										</p>
									</div>
									<div class="col-12 d-flex">
										<button type="submit" class="redBtn mx-auto">Отправить</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-auto col-auto">
					<button class="redBtn"><a data-fancybox data-animation-duration="700" data-src="#orderServiceModal" href="javascript:;">Заказать услугу</a></button>
				</div>
				<div style="display: none;" id="orderServiceModal" class="animated-modal">
					<div class="card">
						<div class="card-body">
							<h2>Заказать услугу</h2>
							<form action = "javascript: void(null);" method="post" id="">
								<div class="row">
									<div class="col-12 form-group">
										<input type="text" class="form-control" name="name" placeholder="Ваше имя">
									</div>
									<div class="col-12 form-group">
										<input type="number" class="form-control" name="phoneNumber" placeholder="Ваш номер телефона *" required>
									</div>
									<div class="col-12 form-group">
										<input type="email" class="form-control" name="phoneNumber" placeholder="Ваш e-mail *" required>
									</div>
									<div class="col-12 form-group">
										<textarea class="form-control" name="text" rows="3" placeholder="Ваш комментарий *" required=""></textarea>
									</div>
									<div class="col-lg-6 col-12 captchaDiv recaptcha-wrapper"><div class="g-recaptcha captcha" data-sitekey="6Ldo2nsUAAAAAHtVQzC6Wlif4QzFftZHGoaq0EK7"></div></div>						
									<div class="col-lg-6 col-12">
										<p class="personalInformation">
											Нажимая на кнопку, вы даете свое согласие на обработку<br class="d-none d-lg-block">персональных данных. <a href="" target="blank" rel="noopener noreferrer">Узнать больше</a>
										</p>
									</div>
									<div class="col-12 d-flex">
										<button type="submit" class="redBtn mx-auto">Отправить</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
		include('footer.php');
	?>
	<script src="js/activeServices.js"></script>
<?php
	include('htmlEndBody.php');
?>