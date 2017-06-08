<?php
global $html_class;
$body_class = 'portal theme-citynet';

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
    <link rel="icon" type="image/png" href="/assets/dist/img/favicon.png">

    <!-- <link rel="apple-touch-icon" href="apple-touch-icon.png"> -->
    <!-- Place favicon.ico in the root directory -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,800,700|Merriweather:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/assets/dist/css/main.min.css">
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/dist/css/no-mq.min.css"><![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/assets/dist/js/plugins/modernizr-2.8.3.min.js"></script>

    <!-- SOCIAL SHARING: Update sharethis script id, or whichever social share tool will be used -->
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "ab0860c1-8d46-4c47-917e-49c39b19dc7f", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

    <!-- Google Maps -->
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_TazuQYgS2jGSwZvR2RSR5CxXHxjMf_U"></script> 
	<style type="text/css">
	@media screen and (min-width: 48em) {
		header.header--fixed+div {
			margin-top:85px;
		}
		.portal .logo:before {
			height: 105px;
			box-shadow:0px 1px 7px 1px rgba(0,0,0,0.3);
		}
		.portal .logo img {
			top: 0;
		}
		main, [role="main"] {margin-top: -50px;}
		.portal header, .main__navigation--portal {background-color:#009581;}
		.main__navigation--portal li:last-child {float: none;}
		.main__navigation>ul {
			min-height:0;
			-webkit-justify-content: flex-start;
			justify-content: flex-start;
		}
		.main__navigation>ul>li {width:auto;}
		.hero__slides>.row {padding:2em 0 8em;}
		#citynet-title a {color:white;}
		.card__container .card__wrap {width: 25%;}
	}
	@media screen and (max-width: 74.99em) {
		.main__navigation>ul>li>a {min-height: 0;}
	}
	@media screen and (max-width: 59.99em) {
		.hero__slides--secondary {padding-bottom: 0;}
		.hero__slides--img li:after {background-color:rgba(0,0,0,0);}
		#citynet-title {font-size:1.7rem; margin-top:1.3rem;}
	}
	@media screen and (max-width: 47.99em) {
		[role="main"] {margin-top: 0;}
		.portal .menu-toggle {top:.5em;}
		.hero__slides--secondary {padding-bottom:1.5em;}
		.hero__slides--img li:after {background-color:rgba(0,0,0,0);}
		.hero__slides>.row {padding:1em 0;}
		.main__message .main__heading {font-size: 1.5rem;}
		header .form--search {top:80px;}
		#citynet-title a {color: #37424a;}
	}
	#citynet-title a {font-style:Merriweather; text-decoration: none;}
	.event__date {font-size:1.5em; padding:.5em; line-height:1.2em;}
	.portal header, .main__navigation {box-shadow:0 4px 3px -3px rgba(0,0,0,0.3);}
	.navigation__wrap {background:transparent;}
	.sub-navigation, .sub-navigation li {background:white;}
	.sub-navigation {border-bottom: 1px solid #37424a;}
	.sub-navigation a {
		color:#37424a;
		text-transform: uppercase;
	}
	.sub-navigation a:hover {
		color:#37424a;
	}
	.main__message {padding:2em 0 0 0;}
	@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) { /* IE10+ only */
		.card__container .slides {
			display: block;			
		}
	 }
	</style>
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
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<!-- Add your site or application content here -->
<div id="outer-wrap">
    <div id="inner-wrap">
        <header class="l-padding-mobile-hd header--fixed has-alert">
					<div id="header-alert">
			
<div id="block-views-header-alert-header-alert-block" class="block block-views">
	<div class="message message--warning">
	<div class="l-constrained text-center">
	<p>
		<i class="icon-flag"></i>
		<strong>Error!</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in nunc mauris.
	<a href="" class="close-icon pull-right"><i class="icon-cross-circle"></i></a>
	</p>
	</div>
	</div>
</div>	
			
			
			</div>
            <div id="nav-header" class="l-constrained row l-padding-ts l-padding-mobile-bs">
                <div class="three columns no-gutters">
				<p id="citynet-title" class="h1 l-margin-bn"><a href="/templates"><img class="hide-on-mobile" src="/assets/dist/img/logo--white--lg.png" alt="SD Logo" style="margin-top:-22px;" width="75"><img class="hide-on-desktop" src="/assets/dist/img/logo-mark.png" alt="SD Logo" style="margin-top:-22px;" width="55"> CityNet</a></p>
				
				<p class="hidden fine-print l-margin-an l-padding-an l-padding-lx l-margin-ld" style="color:white;"><em>Connecting City Employees</em></p>
                </div>

                <div class="six columns no-gutters l-margin-ts">
                    <div class="menu-btn menu-btn--open">
                        <a id="nav-open-btn" class="menu-toggle js-menu-toggle" href="#nav"><span class="">Menu</span><span class="menu-toggle__line"></span></a>
                    </div>

                    <nav id="nav" class="main__navigation--portal nav-primary l-margin-desktop-td" role="navigation">
                        <ul>
                            <li><a href="intranet-bucket.php">Boring (but important)</a></li>
                            <li><a href="intranet-bucket.php">Internal Services</a></li>
                            <li><a href="intranet-bucket.php">Connect</a></li>
                            <li><a href="intranet-bucket.php">Develop</a></li>
                            <li><a href="intranet-bucket.php">My SD</a></li>
                        </ul>
                    </nav>
                </div>

                <!--<div class="three columns hide-on-mobile l-margin-td l-padding-ts">
					<a href="" class="search-icon search-icon--open"><i class="icon-magnifier"></i> </a>
                    <form action="" method="post" id="search-block-form" class="form--search" accept-charset="UTF-8">
                        <div><div class="l-container">
                            <h2 class="visuallyhidden">Search form</h2>
                            <div class="form-item form-type-textfield form-item-search-block-form">
                                <label class="visuallyhidden" for="edit-search-block-form--2">Search</label>
                                <input title="Enter the terms you wish to search for." type="search" id="search-block-form--2" name="search_block_form" value="" placeholder="Search" size="15" maxlength="128" class="form-text">
                            </div>
                            <div class="form-actions form-wrapper" id="edit-actions">
                                <input type="submit" id="edit-submit" name="op" value="Search" class="form-submit">
                            </div>
                            <input type="hidden" name="form_build_id" value="">
                            <input type="hidden" name="form_id" value="search_block_form">
                        </div></div>
                    </form>
                </div>-->
				
				<div class="three columns no-gutters form--search-wrap l-margin-desktop-td l-padding-desktop-ts l-margin-mobile-rl">
					<a href="" class="search-icon search-icon--open"><i class="icon-magnifier"></i> </a>
					<form method="get" action="https://google.sannet.gov/search" target="_self" name="googleSearch" id="search-block-form" class="form--search" accept-charset="UTF-8">
						<div>
							<div class="l-container">
								<h2 class="visuallyhidden">Search form</h2>
								<div class="form-item form-type-textfield form-item-search-block-form">
									<label class="visuallyhidden" for="edit-search-block-form--2">Search</label>
									<input title="Enter the terms you wish to search for." type="search" id="search-block-form--2" name="q" value="" placeholder="Search CityNet" size="15" maxlength="128" class="form-text">
								</div>
								<div class="form-actions form-wrapper" id="edit-actions">
									<input type="submit" id="edit-submit" name="op" value="Search" class="form-submit">
								</div>
								<input type="hidden" name="site" value="sandiego_gov">
								<input type="hidden" name="client" value="sandiego_gov">
								<input type="hidden" name="proxystylesheet" value="sandiego_gov">
								<input type="hidden" name="output" value="xml_no_dtd">
							</div>
						</div>
					</form>
				</div>
            </div>

            <!-- <div class="l-container navigation__wrap">
                <div class="l-constrained">
                    
                </div>
                
            </div> -->
        </header>