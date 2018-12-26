<?php
	include('htmlHead.php');
?>
<body class="aboutCompanyPage">	
	<?php
		include('nav.php');
	?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>О компании</h2>
				</div>
				<div class="col-lg-12">
					<p>
						Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).
					</p>
					<p>
						Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).
					</p>
				</div>
				<div class="col-lg-auto d-flex socialImgs">
					<img src="img/icons/1.png">
					<img src="img/icons/2.png">
					<img src="img/icons/3.png">
					<img src="img/icons/4.png">
				</div>
			</div>
			<div class="row buildingObjectsSlider">
				<div class="col-lg-3 col-12">
					<img src="img/buildingObjects/1.png">
					<p>Пермский край, строительство молочно товарной фермы на 400 голов КРС с молочным блоком</p>
				</div>
				<div class="col-lg-3 col-12">
					<img src="img/buildingObjects/2.png">
					<p>Башкортостан строительство МТФ на 526 голов с ДМБ и доильным залом Ёлочка 2х14</p>
				</div>
				<div class="col-lg-3 col-12">
					<img src="img/buildingObjects/3.png">
					<p>Татарстан, строительство комплекса на 800 голов</p>
				</div>
				<div class="col-lg-3 col-12">
					<img src="img/buildingObjects/4.png">
					<p>Башкортостан, строительство коровника на 400 голов с ДМБ</p>
				</div>
				<div class="col-lg-3 col-12">
					<img src="img/buildingObjects/1.png">
					<p>Пермский край, строительство молочно товарной фермы на 400 голов КРС с молочным блоком</p>
				</div>
			</div>
			<div class="row justify-content-between bestsellersArrows d-lg-flex d-none">
				<div class="col-auto arrow-leftDiv">
					<img src="img/icons/bLeft.png" class="prev5" alt="назад">
				</div>
				<div class="col-auto arrow-rightDiv">
					<img src="img/icons/bRight.png" class="next5" alt="вперед">
				</div>
			</div>
		</div>
	</section>
	<?php
		include('formSection.php')
	?>
	<?php
		include('footer.php');
	?>
<?php
	include('htmlEndBody.php');
?>