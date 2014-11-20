<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="StyleSheet.css" type="text/css"/>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<title>R&amp;TM</title>
</head>
<body>
<div id="Main">
<div id="Header">
	<div id="Traduit">
		<a href="#"><img src="../cover/french.jpg" alt="francais"></a>
		<a href="version_anglaise/VieEtudiant.php"><img src="../cover/anglais.png" alt="anglais"></a>

	</div>
</div>
<!--Fin Header-->
<div id="Menu">
	<?php  include ('menu.php'); ?>
</div>
<!--Fin Menu-->
<div id="Content">
	<h1>Vie &eacute;tudiante</h1>
	<div id="subcontent">
	<p><strong>Salles à l'IUT</strong><br><br>
	<span id="banner1">
			<img src="../cover/salleiut1.jpg" alt="salle" class="is-showing">
			<img src="../cover/salleiut2.jpg" alt="salle1" >
			<img src="../cover/salleiut3.jpg" alt="salle2" >
			<img src="../cover/salleiut4.jpg" alt="salle3" >
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
	<p><strong>L'ENVIRONNEMENT</strong><br><br>
	Le site de R&amp;T se trouve dans l'agglom&eacute;ration de Sophia Antipolis &agrave; Valbonne. Le nouveau quartier Saint-Philippe est situ&eacute; pr&egrave;s du departement
o&ugrave; nous pouvons trouver des diverses commerces dont un supermarch&eacute; Casino. Il est possible d'y aller &agrave; pied depuis le site du departement.	
	<br><br><img src="../cover/VieEtudiant.jpg" alt="casino sophia">  <img src="../cover/VieEtudiant2.jpg" alt="l'entree de l'iut"></p>
	<p><strong>LA CIRCULATION</strong><br><br>
	En ce qui nous concerne, nous les &eacute;tudiants malaisiens, le meilleur moyen de transport est sans doute le bus. Les lignes du r&eacute;seau Envibus et celui de Lignes d'Azur nous permettent de circuler &agrave; Valbonne et les villes voisines (Antibes et Nice) sans difficult&eacute;.
	<br><br>
	<strong>Pour venir en BUS de Nice </strong><br>
	&diams;&nbsp; &nbsp;Vous pouvez trouver plus d'informations sur le site du <a href="http://www.cg06.fr/fr/servir-les-habitants/deplacements/transport-collectifs/transports-collectifs/">Conseil G&eacute;n&eacute;ral</a>. Nous avons aussi la possibilit&eacute; de profiter du covoiturage, ce qui est le transport en commun le plus utilis&eacute; par les &eacute;tudiants en g&eacute;n&eacute;ral.
	 <br><br>
	 <strong>Pour la circulation &agrave; Valbonne et &agrave; Antibes</strong><br>
	 Le r&eacute;seau Envibus qui est assez r&eacute;pandu, facilite la circulation &agrave; Antibes et ses alentours.<br>
	 &diams; &nbsp; &nbsp; Plus d'informations sur le site <a href="http://www.envibus.fr/">Envibus</a>.
	</p>
	<p><strong>L'H&Eacute;BERGEMENT</strong><br><br>
	Il y a beaucoup de r&eacute;sidences universitaire qui nous conviennent dont : <br><br>
	1. &nbsp; &nbsp;<strong>R&eacute;sidence Les Dolines (r&eacute;sidence universitaire CROUS)</strong><br>
	&diams;&nbsp; &nbsp;Contact : Tel : 04 92 96 90 37 - Fax 04 92 96 90 22 - Site : <a href="http://www.crous-nice.fr/logement2.php">www.crous-nice.fr</a>.<br>
	&diams;&nbsp; &nbsp;Situ&eacute;e &agrave; Valbonne, 2225 route des Dolines - Lieu de vie o&ugrave; vous trouverez tous les commerces de proximit&eacute;, 
	cette r&eacute;sidence offre 222 studios meubl&eacute;s (cuisinette, WC, salle de bains) Salle de musculation gratuite, salle de TV gratuite, 
	laverie automatique payante, parking en sous sol contre redevance. La location ouvre droit aux allocations logement.<br><br>
	2. &nbsp; &nbsp;<strong>R&eacute;sidence Newton (r&eacute;sidence universitaire CROUS)</strong><br>
	&diams;&nbsp; &nbsp;Contact : Tel :04 93 34 87 90 - Site : <a href="http://www.crous-nice.fr/logement2.php">www.crous-nice.fr</a>.<br>
	&diams;&nbsp; &nbsp;Situ&eacute;e &agrave; Valbonne, 2400 route des Dolines (06560).<br><br>
	3. &nbsp; &nbsp;<strong>R&eacute;sidence Jean Medicin (r&eacute;sidence universitaire CROUS)</strong><br>
	<img src="../cover/jean-medecin.jpg" alt="Photo résidence Jean médecin" class="res-pic"><br>
	&diams;&nbsp; &nbsp;Contact : Tel :04 92 29 46 46 - Site : <a href="http://www.crous-nice.fr/logement2.php">www.crous-nice.fr</a>.<br>
	&diams;&nbsp; &nbsp;Situ&eacute;e &agrave; Nice, 25 rue Robert Latouche (06200)<br><br><br><br><br><br>
	Il est aussi possible de vivre en colocation avec d'autres &eacute;tudiants en ville voisine comme vous voulez. Les villes les plus recommand&eacute;es sont 
	Antibes et Nice.
	</p>
	<p><strong>LES VILLES &Agrave; PROXIMIT&Eacute;S</strong><br/><br/>
	1. &nbsp; &nbsp;<strong>Nice</strong><br/>
	Nice est une commune du Sud-Est de la France, préfecture du département des Alpes-Maritimes et deuxième ville de la région Provence-Alpes-Côte d'Azur derrière Marseille, 	  située à l'extrémité sud-est de la France, à une trentaine de kilomètres de la frontière italienne, elle est établie sur les bords de la mer Méditerranée. Elle se trouve à 30 	       kilomètres aussi de Sophia Antipolis ou plus exactement de l'IUT R&amp;T. Grâce au bus n°230, les étudiants peuvent arrivés à l'IUT entre 30 et 50 minutes. Cette ville regroupe 		plusieurs loisirs où peuvent destresser les étudiants comme : la patinoire, le bowling et la piscine. Il y a également plusieurs résidences étudiantes mais celles qui 		intéresseraient le pluses étudiants sont la résidence Jean Médecin et la résidence Les Fusains.<br><br>
	2. &nbsp; &nbsp;<strong>Antibes</strong><br/>
	Le site de R&amp;T se trouve dans l'agglom&eacute;ration de Sophia Antipolis &agrave;
	Valbonne à 10km d'Antibes. Antibes est une ville côtière touristiques du département
	o&ugrave; nous pouvons trouver des diverses commerces, centre de loisirs, Et surtout des
	rédiences universitaires et des studios à louer chez des particuliers. Il est possible
	d'y aller en bus. Le trajet IUT-Antibes est bien desservi pas les Envibus. Envibus est
	une campagne de transport en commun de l'agglomération de Sophia Antipolis. Elle desserte
	toute l'agglomération: de Valauris jusqu'à Villeneuve-Loubet en passant par Biot, Juan
	les Pins ..


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
