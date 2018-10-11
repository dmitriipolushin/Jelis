<!DOCTYPE html>
<html>
<head>
	<title>
		Jelis-разработка сайтов
	</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</head>
<body>
<?php require_once "blocks/navbar.php" ?>
<?php 
	$headline = "Landing-Page или Сайт-визитка";
	require_once "blocks/header.php";
?>

  <div class="about" id="about">
		<div class="container">
		  <h1 class="text-center">Что это такое?</h1>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<img src="images/posts/" class="img-fluid">
					<span class="text-justify">Пример сайта-визитки</span>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 desc">
				  
					<h3>Описание</h3>
					<p>
					Целевая страница — веб-страница, основной задачей которой является сбор контактных данных целевой аудитории. 
					Используется для усиления эффективности рекламы, увеличения аудитории. 
					Целевая страница обычно содержит информацию о товаре или услуге. 
					Целевые страницы используются и для дифференциации интернет-аудитории.
					 На основе данных о поведении посетителей целевых страниц выстраиваются маркетинговые кампании.
					  В зависимости от интересов, уровня образования посетителя, даже времени суток или года каждому типу 
						посетителей может предлагаться свой вариант целевой страницы,
					 ориентированный на желания и потребности конкретной целевой группы.	
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="blog" id="blog">
		<div class="container">
			<h1 class="text-center">Выбор пакета услуг</h1>
			<table align="middle">
				<tr>
					<td>
						<input >
					</td>
				</tr>
			</table>
		</div>
	</div>
	<?php
		$site = "Сайт визитку";
		require "blocks/contact.php"; 
	?>
	<?php require_once "blocks/footer.php" ?>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src='js/main.js'></script>
	
</body>
</html>