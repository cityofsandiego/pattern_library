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

            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

            var wideMap = new google.maps.Map(document.getElementById('wide-map-canvas'), mapOptions);

            var image = '../assets/dist/img/map-marker.png';

            var marker = new google.maps.Marker({
              position: myLatlng,
              map: map,
              icon: image
            });

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
<div id="fb-root"></div>

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
<div id="outer-wrap">
    <div id="inner-wrap">
        <header class="library__header">
            <div class="l-constrained row">
                <div class="one columns">
                    <img src="/assets/dist/img/logo-mark.png" alt="The City of San Diego - logo" width="163" height="132">
                </div>
                <div class="eleven columns">
                    <nav>
                        <ul>
                            <li><a href="/">Patterns</a></li>
                            <li><a href="/templates/">Templates</a></li>
                        </ul>

                        <?php
                          $current_page = basename($_SERVER['PHP_SELF']);
                        ?>
                    </nav>
                </div>
            </div>
        </header>