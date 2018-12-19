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
				<a href="index.php" class="active">Главная</a>
			</div>
			<div class="col-auto">
				<a href="aboutCompanyPage.php">О компании</a>
			</div>
			<div class="col-auto">
				<a href="servicesPage.php">Услуги</a>
			</div>
			<div class="col-auto">
				<a href="paymentAndDelivery.php">Оплата и доставка</a>
			</div>
			<div class="col-auto">
				<a href="contactsPage.php">Контакты</a>
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
 						<a class="nav-link" href="index.php"><p>Интернет - магазин</p><span class="sr-only">(current)</span></a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="index.php"><p>Главная</p></a>
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
 						<a class="nav-link" href="accountPage.php"><p>Личный кабинет</p></a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href=".php"><p>Корзина</p></a>
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
			 			<button class="redBtn">Обратный звонок</button>
			 		</div>
			 	</div>
		 	</div>
		</div>
	</div>
</section>