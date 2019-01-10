<?php
	include('htmlHead.php');
?>
<body class="thisProduct">	
	<?php
		include('nav.php');
	?>
	<section class="thisProductSection">
		<div class="container">
			<div aria-label="breadcrumb" class="breadcrumbNav">
				<div class="container px-0">
					<ol class="breadcrumb pl-0">
				    	<li class="breadcrumb-item"><a href="index.php">Главная</a></li>
				    	<li class="breadcrumb-item"><a href="store.php">Основной раздел 1</a></li>
				    	<li class="breadcrumb-item"><a href="store.php">Подраздел каталога 1</a></li>
			    		<li class="breadcrumb-item active" aria-current="page">Танки-охладители молока закрытого типа «Арктика»</li>
				 	</ol>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<h2>Танки-охладители молока закрытого типа «Арктика»</h2>
				</div>
				<div class="col-lg-5 productImg">
					<div>
						<img src="img/products/1.png" class="w-100">
					</div>
					<div class="productsSlider">
						<div class="productsDiv">
							<img src="img/products/2.png">
						</div>
						<div class="productsDiv">
							<img src="img/products/3.png">
						</div>
						<div class="productsDiv">
							<img src="img/products/4.png">
						</div>
						<div class="productsDiv">
							<img src="img/products/2.png">
						</div>
					</div>
					<div class="row justify-content-between productArrow d-lg-flex d-none">
						<div class="col-auto arrow-leftDiv">
							<img src="img/icons/bLeft.png" class="prev4" alt="назад">
						</div>
						<div class="col-auto arrow-rightDiv">
							<img src="img/icons/bRight.png" class="next4" alt="вперед">
						</div>
					</div>
				</div>
				<div class="col-lg-7 aboutThisProduct">
					<p>
						Завод «Молтехмаш» предлагает своим Заказчикам собственную разработку — закрытый охладитель молока «Арктика». Каждый покупатель может выбрать необходимые для него технические характеристики охладителя: к продаже предлагаются устройства разного объема (от 2500 до 10000 литров). Охладители «Арктика» комплектуются компрессорно-конденсаторными агрегатами от французского производителя «Danfoss-Maneurop», они просты в эксплуатации, надежны и могут быть обслужены специалистами средней квалификации.
					</p>
					<div class="row justify-content-end">
						<div class="col-lg-5 d-flex">
							<div class="d-flex cardValue">
								<button class="inc">-</button>
								<input type="text" value="1"/>
								<button class="dec">+</button>
							</div>
							<p class="cardPrice ml-auto">15 990 ₽</p>
						</div>
					</div>	
					<div class="row justify-content-end">
						<div class="col-lg-5">
							<button class="redBtn"><a data-fancybox data-animation-duration="700" data-src="#orderProductModal" href="javascript:;">Купить товар</a></button>
						</div>
					</div>
					<div style="display: none;" id="orderProductModal" class="animated-modal">
						<div class="card">
							<div class="card-body">
								<h2>Заказать товар</h2>
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
			<div class="row descripton-row">
				<div class="col-lg-3 col-6 product-description active">
					<p class="">Описание товара</p>
				</div>
				<div class="col-lg-3 col-6 product-specifications">
					<p class="">Характеристики</p>
				</div>
				<div class="col-lg-11 col-12 product-description-text">
					<p>
						На дне термоизолированного резервуара охладителей молока «Арктика 500», «Арктика 1000» и «Арктика 2000» располагаются источники холода — трубчатые испарители. Все охладители молока открытого типа «Арктика» снабжены французскими компрессорами "Maneurop", которые обеспечивают выработку от 12000 до 34000 килокалорий в час. За короткий промежуток времени молоко охлаждается от 36 до 4 градусов (быстрое охлаждение происходит за счет прямого контакта молока с трубчатыми охладителями), а автоматизированное перемешивание обеспечивает равномерное распределение температуры в резервуаре.охладители молока открытого типа
					</p>
					<p>
						Охлаждающий агрегат оснащен автоматической приборной панелью и пусковым механизмом, фильтром, ресивером и компрессорно-конденсаторным устройством, с которым соединены охладители. На пульте управления постоянно отображается текущая температура молока в резервуаре; как только она поднимается выше допустимой отметки, автоматически включаются охладители, которые затем (при достижении необходимой температуры) переходят в режим ее поддержания.
					</p>
				</div>
				<div class="col-lg-11 col-12 product-specifications-text">
					<div class="row align-items-center">
						<div class="col-lg-5 product-specifications-text-red">
							<p>Характеристика 1</p>
						</div>
						<div class="col-lg-7 product-specifications-text-red">
							<p>38 Ач</p>
						</div>
						<div class="col-lg-5">
							<p>Характеристика 2</p>
						</div>
						<div class="col-lg-7">
							<p>прямая</p>
						</div>
						<div class="col-lg-5 product-specifications-text-red">
							<p>Характеристика 1</p>
						</div>
						<div class="col-lg-7 product-specifications-text-red">
							<p>12 В</p>
						</div>
						<div class="col-lg-5">
							<p>Характеристика 2</p>
						</div>
						<div class="col-lg-7">
							<p>350 А</p>
						</div>
						<div class="col-lg-5 product-specifications-text-red">
							<p>Характеристика 1</p>
						</div>
						<div class="col-lg-7 product-specifications-text-red">
							<p>187x127x225 мм</p>
						</div>
						<div class="col-lg-5">
							<p>Характеристика 2</p>
						</div>
						<div class="col-lg-7">
							<p>2 года</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<h2>Вам понадобится</h2>
				</div>
				<div style="display: none;" id="oneClickBuyModal" class="animated-modal">
					<div class="card">
						<div class="card-body">
							<h2>Купить в один клик</h2>
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
				<div class="col-lg-3">
					<div class="card">
						<div class="card-body">
							<img src="img/bestsellers/1.png" class="cardImg">
							<p class="cardDescription">Танки-охладители молока закрытого типа «Арктика»</p>
							<div class="d-flex justify-content-between">
								<div class="d-flex cardValue">
									<button class="inc">-</button>
									<input type="text" value="1"/>
									<button class="dec">+</button>
								</div>
								<p class="cardPrice">15 990 ₽</p>
							</div>
							<div class="d-flex justify-content-between">
								<button class="blueBtn"><a data-fancybox data-animation-duration="700" data-src="#oneClickBuyModal" href="javascript:;">Купить в 1 клик</a></button>
								<div class="cardCart d-flex">
									<img src="img/icons/cardCart.png">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card">
						<div class="card-body">
							<img src="img/bestsellers/1.png" class="cardImg">
							<p class="cardDescription">Танки-охладители молока закрытого типа «Арктика»</p>
							<div class="d-flex justify-content-between">
								<div class="d-flex cardValue">
									<button class="inc">-</button>
									<input type="text" value="1"/>
									<button class="dec">+</button>
								</div>
								<p class="cardPrice">15 990 ₽</p>
							</div>
							<div class="d-flex justify-content-between">
								<button class="blueBtn"><a data-fancybox data-animation-duration="700" data-src="#oneClickBuyModal" href="javascript:;">Купить в 1 клик</a></button>
								<div class="cardCart d-flex">
									<img src="img/icons/cardCart.png">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card">
						<div class="card-body">
							<img src="img/bestsellers/1.png" class="cardImg">
							<p class="cardDescription">Танки-охладители молока закрытого типа «Арктика»</p>
							<div class="d-flex justify-content-between">
								<div class="d-flex cardValue">
									<button class="inc">-</button>
									<input type="text" value="1"/>
									<button class="dec">+</button>
								</div>
								<p class="cardPrice">15 990 ₽</p>
							</div>
							<div class="d-flex justify-content-between">
								<button class="blueBtn"><a data-fancybox data-animation-duration="700" data-src="#oneClickBuyModal" href="javascript:;">Купить в 1 клик</a></button>
								<div class="cardCart d-flex">
									<img src="img/icons/cardCart.png">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card">
						<div class="card-body">
							<img src="img/bestsellers/1.png" class="cardImg">
							<p class="cardDescription">Танки-охладители молока закрытого типа «Арктика»</p>
							<div class="d-flex justify-content-between">
								<div class="d-flex cardValue">
									<button class="inc">-</button>
									<input type="text" value="1"/>
									<button class="dec">+</button>
								</div>
								<p class="cardPrice">15 990 ₽</p>
							</div>
							<div class="d-flex justify-content-between">
								<button class="blueBtn"><a data-fancybox data-animation-duration="700" data-src="#oneClickBuyModal" href="javascript:;">Купить в 1 клик</a></button>
								<div class="cardCart d-flex">
									<img src="img/icons/cardCart.png">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<h2>Вы смотрели</h2>
				</div>
				<div class="col-lg-3">
					<div class="card">
						<div class="card-body">
							<img src="img/bestsellers/1.png" class="cardImg">
							<p class="cardDescription">Танки-охладители молока закрытого типа «Арктика»</p>
							<div class="d-flex justify-content-between">
								<div class="d-flex cardValue">
									<button class="inc">-</button>
									<input type="text" value="1"/>
									<button class="dec">+</button>
								</div>
								<p class="cardPrice">15 990 ₽</p>
							</div>
							<div class="d-flex justify-content-between">
								<button class="blueBtn"><a data-fancybox data-animation-duration="700" data-src="#oneClickBuyModal" href="javascript:;">Купить в 1 клик</a></button>
								<div class="cardCart d-flex">
									<img src="img/icons/cardCart.png">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card">
						<div class="card-body">
							<img src="img/bestsellers/1.png" class="cardImg">
							<p class="cardDescription">Танки-охладители молока закрытого типа «Арктика»</p>
							<div class="d-flex justify-content-between">
								<div class="d-flex cardValue">
									<button class="inc">-</button>
									<input type="text" value="1"/>
									<button class="dec">+</button>
								</div>
								<p class="cardPrice">15 990 ₽</p>
							</div>
							<div class="d-flex justify-content-between">
								<button class="blueBtn"><a data-fancybox data-animation-duration="700" data-src="#oneClickBuyModal" href="javascript:;">Купить в 1 клик</a></button>
								<div class="cardCart d-flex">
									<img src="img/icons/cardCart.png">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card">
						<div class="card-body">
							<img src="img/bestsellers/1.png" class="cardImg">
							<p class="cardDescription">Танки-охладители молока закрытого типа «Арктика»</p>
							<div class="d-flex justify-content-between">
								<div class="d-flex cardValue">
									<button class="inc">-</button>
									<input type="text" value="1"/>
									<button class="dec">+</button>
								</div>
								<p class="cardPrice">15 990 ₽</p>
							</div>
							<div class="d-flex justify-content-between">
								<button class="blueBtn"><a data-fancybox data-animation-duration="700" data-src="#oneClickBuyModal" href="javascript:;">Купить в 1 клик</a></button>
								<div class="cardCart d-flex">
									<img src="img/icons/cardCart.png">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card">
						<div class="card-body">
							<img src="img/bestsellers/1.png" class="cardImg">
							<p class="cardDescription">Танки-охладители молока закрытого типа «Арктика»</p>
							<div class="d-flex justify-content-between">
								<div class="d-flex cardValue">
									<button class="inc">-</button>
									<input type="text" value="1"/>
									<button class="dec">+</button>
								</div>
								<p class="cardPrice">15 990 ₽</p>
							</div>
							<div class="d-flex justify-content-between">
								<button class="blueBtn"><a data-fancybox data-animation-duration="700" data-src="#oneClickBuyModal" href="javascript:;">Купить в 1 клик</a></button>
								<div class="cardCart d-flex">
									<img src="img/icons/cardCart.png">
								</div>
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