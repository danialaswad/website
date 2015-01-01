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
				<li class='current_page_item'><a href='index.php' accesskey='1' title=''>HOME</a></li>
				<li><a href='formation.php' accesskey='2' title=''>PROGRAMMES</a></li>
				<li><a href='parcours.php' accesskey='3' title=''>ADMISSION</a></li>
				<li><a href='campusfrance.php' accesskey='4' title=''>CAMPUS FRANCE</a></li>
				<li><a href='#' accesskey='5' title=''>STUDENT LIFE</a></li>
				<li><a href='geiirt.php' accesskey='7' title=''>GEII AND R&amp;T</a></li>
				<li><a href='album.php' accesskey='8' title=''>ALBUM</a></li>
				<li><a href='#' accesskey='9' title=''>FORUM</a></li>
			</ul>
		</div>
		<div id="logo">
			<h1><a href="#">R&T Malaisie</a></h1>
			<span></span> 
		</div>	
	</div>
	<div id="traduit">
			<a href="../index.php"><img src="../../cover/french.jpg" alt="francais"></a>
			<a href="#"><img src="../../cover/anglais.png" alt="anglais"></a>
	</div>
</div>
<div id="wrapper1">
	<div id="welcome" class="container">
		<div class="title">
			<h2>Welcome to R&amp;T:Malaisie website</h2>
			<br>
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
			<br>			
			<span class="byline"> Le site R&amp;T Malaisie a pour but de donner une idée à quoi va les étudiants rencontrer pendant son sejour en France. Il
			cert aussi à creer une rélation professionelle entre les anciens étudiants malaisiens R&T et ceux de nouveaux.			
			</span> 
		</div>
		<div class="content">
			<p></p>
		</div>
	</div>
</div>
<div id="wrapper3">
	<div id="wrapper-blog">
		<div id="post">
			<h1></h1><br>
			<div class="post"> <span class="date"></span> 
				<h2><strong><a href="#">FORMATION</a></strong></h2>
				<p></p>

			</div>
			<div class="post"> <span class="date"></span>
				<h2><strong><a href="#">PARCOURS</a></strong></h2>
				<p></p>
			</div>
			<div class="post"> <span class="date"></span> 
				<h2><strong><a href="#">CAMPUS FRANCE</a></strong></h2>
				<p></p>
			</div>
			<div class="post"> <span class="date"></span> 
				<h2><strong><a href="#">VIE ÉTUDIANT</a></strong></h2>
				<p></p>
			</div>
			<div class="post"> <span class="date"></span> 
				<h2><strong><a href="#">R&amp;T GEII</a></strong></h2>
				<p></p>
			</div>
			<div class="post no-border"> <span class="date"></span> 
				<h2><strong><a href="#">ALBUM</a></strong></h2>
				<p></p>
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
    if ($(window).scrollTop()>880 && $(window).scrollTop()<1780) {
        isVisible = true;
        $('#theFixed').show();
    }
    else{
    	$('#theFixed').hide();
    }

});

</script>
<div id="wrapper2">
	<div id="links"class="container">
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
	<div id="contact"class="container">
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
