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
				<li class='current_page_item'><a href='campusfrance.php' accesskey='4' title=''>CAMPUS FRANCE</a></li>
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
			<a href="../campusfrance.php"><img src="../../cover/french.jpg" alt="francais"></a>
			<a href="#"><img src="../../cover/anglais.png" alt="anglais"></a>
	</div>
</div>
<div id="wrapper1">
	<div id="welcome" class="container">
		<div class="title">
			<h2>Campus France</h2>
			<br>		
			<a href="http://www.malaisie.campusfrance.org/en/" target="_blank"><img src="../images/campusfrancelogo.jpg" alt="ronde des facs" class="marine-banner"/></a>
		</div>
	</div>
</div>
<div id="wrapper3">
	<div id="wrapper-blog" class="container">
		<div id="post">
			<div class="post"> <span class="date"></span>
				<h2><strong>1. Learning the french language</strong></h2>
				<p>To study in France, the "intermediate advanced" level (B1, B2) is 
		usually sufficient and to register in the first or second year at french 
		universities, foreign candidates (non-European) must follow the procedure of 
		"Requesting Admission Prerequisites "(DAP). In this context, 
		they must prove their French language proficiency level by taking a test. 
		As far as the Malaysian students are concerned, the french language is taught at University of Kuala Lumpur 
		in Malaysia and at a language school in Nice, France.<br><br>
		Warning: ignorance of the French language is the primary cause of failure of foreign students.</p>
			</div>
			<div class="post"> <span class="date"></span>
				<h2><strong>2. Enrolling at the IUT</strong></h2>
				<p>Campus France manage everything related to the admission to the IUT. There are only a few forms to be completed.</p>
			</div>

			<div class="post"> <span class="date"></span>
				<h2><strong>3. Obtaining the visa</strong></h2>
				<p>It is very important, upon arrival in France, to send to OFII by registered mail (with confirmation of receipt):
	- the stamped OFII certification form that they received from the official who granted their visa<br>
	- a copy of the pages of their passport bearing their identity data and the stamp signifying entry into France or another country of the Schengen Area.
	<br><br>
	Upon receipt of these documents, the OFII will send, by regular mail to the address provided by the visa holder, a letter acknowledging receipt of the form and summoning the applicant for a 
	medical visit (if such a visit was not carried out in the applicant’s home country) or an orientation session.<br>
			</div>
			<div class="post no-border"> <span class="date"></span>
				<h2><strong>4. Taking care of yourself</strong></h2>
				<p>French health-care coverage, provided under the social security system ("Sécurité sociale"), is of very high quality. Covered individuals are reimbursed for a portion of their medical expenses 
	in return for a low basic payment. For students, that payment reaches €211 in 2013/2014 (1). You join the plan at your higher education institution when you register for classes at the beginning 
	of the academic year. Participation in the plan is mandatory for non-European students. 
<br><br>
Students from countries in the European Economic Space are exempted from participation as long as they hold either a European health insurance card (or temporary certificate) valid for the entire 
academic year or a certificate of private insurance providing full coverage for medical risks without restrictions related to cost. 
<br><br>
The two main student group health plans are:
<br><br>
&diams;  &nbsp; &nbsp;LMDE (La Mutuelle des Étudiants)<br>
&diams;  &nbsp; &nbsp;emVia, which groups 11 regional student "mutuelles"
<br><br>
To benefit from the national student health-care system, students must be under 28 years of age and registered in a program for at least 4 months in an approved institution of higher education. 
	<br><br>
	
	<em>For further information, visit the Campus France website by clicking <a href="http://www.malaisie.campusfrance.org/en/" target="_blank">here</a>.</em>
	<br><br>
	<strong>Representative from Campus France at IUT de Nice Sophia Antipolis</strong><br>
	Mme CAMPION Françoise<br>
	Francoise.Campion@campusfrance.org
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
    if ($(window).scrollTop()>550 && $(window).scrollTop()<2600) {
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
