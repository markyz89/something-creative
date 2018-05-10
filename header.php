<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WPBootcamp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wpbootcamp' ); ?></a>

	<header id="masthead" class="site-header">
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="navbar-brand"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="navbar-brand"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <img src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt=""> <?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$wpbootcamp_description = get_bloginfo( 'description', 'display' );
				if ( $wpbootcamp_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $wpbootcamp_description; /* WPCS: xss ok. */ ?></p>
					<?php 
					if (is_active_sidebar('search-sidebar')) { 
					    dynamic_sidebar('search-sidebar'); 
						}  ?>


				<?php endif; ?>
			</div>
		</nav><!-- .site-branding -->

		<div id="site-navigation" class="navbar navbar-expand-lg navbar-light bg-light main-navigation">
			<div class="container">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wpbootcamp' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'bs-example-navbar-collapse-1',
					'menu_class'      => 'navbar-nav mr-auto',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				) );
				?>
			</div>
		</div><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
