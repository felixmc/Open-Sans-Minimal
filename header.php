<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
</head>
<body>
	<header id="header">
		<div class="wrapper container">
			<h1 class="left-column"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<?php wp_nav_menu( array( 'container_class' => 'right-column menu-header', 'theme_location' => 'primary' ) ); ?>
			<?php get_search_form(); ?>
		</div>			
	</header>
	<div class="wrapper container" id="main">