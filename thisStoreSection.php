<?php
	include('htmlHead.php');
?>
<body class="thisStoreSection">	
	<?php
		include('nav.php');
	?>
	<section class="thisStoreSection-to-section">
		<div class="container">
			<div aria-label="breadcrumb" class="breadcrumbNav">
				<div class="container px-0">
					<ol class="breadcrumb pl-0">
				    	<li class="breadcrumb-item"><a href="index.php">Главная</a></li>
				    	<li class="breadcrumb-item"><a href="store.php">Основной раздел 1</a></li>
			    		<li class="breadcrumb-item active" aria-current="page">Раздел каталога 1</li>
				 	</ol>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<h2>раздел каталога 1</h2>
				</div>
				<div class="col-12">
					<p class="sorting">
						Сортировать:
						<span class="sorting-by-price">по цене<img src="img/icons/bottom.png"></span> 
						<span class="sorting-by-popularity">по популярности<img src="img/icons/bottom.png"></span>
					</p>
				</div>
				<div class="col-12">
					<div class="row store-products">
						<div class="col-lg-3">
							<img src="img/store/section1/1.png">
							<div class="store-img-title">
								<p>Электронная весовая система для танков-охладителей молока</p>
							</div>
						</div>
						<div class="col-lg-3">
							<img src="img/store/section1/24.png">
							<div class="store-img-title">
								<p>Охладитель для молока<br>открытого типа «Арктика»</p>
							</div>
						</div>
						<div class="col-lg-3">
							<a href="thisStoreSubsection.php">
								<img src="img/store/section1/3.png">
								<div class="store-img-title">
									<p>Танки-охладители молока<br>закрытого типа «Арктика»</p>
								</div>
							</a>
						</div>
						<div class="col-lg-3">
							<img src="img/store/section1/24.png">
							<div class="store-img-title">
								<p>Охладитель для молока<br>открытого типа «Арктика»</p>
							</div>
						</div>
						<div class="col-lg-3">
							<img src="img/store/section1/1.png">
							<div class="store-img-title">
								<p>Электронная весовая система для танков-охладителей молока</p>
							</div>
						</div>
						<div class="col-lg-3">
							<img src="img/store/section1/24.png">
							<div class="store-img-title">
								<p>Охладитель для молока<br>открытого типа «Арктика»</p>
							</div>
						</div>
						<div class="col-lg-3">
							<img src="img/store/section1/3.png">
							<div class="store-img-title">
								<p>Танки-охладители молока<br>закрытого типа «Арктика»</p>
							</div>
						</div>
						<div class="col-lg-3">
							<img src="img/store/section1/24.png">
							<div class="store-img-title">
								<p>Охладитель для молока<br>открытого типа «Арктика»</p>
							</div>
						</div>
						<div class="col-lg-3">
							<img src="img/store/section1/1.png">
							<div class="store-img-title">
								<p>Электронная весовая система для танков-охладителей молока</p>
							</div>
						</div>
						<div class="col-lg-3">
							<img src="img/store/section1/24.png">
							<div class="store-img-title">
								<p>Охладитель для молока<br>открытого типа «Арктика»</p>
							</div>
						</div>
						<div class="col-lg-3">
							<img src="img/store/section1/3.png">
							<div class="store-img-title">
								<p>Танки-охладители молока<br>закрытого типа «Арктика»</p>
							</div>
						</div>
						<div class="col-lg-3">
							<img src="img/store/section1/24.png">
							<div class="store-img-title">
								<p>Охладитель для молока<br>открытого типа «Арктика»</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
		include('footer.php');
	?>
	<script src="js/activeStore.js"></script>
<?php
	include('htmlEndBody.php');
?>