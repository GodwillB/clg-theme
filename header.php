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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARI7FbLVHa00RpU0HmOiylaIfgizwgRgU&callback=initMap">
</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<nav class="navbar navbar-expand-lg navbar-dark black-background py-4 static-top">
		<div class="container">
			<a class="navbar-brand text-uppercase" href="#">
              	<?php the_custom_logo();?>
              	<h4 class="text-white">Capital Law Group</h4>
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
	
