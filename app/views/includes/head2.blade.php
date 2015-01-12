<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 12/18/14
 * Time: 2:07 PM
 */ ?>

<meta charset="utf-8">
<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

<title> <?php //echo $page_title != "" ? $page_title." - " : ""; ?>Stanbic Stockbrokers </title>
<meta name="description" content="">
<meta name="author" content="">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Basic Styles -->
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo ASSETS_URL; ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo ASSETS_URL; ?>/css/font-awesome.min.css">


<link rel="stylesheet" type="text/css" media="screen" href="<?php echo ASSETS_URL; ?>/css/smartadmin-production.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo ASSETS_URL; ?>/css/smartadmin-skins.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo ASSETS_URL; ?>/css/metro-bootstrap.css">



<link rel="stylesheet" type="text/css" media="screen" href="<?php echo ASSETS_URL; ?>/css/smartadmin-rtl.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo ASSETS_URL; ?>/css/doc.css">


<?php

/*if ($page_css) {
    foreach ($page_css as $css) {
        echo '<link rel="stylesheet" type="text/css" media="screen" href="'.ASSETS_URL.'/css/'.$css.'">';
    }
}*/
?>




<!-- FAVICONS -->
<link rel="shortcut icon" href="<?php echo ASSETS_URL; ?>/img/favicon/favicon.png" type="image/png">
<link rel="icon" href="<?php echo ASSETS_URL; ?>/img/favicon/favicon.png" type="image/png">

<!-- GOOGLE FONT -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

<!-- Specifying a Webpage Icon for Web Clip
     Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
<link rel="apple-touch-icon" href="<?php echo ASSETS_URL; ?>/img/splash/sptouch-icon-iphone.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo ASSETS_URL; ?>/img/splash/touch-icon-ipad.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo ASSETS_URL; ?>/img/splash/touch-icon-iphone-retina.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo ASSETS_URL; ?>/img/splash/touch-icon-ipad-retina.png">

<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<!-- Startup image for web apps -->
<link rel="apple-touch-startup-image" href="<?php echo ASSETS_URL; ?>/img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
<link rel="apple-touch-startup-image" href="<?php echo ASSETS_URL; ?>/img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
<link rel="apple-touch-startup-image" href="<?php echo ASSETS_URL; ?>/img/splash/iphone.png" media="screen and (max-device-width: 320px)">

<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script>
    if (!window.jQuery) {
        document.write('<script src="<?php echo ASSETS_URL; ?>/js/libs/jquery-2.0.2.min.js"><\/script>');
    }
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<script>
    if (!window.jQuery.ui) {
        document.write('<script src="<?php echo ASSETS_URL; ?>/js/libs/jquery-ui-1.10.3.min.js"><\/script>');
    }
</script>



<style>
    .row{width: 100%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 0;
        margin-bottom: 0;
        max-width: 80.5em;}
    body {
        background: none !important;

    }
    html{
        background: none !important;
    }
</style>
