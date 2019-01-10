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
				    	<li class="breadcrumb-item"><a href="index.php">Мой кабинет</a></li>
			    		<li class="breadcrumb-item active" aria-current="page">Персональные данные</li>
				 	</ol>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<h2>Профиль пользователя</h2>
				</div>
				<div class="col-12">
					<p class="title">Регистрационная информация</p>
				</div>
				<div class="col-lg-5">
					<div class="row personalInfo">
						<div class="col-6">
							<p>Дата обновления:</p>
						</div>
						<div class="col-6">
							<p>00.00.2018 12:48:30</p>
						</div>
						<div class="col-6">
							<p>Последняя авторизация:</p>
						</div>
						<div class="col-6">
							<p>00.00.2018 12:48:30</p>
						</div>
						<div class="col-6">
							<p>Обращение:</p>
						</div>
						<div class="col-6">
							<input class="personalInfoInput">
						</div>
						<div class="col-6">
							<p>Имя:</p>
						</div>
						<div class="col-6">
							<input class="personalInfoInput">
						</div>
						<div class="col-6">
							<p>Фамилия</p>
						</div>
						<div class="col-6">
							<input class="personalInfoInput">
						</div>
						<div class="col-6">
							<p>Отчество:</p>
						</div>
						<div class="col-6">
							<input class="personalInfoInput">
						</div>
						<div class="col-6">
							<p>E-Mail:*</p>
						</div>
						<div class="col-6">
							<input class="personalInfoInput">
						</div>
						<div class="col-6">
							<p>Логин (мин. 3 символа):*</p>
						</div>
						<div class="col-6">
							<input class="personalInfoInput">
						</div>
						<div class="col-6">
							<p>Новый пароль:</p>
						</div>
						<div class="col-6">
							<input class="personalInfoInput">
						</div>
						<div class="col-6">
							<p>Подтверждение нового пароля</p>
						</div>
						<div class="col-6">
							<input class="personalInfoInput">
						</div>
					</div>
					<div class="row personalInfo">
						<div class="col-12">
							<p>Личные данные</p>
						</div>
						<div class="col-12">
							<p>Информация о работе</p>
						</div>
						<div class="col-12">
							<p>Профиль форума</p>
						</div>
						<div class="col-12">
							<p>Профиль блога</p>
						</div>
						<div class="col-12">
							<p>Пароль должен быть не менее 6 символов днинной.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-auto">
							<button class="greyBtn">Сохранить</button>
						</div>
						<div class="col-6">
							<button class="greyBtn">Восстановить пароль</button>
						</div>
					</div>
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