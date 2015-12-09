<!doctype html>
<html class="no-js" lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Otthonodért-TK Kft.</title>
    <meta name="description" content="Otthonodért Társasházkezelő Kft." />
	<meta name="keywords" content="Társasházkezelő, Társasházak közös képviselete, Épületek műszaki kezelése, Lakóépületek üzemeltetése " />
	<meta name="robots" content="noindex, nofollow" />	
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <script src="js/vendor/modernizr.js"></script>

	<!-- flexslider -->
	<link rel="stylesheet" href="plugin/flexslider/flexslider.css" type="text/css" media="screen" />
	<script defer src="plugin/flexslider/jquery.flexslider.js"></script>
	
	
	<!-- animate -->	
	<link rel="stylesheet" href="plugin/animate/animate.min.css" type="text/css" media="screen" />
	
	<!-- googleapis -->
	<script src="http://maps.googleapis.com/maps/api/js"></script>


	<script type="text/javascript">
	
		function scrollToContent(){

			var header = parseInt($('#headerInner').height()) + parseInt($('#headerInner').css('top'));
			var top = parseInt($('body').offset().top) - parseInt(header) - 40;

			$('html, body').animate({scrollTop:top}, 2000);
		}
		

	</script>

	

	

  </head>
  
  <body>

  	<?php 
	//googleanalytics
  	include_once("modules/analyticstracking.php") 
  	?>
  	<!-- JS SDK 4 FB -->
  	<?php 
  	//<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div></li>
	?>
  	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/hu_HU/sdk.js#xfbml=1&version=v2.3";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

    
	<div class="contain-to-grid fixed" id="mainMenu">
	<nav class="top-bar" data-topbar role="navigation">
	  <ul class="title-area">
		<li class="name">
		  <!--<h1><a href="#">Társasházkezelő</a></h1>-->
		</li>
		 <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
		<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	  </ul>
		
		
	  <section class="top-bar-section">
		<!-- Right Nav Section 
		<ul class="right">
		  <li class="active"><a href="#">Right Button Active</a></li>
		  <li class="has-dropdown">
			<a href="#">Right Button Dropdown</a>
			<ul class="dropdown">
			  <li><a href="#">First link in dropdown</a></li>
			  <li class="active"><a href="#">Active link in dropdown</a></li>
			</ul>
		  </li>
		</ul>
-->

		<!-- Left Nav Section -->
		<ul class="left">
		 <li><a href="fooldal.html"><i class="fa fa-home fa-lg" id="home"></i></a></li>
		  <li><a href="rolunk.html">Rólunk</a></li>
		  <li><a href="tevekenyseg.html">Tevékenység</a></li>
		  <li><a href="pluszszolgaltatasok.html">Plusz szolgáltatások</a></li>
		  <li><a href="referencia.html">Referencia</a></li>
		  <li><a href="elerhetoseg.html">Elérhetőség</a></li>
		</ul>
	  </section>
	</nav>
	</div>
	
	
<?php
/*
<div class="row">&nbsp;</div>
	

	
      <div class="row">
        <div class="large-3 medium-3 small-12 columns">
          <h1><img src="http://placehold.it/400x100&text=Logo"/></h1>
        </div>
        <div class="large-9 medium-9 small-12 columns">
       		<p></p>
         	<p>Társasház kezelés, közös képviselet, társasház üzemeltetés</p>
        </div>        
      </div>
      */
      ?>
     
     