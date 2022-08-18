<?php
global $html_class;
global $body_class;

$html_class = ( isset( $html_class ) ) ? $html_class . ' ' : '';
$body_class = ( isset( $body_class ) ) ? ' class="' . $body_class . '"' : '';
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="<?php echo $html_class; ?>no-js lt-ie9 lt-ie8 lt-ie7" lang="en-US"> <![endif]-->
<!--[if IE 7]>         <html class="<?php echo $html_class; ?>no-js lt-ie9 lt-ie8" lang="en-US"> <![endif]-->
<!--[if IE 8]>         <html class="<?php echo $html_class; ?>no-js lt-ie9" lang="en-US"> <![endif]-->
<!--[if IE 9]>         <html class="<?php echo $html_class; ?>no-js lt-ie10 ie9" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="<?php echo $html_class; ?>no-js gt-ie8" lang="en-US"> <!--<![endif]-->
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="robots" content="noarchive, nofollow, noimageindex, noindex, noodp, nosnippet, noydir" />
    <link rel="icon" type="image/png" href="/assets/dist/img/favicon.png">

    <!-- <link rel="apple-touch-icon" href="apple-touch-icon.png"> -->
    <!-- Place favicon.ico in the root directory -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,800,700|Merriweather:400,700' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <link rel="stylesheet" href="/assets/dist/css/main.min.css">
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/dist/css/no-mq.min.css"><![endif]-->
    <script src="/assets/dist/js/plugins/modernizr-2.8.3.min.js"></script>
	<script src="/assets/dist/js/plugins/parallax.min.js"></script>
	<script src="/assets/dist/js/plugins/jquery.stellar.min.js"></script>

    <!-- SOCIAL SHARING: Update sharethis script id, or whichever social share tool will be used -->
    <script type="text/javascript">var switchTo5x=true;</script>
    <!-- <script type="text/javascript" src="//w.sharethis.com/button/buttons.js"></script> -->
    <!-- <script type="text/javascript">stLight.options({publisher: "ab0860c1-8d46-4c47-917e-49c39b19dc7f", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script> -->

    <!-- Google Maps -->
     <script type="text/javascript"
      src="//maps.googleapis.com/maps/api/js?key=AIzaSyB_TazuQYgS2jGSwZvR2RSR5CxXHxjMf_U"></script>

</head>
<body<?php echo $body_class; ?>>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4&appId=295948633946506";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="//browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<!-- Add your site or application content here -->
<div id="outer-wrap">
    <div id="inner-wrap">
        <header class="l-padding-ad header--app">
			<div class="row">
				<div class="three columns l-padding-ts">
					<a href="/templates/" class="logo">
						<img src="/assets/dist/img/logo.png" alt="The City of San Diego" width="205" height="50" class="hide-on-mobile">
						<img src="/assets/dist/img/logo-web-app-mobile.png" alt="The City of San Diego" width="64" height="50" class="hide-on-desktop">
					</a>
				</div>

				<div class="nine columns">
					<h1 class="text-white heading--trim">Web Application Title</h1>
					<p class="text-white l-margin-bn">Subtitle</p> <!-- optional -->
				</div>
			</div>
		</header>