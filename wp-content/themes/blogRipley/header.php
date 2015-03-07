<!doctype html>  
<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<?php masonry(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->
		<!-- html5.js -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		<!-- respond.js -->
		<!--[if lt IE 9]>
		<script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->	
	</head>
	<body <?php body_class(); ?>>
		<header role="banner" class="container-fluid">
			<section class="row corporativo">
				<div class="col-sm-8">
					<a href="#">
						Tienda
					</a>
					<a href="#">
						Banco Ripley
					</a>
					<a href="#">
						Ventas Corporativas
					</a>
					<a href="#">
						Ripley Puntos
					</a>
				</div>
				<div class="col-sm-4 fono-compras">
					Fonocompras: 611-5959
				</div>
			</section>
			<section class="row links">
				<div class="col-sm-6 col-sm-offset-6">
					<a href="#">
						CAMPAÑAS
					</a>
					<a href="#">
						NEWSLETTER
					</a>
				</div>
			</section>
			<section class="logo text-center">
				<a href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo('description'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" class="img-responsive center-block">
				</a>
			</section>
		</header>
		<div class="container">
