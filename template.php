<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Space Shop - Home</title>
	<link rel="icon" href="/pages/img/satelite_86323.png" type="image/png">
	<link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="vendors/nice-select/nice-select.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<a class="navbar-brand logo_h" href="index"><img src="/pages/img/image 4@2x.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto mr-auto">
							<li class="nav-item active"><a class="nav-link" href="index">Домой</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Магазин (не работает)</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="category.html">Категории магазина</a></li>
									<li class="nav-item"><a class="nav-link" href="single-product.html">Информация о продукте</a></li>
									<li class="nav-item"><a class="nav-link" href="checkout.html">Проверка продукта</a></li>
									<li class="nav-item"><a class="nav-link" href="confirmation.html">Подтверждение</a></li>
									<li class="nav-item"><a class="nav-link" href="cart.html">Корзина покупателя</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="/pages/dipl.html" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Игра</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="/pages/dipl.html">Играть</a></li>
									<li class="nav-item"><a class="nav-link" href="nobay">Рекорды</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Вход / Регистрация</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="/login">Вход</a></li>
									<li class="nav-item"><a class="nav-link" href="/reg">Регистрация</a></li>
									<li class="nav-item"><a class="nav-link" href="tracking-order.html">Отслеживание</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="contact.html">Контакты</a></li>
						</ul>

						<ul class="nav-shop">
							<li class="nav-item"><button><i class="ti-search"></i></button></li>
							<li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button> </li>
							<li class="nav-item"><a class="button button-header" href="login">Вход на сайт</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<?php echo $content ?>


	<!--================ Start footer Area  =================-->
	<footer class="footer">
		<div class="footer-area">
			<div class="container">
				<div class="row section_gap">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title large_title">Наша миссия</h4>
							<p>
								Планету в каждый дом!
							</p>
							<p>
								Так семя семян зеленого, что крылатый скот внутри. Сбор вещей заставил вас летать, вы не разделены глубоко тронутыми.
							</p>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Быстрые ссылки</h4>
							<ul class="list">
								<li><a href="#">На главную</a></li>
								<li><a href="#">Магазин</a></li>
								<li><a href="#">Игра</a></li>
								<li><a href="#">Товар</a></li>
								<li><a href="#">Марка</a></li>
								<li><a href="#">Контакты</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget instafeed">
							<h4 class="footer_title">Галерея</h4>
							<ul class="list instafeed d-flex flex-wrap">
								<li><img src="img/gallery/r1.jpg" alt=""></li>
								<li><img src="img/gallery/r2.jpg" alt=""></li>
								<li><img src="img/gallery/r3.jpg" alt=""></li>
								<li><img src="img/gallery/r5.jpg" alt=""></li>
								<li><img src="img/gallery/r7.jpg" alt=""></li>
								<li><img src="img/gallery/r8.jpg" alt=""></li>
							</ul>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Свяжитесь с нами</h4>
							<div class="ml-40">
								<p class="sm-head">
									<span class="fa fa-location-arrow"></span>
									Головной офис
								</p>
								<p>г. Москва, ул.Садовая-Кудринская, д. 5, стр. 1 Планетарий</p>

								<p class="sm-head">
									<span class="fa fa-phone"></span>
									Телефонный номер
								</p>
								<p>
									+123 456 7890 <br>
									+123 456 7890
								</p>

								<p class="sm-head">
									<span class="fa fa-envelope"></span>
									Электронная почта
								</p>
								<p>
									info@planetarium-msk.com
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row d-flex">
					<p class="col-lg-12 footer-text text-center">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Авторское право &copy;<script>
							document.write(new Date().getFullYear());
						</script> Все права защищены | Этот сайт дипломный проект <i class="fa fa-heart" aria-hidden="true"></i> мой.
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->
	</main>





	<script src="vendors/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
	<script src="vendors/skrollr.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendors/nice-select/jquery.nice-select.min.js"></script>
	<script src="vendors/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/mail-script.js"></script>
	<script src="js/main.js"></script>
</body>

</html>