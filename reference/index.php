<?php
	if(isset($_GET["p"])) {
		if(is_file($_GET["p"].".php"))	
			$page = $_GET["p"];
		else {
			$page = "home";
		}
	}
	else {
		$page = "home";
	}
?>

<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>WIDGaT - Components Reference List</title>
		<meta name="description" content="Components Reference List for Widget Design Authoring Toolkit (WIDGaT)">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/themes/smoothness/jquery-ui.css" />
		
		<link rel="stylesheet" href="style.css">
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>

		<script type="text/javascript">
		
			$(function() {
			
				$( "#leftPanel" ).accordion();
				$("#rightPanel").load('home.php');
				$("#leftPanel > div > a").click(function() {
					$("#rightPanel").load(this.href);
					return false;
				});
				
			});
		
		</script>
	</head>
	<body>
		<div class="title"><img src="../img/WIDGaT_Logo.png" alt="WIDGaT" />&nbsp;&nbsp;<a href='#' onclick="$('#rightPanel').load('home.php');return false;">Component Reference List</a></div>
		<div id="leftPanel">
			<h3><a href="#">Clocks</a></h3>
			<div>
				<a href='components/analogclock.html'>Analog Clock</a><br />
				<a href='components/digitalclock.html'>Digital Clock</a><br />
				<a href='components/visualcountdown.html'>Visual Countdown</a><br />
			</div>
			<h3><a href="#">Input</a></h3>
			<div>
				<a href='components/button.html'>Button</a><br />
				<a href='components/datepicker.html'>Date picker</a><br />
				<a href='components/slider.html'>Slider</a><br />
				<a href='#'>Textbox</a><br />
			</div>
			<h3><a href="#">Layout</a></h3>
			<div>
				<a href='#'>Grid</a><br />
				<a href='#'>Pagging</a><br />
			</div>
			<h3><a href="#">Media</a></h3>
			<div>
				<a href='#'>Image</a><br />
				<a href='symbols.php'>Symbol</a><br />
				<a href='#'>Sound</a><br />
				<a href='#'>Video</a><br />
				<a href='components/youtube.html'>YouTube</a><br />
			</div>
			<h3><a href="#">Services</a></h3>
			<div>
				<a href='#'>Google Map</a><br />
			</div>
			<h3><a href="#">Social</a></h3>
			<div>
				<a href='#'>Comment</a><br />
				<a href='#'>Like Button</a><br />
				<a href='#'>Recommend</a><br />
				<a href='#'>Send Button</a><br />
			</div>
			<h3><a href="#">ToDo</a></h3>
			<div>
				<a href='#'>Table</a><br />
			</div>
		</div>
		<div id="rightPanel"></div>
	</body>
</html>