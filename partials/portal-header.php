<?php
global $html_class;
$body_class = 'portal';

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
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,800,700|Merriweather:400,700' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <link rel="stylesheet" href="/assets/dist/css/main.min.css">
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/dist/css/no-mq.min.css"><![endif]-->
    <script src="/assets/dist/js/plugins/modernizr-2.8.3.min.js"></script>

    <!-- SOCIAL SHARING: Update sharethis script id, or whichever social share tool will be used -->
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="//w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "ab0860c1-8d46-4c47-917e-49c39b19dc7f", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

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
        <header>
            <div class="top-nav-strip">
                <div class="l-constrained">
                    <div class="row">
                        <div class="sm-six six columns no-gutters">
                            <p>Visit <a href="">sandiego.gov</a></p>
                        </div>
                        <div class="sm-six six columns no-gutters">
                            <ul class="socials hidden">
                                <li><a href=""><i class="icon-googleplus"></i></a></li>
                                <li><a href=""><i class="icon-facebook"></i></a></li>
                                <li><a href=""><i class="icon-youtube"></i></a></li>
                                <li><a href=""><i class="icon-twitter"></i></a></li>
                                <li><a href=""><i class="icon-dribbble"></i></a></li>
                                <li><a href=""><i class="icon-rss"></i></a></li>
                            </ul>
							<a href="" class="search-icon translate-icon--open l-margin-rs"><i class="icon-translate"></i> </a>
							<div class="quicklinks l-padding-desktop-bs text-right l-margin-mobile-rm l-padding-mobile-ts">
								<div class="google-translate">
									<div id="google_translate_element"></div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="l-constrained row l-padding-td l-padding-bd">
                <div class="three columns no-gutters">
                    <a href="/templates/" class="logo">
                        <img src="/assets/dist/img/logo-portal.png" alt="The City of San Diego" width="245" height="64">
                    </a>
                </div>

                <div class="six columns">
                    <div class="menu-btn menu-btn--open">
                        <a id="nav-open-btn" class="menu-toggle js-menu-toggle" href="#nav"><span class="">Menu</span><span class="menu-toggle__line"></span></a>
                    </div>

                    <nav id="nav" class="main__navigation--portal nav-primary l-margin-td" role="navigation">
                        <ul>
                            <li><a href="">Nav Item 1</a></li>
                            <li><a href="">Nav Item 2</a></li>
                            <li><a href="">Nav Item 3</a></li>
                            <li><a href="">Nav Item 4</a></li>
                            <li><a href="">Nav Item 5</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="three columns hide-on-mobile l-margin-td">
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
                </div>
            </div>

            <!-- <div class="l-container navigation__wrap">
                <div class="l-constrained">
                    
                </div>
                
            </div> -->
        </header>