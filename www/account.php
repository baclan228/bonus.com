﻿<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Главная</title>
	<!---Подключаем стили-->
	<link rel="stylesheet" href="css/style.css">
	<!---Подключаем Адаптацию-->
	<link rel="stylesheet" href="css/media.css">
	<!---Подключаем Шрифт Roboto-->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!---Подключаем Шрифт Roboto Slab-->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet"> 
	<!---Подключаем jQuery-->
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
<!---Шапка-->
<?php include 'block/header.php'; ?>
<div id="panel">
	<img src="img/1.png" class="close" id="men">
	<content>
		<ul>
			<li><a href="index.html">Бонус</a></li>
			<li><a href="box.html"><img src="img/sunduk.png" id="sunduk_ico">Сундуки</a></li>
			<li><a href="payments.html"><img src="img/dengi.png" id="dengi_ico">Выплаты</a></li>
			<a href="account.html">Профиль</a>
			<li><a href="#">Правила</a></li>
			<li><a href="#">О нас</a></li>
		</ul>
	</content>
</div>
<!---Контент-->
<div class="center">
	<h4>Дождитесь окончания таймера, пройдите капчу и нажмите на любой банер чтобы забрать свой бонус</h4>
	<div id="timer">
		<ul>
			<li>
				<span id="hour">0</span>&nbsp;:
				<span id="minute">3</span>&nbsp;:
				<span id="second">10</span>
			</li>
		</ul>
	</div>
	<div id="pol">
		44
	</div>
	<!---Реклама-->
	<div class="reklama">
		<a href="http://socpublic.com/?i=1515410" target="_blank"><img src="http://socpublic.com/storage/banners/banner_6_468x60.gif" width="468" height="60" border="0" alt="SOCPUBLIC.COM - заработок в интернете!"></a>
		<a href="http://socpublic.com/?i=1515410" target="_blank"><img src="http://socpublic.com/storage/banners/banner_468x60.gif" width="468" height="60" border="0" alt="SOCPUBLIC.COM - заработок в интернете!"></a>
		<a href="http://socpublic.com/?i=1515410" target="_blank"><img src="http://socpublic.com/storage/banners/banner_2_468x60.gif" width="468" height="60" border="0" alt="SOCPUBLIC.COM - заработок в интернете!"></a>
		<a href="http://socpublic.com/?i=1515410" target="_blank"><img src="http://socpublic.com/storage/banners/banner_468x60.gif" width="468" height="60" border="0" alt="SOCPUBLIC.COM - заработок в интернете!"></a>
	</div>
</div>
<!---Подвал-->
<div class="footer">
	r
</div>
</body>
<script src="js/menu.js"></script>
</html>
