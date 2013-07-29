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

		<title>WIDGaT - Widget Design Authoring Toolkit</title>
		<meta name="description" content="Widget Design Authoring Toolkit (WIDGaT) is a code free widget designer tool">

		<meta name="viewport" content="width=device-width">

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

		<link rel="stylesheet" href="css/style.css">

		<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

		<!-- All JavaScript at the bottom, except this Modernizr build.
		Modernizr enables HTML5 elements & feature detects for optimal performance.
		Create your own custom Modernizr build: www.modernizr.com/download/ -->
		<script src="js/libs/modernizr-2.5.3.min.js"></script>
		<script src="js/libs/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript">stLight.options({publisher: "ur-567ccf30-4cfe-3ecb-c251-575df372821b"}); </script>
	</head>
	<body>
		<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
		chromium.org/developers/how-tos/chrome-frame-getting-started -->
		<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
		<div id="container">
			<div id="header">
				<a href="https://github.com/arc-teesside/WIDGaT/" target="_blank"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png" alt="Fork me on GitHub"></a>
				<a href="index.php"><img src="img/WIDGaT_logo.png" alt="WIDGaT" style="width:250px" /></a>
                <ul class="nav">
                	<li><a href="index.php?p=about" <?php echo $t = ($page == "about")? "class=\"selected\"":""; ?> >About</a></li>
                    <li><a href="http://arc.tees.ac.uk/WIDGaT/Tool/" target="_blank" class="externallink">Use it</a></li>
                    <li><a href="index.php?p=guides" <?php $arP = explode('/',$page); echo $t = ($arP[0] == "guides")? "class=\"selected\"":""; ?> >User Guides</a></li>
					<li><a href="index.php?p=usecase">Use Cases</a></li>
                    <!--<li><a href="index.php?p=wip">WiP</a></li>-->
					<!--<li><a href="http://arc.tees.ac.uk/WIDGaT/Blog/" target="_blank" class="externallink">Blog</a></li>-->
                    <li><a href="index.php?p=partners">Partners</a></li>
                </ul>
				<div class="clearfix"></div>
			</div>
			<div id="main" role="main">
				<?php include($page.'.php'); ?>
				<div class="clearfix"></div>
			</div>
			<div id="footer">Contact: Dr. Elaine Pearson - Email: <a href="mailto:E.Pearson@tees.ac.uk">E.Pearson@tees.ac.uk</a> - Tel.: +44 (0) 1642 342656&nbsp;<a href="index.php?p=admin/home">Admin</a><br/>
				<a href="http://arc.tees.ac.uk" title="Accessibility Research Centre" target="_blank">Accessibility Research Centre</a>, School of Computing, Teesside University, Middlesbrough, Tees Valley, TS1 3BA, UK<br />
				<a href="" title="" target="_blank"><img src="img/button-rss.png" alt="Image" /></a>&nbsp;
				<a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" title="http://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank"><img src="img/cc-by-nc-sa.png" alt="Image" /></a>&nbsp;
				<a href="http://validator.w3.org/check/referer" title="http://validator.w3.org/check/referer" target="_blank"><img src="img/button-xhtml.png" alt="Image" /></a>&nbsp;
				<a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3" title="http://jigsaw.w3.org/css-validator/check/referer?profile=css3" target="_blank"><img src="img/button-css.png" alt="Image" /></a> 
			</div>
		</div>
		<!-- JavaScript at the bottom for fast page loading -->

		<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

		<!-- scripts concatenated and minified via build script -->
		<script src="js/plugins.js"></script>
		<script src="js/script.js"></script>
		<!-- end scripts -->

		<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
		mathiasbynens.be/notes/async-analytics-snippet -->
		<!--<script>
		var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>-->
	</body>
</html>