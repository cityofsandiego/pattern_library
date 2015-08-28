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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700|Merriweather:400,700' rel='stylesheet' type='text/css'>

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

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<!-- Add your site or application content here -->
<div id="outer-wrap">
    <div id="inner-wrap">
        <header class="l-padding-mobile-hd">
            <div class="l-constrained row l-padding-td l-padding-desktop-tm l-padding-bd">
                <div class="two columns no-gutters">
                    <a href="/" class="logo">
                        <img src="/assets/dist/img/logo.png" alt="The City of San Diego" width="205" height="50" class="hide-on-mobile">
                        <img src="/assets/dist/img/logo-mark.png" alt="The City of San Diego" width="163" height="132" class="hide-on-desktop">
                    </a>
                </div>
                <div class="three columns hide-on-mobile">
                    <form action="" method="post" id="search-block-form" class="form--search" accept-charset="UTF-8">
                        <div><div class="container-inline">
                            <h2 class="visuallyhidden">Search form</h2>
                            <div class="form-item form-type-textfield form-item-search-block-form">
                                <label class="visuallyhidden" for="edit-search-block-form--2">Search</label>
                                <input title="Enter the terms you wish to search for." type="search" id="search-block-form--2" name="search_block_form" value="" placeholder="I need to..." size="15" maxlength="128" class="form-text">
                            </div>
                            <div class="form-actions form-wrapper" id="edit-actions">
                                <input type="submit" id="edit-submit" name="op" value="Search" class="form-submit">
                            </div>
                            <input type="hidden" name="form_build_id" value="">
                            <input type="hidden" name="form_id" value="search_block_form">
                        </div></div>
                    </form>
                </div>
                <div class="five columns hide-on-mobile">
                    <div class="quicklinks background--cerulean l-padding-ts">
                        <ul>
                            <li><a href="">Login</a></li>
                            <li><a href="">Text Size <span class="text-sm">A</span> <span class="text-nm current">A</span> <span class="text-lg">A</span></a></li>
                            <li><a href="">Translate</a></li>
                            <li><a href="">High Contrast</a></li>
                        </ul>
                    </div>
                </div>
                <div class="two columns no-gutters text-right hide-on-mobile">
                    <div class="card--weather">
                        <i class="icon-search"></i>
                        <p class="temperature"><span class="degrees">73</span>&deg;</p>
                        <p><strong>San Diego <br> Weather</strong></p>
                    </div>
                </div>
            </div>

            <div class="l-container navigation__wrap">
                <div class="l-constrained">
                    <div class="menu-btn menu-btn--open">
                        <a id="nav-open-btn" class="menu-toggle js-menu-toggle" href="#nav"><span class="">Menu</span><span class="menu-toggle__line"></span></a>
                    </div>

                    <nav id="nav" class="main__navigation main-navigation nav-primary" role="navigation">
                        <ul>
                            <li class="has__dropdown"><a href=""><i class="icon-arrow-right hide-on-desktop"></i>Leisure <i class="icon-arrow-down hide-on-mobile"></i><span>Explore, Play + Events</span></a>
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
                                            <div class="row border border--bottom">
                                                <div class="six columns">
                                                    <a href=""><h4>Parks</h4></a>
                                                </div>
                                                <div class="six columns">
                                                    <ul>
                                                        <li><a href="">Community Parks</a></li>
                                                        <li><a href="">Recreation Centers</a></li>
                                                        <li><a href="">Book an Event</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row border border--bottom">
                                                <div class="six columns">
                                                    <a href=""><h4>Outdoors</h4></a>
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
                                                    <a href=""><h4>Things to Do</h4></a>
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
                                        <div class="four columns hide-on-mobile">
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
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="has__dropdown"><a href=""><i class="icon-arrow-right hide-on-desktop"></i>Resident Resources <i class="icon-arrow-down hide-on-mobile"></i><span>Pay Now, Parking + Help</span></a>

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
                                            <div class="row border border--bottom">
                                                <div class="twelve columns">
                                                    <a href=""><h4>Website Tools</h4></a>
                                                </div>
                                            </div>
                                            <div class="row border border--bottom">
                                                <div class="twelve columns">
                                                    <a href=""><h4>Indexes</h4></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="twelve columns">
                                                    <a href=""><h4>Account Management</h4></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="four columns hide-on-mobile">
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
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="has__dropdown"><a href=""><i class="icon-arrow-right hide-on-desktop"></i>Doing Business <i class="icon-arrow-down hide-on-mobile"></i><span>Fix, Plan + Build</span></a>

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
                                            <div class="row border border--bottom">
                                                <div class="twelve columns">
                                                    <a href=""><h4>Forums</h4></a>
                                                </div>
                                            </div>
                                            <div class="row border border--bottom">
                                                <div class="twelve columns">
                                                    <a href=""><h4>Neighborhoods & Council Districts</h4></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="twelve columns">
                                                    <a href=""><h4>Initiatives</h4></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="four columns hide-on-mobile">
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
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li><a href="">Library <span>Learn, Connect + Grow</span></a></li>

                            <li class="has__dropdown"><a href=""><i class="icon-arrow-right hide-on-desktop"></i>Public Safety <i class="icon-arrow-down hide-on-mobile"></i><span>Police, Fire + Lifeguards</span></a>

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
                                            <div class="row border border--bottom">
                                                <div class="six columns">
                                                    <a href=""><h4>Police</h4></a>
                                                </div>
                                                <div class="six columns">
                                                    <ul>
                                                        <li><a href="">Subsection</a></li>
                                                        <li><a href="">Another Subsection</a></li>
                                                        <li><a href="">Subsection</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row border border--bottom">
                                                <div class="six columns">
                                                    <a href=""><h4>Fire</h4></a>
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
                                                    <a href=""><h4>Lifeguards</h4></a>
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
                                        <div class="four columns hide-on-mobile">
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
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="has__dropdown"><a href=""><i class="icon-arrow-right hide-on-desktop"></i>City Hall <i class="icon-arrow-down hide-on-mobile"></i><span>Governing, News + Initiatives</span></a>

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
                                            <div class="row border border--bottom">
                                                <div class="twelve columns">
                                                    <a href=""><h4>Mayor</h4></a>
                                                </div>
                                            </div>
                                            <div class="row border border--bottom">
                                                <div class="twelve columns">
                                                    <a href=""><h4>Community Board</h4></a>
                                                </div>
                                            </div>
                                            <div class="row border border--bottom">
                                                <div class="twelve columns">
                                                    <a href=""><h4>Employment</h4></a>
                                                </div>
                                            </div>
                                            <div class="row border border--bottom">
                                                <div class="twelve columns">
                                                    <a href=""><h4>Cost of Living</h4></a>
                                                </div>
                                            </div>
                                            <div class="row border border--bottom">
                                                <div class="twelve columns">
                                                    <a href=""><h4>Long-Term Planning</h4></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="twelve columns">
                                                    <a href=""><h4>Planning Initiatives</h4></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="four columns hide-on-mobile">
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
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                
            </div>
        </header>