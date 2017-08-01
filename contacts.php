<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Стоматология в Соль-Илецке</title>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header.html'); ?>
	</head>
<body>

	<div id="preloader"></div>

	<!-- ШАПКА -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header-main.html'); ?>

	<!-- БЕЛЫЙ ЗАБОР -->
	<div class="zaborWhiteUpDown"></div>

	<!-- ГЛАВНОЕ МЕНЮ -->
	<div id="mainMenu">
		<a href="/">О клинике</a>
		<a href="/price-terapia">Услуги и цены</a>
		<span>Контакты</span>
		<div class="clean"></div>
	</div>

	<!-- РАЗДЕЛИТЕЛЬ -->
	<div class="roundLineSeparator"></div>

	<h1>Контакты</h1>
	<div class="grid" id="contacts">
		<div>
			<span id="geo"></span>
			г. Соль-Илецк,<br>
			ул. Монтажников, 16а
		</div>
		<div>
			<span id="phone"></span>
			8 (35336) 2-66-77<br>
			8 922 874-61-64
		</div>
	</div>

	<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/map.html'); ?>

	<!-- ФУТЕР -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.html'); ?>

	<!-- Прелоадер -->
	<script type="text/javascript">
		$(window).on('load', function () {
			setTimeout(function(){
				$('#preloader').fadeOut('slow');
			},1000);
		});
	</script>

</body>