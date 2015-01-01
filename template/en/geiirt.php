<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>R&amp;TM</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--jquery files-->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--CSS files-->
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="../style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="menu">
			<ul>
				<li><a href='index.php' accesskey='1' title=''>HOME</a></li>
				<li><a href='formation.php' accesskey='2' title=''>PROGRAMMES</a></li>
				<li><a href='parcours.php' accesskey='3' title=''>ADMISSION</a></li>
				<li><a href='campusfrance.php' accesskey='4' title=''>CAMPUS FRANCE</a></li>
				<li><a href='#' accesskey='5' title=''>STUDENT LIFE</a></li>
				<li class='current_page_item'><a href='geiirt.php' accesskey='7' title=''>GEII AND R&amp;T</a></li>
				<li><a href='album.php' accesskey='8' title=''>ALBUM</a></li>
				<li><a href='#' accesskey='9' title=''>FORUM</a></li>
			</ul>
		</div>
		<div id="logo">
			<h1><a href="#">R&T Malaisie</a></h1>
			<span></span> </div>
	</div>
	<div id="traduit">
			<a href="../geiirt.php"><img src="../../cover/french.jpg" alt="francais"></a>
			<a href="#"><img src="../../cover/anglais.png" alt="anglais"></a>
	</div>
</div>
<div id="wrapper1">
	<div id="welcome" class="container">
		<div class="title">
			<h2>GEII et R&amp;T</h2>		
		</div>
	</div>
</div>
<div id="wrapper3">
	<div id="wrapper-blog" class="container">
		<div id="post">
			<div class="post no-border"> <span class="date"></span>
				<h2><strong>PF10 R&amp;T and GEII group photo</strong></h2>
				<img src="../images/groupPF10.jpg" alt="groupPF10" /><br>
				During the first semester at the University of Kuala Lumpur, the students follow the general engineering course. But from the second semester of the Pre-France 
	Programme, they must choose their specialty that will decide the IUT in which they will enroll.
	To be eligible for the Pre-France Programme, it is necessary to obtain good results in SPM.<br><br>
	&diams;&nbsp;&nbsp;RT department (Networking and Telecommunications) trains future graduates in all areas of the latest communication technologies. It is part of <br> 
	&nbsp;&nbsp;&nbsp;SophiaTech campus, at the heart of Sophia Antipolis, the largest technology park in Europe.<br><br>
	&nbsp;&nbsp;&nbsp;The main subjects taught in R&amp;T are :<br>
	&nbsp;&nbsp;&nbsp;- Networking and Internet<br>
	&nbsp;&nbsp;&nbsp;- Language and communication <br>
	&nbsp;&nbsp;&nbsp;- Fixed and Mobile Telecommunications <br>
	&nbsp;&nbsp;&nbsp;- Computing<br>
	&nbsp;&nbsp;&nbsp;- Mathematics <br>
	&nbsp;&nbsp;&nbsp;- Electronic and Physics <br>
	&nbsp;&nbsp;&nbsp;- Knowledge of business<br><br>
	&diams;&nbsp;&nbsp;The GEII Department (Electrical Engineering and Industrial Computing), trains its future graduates in areas within electricity, electronics industrial computing, <br>
	&nbsp;&nbsp;&nbsp;and their applications. The skills acquired throughout this course are applied in areas as diverse as manufacturing and processing industries,<br>
	&nbsp;&nbsp;&nbsp;management of energy, transport and automobile, health, food and many others. <br><br>
	&nbsp;&nbsp;&nbsp;The main subjects taught in GEII are :<br>
	&nbsp;&nbsp;&nbsp;- Mathematics, Physics and culture <br>
	&nbsp;&nbsp;&nbsp;- Expression and communication <br>
	&nbsp;&nbsp;&nbsp;- English <br>
	&nbsp;&nbsp;&nbsp;- Electrical energy <br>
	&nbsp;&nbsp;&nbsp;- Electrical and Power Electronics <br>
	&nbsp;&nbsp;&nbsp;- Industrial IT, digital electronics, logic synthesis<br><br>
	It is then found that the difference between the two sectors is the specialty of each. The subjects studied are almost the same which results in 
	further studies, students can opt for the same professional license or even master, so it will only depend on the subject to which the student looks
	or by which he is passionate.<br><br>
	<strong>* Some examples of engineering schools for further studies</strong><br>
	SUPELEC, ENSI, INSA, Arts et Métiers, Réseau Polytech.
			</div>
			
		</div>
		<div id="list">
			<div id="theFixed">
					<ul class="style2">
						<?php  include ('menu.php'); ?>
					</ul>
			</div>
			<div id="lbox1">
				<ul class="style1">
					
				</ul>

			</div>
			<div id="lbox2">
				<h2></h2>
				<ul class="style2">
					
				</ul>
			</div>
			<div id="lbox2">
				<h2></h2>
				<ul class="style2">
				
				</ul>
			</div>
		</div>
	</div>
