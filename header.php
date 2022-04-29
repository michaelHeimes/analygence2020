<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto:300,400,400i,700&display=swap" rel="stylesheet">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/build/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/build/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/build/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('template_url'); ?>/build/favicons/site.webmanifest">
	<link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/build/favicons/safari-pinned-tab.svg" color="#8f2a2b">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/build/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#8f2a2b">
	<meta name="msapplication-config" content="/path/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">


	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/build/css/theme.min.css">
	<?php wp_head(); ?>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-RY7M1NHZ4P"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'G-RY7M1NHZ4P');
	</script>
</head>
<body <?php body_class(); ?>>

<div class="utility">
	<div class="container">
		<a href="https://www.linkedin.com/company/analygence-inc-" target="_blank"><img src="<?php bloginfo('template_url'); ?>/build/svg/icon-linkedin-dark.svg" alt="LinkedIn"></a>
		<a href="/team-member-portal">Team Member Portal</a>
		<a href="/contact">Contact</a>
	</div>
</div>

<header class="header">
	<div class="container">
		<a href="/" class="header-logo"><img src="<?php bloginfo('template_url'); ?>/build/svg/logo.svg" alt="Analygence"></a>
		<button type="button" class="hamburger" aria-label="Menu" arial-controls="mobile-nav"><div></div></button>
		<nav class="nav">
			<ul class="nav-list" id="main-nav">
				<?php
					$mainmenu = wp_nav_menu( array(
					    'theme_location' => 'primary-menu',
					    'container' => false,
					    'items_wrap' => '%3$s',
					    'echo' => false,
					) );
					echo $mainmenu;
				?>
			</ul>
		</nav>
		<div class="mobile-nav" id="mobile-nav">
			<div class="mobile-nav-inner">
				<ul class="mobile-nav-inner-nav">
					<?php
						$mobilemenu = wp_nav_menu( array(
						    'theme_location' => 'primary-menu',
						    'container' => false,
						    'items_wrap' => '%3$s',
						    'echo' => false,
						) );
						echo $mobilemenu;
					?>
				</ul>
				<div class="mobile-utility">
					<a href="/team-member-portal">Team Member Portal</a>
					<a href="/contact">Contact</a>
				</div>
			</div>
		</div>
	</div>
</header>

