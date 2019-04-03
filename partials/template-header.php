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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,800,700|Merriweather:400,700' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  
    <link rel="stylesheet" href="/assets/dist/css/main.min.css">
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/dist/css/no-mq.min.css"><![endif]-->
    <script src="/assets/dist/js/plugins/modernizr-2.8.3.min.js"></script>
	<script src="/assets/dist/js/plugins/stellar.min.js"></script>

    <!-- SOCIAL SHARING: Update sharethis script id, or whichever social share tool will be used -->
    <script type="text/javascript">var switchTo5x=true;</script>
    <!-- <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script> -->
    <!-- <script type="text/javascript">stLight.options({publisher: "ab0860c1-8d46-4c47-917e-49c39b19dc7f", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script> -->

    <!-- Google Maps -->
     <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_TazuQYgS2jGSwZvR2RSR5CxXHxjMf_U"></script>
	  
	  <style type="text/css">
		.oh-display span.oh-display-label{display:inline;float:left;clear:both}.oh-display span.oh-display-times{display:inline;float:right}	  
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
        <header class="l-padding-mobile-hs">
			<div id="header-alert"></div>

			<div id="top-header" class="l-constrained row l-padding-td l-padding-desktop-tn">

			<div class="hidden twelve columns hide-on-mobile text-right">
				<div class="quicklinks background--cerulean">
					<ul class="l-margin-bs l-margin-tn">
						<li class="hidden"><a href="/user">Login</a></li>
						<li class="hidden"><a href="">Text Size <span class="text-sm">A</span> <span class="text-nm current">A</span> <span class="text-lg">A</span></a></li>
						 <li class="google-translate"></li>
						<li class="hidden"><a href="">High Contrast</a></li>
					</ul>
				</div>
			</div>

			<div class="three columns no-gutters logo--wrap l-padding-desktop-tm">
				<a href="/" class="logo">
				<img src="/assets/dist/img/logo.png" alt="The City of San Diego" width="205" height="50" class="hide-on-mobile">
				<img src="/assets/dist/img/logo-mark.png" alt="The City of San Diego" width="163" height="132" class="hide-on-desktop">
				</a>
			</div> 

			<div class="six columns text-center hide-on-mobile l-padding-desktop-tm l-margin-desktop-ts">
				<div class="card--weather">
					<i class="icon-sun"></i>
					<p class="temperature"><span class="degrees">68</span>&deg;</p>
					<p><strong>San Diego <br> Weather</strong></p>
				</div>
			</div> 

			<div class="three columns no-gutters l-padding-desktop-ts">
				<div class="quicklinks text-right l-margin-mobile-rm l-padding-mobile-ts">
					<div id="quicklink-divs">
						<div class="accessibility hide-on-mobile">
							<a id="accessibility" class="popup-modal" href="#accessibility_popup">Accessibility Tools</a>
						</div>
						<div class="google-translate">
						<div id="google_translate_element"></div>
					</div>
					</div>
				</div>

				<div id="accessibility_popup" class="white-popup accessibility-popup-position mfp-hide" title="Basic dialog">
					<h3>Accessibility Tools</h3>
					<div class="row">
						<div class="five columns">
							<span style="color:lightgrey;font-size: 24px;">&nbsp;</span>
							<a title="Turn audio/vision assist on/off" href="javascript:;" onclick="BrowseAloud.panel.toggleBar(true,event);return false;">Turn audio/vision assist on/off</a>
						</div>
						<div class="four columns">
							<span style="color:lightgrey;font-size: 24px;">|</span>
							<strong class="high_contrast_switcher_label">Contrast:</strong>
							<span class="high_contrast_switcher_normal">
							<a id="high_contrast_switcher_normal_id" title="Set contrast to normal" href="javascript:drupalHighContrast.disableStyles(); var x = isContrastHigh(); var y = x;">Default</a>
							</span>
							<span class="high_contrast_switcher_separator">/</span>
							<span class="high_contrast_switcher_high">
							<a id="high_contrast_switcher_high_id" title="Set contrast to high" href="javascript:drupalHighContrast.enableStyles();var x = isContrastHigh(); var y = x;">High</a>
							</span>
						</div>
						<div class="three columns">
							<span style="color:lightgrey;font-size: 24px;">|</span>
							<span>&nbsp;&nbsp;<a title="More information on accessibility" href="/accessibility">More Info</a></span>
						</div>
					</div>
				</div>
				<div id="block-system-main" class="block block-system">
					<div class="content">
						<form class="form--search" action="#" method="post" id="search-block-form" accept-charset="UTF-8"><div><div class="container-inline">
						<h2 class="hidden">Search form</h2>
						<div class="form-item form-type-textfield form-item-search-block-form">
						<label class="element-invisible" for="edit-search-block-form--2">Search </label>
						<input title="Enter the terms you wish to search for." type="text" id="edit-search-block-form--2" name="search_block_form" value="" size="15" maxlength="128" class="form-text" placeholder="Search sandiego.gov"/>
						</div>
						<div class="form-actions form-wrapper" id="edit-actions--2"><input class="btn form-submit" type="submit" id="edit-submit--4" name="op" value="Search" /></div><input type="hidden" name="form_build_id" value="form-oPo1eDPEdFjG-B92m8zch_LSFTOkQPlb9ciuwG4s-os" />
						<input type="hidden" name="form_token" value="-zZ4am9r3fJnkF35Kne9o2slnBSbQK4FkgO8UN-WQcE" />
						<input type="hidden" name="form_id" value="search_block_form" />
						</div>
						</div></form> 
						<ul class="visuallyhidden">
							<li>Check if your spelling is correct, or try removing filters.</li>
							<li>Remove quotes around phrases to match each word individually: <em>"blue drop"</em> will match less than <em>blue drop</em>.</li>
							<li>You can require or exclude terms using + and -: <em>big +blue drop</em> will require a match on <em>blue</em> while <em>big blue -drop</em> will exclude results that contain <em>drop</em>.</li>
						</ul>
					</div>
				</div>
			</div> 
		</div>

            <div id="nav-header" class="l-container navigation__wrap">
                <div class="l-constrained">
                    <div class="menu-btn menu-btn--open">
                        <a id="nav-open-btn" class="menu-toggle js-menu-toggle" href="#nav"><span class="">Menu</span><span class="menu-toggle__line"></span></a>
                    </div>

                    <nav id="nav" class="main__navigation main-navigation nav-primary" role="navigation">
					
						<div class="nav-logo alignleft l-margin-bn l-margin-rd l-padding-ls">
							<a href="/" style="padding-top:5px;"><img src="/assets/dist/img/logo-mark.png" alt="City of San Diego Logo" title="Go to City of San Diego Home Page" width="50" height="auto"></a>
						</div>
                        <ul>
							<li style="width: auto;"><a href="/" style="padding-top:18px;"><i class="icon-home hide-on-desktop"></i><span class="hide-on-desktop" style="font-size:18px;text-transform:uppercase;font-weight:600;">Home</span><i class="icon-home hide-on-mobile" style="font-size:24px;"></i></a></li>
                            <li class="has__dropdown"><a href="" class="dropdown-parent"><i class="icon-chevron-right hide-on-desktop"></i>Leisure <i class="icon-chevron-down hide-on-mobile"></i><span>Explore, Play + Events</span></a>
                                <div class="dropdown">
                                    <div class="row hide-on-mobile nav__heading">
                                        <div class="twelve columns">
                                            <p class="l-margin-bn">Leisure</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="four columns hide-on-mobile">
                                            <p>With its great weather, miles of sandy beaches, and major attractions, San Diego is known worldwide as one of the best tourist destinations and a great place for residents to relax year round.</p>
                                        </div>
                                        <div class="four columns">
                                            <div class="row border">
                                                <div class="six columns">
                                                    <h4><a href="">Parks</a></h4>
                                                </div>
                                                <div class="six columns">
                                                    <ul>
                                                        <li><a href="">Community Parks</a></li>
                                                        <li><a href="">Recreation Centers</a></li>
                                                        <li><a href="">Book an Event</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row border">
                                                <div class="six columns">
                                                    <h4><a href="">Outdoors</a></h4>
                                                </div>
                                                <div class="six columns">
                                                    <ul>
                                                        <li><a href="">Beaches</a></li>
                                                        <li><a href="">Lakes</a></li>
                                                        <li><a href="">Golf</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="six columns">
                                                    <h4><a href="">Things to Do</a></h4>
                                                </div>
                                                <div class="six columns">
                                                    <ul>
                                                        <li><a href="">Balboa Park</a></li>
                                                        <li><a href="">Festivals and Parades</a></li>
                                                        <li><a href="">Special Events</a></li>
                                                        <li><a href="">Visitor Resources</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="four columns">
                                            <div class="nav__event">
                                                <img src="/assets/dist/img/nav-event-1.jpg" width="74" height="74" alt="Event 1">
                                                <p>Celebrate the Balboa Park Centennial <a href="">Learn More</a></p>
                                            </div>
                                            <div class="nav__event">
                                                <img src="/assets/dist/img/nav-event-2.jpg" width="74" height="74" alt="Event 2">
                                                <p>Get an Event Permit <a href="">Learn More</a></p>
                                            </div>
                                            <div class="nav__event">
                                                <img src="/assets/dist/img/nav-event-3.jpg" width="74" height="74" alt="Event 3">
                                                <p>Book Your Tee Time <a href="">Learn More</a></p>
                                            </div>
											<a class="close-mm visuallyhidden" href="#">Close menu</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="has__dropdown"><a href="" class="dropdown-parent"><i class="icon-chevron-right hide-on-desktop"></i>Resident Resources <i class="icon-chevron-down hide-on-mobile"></i><span>Pay Now, Parking + Help</span></a>

                                <div class="dropdown">
                                    <div class="row hide-on-mobile nav__heading">
                                        <div class="twelve columns">
                                            <p class="l-margin-bn">Resident Resources</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="four columns hide-on-mobile">
                                            <p>Maecenas maximus enim quis pulvinar condimentum. Vestibulum turpis ex, ultrices nec velit quis, mattis suscipit diam. Nunc sed felis sed odio interdum viverra.</p>
                                        </div>
                                        <div class="four columns">
                                            <div class="row border">
                                                <div class="twelve columns">
                                                    <h4><a href="">Website Tools</a></h4>
                                                </div>
                                            </div>
                                            <div class="row border">
                                                <div class="twelve columns">
                                                    <h4><a href="">Indexes</a></h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="twelve columns">
                                                    <h4><a href="">Account Management</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="four columns">
                                            <div class="nav__event">
                                                <img src="/assets/dist/img/nav-event-1.jpg" width="74" height="74" alt="Event 1">
                                                <p>Make a Payment <a href="">Learn More</a></p>
                                            </div>
                                            <div class="nav__event">
                                                <img src="/assets/dist/img/nav-event-2.jpg" width="74" height="74" alt="Event 2">
                                                <p>Order Trash Cans <a href="">Learn More</a></p>
                                            </div>
                                            <div class="nav__event">
                                                <img src="/assets/dist/img/nav-event-3.jpg" width="74" height="74" alt="Event 3">
                                                <p>Get a Permit <a href="">Learn More</a></p>
                                            </div>
											<a class="close-mm visuallyhidden" href="#">Close menu</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="has__dropdown"><a href="" class="dropdown-parent"><i class="icon-chevron-right hide-on-desktop"></i>Doing Business <i class="icon-chevron-down hide-on-mobile"></i><span>Fix, Plan + Build</span></a>

                                <div class="dropdown">
                                    <div class="row hide-on-mobile nav__heading">
                                        <div class="twelve columns">
                                            <p class="l-margin-bn">Doing Business</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="four columns hide-on-mobile">
                                            <p>Maecenas maximus enim quis pulvinar condimentum. Vestibulum turpis ex, ultrices nec velit quis, mattis suscipit diam. Nunc sed felis sed odio interdum viverra.</p>
                                        </div>
                                        <div class="four columns">
                                            <div class="row border">
                                                <div class="twelve columns">
                                                    <h4><a href="">Forums</a></h4>
                                                </div>
                                            </div>
                                            <div class="row border">
                                                <div class="twelve columns">
                                                    <h4><a href="">Neighborhoods & Council Districts</a></h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="twelve columns">
                                                    <h4><a href="">Initiatives</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="four columns">
                                            <div class="nav__event">
                                                <img src="/assets/dist/img/nav-event-1.jpg" width="74" height="74" alt="Event 1">
                                                <p>Signup for a Class <a href="">Learn More</a></p>
                                            </div>
                                            <div class="nav__event">
                                                <img src="/assets/dist/img/nav-event-2.jpg" width="74" height="74" alt="Event 2">
                                                <p>Search for a Job <a href="">Learn More</a></p>
                                            </div>
                                            <div class="nav__event">
                                                <img src="/assets/dist/img/nav-event-3.jpg" width="74" height="74" alt="Event 3">
                                                <p>See Business Events <a href="">Learn More</a></p>
                                            </div>
											<a class="close-mm visuallyhidden" href="#">Close menu</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li><a href="">Library <span>Learn, Connect + Grow</span></a></li>

                            <li class="has__dropdown"><a href="" class="dropdown-parent"><i class="icon-chevron-right hide-on-desktop"></i>Public Safety <i class="icon-chevron-down hide-on-mobile"></i><span>Police, Fire + Lifeguards</span></a>

                                <div class="dropdown">
                                    <div class="row hide-on-mobile nav__heading">
                                        <div class="twelve columns">
                                            <p class="l-margin-bn">Public Safety</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="four columns hide-on-mobile">
                                            <p>Maecenas maximus enim quis pulvinar condimentum. Vestibulum turpis ex, ultrices nec velit quis, mattis suscipit diam. Nunc sed felis sed odio interdum viverra.</p>
                                        </div>
                                        <div class="four columns">
                                            <div class="row border">
                                                <div class="six columns">
                                                    <h4><a href="">Police</a></h4>
                                                </div>
                                                <div class="six columns">
                                                    <ul>
                                                        <li><a href="">Subsection</a></li>
                                                        <li><a href="">Another Subsection</a></li>
                                                        <li><a href="">Subsection</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row border">
                                                <div class="six columns">
                                                    <h4><a href="">Fire</a></h4>
                                                </div>
                                                <div class="six columns">
                                                    <ul>
                                                        <li><a href="">Subsection</a></li>
                                                        <li><a href="">Another Subsection</a></li>
                                                        <li><a href="">Subsection</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="six columns">
                                                    <h4><a href="">Lifeguards</a></h4>
                                                </div>
                                                <div class="six columns">
                                                    <ul>
                                                        <li><a href="">Subsection</a></li>
                                                        <li><a href="">Another Subsection</a></li>
                                                        <li><a href="">Subsection</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="four columns">
                                            <div class="nav__event">
                                                <img src="/assets/dist/img/nav-event-1.jpg" width="74" height="74" alt="Event 1">
                                                <p>Read the Safety Forum <a href="">Learn More</a></p>
                                            </div>
                                            <div class="nav__event">
                                                <img src="/assets/dist/img/nav-event-2.jpg" width="74" height="74" alt="Event 2">
                                                <p>Safety Events and Training <a href="">Learn More</a></p>
                                            </div>
                                            <div class="nav__event">
                                                <img src="/assets/dist/img/nav-event-3.jpg" width="74" height="74" alt="Event 3">
                                                <p>File a Complaint or Report <a href="">Learn More</a></p>
                                            </div>
											<a class="close-mm visuallyhidden" href="#">Close menu</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="has__dropdown"><a href="" class="dropdown-parent"><i class="icon-chevron-right hide-on-desktop"></i>City Hall <i class="icon-chevron-down hide-on-mobile"></i><span>Governing, News + Initiatives</span></a>

                                <div class="dropdown">
                                    <div class="row hide-on-mobile nav__heading">
                                        <div class="twelve columns">
                                            <p class="l-margin-bn">City Hall</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="four columns hide-on-mobile">
                                            <p>Maecenas maximus enim quis pulvinar condimentum. Vestibulum turpis ex, ultrices nec velit quis, mattis suscipit diam. Nunc sed felis sed odio interdum viverra.</p>
                                        </div>
                                        <div class="four columns">
                                            <div class="row border">
                                                <div class="twelve columns">
                                                    <h4><a href="">Mayor</a></h4>
                                                </div>
                                            </div>
                                            <div class="row border">
                                                <div class="twelve columns">
                                                    <h4><a href="">Community Board</a></h4>
                                                </div>
                                            </div>
                                            <div class="row border">
                                                <div class="twelve columns">
                                                    <h4><a href="">Employment</a></h4>
                                                </div>
                                            </div>
                                            <div class="row border">
                                                <div class="twelve columns">
                                                    <h4><a href="">Cost of Living</a></h4>
                                                </div>
                                            </div>
                                            <div class="row border">
                                                <div class="twelve columns">
                                                    <h4><a href="">Long-Term Planning</a></h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="twelve columns">
                                                    <h4><a href="">Planning Initiatives</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="four columns">
                                            <div class="nav__event">
                                                <img src="/assets/dist/img/nav-event-1.jpg" width="74" height="74" alt="Event 1">
                                                <p>See Town Hall Events and Community Forums <a href="">Learn More</a></p>
                                            </div>
                                            <div class="nav__event">
                                                <img src="/assets/dist/img/nav-event-2.jpg" width="74" height="74" alt="Event 2">
                                                <p>Track an Issue You Submitted <a href="">Learn More</a></p>
                                            </div>
                                            <div class="nav__event">
                                                <img src="/assets/dist/img/nav-event-3.jpg" width="74" height="74" alt="Event 3">
                                                <p>Search City Hall News <a href="">Learn More</a></p>
                                            </div>
											<a class="close-mm visuallyhidden" href="#">Close menu</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
						<div class="form--search-wrap l-padding-mobile-td l-margin-desktop-rs hide-on-mobile">						
							<a href="#" class="search-icon search-icon--open"><i class="icon-magnifier bold"></i> </a>
							<a href="#" class="search-icon translate-icon--open"><i class="icon-translate"></i> </a>
						</div>
                    </nav>
					<div class="form--search-wrap l-padding-mobile-td hide-on-desktop">						
						<a href="#" class="search-icon search-icon--open"><i class="icon-magnifier bold"></i> </a>
						<a href="#" class="search-icon translate-icon--open"><i class="icon-translate"></i> </a>
					</div>
                </div>
            </div>
        </header>