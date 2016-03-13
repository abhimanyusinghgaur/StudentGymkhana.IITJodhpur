<?php
if(isset($_GET['id']) && empty($_GET['id']))
	die('Requested Page dosen\'t exist');
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Students' Gymkhana - IIT Jodhpur</title>

  <link rel="shortcut icon" href="logo.jpg">
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style>
  div.hover_change_color_white:hover {background-color:#80cbc4; border-radius:20px;}
  </style>
  <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
		var map,marker;
		var iitj=new google.maps.LatLng(26.2712168,73.0329358);
		var gpra=new google.maps.LatLng(26.2003991,73.0408967);
      function initialize() {
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
          center: iitj,
          zoom: 17,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
		  scrollwheel: false
        };
        map = new google.maps.Map(mapCanvas, mapOptions);
		
		marker=new google.maps.Marker({
		position:iitj,
		animation:google.maps.Animation.BOUNCE
		});
		marker.setMap(map);
      }
	  
      google.maps.event.addDomListener(window, 'load', initialize);
	  google.maps.event.addDomListener(window, 'resize', initialize);
	  
	  function map_gpra() {
		marker.setPosition(gpra);
		map.setCenter(gpra);
		//map.setZoom(16.3);
	  }
	  function map_iitj() {
		marker.setPosition(iitj);
		map.setCenter(iitj);
		//map.setZoom(17);
	  }
    </script>
