<?php
	include('htmlHead.php');
?>
<body class="checkoutPage">	
	<?php
		include('nav.php');
	?>
	<section>
		<div class="container checkoutPageSection">
			<div aria-label="breadcrumb" class="breadcrumbNav">
				<div class="container px-0">
					<ol class="breadcrumb pl-0">
				    	<li class="breadcrumb-item"><a href="index.php">Главная</a></li>
				    	<li class="breadcrumb-item"><a href="basketPage.php">Корзина</a></li> 
			    		<li class="breadcrumb-item active" aria-current="page">Оформление заказа</li>
				 	</ol>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<h2>Оформление заказа</h2>
				</div>
				<div class="col-12">
					<div class="row productInBasketCheckout">
						<div class="col-lg-2 col-12 d-flex pl-0">
							<img src="img/basket/1.png" class="m-auto">
						</div>
						<div class="col-lg-5 col-12">
							<p class="product-name">Охладитель для молока открытого типа «Арктика»</p>
							<p class="availability">Наличие в магазине - 20 шт</p>
						</div>
						<div class="col-lg-auto offset-lg-2 col-12 cardValueDiv">
							<div class="d-flex cardValue">
								<button class="inc">-</button>
								<input type="text" value="1"/>
								<button class="dec">+</button>
							</div>
						</div>
						<div class="col-lg-auto col-12">
							<p class="productPrice">15 990 ₽</p>
						</div>
						<img src="img/icons/closeGrey.png" class="closeImg">
					</div>
				</div>
				<div class="col-lg-8">
					<div class="row">
						<div class="col-12 title">
							<p>Доставка</p>
						</div>
						<div class="col-lg-auto">
							<div class="delivery pickup">
								<img src="img/icons/greyIcon.png">
							</div>
							<p>Самовывоз</p>
						</div>
						<div class="col-lg-auto">
							<div class="delivery pickup">
								<img src="img/icons/greyIcon.png">
							</div>
							<p>Доставка транспортной<br> компанией</p>
						</div>
						<div class="col-lg-auto pr-0">
							<div class="deliveryChoice">
								<p>Самовывоз</p>
								<div class="d-flex">
									<img src="img/icons/greyIcon.png" class="w-10 m-auto">
								</div>
								<p>Стоимость</p>
								<p>0.00 руб</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 title">
							<p>Покупатель</p>
						</div>
						<form class="w-100">								
							<div class="form-row">
								<div class="col-lg-12">
									<label>Ваш email*</label>
									<input type="email" class="form-control" placeholder="">
									<label>Контактный телефон*</label>
									<input type="number" class="form-control" placeholder="">
									<label>Контактное лицо*</label>
									<input type="text" class="form-control" placeholder="">
									<label>Коментарии к заказу:</label>
									<textarea class="form-control" rows="3" placeholder=''></textarea>
								</div>
							</div>
						</form>
						<div class="col-12 title">
							<p>Товары в заказе</p>
						</div>
						<div class="row d-flex productInBasketCheckout productInBasketCheckoutLast p-lg-0">
							<div class="col-lg-2 col-12 d-flex">
								<img src="img/basket/1.png" class="m-auto">
							</div>
							<div class="col-lg-6 col-12">
								<p class="product-name">Охладитель для молока открытого типа «Арктика»</p>
							</div>
							<div class="col-lg-2 col-12">
								<p class="availability">2 шт</p>
							</div>
							<div class="col-lg-2 col-12">
								<p class="product-name">15 990 ₽</p>
							</div>
						</div>
					</div>
					<div class="row justify-content-between">
						<div class="col-lg-2 col-6 pl-0">
							<a href="basketPage.php"><button class="greyBtn">Назад</button></a>
						</div>
						<div class="col-lg-3 col-6 pr-0">
							<button class="greyBtn">Оформить заказ</button>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="row checkout-sum ml-0">
						<div class="col-6">
							<p>Товар на:</p>
						</div>
						<div class="col-6">
							<p class="text-right">15 990 руб</p>
						</div>
						<div class="col-12">
							<hr class="blackHr">
						</div>
						<div class="col-auto">
							<p>НДС (18%, включен в цену):</p>
						</div>
						<div class="col-4">
							<p class="text-right">422 руб</p>
						</div>
						<div class="col-12">
							<hr>
						</div>
						<div class="col-6">
							<p>Доставка:</p>
						</div>
						<div class="col-6">
							<p class="checkout-grey-text text-right">бесплатно</p>
						</div>
						<div class="col-12">
							<hr>
						</div>
						<div class="col-6">
							<p>Итого</p>
						</div>
						<div class="col-6">
							<p class="checkout-price text-right">15 990 руб</p>
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