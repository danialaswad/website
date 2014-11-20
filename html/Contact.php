<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="StyleSheet.css" type="text/css"/>
	<title>R&amp;TM</title>
</head>
<body>
<div id="Main">
<div id="Header">
	<div id="Traduit">
		<a href="#"><img src="../cover/french.jpg" alt="francais"></a>
		<a href="version_anglaise/Contact.php"><img src="../cover/anglais.png" alt="anglais"></a>

	</div>
</div>
<!--Fin Header-->
<div id="Menu">
	<?php  include ('menu.php'); ?>
</div>
<!--Fin Menu-->
<div id="Content">
	<h1>Contact</h1>
	
	<div class="sub-content">
		
		<div>

			<img src="../cover/profile.jpg" alt="profile" class="contact-pic"/>
			<section class="contact-info"><strong>Cecile CHAGNON</strong><br>
			Responsables Relations Internationales:
			D&eacute;partement RT-IUT de Nice C&ocirc;te d'Azur<br>
			cecile.CHAGNON@unice.fr<br/>
			D&eacute;partement R&eacute;seaux et T&eacute;l&eacute;communications <br>
			Quartier les Templiers - 650 route des Colles - 06560 VALBONNE.
			</section>
		</div>
	</div>

	<div class="sub-content">
		

		
		<div>
			<img src="../cover/profile.jpg" alt="profile" class="contact-pic"/>
			<section class="contact-info"><strong>Abdul Aziz BIN ASMUNI</strong><br>
				Chef de RTM PF10<br>
				aziz@iutsoph.unice.fr<br>
			</section>
		</div>
	</div>

	<div class="sub-content-email">
			Envoyer un mail:
			<br>
		
			<form name="htmlform" method="post" action="email.php">
				<table>
					<tr>
 					<td >
 						<label>Envoyer à *</label>
 					</td>
 					<td>
						<select  name="receiver">
							<option value="azswad20@gmail.com">Mme Chagnon</option>
							<option value="aziz@iutsoph.unice.fr">Aziz Asmuni</option>
						</select>
 					</td>
				</tr>
				<tr>
 					<td >
 						<label>Prenom *</label>
 					</td>
 					<td>
  						<input  type="text" name="first_name" maxlength="50" size="30">
 					</td>
				</tr>
 
				<tr>
 					<td>
  						<label>Nom *</label>
 					</td>
 					<td >
 			 			<input  type="text" name="last_name" maxlength="50" size="30">
 					</td>
				</tr>
				<tr>
 					<td>
  						<label>Adresse Mail *</label>
 					</td>
 					<td >
  						<input  type="text" name="email" maxlength="80" size="30">
 					</td>
 
				</tr>
				
				<tr>
 					<td>
  						<label>Commentaires *</label>
 					</td>
 					<td>
  						<textarea  name="comments" maxlength="1000" cols="34" rows="8"></textarea>
 					</td>
 
				</tr>
				<tr>
 					<td colspan="2" style="text-align:center">
  						<input type="submit" value="Submit"> 
 					</td>
				</tr>
			</table>
		</form>
		
		
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
