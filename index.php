<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Tweet Reach estimation</title>
	<meta name="description" content="Estimate tweet reach">
	<meta name="author" content="Paolo Ciarrocca">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!--<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">-->
	<link href='http://fonts.googleapis.com/css?family=Philosopher|Karla' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css?v=2">

	<script src="js/libs/modernizr-1.7.min.js"></script>
</head>
<body>
<div id="header-container">
		<header class="wrapper">
			<h1 id="title">Retweach</h1>
		</header>
	</div>
	<div id="main" class="wrapper">
                <div id="form-container">
                    <h2>Make Your Play</h2>
                    <div>
                    <p><label for="who">Who:</label></p>
        	    <input type="text" value="" id="who">
                    </div>
    
    		    <div>
    		    <p><label for="what">What</label>:</p>
   		    <input type="text" value="" id="what">
		    </div>
                   
	            <div>
                    <p><label for="magic">Magic Word</label>:</p>
                    <input type="text" value="" id="magic">
                    </div> 
                     
                    <input id="calculate-button" type="button" value="Calculate"> 
                </div>
                <div id="retweach-results">
                </div>
        </div>
	<div id="footer-container">
		<footer class="wrapper">
			<h3>About</h3>
                        <p>built by <a href="http://sherred.com">Paolo Sherred Ciarrocca</a> from an idea by <a href="http://twitter.com/andrewburnett">Andrew Burnett</a></p>
                        <p>questions? ask them on twitter - <a href="http://twitter.com/sherred">@sherred</a></p>
		</footer>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="js/libs/jquery-1.5.1.min.js"%3E%3C/script%3E'))</script>
	<script src="js/script.js"></script>
	<!--[if lt IE 7 ]>
	<script src="js/libs/dd_belatedpng.js"></script>
	<script> DD_belatedPNG.fix('img, .png_bg');</script>
	<![endif]-->
</body>
</html>
