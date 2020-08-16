<?php
global $html_class;
global $body_class;

$html_class = ( isset( $html_class ) ) ? $html_class . ' ' : '';
$body_class = ( isset( $body_class ) ) ? ' class="' . $body_class . '"' : '';

$current_page = basename($_SERVER['PHP_SELF']);
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

    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,800,700|Merriweather:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/assets/dist/css/main.min.css">
	<link rel="stylesheet" href="/assets/dist/css/pattern-library-only.css">
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/dist/css/no-mq.min.css"><![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/assets/dist/js/plugins/modernizr-2.8.3.min.js"></script>
    <!-- <script src="/assets/dist/js/pattern-library-only.js"></script>-->

    <!-- SOCIAL SHARING: Update sharethis script id, or whichever social share tool will be used -->
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "ab0860c1-8d46-4c47-917e-49c39b19dc7f", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>


</head>
<body id="top"<?php echo $body_class; ?>>
<div class="backToTop">
<p><a href="#top" title="Back to Top"><i class="icon-exit-up icon--md icon--circle background--dark"></i></a></p>
</div>
<div id="fb-root"></div>

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
<div id="outer-wrap">
    <div id="inner-wrap">
        <header class="library__header">
            <?php if ($current_page == "messaging.php"){ ?>
                <div class="message message--warning">
                    <div class="l-constrained">
                        <p>
                        <i class="icon-flag l-margin-rs"></i>
                        <strong>Warning!</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in nunc mauris.
                        <a href="" class="close-icon pull-right"><i class="icon-cross-circle"></i></a></p>
                    </div>
                </div>
            <?php }?>
            <div class="l-constrained row">
                <div class="one columns logo l-padding-mobile-hd">
                    <img src="/assets/dist/img/logo-mark.png" alt="The City of San Diego - logo" width="163" height="132">
                </div>
                <div class="eleven columns">
                    <nav>
                        <ul>
                            <li><a href="/">Patterns</a></li>
                            <li><a href="/templates/">Templates</a></li>
                            <li><a href="/guidelines/">Guidelines</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>