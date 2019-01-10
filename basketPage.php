<?php
	include('htmlHead.php');
?>
<body class="basketPage">	
	<?php
		include('nav.php');
	?>
	<section class="basketPageSection">
		<div class="container">
			<div aria-label="breadcrumb" class="breadcrumbNav">
				<div class="container px-0">
					<ol class="breadcrumb pl-0">
				    	<li class="breadcrumb-item"><a href="index.php">Главная</a></li>
			    		<li class="breadcrumb-item active" aria-current="page">Корзина</li>
				 	</ol>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<h2>корзина</h2>
				</div>
				<div class="col-lg-2">
					<p>Готовые к заказу (<span>2</span>)</p>
				</div>
				<div class="col-lg-2 offset-lg-8">
					<div class="cleanBlock">
						<img src="img/icons/basketClose.png">
						<span>Очистить</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-1 offset-lg-2 basket-column-title">
					<p>Товар</p>
				</div>
				<div class="col-lg-1 offset-lg-4 basket-column-title">
					<p>Цена</p>
				</div>
				<div class="col-lg-1 basket-column-title basket-column-title-value">
					<p>Количество</p>
				</div>
				<div class="col-lg-1 basket-column-title basket-column-title-sum">
					<p>Сумма</p>
				</div>
				<div class="col-12">
					<div class="row productInBasket">
						<div class="col-lg-2 col-12 d-flex pl-15 pl-lg-0">
							<img src="img/basket/1.png" class="m-auto">
						</div>
						<div class="col-lg-auto col-12">
							<p class="basket-column-title-mobile">Товар</p>
							<p class="basket-product-name">Танки-охладители молока закрытого типа «Арктика»</p>
						</div>
						<div class="col-lg-auto col-12 basket-product-price-div">
							<p class="basket-column-title-mobile">Цена</p>
							<p class="basket-product-price">15 990 ₽</p>
						</div>
						<div class="col-lg-auto col-12 cardValueDiv">
							<p class="basket-column-title-mobile">Количество</p>
							<div class="d-flex cardValue">
								<button class="inc">-</button>
								<input type="text" value="1"/>
								<button class="dec">+</button>
							</div>
						</div>
						<div class="col-lg-auto col-12 basket-product-sum-div">
							<p class="basket-column-title-mobile">Сумма</p>
							<p class="basket-product-sum">15 990 ₽</p>
						</div>
						<div class="col-lg-auto col-12 basket-product-delete-div">
							<p class="basket-product-delete">Удалить</p>
						</div>
					</div>
					<div class="row productInBasket">
						<div class="col-lg-2 col-12 d-flex pl-15 pl-lg-0">
							<img src="img/basket/1.png" class="m-auto">
						</div>
						<div class="col-lg-auto col-12">
							<p class="basket-column-title-mobile">Товар</p>
							<p class="basket-product-name">Танки-охладители молока закрытого типа «Арктика»</p>
						</div>
						<div class="col-lg-auto col-12 basket-product-price-div">
							<p class="basket-column-title-mobile">Цена</p>
							<p class="basket-product-price">15 990 ₽</p>
						</div>
						<div class="col-lg-auto col-12 cardValueDiv">
							<p class="basket-column-title-mobile">Количество</p>
							<div class="d-flex cardValue">
								<button class="inc">-</button>
								<input type="text" value="1"/>
								<button class="dec">+</button>
							</div>
						</div>
						<div class="col-lg-auto col-12 basket-product-sum-div">
							<p class="basket-column-title-mobile">Сумма</p>
							<p class="basket-product-sum">15 990 ₽</p>
						</div>
						<div class="col-lg-auto col-12 basket-product-delete-div">
							<p class="basket-product-delete">Удалить</p>
						</div>
					</div>
					<div class="row sumOfProducts">
						<div class="col-lg-3 offset-lg-9 d-flex">
							<div class="m-auto">
								<div class="d-flex">
									<div class="sumOfProductsDescription">
										<p>Товар на:</p>
									</div>
									<div  class="sumOfProductsSum">
										<p>31 980₽</p>
									</div>
								</div>
								<div class="d-flex">
									<div class="sumOfProductsDescription">
										<p>Итого:</p>
									</div>
									<div class="sumOfProductsSum">
										<p>31 980₽</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-between buttons">
				<div class="col-lg-3 pl-0 col-6">
					<button class="whiteBtn">Продолжить покупки</button>
				</div>
				<div class="col-lg-3 text-right pr-0 col-6">
					<a href="checkoutPage.php"><button class="greyBtn">Оформить заказ</button></a>
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