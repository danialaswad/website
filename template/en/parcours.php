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
				<li class='current_page_item'><a href='parcours.php' accesskey='3' title=''>ADMISSION</a></li>
				<li><a href='campusfrance.php' accesskey='4' title=''>CAMPUS FRANCE</a></li>
				<li><a href='#' accesskey='5' title=''>STUDENT LIFE</a></li>
				<li><a href='geiirt.php' accesskey='7' title=''>GEII AND R&amp;T</a></li>
				<li><a href='album.php' accesskey='8' title=''>ALBUM</a></li>
				<li><a href='#' accesskey='9' title=''>FORUM</a></li>
			</ul>
		</div>
		<div id="logo">
			<h1><a href="#">R&T Malaisie</a></h1>
			<span></span> </div>
	</div>
	<div id="traduit">
			<a href="../parcours.php"><img src="../../cover/french.jpg" alt="francais"></a>
			<a href="#"><img src="../../cover/anglais.png" alt="anglais"></a>
	</div>
</div>
<div id="wrapper1">
	<div id="welcome" class="container">
		<div class="title">
			<h2>Admission</h2>		
		</div>
	</div>
</div>
<div id="wrapper3">
	<div id="wrapper-blog" class="container">
		<div id="post">
			<div class="post"> <span class="date"></span>
				<h2><strong>1. SPM</strong></h2>
				<p>All students wishing to enroll in the Pre-France Programme must do well in SPM 
					(Sijil Pelajaran Malaysia) which is the biggest examination taken by final year 
					secondary school students, and fulfill certain prerequisites. The SPM is the equivalent
					 of the French BAC.
				</p>
			</div>
			<div class="post"> <span class="date"></span>
				<h2><strong>2. Pre-France</strong></h2>
				<p>The Pre-France Programme is designed to give Malaysian students the opportunity to pursue their studies in France. The programme consists of four semesters. During a period of two years, the students undergo an intensive French language course and learn the basics of engineering sciences. The students enrolled at the end of their secondary education
	are specially selected and formed at Universiti Kuala Lumpur (UniKL) where they begin the course conducted entirely in French. <br>
	The subjects studied are :
					<br><br><img src="../../cover/matieres.jpg" alt="matieres">
					<br><br>By the second semester, the students have to choose their field of speciality which determines the IUT in which they will enroll.</p>
			</div>
			<div class="post no-border"> <span class="date"></span>
				<h2><strong>3. Bridging Programme <br>(intensive FLE course)</strong></h2>
				<p>The 4-month integration program is called "Bridging Program". From mid-April 
	to late August, the students are divided into 4 groups in different IUT 
	according to their speciality for an integration period during which 
	they are staying with host families and in university residence. <br><br>
	The French language courses take place at Alliance Fran&ccedil;aise and are 
	scheduled as follows: <br><br>
	-May: 4 hours of lesson in the morning (8:00 to 12:00).<br>
	-June: 3 hours of lesson in the morning (8:00 to 11:00) and followed by
	classes at the IUT in the afternoon.<br>
	-July: same schedule as of June for the first two weeks. For the following two 
	weeks, 4 hours of lesson at Alliance Fran&ccedil;aise from 13:00 to 17:00.
	-August: lessons at Alliance Fran&ccedil;aise (13:00 to 17:00).<br><br>
	
	During the first two months at Alliance Fran&ccedil;aise, the students are mixed with other foreign students, and seperated into groups 
	according to their level of French language (B1/B2). While during the last 
	two months, the Malaysian students are rejoined into two groups to prepare  
	for the TCF (Test Knowledge of French) which takes place in late August.<br><br>
	
	During the last week at the IUT, the Malaysian students sit for small tests on the subjects 
	studied (maths, physics, and computer networking).
	<br><br>
    				<strong>Photos of Alliance Française :</strong><br>
						<ul>
							<li><img src="../../cover/alliancef1.PNG" alt="AF" class="imgL"/></li>
    						<li><img src="../../cover/alliancef2.PNG" alt="AF" class="imgR"/></li>
    						<li><img src="../../cover/alliancef3.PNG" alt="AF" class="imgL"/></li>
    						<li><img src="../../cover/alliancef4.PNG" alt="AF" class="imgR"/></li>
    					</ul>
    				<br>
    			</p>
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
    if ($(window).scrollTop()>550 && $(window).scrollTop()<2580) {
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
