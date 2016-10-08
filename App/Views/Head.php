<?php defined('RUNACCESS') or die('No direct script access.');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title><?=$Data['title']?></title>
	<meta name="Description" content="<?=$Data['description']?>"/>
	<link rel="stylesheet" href="<?=BASEURL?>/css/style.css">
</head>
<body>
	<header>
		<div class="logo"><a href="index"><img src="img/logo.png" alt="" /></a></div>
		<div class="social">
			<ul>
				<li><a href="#"><img src="img/icon-rss.png" alt="RSS" /></a></li>
				<li><a href="#"><img src="img/icon-facebook.png" alt="Facebook" /></a></li>
				<li><a href="#"><img src="img/icon-twitter.png" alt="Twitter" /></a></li>
				<li><a href="#"><img src="img/icon-googleplus.png" alt="Google+" /></a></li>
			</ul>
	</header>
<div class="clear"></div>
<!-- Begin Menu -->
<nav id="menu">
	<ul>
		<li><a href="index" class="active">Главная</a></li>
		<li><a href="Posts">Статьи</a>
			<ul>
				<li><a href="portfolio.html">Portfolio 5 Columns</a></li>
				<li><a href="portfolio-post.html">Portfolio Post</a></li>
			</ul>
		</li>
		<li><a href="Blogs">Блоги</a></li>
		<li><a href="Contact">Контакты</a></li>
	</ul>
</nav>
<!-- End Menu -->