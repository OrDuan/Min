	<?php
	/**
	 * The Header for our theme.
	 *
	 * Displays all of the <
	 *
	 * @package Min
	 */
	?><!DOCTYPE html>
	<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if IE]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800|Oswald:400,700' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>
</head>

</html>
<body <?php body_class(); ?>>
	<nav>
		<span class="previous">
			Previous
		</span>
		<span class="next">
			Next
		</span>
	</nav>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
		</div>
		<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
	</div>
</header><!-- #masthead -->

<div id="content" class="site-content">


