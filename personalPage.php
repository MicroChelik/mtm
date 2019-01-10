<?php
	include('htmlHead.php');
?>
<body class="personalPage">	
	<?php
		include('nav.php');
	?>
	<section class="personalPageSection">
		<div class="container">
			<div aria-label="breadcrumb" class="breadcrumbNav">
				<div class="container px-0">
					<ol class="breadcrumb pl-0">
				    	<li class="breadcrumb-item"><a href="index.php">Главная</a></li>
			    		<li class="breadcrumb-item active" aria-current="page">Персональный раздел</li>
				 	</ol>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<h2>Персональный раздел</h2>
				</div>
				<div class="col-12">
					<p>
						В личном кабинете Вы можите проверить текущее состояние корзины, ход выполнения Ваших заказов, просмотреть или изменить личную информацию, а такжеподписаться на новости и другие информационные рассылки. 
					</p>
				</div>
				<div class="col-12">
					<h3>Личная информация</h3>
					<a href="changeInformationPage.php">Изменить регистрационные данные</a>
				</div>
				<div class="col-12">
					<h3>Заказы</h3>
					<a href="orderStatusPage.php">Ознакомиться с состоянием заказов</a>
					<a href="orderStatusPage.php">Посмотреть содержимое корзины</a>
					<a href="orderStatusPage.php">Посмотреть историю заказов</a>
				</div>
				<div class="col-12">
					<h3>Подписка</h3>
					<a href="orderStatusPage.php">Изменить подписку</a>
				</div>
			</div>
		</div>
	</section>
	<?php
		include('footer.php');
	?>
	<script src="js/activeMain.js"></script>
<?php
	include('htmlEndBody.php');
?>