</head>
<body>
		<div class="navbar-fixed teal lighten-2" style="height:100px; max-height:100px;">
			<nav class="white">
				<div class="nav-wrapper">
				<a href="?id=home" class="brand-logo"><div class="row">
				<div class="col s2 m2 l2"><img src="logo.jpg" height="60px" width="60px" class="circle"></div>
				<div class="col s3 m3 l4 hide-on-small-only"><span style="font-size:1em;">Students' Gymkhana</span><span style="font-size:0.5em;">&nbsp; IIT Jodhpur</span></div>
				</div></a>
				<ul class="right hide-on-med-and-down">
					<!--li <?php if(!isset($_GET['id']) || $_GET['id']=='home') echo 'class="active"' ?> ><a href="?id=home" class="waves-effect waves-light">Home<i class="material-icons left">home</i></a></li-->
					<li <?php if(isset($_GET['id']) && $_GET['id']=='office_bearers') echo 'class="active"' ?> ><a href="?id=office_bearers" class="waves-effect waves-light">Office Bearers<i class="material-icons left">supervisor_account</i></a></li>
					<li <?php if(isset($_GET['id']) && ( $_GET['id']=='arma' || $_GET['id']=='cultural' || $_GET['id']=='mad' || $_GET['id']=='sports' || $_GET['id']=='technical' )) echo 'class="active"' ?> ><a class="dropdown-button waves-effect waves-light" href="#!" data-activates="societies-dropdown"data-beloworigin="true" data-hover="true" data-induration="1000" data-outduration="1000">Societies<i class="material-icons left">polymer</i></a></li>
						<!-- Dropdown Structure -->
						<ul id="societies-dropdown" class="dropdown-content">
							<li><a href="?id=arma" class="waves-effect waves-teal">A.R.M.A.</a></li>
							<li class="divider"></li>
							<li><a href="?id=cultural" class="waves-effect waves-teal">Cultural</a></li>
							<li class="divider"></li>
							<li><a href="?id=mad" class="waves-effect waves-teal">Media Arts & Design</a></li>
							<li class="divider"></li>
							<li><a href="?id=sports" class="waves-effect waves-teal">Sports & Games</a></li>
							<li class="divider"></li>
							<li><a href="?id=technical" class="waves-effect waves-teal">Technical</a></li>
							<!--li class="divider"></li>
							<li><a href="http://iitjecell.in/" target="_blank" class="waves-effect waves-teal">E-Cell</a></li-->
						</ul>
					<li <?php if(isset($_GET['id']) && ( $_GET['id']=='hmc' || $_GET['id']=='mmc' || $_GET['id']=='cs' || $_GET['id']=='sarc')) echo 'class="active"' ?> ><a class="dropdown-button waves-effect waves-light" href="#!" data-activates="committee-dropdown" data-beloworigin="true" data-hover="true" data-induration="1000" data-outduration="1000">Committees<i class="material-icons left">work</i></a></li>
						<!-- Dropdown Structure -->
						<ul id="committee-dropdown" class="dropdown-content">
							<!--li class="green accent-3 black-text z-depth-3" style="font-family:lucida handwriting; cursor:default;">Standing Committees</li-->
							<li><a href="?id=hmc" class="waves-effect waves-teal">H.M.C.</a></li>
							<li class="divider"></li>
							<li><a href="?id=mmc" class="waves-effect waves-teal">M.M.C.</a></li>
							<li class="divider"></li>
							<!--li class="lime accent-3 black-text z-depth-3" style="font-family:lucida handwriting; cursor:default;">Administrative Committees</li-->
							<li><a href="?id=sarc" class="waves-effect waves-teal">S.A.R.C.</a></li>
							<li class="divider"></li>
							<li><a href="?id=src" class="waves-effect waves-teal">S.R.C.</a></li>
							<li class="divider"></li>
							<li><a href="http://cs.iitj.ac.in/" target="_blank" class="waves-effect waves-teal">Counselling Service</a></li>
						</ul>
					<li <?php if(isset($_GET['id']) && ( $_GET['id']=='spandan' || $_GET['id']=='nimble' )) echo 'class="active"' ?> ><a class="dropdown-button waves-effect waves-light" href="#!" data-activates="fest-dropdown" data-beloworigin="true" data-hover="true" data-induration="1000" data-outduration="1000">Festivals<i class="material-icons left">group_work</i></a></li>
						<!-- Dropdown Structure -->
						<ul id="fest-dropdown" class="dropdown-content">
							<li><a href="?id=varchas" class="waves-effect waves-teal">Varchas</a></li>
							<li class="divider"></li>
							<li><a href="?id=ignus" class="waves-effect waves-teal">Ignus</a></li>
							<li class="divider"></li>
							<li><a href="?id=spandan" class="waves-effect waves-teal">Spandan</a></li>
							<li class="divider"></li>
							<li><a href="?id=nimble" class="waves-effect waves-teal">Nimble</a></li>
						</ul>
					<li><a href="http://iitjecell.in/" target="_blank" class="waves-effect waves-light">E-Cell<i class="material-icons left">explicit</i></a></li>
					<li <?php if(isset($_GET['id']) && $_GET['id']=='parivartan') echo 'class="active"' ?> ><a href="?id=parivartan" class="waves-effect waves-light">Parivartan<i class="material-icons left">games</i></a></li>
				</ul>
				<a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="side-nav" id="mobile-menu">
					<!--li><a href="?id=home" class="waves-effect waves-green"><b>Home</b></a></li-->
					<li><a href="?id=office_bearers" class="waves-effect waves-green"><b>Office Bearers</b></a></li>
					<ul class="collapsible collapsible-accordion">
					<li><a class="collapsible-header waves-effect waves-green"><b>Societies</b></a>
						<!-- Collapsible Structure -->
						<div class="collapsible-body">
						<ul>
							<li><a href="?id=arma" class="waves-effect waves-teal">A.R.M.A.</a></li>
							<li class="divider"></li>
							<li><a href="?id=cultural" class="waves-effect waves-teal">Cultural</a></li>
							<li class="divider"></li>
							<li><a href="?id=mad" class="waves-effect waves-teal">Media Arts & Design</a></li>
							<li class="divider"></li>
							<li><a href="?id=sports" class="waves-effect waves-teal">Sports & Games</a></li>
							<li class="divider"></li>
							<li><a href="?id=technical" class="waves-effect waves-teal">Technical</a></li>
							<!--li class="divider"></li>
							<li><a href="http://iitjecell.in/" target="_blank" class="waves-effect waves-teal">E-Cell</a></li-->
						</ul>
						</div>
					</li>
					<li><a class="collapsible-header waves-effect waves-green"><b>Committees</b></a>
						<!-- Dropdown Structure -->
						<div class="collapsible-body">
						<ul>
							<li><a href="?id=hmc" class="waves-effect waves-teal">H.M.C.</a></li>
							<li class="divider"></li>
							<li><a href="?id=mmc" class="waves-effect waves-teal">M.M.C.</a></li>
							<li class="divider"></li>
							<li><a href="?id=sarc" class="waves-effect waves-teal">S.A.R.C.</a></li>
							<li class="divider"></li>
							<li><a href="?id=src" class="waves-effect waves-teal">S.R.C.</a></li>
							<li class="divider"></li>							
							<li><a href="http://cs.iitj.ac.in/" target="_blank" class="waves-effect waves-teal">Counselling Service</a></li>
						</ul>
						</div>
					</li>
					<li><a class="collapsible-header waves-effect waves-green"><b>Festivals</b></a>
						<!-- Dropdown Structure -->
						<div class="collapsible-body">
						<ul>
							<li><a href="?id=varchas" target="_blank" class="waves-effect waves-teal">Varchas</a></li>
							<li class="divider"></li>
							<li><a href="?id=ignus" target="_blank" class="waves-effect waves-teal">Ignus</a></li>
							<li class="divider"></li>
							<li><a href="?id=spandan" class="waves-effect waves-teal">Spandan</a></li>
							<li class="divider"></li>
							<li><a href="?id=nimble" class="waves-effect waves-teal">Nimble</a></li>
						</ul>
						</div>
					</li>
					</ul>
					<li><a href="http://iitjecell.in/" target="_blank" class="waves-effect waves-green"><b>E-Cell</b></a></li>
					<li><a href="?id=parivartan" class="waves-effect waves-green"><b>Parivartan</b></a></li>
				</ul>
				</div>
			</nav>
		</div>

	<main>
	<?php
	
	if(!isset($_GET['id']) || $_GET['id']=='home')
	 include 'home.php';
	else if(!empty($_GET['id']))
	 include $_GET["id"].'.php';
	 
	?>
	</main>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col s12 m6 l6">
          <h5 class="white-text">Quick Links</h5>
		  <div class="row">
          <ul class="col s12 m6 l6">
			<li><a class="white-text" href="http://www.iitj.ac.in" target="_blank">IIT Jodhpur</a></li>
            <!--li><a class="white-text" href="#!">Media Gallery</a></li>
            <li><a class="white-text" href="#!">Downloads</a></li>
            <li><a class="white-text" href="#!">Suggestions</a></li-->
            <li><a class="white-text" href="http://iitjecell.in/"target="_blank">E-cell</a></li>
          </ul>
          <ul class="col s12 m6 l6">
            <!--li><a class="white-text" href="http://www.iitj.ac.in" target="_blank">IIT Jodhpur</a></li-->
            <li><a class="white-text" href="http://www.ignus.org" target="_blank">Ignus</a></li>
            <li><a class="white-text" href="http://www.iitj-varchas.org" target="_blank">Varchas</a></li>
            <!--li><a class="white-text" href="#!">Link 4</a></li-->
          </ul>
		  </div>
		  <div class="row">
          <div class="col s12 m6 l6">
            <h5 class="white-text">Academic Campus</h5>
			<span>Indian Institute of Technology Jodhpur, Old Residency Road, Ratanada, Jodhpur, Rajasthan 342011, India.<br>Ph: 0291-2449013</span>
          </div>
          <div class="col s12 m6 l6">
            <h5 class="white-text">Residential Campus</h5>
			<span>IIT Jodhpur Hostels, GPRA, Kendranchal Colony, Vivek Vihar, New Pali Road, Jodhpur, Rajasthan 342005, India.</span>
          </div>
		  </div>
        </div>
		<div class="col s12 m6 l6">
		<button class="btn" onclick="map_gpra()">Map GPRA</button><button class="btn" onclick="map_iitj()">Map IITJ</button>
        <div style="width:100%;height:250px;" id="map">
          <!--Map comes here-->
        </div></div>
      </div>
    </div>
	<div class="row hide-on-med-and-up" style="background-color:#048e81;padding-top:10px;margin-bottom:0;">
		<span class="col s12 center teal-text text-lighten-4">Maintained by: <a class="brown-text text-lighten-3" href="?id=webD">Web-D Team, IIT Jodhpur</a></span>
	</div>
	<div class="row hide-on-med-and-up" style="background-color:#048e81;padding:10px 0;margin-bottom:0;">
		<span class="col s12 center teal-text text-lighten-4">© 2015 Students' Gymkhana, IIT Jodhpur</span>
	</div>
    <div class="footer-copyright hide-on-small-only">
      <div class="container">
      © 2015 Students' Gymkhana, IIT Jodhpur
	  <span class=" right">Maintained by: <a class="brown-text text-lighten-3" href="?id=webD">Web-D Team, IIT Jodhpur</a></span>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
