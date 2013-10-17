<!DOCTYPE html>
<html>
	<head>
		<title>Affichage dynamique</title>
		<meta charset="utf-8" />
		<script src="js/jquery-1.9.1.js" charset="utf-8"></script>
		<script src="js/ajax.js" charset="utf-8"></script>
		
		<!-- bxSlider Javascript file -->
		<script src="slider/jquery.bxslider.min.js"></script>
		<!-- bxSlider CSS file -->
		<link href="slider/jquery.bxslider.css" rel="stylesheet" />
		
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	</head>
	<body>
		<h1>Vitrine</h1>
		<ul class='bxslider1'>
			<li><div>Affi<br>chage 1</div></li>
			<li><div>Affichage 2</div></li>
			<li><div>Affichage 3</div></li>
			<li><div>Affichage 4</div></li>
		</ul>
		<div class="slider8">
		  <div class="slide"><img src="http://placehold.it/300x100&text=FooBar1"></div>
		  <div class="slide"><img src="http://placehold.it/300x100&text=FooBar2"></div>
		  <div class="slide"><img src="http://placehold.it/300x100&text=FooBar3"></div>
		  <div class="slide"><img src="http://placehold.it/300x100&text=FooBar4"></div>
		  <div class="slide"><img src="http://placehold.it/300x100&text=FooBar5"></div>
		  <div class="slide"><img src="http://placehold.it/300x100&text=FooBar6"></div>
		  <div class="slide"><img src="http://placehold.it/300x100&text=FooBar7"></div>
		  <div class="slide"><img src="http://placehold.it/300x100&text=FooBar8"></div>
		  <div class="slide"><img src="http://placehold.it/300x100&text=FooBar9"></div>
		  <div class="slide"><img src="http://placehold.it/300x100&text=FooBar10"></div>
		</div>
		<ul class="bxslider2">
		  <li>AAA<img src="http://placehold.it/300x100&text=FooBar1" /></li>
		  <li>BBB<img src="http://placehold.it/300x100&text=FooBar2" /></li>
		  <li>CCC<img src="http://placehold.it/300x100&text=FooBar3" /></li>
		</ul>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.bxslider1').bxSlider();
				$('.bxslider2').bxSlider({
					auto: true,
  					autoControls: true
				});
			  	$('.slider8').bxSlider({
				    mode: 'vertical',
				    slideWidth: 300,
				    minSlides: 2,
				    slideMargin: 10
				});
			});
		</script>
	</body>
</html>