</div>

<script>
///side menu script
$('#theFixed').click(function(){
    $(window).scrollTop(0);
});
$(window).scroll(function(){
    if ($(window).scrollTop()>550 && $(window).scrollTop()<1700) {
        isVisible = true;
        $('#theFixed').show();
    }
    else{
    	$('#theFixed').hide();
    }

});
</script>

<div id="wrapper2">
	<div id="links">
		<div id="link-box">
			<h2>External links</h2>
				<ul class="style2">
					<li><strong>IUT Nice Côte d’azur</strong><br/>
						D&eacute;partement R&eacute;seaux et T&eacute;l&eacute;communications<br/>
						650, Route des Colles, 06560 Valbonne<br/>
						Adresse &eacute;lectronique : rt@iutsoph.unice.fr<br/>
						Adresse web : <a href="http://rt.unice.fr/" target="_blank">http://rt.unice.fr/</a></li>
					<li><strong>Universiti Kuala Lumpur Malaysia France Institut</strong><br/>
						Section 14, Jalan Teras Jernang<br/>
						43650 Bandar Baru Bangi, Selangor<br/>
						Adresse web : <a href="http://www.unikl.edu.my/web/unikl-mfi/home" target="_blank">http://www.unikl.edu.my/web/unikl-mfi/home</a></li>
					<li><strong>Campus France</strong><br>
						Patent House, 144-02, 2nd Floor, Jalan Bukit Bintang<br>
						Kuala Lumpur, 55100, Malaysia<br>
						Telephone: +60 (0) 3- 2142 7475<br>
						Fax: +60 (0) 3- 2142 7476<br>
						Adresse web : <a href ="http://www.malaisie.campusfrance.org/en/" target="_blank">http://www.malaisie.campusfrance.org/en/</a></li>
				</ul>
		</div>
	</div>
	<div id="contact">
		<h2>Contacts</h2>
		<ul class="style2">
					<li><strong>Cecile CHAGNON</strong><br>
						Responsables Relations Internationales:<br>
			D&eacute;partement RT-IUT de Nice C&ocirc;te d'Azur<br>
			cecile.CHAGNON@unice.fr<br/>
			D&eacute;partement R&eacute;seaux et T&eacute;l&eacute;communications <br>
			Quartier les Templiers - 650 route des Colles - 06560 Valbonne.</li>
					<li><strong>Abdul Aziz BIN ASMUNI</strong><br>
						Chef de RTM PF10<br>
						aziz@iutsoph.unice.fr<br></li>
					
				</ul>
	</div>
	<br>
	
	<div id="newsletter" class="container">
		<div class="title">
			<h2></h2>
			<span class="byline"></span> </div>
		<div class="content">
		</div>
	</div>
</div>
<div id="copyright">
	<p>&copy; 2013 R&amp;TM. All Rights Reserved.</p>
</div>
</body>
</html>
