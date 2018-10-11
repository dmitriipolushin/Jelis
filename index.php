<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Jelis-разработка сайтов</title>
	 <!-- add bootstrap css file -->

      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
  <!-- navbar -->

  <nav class="navbar navbar-expand-lg fixed-top ">
	  <a class="navbar-brand" href="index.php">Домой</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
	  	 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse " id="navbarSupportedContent">
	    <ul class="navbar-nav mr-4">
	      
	      <li class="nav-item">
	        <a class="nav-link" data-value="blog" href="#">Услуги</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link " data-value="team" href="#">О компании</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link " data-value="contact-form" href="#">Свяжитесь с нами</a>
	      </li>
	    </ul>
	    
	  </div>
</nav>
<!-- header -->
<header class="header ">
  <div class="overlay"></div>
   <div class="container">
   	  <div class="description ">
		<table align="middle">
			<tr>		
				<td>
				<h1>
				Это сайт команды Jelis
				<p>
				Мы занимаемся разработкой сайтов подключ и т.д. что-то ещё  
				</p>
				</h1>
				<td>
				<td>
					<img src="images/logo.png" height="300" width="550" align="middle">
				</td>
			</tr>
		</table>	
  </div>
   </div>
  
</header>



<!-- Posts section -->
<div class="blog" id="blog">
	<div class="container">
	<h1 class="text-center">Предостовляемые услуги</h1>
		<div class="row">
			<div class="col-md-4 col-lg-4 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="images/posts/" class="img-fluid">
					</div>
					
					<div class="card-body">
					<h4 class="card-title">Лэндинг-Пэйдж </h4>
						<p class="card-text">
						Лендинг хорошо подходит для демонстрации отдельных направлений 
						услуг или узкой специализации сбыта товаров. 	
						</p>
					</div>
					<div class="card-footer">
						<a href="landingPage.php" class="card-link">Узнать больше</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="images/posts/" class="img-fluid">
					</div>
					
					<div class="card-body">
					   <h4 class="card-title">Корпоративный сайт</h4>
						<p class="card-text">
						Сайт для корпоративных клиентов — индивидуальное решение 
						с уникальным дизайном и функционалом средней и высокой сложности. 
						</p>
					</div>
					<div class="card-footer">
						<a href="" class="card-link">Узнать больше</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="images/posts/" class="img-fluid">
					</div>
					
					<div class="card-body">
					<h4 class="card-title">Интернет магазин</h4>
						<p class="card-text">
						Интернет-магазин представляет из себя каталог товаров с фильтрациями
						 и сортировками, в котором можно приобрести продукцию онлайн.
						</p>
					</div>
					<div class="card-footer">
						<a href="" class="card-link">Узнать больше</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<!-- team section -->
<div class="team" id="team">
	<div class="container">
		 <h1 class="text-center">Наша команда</h1>
	 <div class="row">
		<div class="col-lg-3 col-md-3 col-sm-12 item">
		 <img align="center" src="images/content1.jpg" class="img-fluid" alt="team">
		 <div class="des">
			 Рубен
			</div>
		 <span class="text-muted">Manager</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 item">
		 <img align="center" src="images/content1.jpg" class="img-fluid" alt="team">
		 <div class="des">
				Дмитрий
			</div>
		 <span class="text-muted">Front End Developer</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 item">
		 <img align="center" src="images/content1.jpg" class="img-fluid" alt="team">
		 <div class="des">
			 Евгений 
			</div>
		 <span class="text-muted">Back End Developer</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 item">
		 <img align="center" src="images/content1.jpg" class="img-fluid" alt="team">
			<div class="des">
			 Ирина
			</div>
		 <span class="text-muted">Designer</span>
		</div>
	 </div>
	</div>
 </div>
 <!-- Contact form -->
<div class="contact-form" id="contact-form">
	<div class="container">
	 <form>
		<div class="row">
		 <div class="col-lg-4 col-md-4 col-sm-12">
			 <h1>Свяжитесь с нами</h1> 
		 </div>
		 <div class="col-lg-8 col-md-8 col-sm-12 right">
				<div class="form-group">
					<input type="text" class="form-control form-control-lg" placeholder="Your Name" name="">
				</div>
				<div class="form-group">
					<input type="email" class="form-control form-control-lg" placeholder="YourEmail@email.com" name="email">
				</div>
				<div class="form-group">
					<textarea class="form-control form-control-lg">
					 
					</textarea>
				</div>
				<input type="submit" class="btn btn-secondary btn-block" value="Send" name="">
		 </div>
		</div>
	 </form>
	</div>
 </div>
<!-- footer -->
<?php require "blocks/footer.php" ?>
<!-- add Javasscript file from js file -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src='js/main.js'></script>

</body>
</html>