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

	<!-- ПРОМО-БЛОК -->
	<div id="promoMain">
		<div class="grid">
			<div class="promoText" id="promoTextLeft">Здоровые зубы</div>
			<div id="zub"></div>
			<div class="promoText" id="promoTextRight">красивая улыбка!</div>
			<div class="clean"></div>
		</div>
	</div>

	<!-- ГЛАВНОЕ МЕНЮ -->
	<div id="mainMenu">
		<span>О клинике</span>
		<a href="/price-terapia">Услуги и цены</a>
		<a href="/contacts">Контакты</a>
		<div class="clean"></div>
	</div>

	<!-- РАЗДЕЛИТЕЛЬ -->
	<div class="roundLineSeparator"></div>

	<!-- УСУГИ -->
	<h1>Услуги клиники</h1>

	<div id="uslugiMain">
		<div>Консультация</div>
		<div>Диагностика</div>
		<div>Пломбирование</div>
		<div>Лечение</div>
		<div>Протезирование</div>
		<div>Реставрация</div>
		<div>Шлифовка</div>
		<div>Гигиена</div>
	</div>
	<div class="clean"></div>

	<a href="/price-terapia" id="showPriceButton">Все услуги</a>

	<!-- БЕЛЫЙ ЗАБОР -->
	<div class="zaborWhite"></div>

	<!-- О КЛИНИКЕ -->
	<div id="aboutUsMain">
		<h1>О клинике</h1>
		<div class="gridTwo">

			<div class="aboutUsPhoto">
				<a data-fancybox="images" href="images/aboutUsImage_1.jpg">
					<div class="aboutUsPhotoOverlay"></div>
					<img class="round" src="images/aboutUsImage_1_t.jpg" alt="Современная клиника" />
				</a>
			</div>
			<div class="aboutUsPhoto">
				<a data-fancybox="images" href="images/aboutUsImage_2.jpg">
					<div class="aboutUsPhotoOverlay"></div>
					<img class="round" src="images/aboutUsImage_2_t.jpg" alt="Современная клиника" />
				</a>
			</div>
			<div class="aboutUsPhoto">
				<a data-fancybox="images" href="images/aboutUsImage_3.jpg">
					<div class="aboutUsPhotoOverlay"></div>
					<img class="round" src="images/aboutUsImage_3_t.jpg" alt="Современная клиника" />
				</a>
			</div>
			<div class="aboutUsPhoto">
				<a data-fancybox="images" href="images/aboutUsImage_4.jpg">
					<div class="aboutUsPhotoOverlay"></div>
					<img class="round" src="images/aboutUsImage_4_t.jpg" alt="Современная клиника" />
				</a>
			</div>

			<div class="clean"></div>

			<div class="aboutUsText">
				
			</div>

			<div class="roundLineSeparatorWhiteShort"></div>

			<h1>Наши врачи</h1>

			<div style="width: 735px; margin: 0 auto 0 auto;">
				<div class="doctorMain">
					<img src="images/doctor_1.jpg"><div class="doctorName">Гатиатуллина Нурия Дабировна</div><span>врач-стоматолог</span>
				</div>
				<div class="doctorMain">
					<img src="images/doctor_6.jpg"><div class="doctorName">Мифтахова Рената Ринатовна</div><span>врач стоматолог</span>
				</div>
				<div class="doctorMain">
					<img src="images/doctor_4.jpg"><div class="doctorName">Асыров Ермек<br>Аманюлович</div><span>зубной техник</span>
				</div>
					<div class="clean"></div>
				<div class="doctorMain">
					<img src="images/doctor_2.jpg"><div class="doctorName">Акбатырова Айгуль Талгатовна</div><span>зубной техник</span>
				</div>
				<div class="doctorMain">
					<img src="images/doctor_5.jpg"><div class="doctorName">Чибинева Елена Викторовна</div><span>рентгенолог</span>
				</div>
				<div class="doctorMain">
					<img src="images/doctor_3.jpg"><div class="doctorName">Хисамутдинова Альфия Наильевна</div><span>администратор</span>
				</div>
			</div>

			<div class="clean"></div>

		</div>
	</div>

	<!-- КОНТАКТЫ -->
	<div class="contactsMain" id="cont">
		<h1>Контакты</h1>
		<div id="contactsTextBig">
			г. Соль-Илецк, ул. Монтажников, 16а<br>8 (35336) 2-66-77, 8 922 874-61-64
		</div>
		<div id="contactsTextSmall">С понедельника по пятницу с 9:00 до 18:00</div>
	</div>

	<!-- КАРТА -->
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
</html>