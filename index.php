<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Is this retina? - Display Calculator</title>
	<meta name="description" content="Calculate aspect ratio, DPI/PPI, and minimum Retina viewing distance. Does your device meet minimum PPI for retina display?">
	<meta name="author" content="/humans.txt">
	<meta name="google-site-verification" content="Ia21mmR26ANggJJIfDaFv0DtqV5bePDefCQ_oOooMX4" />
	
	<meta name="viewport" content="width=device-width">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/author.css">

	<script src="js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 9]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

	<header>
		<h1>Is This Retina?</h1>
		<h2>Pixel density &amp; viewing distance calculator for a retina world.</h2>
	</header>

	<section id="content">

		<form id="customDevice" method="post" action="#">
			<fieldset>
				<legend>Custom Display</legend>

				<label>
					<b>Horizontal</b> Pixels:
					<input type="text" id="width" value="1024">
				</label>

				<label>
					<b>Vertical</b> Pixels:
					<input type="text" id="height" value="768">
				</label>

				<label>
					<b>Diagonal</b> Size (inches):
					<input type="text" id="diagonal" value="17">
				</label>

			</fieldset>

			<input type="button" name="calculate" value="Calculate">

			<article>
				<h1>What is a Retina display?</h1>
				<p>Retina is Apple's trademark for a display so sharp that the human eye is unable to distinguish between pixels at a typical viewing distance. As Steve Jobs said: "It turns out there’s a magic number right around 300 pixels per inch, that when you hold something around to 10 to 12 inches away from your eyes, is the limit of the human retina to differentiate the pixels." Given a large enough viewing distance, all displays eventually become "retina."</p>
			</article>
		</form>

		<figure id="dist">
			<figcaption>Becomes Retina At Or Over</figcaption>
			<b>46</b> <small>inches<br>(117cm)</small>
		</figure>

		<figure id="ppi">
			<b>75.29</b> <small>PPI</small>
			<figcaption>Display Density</figcaption>
		</figure>

		<figure id="aspect">
			<b>4:3</b>
			<figcaption>Aspect Ratio</figcaption>
		</figure>



		<div id="screen">
			<div></div>
		</div>

		<div style="clear:both;"></div>
	</section>
	<form id="commonDevices">
		<fieldset>
			<legend>Load Popular Devices</legend>
			<label for="">
				<b>Desktop</b> Computers
				<select name="">
					<option>Select a device...</option>
					<option value="1920x1080x21.5">Apple iMac 21"</option>
					<option value="2560x1440x27">Apple iMac 27"</option>
					<option value="1920x1080x21.5">HP TouchSmart AiO</option>
					<option value="1920x1080x23">Samsung Series 7</option>

				</select>
			</label>

			<label for="">
				<b>Laptop</b> Computers
				<select name="">
					<option>Select a device...</option>
					<option value="1366x768x11.6">Apple MacBook Air 11"</option>
					<option value="1440x900x13.3">Apple MacBook Air 13"</option>
					<option value="1280x800x13.3">Apple MacBook Pro 13"</option>
					<option value="1440x900x15.4">Apple MacBook Pro 15"</option>
					<option value="2560x1600x13.3">Apple MacBook Pro Retina 13"</option>
					<option value="2880x1800x15.4">Apple MacBook Pro Retina 15"</option>
					<option value="1280x800x12.1">Samsung Series 5</option>

				</select>
			</label>

			<label for="">
				<b>Phones</b> &amp; <b>Tablets</b>
				<select name="">
					<option>Select a device...</option>
					<option value="600x1024x7">Amazon Kindle Fire</option>
					<option value="768x1024x9.7">Apple iPad</option>
					<option value="768x1024x7.9">Apple iPad Mini</option>
					<option value="1536x2048x9.7">Apple iPad (New)</option>
					<option value="640x960x3.5">Apple iPhone 4</option>
					<option value="640x1136x4">Apple iPhone 5</option>
					<option value="320x480x3.5">Apple iPod Touch</option>
					<option value="480x800x3.7">HTC Droid Incredible</option>
					<option value="480x800x4">HTC Droid Incredible 2</option>
					<option value="480x800x4.3">HTC EVO 4G</option>
					<option value="768x1280x4.7">Google Nexus 4</option>
					<option value="1500x2560x10.1">Google Nexus 10</option>
					<option value="768x1366x10.6">Microsoft Surface RT</option>
					<option value="768x1280x4.5">Nokia Lumia 920</option>
					<option value="720x1280x4.65">Samsung Galaxy Nexus</option>
					<option value="720x1280x4.8">Samsung Galaxy S III</option>
					<option value="600x1024x7">Samsung Galaxy Tab 2 7.0</option>
					<option value="800x1280x10.1">Samsung Galaxy Tab 2 10.1</option>
					<option value="480x854x4.2">Sony Ericsson Xperia arc</option>
				</select>
			</label>

		</fieldset>
	</form>

	<footer>

		<p>Developed by <a href="http://ethercycle.com">Ethercycle</a>, a Chicago web design &amp; development studio.</p>

		<p><a href="http://twitter.com/ethercycle">Follow us</a> on Twitter for more web design resources &amp; snark.</p>

		<section id="copyright">Licensed under a Creative Commons Attribution-NonCommercial 3.0 Unported License. Learn from our code.</section>
	</footer>

	<div id="gradient"></div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>

	<script src="js/libs/Ratio.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/script.js"></script>
	<script>
		var _gaq=[['_setAccount','UA-2237604-38'],['_trackPageview']];
		setTimeout('_gaq.push([\'_trackEvent\', \'NoBounce\', \'Over 10 seconds\'])',10000);
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>

</body>
</html>
