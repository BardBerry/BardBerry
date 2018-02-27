<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<title>Шелковик1/Главная</title>
	<meta name="description" content="Сайт Шелковик1. Главная страница">
	<meta name="Keywords" content="Silkhouse, Шелковик-1, Шелковик, Шелковик1, садоводческое некоммерческое товарищество, СНТ, главная, новости, история, о нас">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Roboto:900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300|Roboto:900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
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
	<header id="services3">
		<DIV><img src="img/strelka2.png" alt="Наверх" ID = "toTop"></DIV>
		<div class="container clearfix height_vh">
			<img src="img/ellips4.png" alt="SilkHouse" class="logo logo1">
			<img src="img/logo.png" alt="SilkHouse" class="logo logo2">
			<div id="phone">
				<p class="phone">+7 (920) 906-65-26</p>
				<img src="img/number.png" alt="phone" class="number">	
			</div>
			<nav class="nav1">
				<ul class="menu"> 
					<li class="lineed">
						<a href="index.php" title="Перейти на главную страницу" class="here2">Главная</a>
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
						<a href="gallery.php" title="Галерея">Галерея</a>
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
							<a href="index.php" title="Перейти на главную страницу" class="here">Главная</a>
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
							<a href="gallery.php" title="Галерея">Галерея</a>
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
			<a href="#services" class="button1" title="Подробнее">подробнее</a>
			<!--<div class="down"><a href="#services1"><i class="fa fa-angle-down fa-fw" aria-hidden="true" id="fa_head"></i></a></div>-->
		</div>
	</header>
	<section class="section2" id="services1">
		<div class="container clearfix">
			<div>
				<h2>горячие новости</h2>
				<hr>
			</div>
			<table>
				<tr>
					<td>
						<img src="img/news10.jpg" class="border">
					</td>
					<td class="td_top">
						<div class="news_h3">
							<h3>
								За сезон 2017 года:
							</h3>
							<ul>
								<div>
								<li>
									<ul>
										<li><i class="fa fa-clock-o" aria-hidden="true"></i></li>
										<li><p class="news_data">9 января 2018</p></li>
									</ul>
								</li>
								</div>
								<li>
									<p class="news_list pad">- закончены работы по замене проводов на кабель СиП</p>
									<p class="news_list">- отремонтирована и запущена насосная станция №2</p>
									<p class="news_list">- восстановлен забор вдоль Лесной улицы</p>
									<p class="news_list">-отремонтирован мостик для купания у насосной №1</p>
									<p class="news_list">-заменено освещение по центральной ули&shy;це на све&shy;то&shy;диод&shy;ные про&shy;жек&shy;то&shy;ра мощность 30W</p>	
								</li>
							</ul>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<img src="img/news1.jpg" class="border">
					</td>
					<td class="td_top">
						<div class="news_h3">
							<h3>
								Внимание!
							</h3>
							<ul>
								<li>
									<ul>
										<li><i class="fa fa-clock-o" aria-hidden="true"></i></li>
										<li><p class="news_data">04 сентября 2017</p></li>
									</ul>
								</li>
								<li>
									<p class="news_text">
										С 1 января 2018 года в России устанавливается запрет на распоряжение земельными участками, границы которых не уточнены. Данное положение утверждено <a href="http://base.garant.ru/70274800/" target="_blank"><b>распоряжением Правительства Российской Федерации</b></a> от 01.12.2012 № 2236-р о Плане мероприятий («дорожной карте») «Повышение качества государственных услуг в сфере государственного кадастрового учета недвижимого имущества и государственной регистрации прав на недвижимое имущество и сделок с ним».
									</p>
									<div class="block">
										<div class="extremum-slide">
											<p class="news-text">Пунктом 21 раздела 2 «дорожной карты» определено следующее: «Установление с 1 января 2018 года запрета (без исключений) на распоряжение земельными участками, в отношении которых отсутствуют сведения о местоположении границ». Таким образом, если в установленном законом порядке до 01.01.2018 года не будут проведены кадастровые работы в отношении земельного участка, то таким участком нельзя будет распоряжаться (продать, подарить, обменять и т.п.) вне зависимости от того, имеется свидетельство на право собственности, государственный акт на землю или нет.</p>
										</div>
										<a class="extremum-click news_text2">Читать далее</a>
									</div>
								</li>
							</ul>
						</div>
					</td>
				</tr>
			</table>
			<div class="down"><a href="#services2"><i class="fa fa-angle-down fa-fw" id="fa2" aria-hidden="true"></i></a></div>
		</div>
	</section>
	<section class="section3" id="services2">
		<div class="container">
			<h2>О нас</h2>
			<hr>
			<div class="about_us clearfix">
			<div class="box">
				<div class="about_us_class con_1">
					<img src="img/icons8-Forest-100 (1).png">
					<h3>В окружении леса</h3>
					<p>
						Мы находимся на окраине Киржача в живописном месте в окружении векового хвойного леса. У нас 250 садовых участков
					</p>
				</div>
				<div class="about_us_class con_2">
					<img src="img/icons8-Sea Waves-100 (1).png">
					<h3>Собственное озеро</h3>
					<p>
						На территории СНТ своё озеро для купания, которое также снабжает водой огороды для полива и технических нужд. Есть два колодца с питьевой водой и родник с ключевой водой
					</p>
				</div>
				<div class="about_us_class con_3">
					<img src="img/wifi.png">
					<h3>Быстрый интернет</h3>
					<p>
						У нас проведён высокоскоростной интернет (оптический кабель) со скоростью до 100 мегабит в секунду
					</p>
				</div>
				<div class="about_us_class con_4">
					<img src="img/icons8-Light On Filled-100 (1).png">
					<h3>Новый трансформатор</h3>
					<p>
						В 2016 году установлен новый трансформатор и заменены трубы водопровода на новые, из ПНД. В дачный сезон организован вывоз мусора, имеется контейнер для ТБО
					</p>
				</div>
				</div>
			</div>
		<div class="down"><a href="#services"><i class="fa fa-angle-down fa-fw" aria-hidden="true"></i></a></div>
		</div>
	</section>
	<section class="section4" id="services">
		<div class="container clearfix">
			<h2>Наша История</h2>
			<hr>
			<div class="history">
				<img src="img/kirzhach.jpg" alt="Город Киржач" class="img1">
				<p>Город Киржач – центр Киржачского района Владимирской области. Расположен в 90 км от Москвы и в 125 км от Владимира на реке Киржач (левый приток Клязьмы). Первое упоминание Киржача датируется 1328-1332 годами, а вот городом со статусом уездного центра Киржач стал в 1778 году, согласно указу Екатерины II.</p><br>
				<p>Город славился добычей и переработкой леса, а также текстилем. В царское время Киржач был центром шёлковой промышленности, выпускал одну пятую всех производимых в России шёлковых тканей и имел 8 шёлкоткацких фабрик.</p><br>
				<p>На базе одной из пряжекрасильных мануфактур братьев Соловьёвых (основанной в 1848 году) в 1932 году был создан Киржачский Шёлкопрядильный комбинат, где производили натуральные шёлковые ткани. В лучшие свои годы комбинат выпускал до 70 миллионов квадратных метров ткани, для изготовления которой специально из Китая завозили коконы тутового шелкопряда. Шёлковый комбинат имел статус градообразующего предприятия и долгое время давал работу большинству населения Киржача.</p><br>
			</div>
			<div class="history2">
				<img src="img/vegetables.jpg" alt="Город киржач" class="img2">
				<p>И вот, в 1967 году, Киржачский шёлковый комбинат выделяет своим сотрудникам участок земли на опушке леса под садово-огородническое товарищество. Первым председателем становится Горянинов Иван Александрович.</p><br>
				<p>Будущие садоводы, совместно с правлением, проводят ряд мероприятий по созданию и благоустройству коллективного сада и называют его <b>«Шелковик-1»</b>. За короткий промежуток времени приводят территорию в надлежащий вид, спиливают лесные деревья и выкорчёвывают пни, проводят электричество, своими силами делают плотину из протекающего ручья под названием Виношка и тем самым создают озеро, которое и по сей день снабжает водой огороды для полива, а также с удовольствием используется дачниками для купания.</p>
			</div>
			<div class="years"><b>В 2017 году нашему СНТ «Шелковик-1» исполнилось 50 лет!</b></div>
		</div>
	</section>
	</div>
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