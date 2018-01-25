<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Шелковик-1/Галерея</title>
	<meta name="description" content="Сайт Шелковик-1. Галерея.">
	<meta name="Keywords" content="Silkhouse, Шелковик-1, Шелковик, садоводческое некоммерческое товарищество, СНТ, галерея">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/general.css">
	<link rel="stylesheet" type="text/css" href="css/gallery.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Roboto:900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300|Roboto:900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.3.css" type="text/css" media="screen" />
	<script type="text/javascript" src="fancybox/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.3.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
	$(".gallery a").fancybox();
	});
	</script>
	<script type="text/javascript">
		jQuery(document).ready(function($){
		$('.pod_menu').hide();
		$('.menu-title').click(function(){$(this).next().toggle()});
		});
	</script>
	<script type="text/javascript">
	$(function(){
	        $("a[href^='#']").click(function(){
	                var _href = $(this).attr("href");
	                $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
	                return false;
	        });
	});
	</script>
	<script type="text/javascript">
		$(function() { 
			$(window).scroll(function() { 
			if($(this).scrollTop() != 0) {
				$('#toTop').fadeIn();
			} 
			else {
				$('#toTop').fadeOut();
				}
			});
			$('#toTop').click(function() {
			$('body,html').animate({scrollTop:0},800);
			});
		});
</script>
<link rel= "icon" href= "favicon.ico" type= "ico">
</head>
<body>
	<div class="content">
	<header>
		<div><img src="img/стрелка2.png" alt="Наверх" ID = "toTop"></div>
		<div class="container clearfix height_vh">
			<img src="img/Эллипс4.png" alt="SilkHouse" class="logo logo1">
			<img src="img/logo.png" alt="SilkHouse" class="logo logo2">
			<div id="phone">
				<div class="phone">+7 (920) 906-65-26</div>
				<img src="img/number2.png" alt="phone" class="number">	
			</div>
			<nav class="nav1">
				<ul class="menu"> 
					<li class="lineed">
						<a href="index.php" title="Перейти на главную страницу">Главная</a>
					</li>
					<li class="lineed">
						<a href="news.php" title="Новости">Новости</a>
					</li>
					<li class="lineed">
						<a href="documents.php" title="Документы">Документы</a>
					</li>
					<li class="lineed">
						<a href="debtors.php" title="Должники">Должники</a>
					</li>
					<li class="lineed">
						<a href="gallery.php" title="Галерея" class="here2">Галерея</a>
					</li class="lineed">
					<li class="lineed">
						<a href="bord.php" title="Доска объявлений">Доска объявлений</a>
					</li>
					<li class="lineed">
						<a href="helpful.php" title="Полезная информация">Полезная информация</a>
					</li>
					<li class="lineed">
						<a href="about.php" title="Контакты">Контакты</a>
					</li>
				</ul>
			</nav>
			<div id="adapt">
				<div class="menu-title">
				</div>
					<ul class="pod_menu">
						<li>
							<a href="index.php" title="Перейти на главную страницу">Главная</a>
						</li>
						<li>
							<a href="news.php" title="Новости">Новости</a>
						</li>
						<li>
							<a href="documents.php" title="Документы">Документы</a>
						</li>
						<li>
							<a href="debtors.php" title="Должники">Должники</a>
						</li>
						<li>
							<a href="gallery.php" title="Галерея" class="here">Галерея</a>
						</li>
						<li>
							<a href="bord.php" title="Галерея">Доска объявлений</a>
						</li>
						<li>
							<a href="helpful.php" title="Полезная информация">Полезная информация</a>
						</li>
						<li>
							<a href="about.php" title="Контакты">Контакты</a>
						</li>	
					</ul>
			</div>
			<h2>садоводческое некоммерческое товарищество</h2>
			<h2 class="second_h2">СНТ</h2>
			<h1>шелковик-1</h1>
		</div>
	</header>
	<section class="section1 container">
	<h2>Галерея</h2>
	<hr>
	<div class="gallery">
		<a href="img/gallery/image-32.jpg" rel="group_1"><img src="img/gallery/image32.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-17.jpg" rel="group_1"><img src="img/gallery/image17.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-22.jpg" rel="group_1"><img src="img/gallery/image22.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-26.jpg" rel="group_1"><img src="img/gallery/image26.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-25.jpg" rel="group_1"><img src="img/gallery/image25.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-1.jpg" rel="group_1"><img src="img/gallery/image1.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-7.jpg" rel="group_1"><img src="img/gallery/image7.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-10.jpg" rel="group_1"><img src="img/gallery/image10.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-11.jpg" rel="group_1"><img src="img/gallery/image11.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-12.jpg" rel="group_1"><img src="img/gallery/image12.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-14.jpg" rel="group_1"><img src="img/gallery/image14.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-18.jpg" rel="group_1"><img src="img/gallery/image18.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-19.jpg" rel="group_1"><img src="img/gallery/image19.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-38.jpg" rel="group_1"><img src="img/gallery/image38.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-20.jpg" rel="group_1"><img src="img/gallery/image20.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-21.jpg" rel="group_1"><img src="img/gallery/image21.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-29.jpg" rel="group_1"><img src="img/gallery/image29.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-30.jpg" rel="group_1"><img src="img/gallery/image30.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-31.jpg" rel="group_1"><img src="img/gallery/image31.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-33.jpg" rel="group_1"><img src="img/gallery/image33.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-37.jpg" rel="group_1"><img src="img/gallery/image37.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-39.jpg" rel="group_1"><img src="img/gallery/image39.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-4.jpg" rel="group_1"><img src="img/gallery/image4.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-2.jpg" rel="group_1"><img src="img/gallery/image2.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-5.jpg" rel="group_1"><img src="img/gallery/image5.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-6.jpg" rel="group_1"><img src="img/gallery/image6.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-13.jpg" rel="group_1"><img src="img/gallery/image13.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-23.jpg" rel="group_1"><img src="img/gallery/image23.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-27.jpg" rel="group_1"><img src="img/gallery/image27.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-28.jpg" rel="group_1"><img src="img/gallery/image28.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-34.jpg" rel="group_1"><img src="img/gallery/image34.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-35.jpg" rel="group_1"><img src="img/gallery/image35.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-36.jpg" rel="group_1"><img src="img/gallery/image36.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-8.jpg" rel="group_1"><img src="img/gallery/image8.jpg" class="small" alt=""></a>
		<a href="img/gallery/image-9.jpg" rel="group_1"><img src="img/gallery/image9.jpg" class="small" alt=""></a>
	</div>
	</section>
	<footer>
		<div class="container clearfix first_bar">
			<div class="foot1">
				<p class="num left">+7 (920) 906-65-26</p>
				<p class="email">shelkovik-1@yandex.ru</p>
				<p class="foot_text">Автор статей и фотографий, используемых на сайте - Артём Приходько</p>		
			</div>
		</div>
		<div class="second_bar">
			<div class="container">
				<p class="security">Все права защищены &copy; 2018</p>
			</div>
		</div>
	</footer>
	<script>
	    $(".extremum-click").click(function () {
	      $(this).siblings(".extremum-slide").slideToggle("slow");
	    });
	</script>
</body>
</html>
