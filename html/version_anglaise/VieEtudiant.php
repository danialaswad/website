<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="../StyleSheet.css" type="text/css"/>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<title>R&amp;TM</title>
</head>
<body>
<div id="Main">
<div id="Header">
	<div id="Traduit">
		<a href="../VieEtudiant.php"><img src="../../cover/french.jpg" alt="francais"></a>
		<a href="#"><img src="../../cover/anglais.png" alt="anglais"></a>

	</div>
</div>
<!--Fin Header-->
<div id="Menu">
	<?php  include ('menu.php'); ?>
</div>
<!--Fin Menu-->
<div id="Content">
	<h1>Student Life</h1>
	<div id="subcontent">
		<p><strong>Classes at the IUT</strong><br><br>
		<span id="banner1">
			<img src="../../cover/salleiut1.jpg" alt="salle" class="is-showing">
			<img src="../../cover/salleiut2.jpg" alt="salle1" >
			<img src="../../cover/salleiut3.jpg" alt="salle2" >
			<img src="../../cover/salleiut4.jpg" alt="salle3" >
		</span>
		<script type="text/javascript">
			/*Script for the image slideshow*/
				$(document).ready(function(){
				///$("img").click(function(){
					slideShow();
				///});
				});
				function slideShow() {
					var showing = $('#banner1 .is-showing');
					var next = showing.next().length ? showing.next() : showing.parent().children(':first');
					/*
					* We could have written the above statement the long way to achieve the same results
					*
					* if(showing.next().length) {
					* showing.next();
					* } else {
					* showing.parent().children(':first');
					* }
					*/
					showing.fadeOut(800, function() { next.fadeIn(300).addClass('is-showing'); }).removeClass('is-showing');
					/*to make the image stay longer, modify here*/
						setTimeout(slideShow, 5000);
				}
		</script>
	</p>
	<p><strong>ENVIRONMENT</strong><br><br>
	The R&amp;T department is situated in the urban area of Sophia Antipolis in Valbonne. Located near the department is the new Saint-Philippe neighbourhood, where we can find various shops including a supermarket name Casino. It is possible to walk there from the department. 	
	<br><br><img src="../../cover/VieEtudiant.jpg" alt="casino sophia">  <img src="../../cover/VieEtudiant2.jpg" alt="l'entree de l'iut"></p>
	<p><strong>TRAFFIC</strong><br><br>
	As regards us, the Malaysian students, the best means of transport is probably by bus. The Envibus bus network and the Azur bus network allow us to circulate in Valbonne and also the surrounding towns (Antibes and Nice) without having any difficulty.
	<br><br>
	<strong>Travelling by bus from Nice</strong><br>
	&diams;&nbsp; &nbsp;You can find more information on the <a href="http://www.cg06.fr/fr/servir-les-habitants/deplacements/transport-collectifs/transports-collectifs/" target="_blank">General Council’s</a> website. We also have the opportunity to enjoy carpooling, which is the transit most used by students.
	 <br><br>
	 <strong>Travelling in Valbonne and Antibes</strong><br>
	 The Envibus bus network is fairly widespread, facilitates the circulation in Antibes and surroundings.<br>
	 &diams; &nbsp; &nbsp; For more information, visit the <a href="http://www.envibus.fr/">Envibus's</a> website.
	</p>
	<p><strong>ACCOMMODATION</strong><br><br>
	There are many student residences which are suitable for the R&amp;T student :<br><br>
	1. &nbsp; &nbsp;<strong>R&eacute;sidence Les Dolines (r&eacute;sidence universitaire CROUS)</strong><br>
	&diams;&nbsp; &nbsp;Contact : Tel : 04 92 96 90 37 - Fax 04 92 96 90 22 - Website : <a href="http://www.crous-nice.fr/logement2.php" target="_blank">www.crous-nice.fr</a>.<br>
	&diams;&nbsp; &nbsp;Located in Valbonne, 2225 route des dolines - A living place where you will find all the shops in walking distance, this property offers 222 studios furnished (kitchen, toilet, bathroom) Gym, Free TV, coin-operated laundry, paid underground parking. Lease entitles housing benefits.<br><br>
	2. &nbsp; &nbsp;<strong>R&eacute;sidence Newton (r&eacute;sidence universitaire CROUS)</strong><br>
	&diams;&nbsp; &nbsp;Contact : Tel :04 93 34 87 90 - Website : <a href="http://www.crous-nice.fr/logement2.php" target="_blank">www.crous-nice.fr</a>.<br>
	&diams;&nbsp; &nbsp;Located in Valbonne, 2400 route des Dolines (06560).<br><br>
	3. &nbsp; &nbsp;<strong>R&eacute;sidence Jean Medicin (r&eacute;sidence universitaire CROUS)</strong><br>
	<img src="../../cover/jean-medecin.jpg" alt="Photo résidence Jean médecin" class="res-pic"> <br>
	&diams;&nbsp; &nbsp;Contact : Tel :04 92 29 46 46 - Website : <a href="http://www.crous-nice.fr/logement2.php" target="_blank">www.crous-nice.fr</a>.<br>
	&diams;&nbsp; &nbsp;Located in Nice, 25 rue Robert Latouche (06200)<br><br><br><br><br><br>
	It is also possible to live in an apartment shared with other students or individually in the neighbouring town. The most recommended towns are Antibes and Nice.
	</p>
	<p><strong>TOWNS NEARBY</strong><br/><br/>
	1. &nbsp; &nbsp;<strong>Nice</strong><br/>
	2. &nbsp; &nbsp;<strong>Antibes</strong><br/>
	3. &nbsp; &nbsp;<strong>Valbonne</strong>
	</p>
	</div>
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
