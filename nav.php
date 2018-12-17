<header class="d-none d-lg-block">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-auto">
				<button class="redBtn">Запросить прайс</button>
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
				<p class="redText">Вход</p>
				<p>Регистрация</p>
			</div>
		</div>
	</div>
</header>
<?php
	include('navSection.php');
?>
<nav class="d-none d-lg-block">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-auto">
				<a href="index.php">Интернет - магазин</a>
			</div>
			<div class="col-auto">
				<a href="aboutCompanyPage.php" class="active">Главная</a>
			</div>
			<div class="col-auto">
				<a href="servicesPage.php">О компании</a>
			</div>
			<div class="col-auto">
				<a href="newsPage.php">Услуги</a>
			</div>
			<div class="col-auto">
				<a href="q-a.php">Оплата и доставка</a>
			</div>
			<div class="col-auto">
				<a href="commentsPage.php">Контакты</a>
			</div>
		</div>
	</div>
</nav>
	<section class="mobileNav d-lg-none d-block">
		<div class="container">
			<div class="row justify-content-around align-items-center">
				<div class="mobileLogo">
					<span>Хай-<br>Тандем</span>
				</div>
				<button class="navbar-toggler d-lg-none d-inline-block" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		   			<span class="navbar-toggler-icon" id="toggle"><img src="img/icons/burger.png"></span>
			  	</button>
			  	<div class="logInDiv">
			  		<a data-fancybox data-animation-duration="700" data-src="#logInModal" href="javascript:;">
			  			<img src="img/icons/logIn.png">
			  			<span>Вход</span>
			  		</a>
			  	</div>
			 	<div class="collapse navbar-collapse" id="navbarNav">
			 		<ul class="navbar-nav">
			 			<li class="nav-item nav-item-first">
	 						<a class="nav-link" href="index.php"><p>Главная</p><span class="sr-only">(current)</span></a>
	 					</li>
	 					<li class="nav-item">
	 						<a class="nav-link" href="aboutCompanyPage.php""><p>О компании</p></a>
	 					</li>
	 					<li class="nav-item">
	 						<a class="nav-link" href="servicesPage.php"><p>Услуги</p></a>
	 					</li>
	 					<li class="nav-item">
	 						<a class="nav-link" href="newsPage.php"><p>Новости</p></a>
	 					</li>
	 					<li class="nav-item">
	 						<a class="nav-link" href="q-a.php"><p>Вопрос-ответ</p></a>
	 					</li>
	 					<li class="nav-item">
	 						<a class="nav-link" href="commentsPage.php"><p>Отзывы</p></a>
	 					</li>
	 					<li class="nav-item">
	 						<a class="nav-link" href="contactsPage.php"><p>Контакты</p></a>
	 					</li>
	 					<li class="nav-item">
	 						<a class="nav-link" href="accountPage.php"><p>Личный кабинет</p></a>
	 					</li>
			 		</ul>
			 		<hr>
				 	<div class="row w-100">
				 		<div class="col-6 mobileNavFooter">
				 			<p>+7 (912) 853 29 40<br>+7 (912) 444 87 29</p>
				 		</div>
				 		<div class="col-6">
				 			<p>haidarov_f@mail.ru<br><a data-fancybox data-animation-duration="700" data-src="#callBackModal" href="javascript:;">Обратный звонок</a></p>
				 		</div>
				 		<div class="col-10 callReceptionText mobileNavFooter">
				 			<p class="text-left">Прием звонков с 07:00 до 18:00</p>
				 			<p class="text-left">Примем заявок с сайта 24/7</p>
				 		</div>
				 	</div>
			 	</div>
			</div>
		</div>
	</section>