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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,800,700|Merriweather:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/assets/dist/css/main.min.css">
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/dist/css/no-mq.min.css"><![endif]-->
    <script src="/assets/dist/js/plugins/modernizr-2.8.3.min.js"></script>

    <!-- SOCIAL SHARING: Update sharethis script id, or whichever social share tool will be used -->
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "ab0860c1-8d46-4c47-917e-49c39b19dc7f", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

    <!-- Google Maps -->
     <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_TazuQYgS2jGSwZvR2RSR5CxXHxjMf_U"></script>

    <script type="text/javascript">
        function initialize() {

            var myLatlng = new google.maps.LatLng(32.7117,-117.1592);

            var mapOptions = {
                zoom: 13,
                center: myLatlng
            }

            var image = '../assets/dist/img/map-marker.png';

            // var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

            // var marker = new google.maps.Marker({
            //   position: myLatlng,
            //   map: map,
            //   icon: image
            // });

            var wideMap = new google.maps.Map(document.getElementById('wide-map-canvas'), mapOptions);

            var marker = new google.maps.Marker({
              position: myLatlng,
              map: wideMap,
              icon: image
            });

            setMarkers(map, events, eventImage);
            setMarkers(map, attractions, attractionImage);
        }

        var events = [
            ['Big Bay Boom', 32.7090, -117.1711, 1],
            ['Comic Con', 32.7063, -117.1612, 2],
            ['Concerts in the Park', 32.7039, -117.1643, 3],
        ]

        var attractions = [
            ['Gaslamp Museum', 32.7105728, -117.1606412],
            ['Star of India', 32.7202992, -117.1735802],
            ['San Diego Zoo', 32.7359631, -117.1507747],
        ]

        var eventImage = {
            url    : '../assets/dist/img/event-marker.png',
            size   : new google.maps.Size(14,16),
            origin : new google.maps.Point(0,0),
            anchor : new google.maps.Point(0,0)
        };

        var attractionImage = {
            url    : '../assets/dist/img/attraction-marker.png',
            size   : new google.maps.Size(14,16),
            origin : new google.maps.Point(0,0),
            anchor : new google.maps.Point(0,0)
        };

        function setMarkers(map, locations, icon) {

            var shape = {
                coords: [1, 1, 1, 20, 18, 20, 18 , 1],
                type: 'poly'
            };

            for (var i = 0; i < locations.length; i++) {
                var event = locations[i];
                var myLatLng = new google.maps.LatLng(event[1], event[2]);
                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    icon: icon,
                    shape: shape,
                    title: event[0],
                    zIndex: event[3]
                });
            }

        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

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
        <header class="l-padding-mobile-hd">
            <div class="top-nav-strip">
                <div class="l-constrained">
                    <div class="row">
                        <div class="six columns no-gutters">
                            <p>Visit <a href="">sandiego.gov</a></p>
                        </div>
                        <div class="six columns no-gutters hide-on-mobile">
                            <ul class="socials">
                                <li><a href=""><i class="icon-googleplus"></i></a></li>
                                <li><a href=""><i class="icon-facebook"></i></a></li>
                                <li><a href=""><i class="icon-youtube"></i></a></li>
                                <li><a href=""><i class="icon-twitter"></i></a></li>
                                <li><a href=""><i class="icon-dribbble"></i></a></li>
                                <li><a href=""><i class="icon-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="l-constrained row l-padding-td l-padding-bd">
                <div class="three columns no-gutters">
                    <a href="/" class="logo">
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