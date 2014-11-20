<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="../StyleSheet.css" type="text/css"/>
	<script src="../script.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<title>R&amp;TM</title>
</head>
<body>
<div id="Main">
<div id="Header">
		<div id="Traduit">
		<a href="../Accueil.php"><img src="../../cover/french.jpg" alt="francais"></a>
		<a href="#"><img src="../../cover/anglais.png" alt="anglais"></a>

	</div>
</div>
<!--Fin Header-->
<div id="Menu">
	<?php  include ('menu.php'); ?>
</div>
<!--Fin Menu-->
<div id="Content">
	<h1 class="titre_principal">Welcome to R&amp;T:Malaisie website</h1>
	<div id="banner">
		<!-- liste of slideshow image -->
		<img src="../../cover/banner.jpg" alt="image" class="is-showing">
		<img src="../../cover/banner1.jpg" alt="image1">
		<img src="../../cover/banner2.jpg" alt="image2">
		<img src="../../cover/banner3.jpg" alt="image3">
		<img src="../../cover/banner5.jpg" alt="image5">
	</div>
	

	<script type="text/javascript">
	/*Script for the image slideshow*/
	$(document).ready(function(){
		///$("img").click(function(){
			slideShow();
		///	});
	});

	function slideShow() {
  
  		var showing = $('#banner .is-showing');
  		var next = showing.next().length ? showing.next() : showing.parent().children(':first');
  		/*
 	 	* We could have written the above statement the long way to achieve the same results
  		*
 	 	* if(showing.next().length) {
  		*		showing.next();
  		*	} else {
  		*		showing.parent().children(':first');
  		* }
  		*/  
  		showing.fadeOut(800, function() { next.fadeIn(300).addClass('is-showing'); }).removeClass('is-showing');
  		/*to make the image stay longer, modify here*/
  		setTimeout(slideShow, 5000);
	}
	</script>
<br/>
	<div id="column">
		<div id="news">
		<strong>News</strong>
		<p>Goodluck for the upcoming exams!</p>
		<p>Welcome to the second semester.</p> 
		</div>
	<div id="citation">
		<strong>Pearl of Wisdom</strong>
		<p>"Le travail pense, la paresse songe." Jules Renard</p> 
	</div>
	<div id="calendrier">
		<strong>Calendar</strong>
			<div>
				<script charset="UTF-8" src="http://widget24.com/code/calendar?data%5BWidget%5D%5Bcss%5D=white" type="text/javascript" >
				</script>
				<a href="http://download24.com/" title="download24.com">download24.com</a>
				<a href="http://widget24.com/widget/calendar" title="Calendar for website">Calendar for website</a>
			</div>
		</div>
	</div>
<br/><br/><br/><br/>
</div>
<!--Fin Content-->
<footer>
	<p>&copy; 2013 R&amp;TM. All Rights Reserved.</p>
</footer>
<!--Fin Footer-->
</div>
<!--Fin Main-->
</body>
</html>
