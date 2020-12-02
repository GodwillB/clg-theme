 	 	<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clg
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<nav class="navbar navbar-expand-lg navbar-dark black-background py-4 static-top">
		<div class="container">
			<a class="navbar-brand text-uppercase" href="#">
              	<img src="img/logo.png" alt="">Capital Law Group
          	</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
          </button>
			<?php
			wp_nav_menu( array(
			    'theme_location'	=> 'primary',
			    'depth'				=> 1, // 1 = with dropdowns, 0 = no dropdowns.
				'container'			=> 'div',
				'container_class'	=> 'collapse navbar-collapse py-4',
				'container_id'		=> 'navbarResponsive',
				'menu_class'		=> 'navbar-nav ml-auto text-uppercase',
			    'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
			    'walker'			=> new WP_Bootstrap_Navwalker()
			) );
			?>
	</nav><!-- #site-navigation -->
	
