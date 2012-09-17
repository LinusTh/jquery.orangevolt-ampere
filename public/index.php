<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		
		<script type="text/javascript" src="lib/oval.js"></script>
 	</head>
 	<body>
  		<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       		chromium.org/developers/how-tos/chrome-frame-getting-started -->
  		<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  		
  		<?php 
			$iterator = new DirectoryIterator( __DIR__ . '/examples');
		    foreach( $iterator as $fi) {
		        if( $fi->isDir() && !$fi->isDot()) {
		            echo "<div><a target=\"_blank\" href=\"examples/{$fi->getFilename()}\">{$fi->getFilename()}</a></div>" . PHP_EOL;
		        }
		    }
  		?>
	</body>
</html>