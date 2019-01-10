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
				    	<li class="breadcrumb-item"><a href="personalPage.php">Персональный раздел</a></li>
			    		<li class="breadcrumb-item active" aria-current="page">Заказы</li>
				 	</ol>
				</div>
			</div>
			<div class="row personalOrders">
				<div class="col-12">
					<h2>Персональный раздел</h2>
				</div>
				<div class="col-12">
					<p>Текущие заказы не найдены</p>
					<p><a href="ordersHistory.php">Просмотреть историю заказов</a></p>
				</div>
				<div class="col-12 backToCatalog">
					<p><a href="store.php">Перейти в каталог</a></p>
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