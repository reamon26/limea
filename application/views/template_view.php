<?php

define('MAIN_URI', ($_SERVER['REQUEST_URI'] == '/' ? '/index.php' : $_SERVER['REQUEST_URI']) );
// грузим правила для ЧПУ
$patterns_keys = array(
      '#^/(user/?)(new/?)?$#i',
      '#^/(user/?)(settings/?)?$#i',
      '#^/(user/?)(settings/?)?((general|avatar|security|social)/?)$#i'
      );
$patterns_values = array(
      'module=account&id=$2',
      'module=account&action=new', 
      'module=account&action=settings', 
      'module=account&action=settings&do=$4'        //модулю можно передавать дополнительные параметры
      );
$res =  preg_replace($patterns_keys, $patterns_values, MAIN_URI);
// разбираем url и преопреeделяем суперглобальный массив _REQUEST
parse_str($res, $_REQUEST);
$module = $_REQUEST['module'];
$page = $res;
?>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Limea.ru</title>


		<meta name='yandex-verification' content='718fe45c8c6cb47d' />
		<meta name="google-site-verification" content="O-dNiUQcd389lXWtXWm3G6mtwg69cVPRUE8AaNQNnGo" />

		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		
		<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
		<!--<link rel="stylesheet" type="text/css" href="/css/style.css" />-->
		<link rel="stylesheet" type="text/css" href="/css/mystyle.css">
		<link rel="shortcut icon" href="images/logo.png" type="image/png">

		<link rel="stylesheet" type="text/css" href="/css/socialsider-v1.0.css" media="all" />

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="/bootstrap/js/bootstrap.js"></script>

		<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
		<script src="js/Chart.js"></script>
		<script type="text/javascript">
			// return a random integer between 0 and number
			function random(number) {
				
				return Math.floor( Math.random()*(number+1) );
			};
			
			// show random quote
			$(document).ready(function() { 

				var quotes = $('.quote');
				quotes.hide();
				
				var qlen = quotes.length; //document.write( random(qlen-1) );
				$( '.quote:eq(' + random(qlen-1) + ')' ).show(); //tag:eq(1)
			});
		</script>
	</head>
	<body>
		<?php	require_once 'application/views/extra/nav.php'; ?>
		<?php	echo $pade ;
		if ($page == "/index.php") require_once 'application/views/extra/carusel.php'; ?>
		<!-- Begin page content -->
		 <div class="container">
			<div class="main-container">
				<?php include 'application/views/'.$content_view; ?>
			</div>
		</div>
		<div class="socialsider socialsider_left_middle socialsider_fixed socialsider_bgwhite_dark socialsider_colorize socialsider_radius socialsider_spacer socialsider_shadow socialsider_opacity ">
			<ul>
				<li><a data-socialsider="vkontakte" href="http://vk.com/reamon26" title="vKontakte" target="_blank"></a></li>
				<li><a data-socialsider="facebook" href="http://facebook.com/reamon26" title="Facebook" target="_blank"></a></li>
				<li><a data-socialsider="coderwall" href="mailto:reamon26@gmail.com?subject=У%20меня%20есть%20вопрос.%20Limea.ru" title="Coderwall" target="_blank"></a></li>
				<li><a data-socialsider="google" href="https://plus.google.com/106913577170035634249" title="Google" target="_blank"></a></li>
				<li><a data-socialsider="linkedin" href="https://www.linkedin.com/profile/view?id=AAIAAA3m7loBMf4j_HyvdpwAi2sSd91aZejvK2o" title="Linkedin" target="_blank"></a></li>
			</ul>
		</div>
		<?php   require_once('application/views/extra/footer.php'); ?>
		<?php 	include_once('lib/analyticstracking.php'); ?>
		<?php 	include_once('lib/metrikatracking.php'); ?>
		<?php 	include_once('lib/googletagmanager.php'); ?>
		<!-- BEGIN JIVOSITE CODE {literal} -->
		<script type='text/javascript'>
			(function(){ var widget_id = 'sXlMpH5qbf';
				var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
		<!-- {/literal} END JIVOSITE CODE -->
	</body>
</html>