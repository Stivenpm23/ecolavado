<?php

$base_path = ( $_SERVER['SERVER_ADDR'] == '10.0.234.90' ? '/' : '/FAB/ecolavado/' );

$view = 'home';
if( isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO']  ) {
    switch(  $_SERVER['PATH_INFO'] ) {
        case '/el-clic-del-ahorro':
            $view = 'el-clic-del-ahorro';
            break;
        case '/que-es-ecolavado':
            $view = 'que-es-ecolavado';
            break;
        case '/tips-de-lavado':
            $view = 'tips-de-lavado';
            break;
        case '/saltate-el-remojo':
            $view = 'saltate-el-remojo';
            break;
    }
}
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ecolavado FAB</title>
        <meta name="description" content="Únete al Ecolavado y ayuda al planeta.">
        <meta name="keywords" content="Ecolavado, Ecolavado FAB, Sáltate el remojo, Con FAB sáltate el remojo, ahorra hasta 14 litros de agua, productos ecoamigables">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <link rel="apple-touch-icon" href="<?= $base_path ?>apple-touch-icon.png">
	    <link rel="shortcut icon" href="<?= $base_path ?>favicon.ico" type="image/png">

        <!-- CSS -->
        <link rel="stylesheet" href="<?= $base_path ?>css/normalize.css">
        <link rel="stylesheet" href="<?= $base_path ?>css/main.css">
        <!-- JS -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?= $base_path ?>js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="<?= $base_path ?>js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>

	    <meta property="og:site_name" content="Ecolavado FAB">
	    <meta property="og:title" content="Ecolavado FAB">
	    <meta property="og:description" content="Únete al Ecolavado y ayuda al planeta. Ingresa a www.ecolavadofab.com">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?= 'http://' . $_SERVER['HTTP_HOST'] . $base_path ?>">
	    <meta property="og:image" content="<?= 'http://' . $_SERVER['HTTP_HOST'] . $base_path ?>img/fb-share.png">
	    <meta property="og:locale" content="es_CO">
	    <meta name="twitter:card" content="summary">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <section class="conten">
            <div class="header">
                <a href="<?= $base_path ?>"><div class="logo" id="logo-eco"></div></a>
            </div>
            <div class="work">
         <?php include('views/header.php')?>
         <?php include('views/' . $view . '.php')?>
          <?php include('views/footer.php')?>
            </div>
        </section>

        <script src="<?= $base_path ?>js/plugins.js"></script>
        <script src="<?= $base_path ?>js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-78044200-1','auto');ga('send','pageview');
        </script>
    </body>
</html>