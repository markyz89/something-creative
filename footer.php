<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="py-4 bg-dark text-white">
		<div class="site-info container">
			<div class="row">
				<div class="col-md-8">
					<p>Something creative by Mark Simpson</p>
				</div>

				<div class="col-md-4">
					<?php
				/* Calling the menu */
				wp_nav_menu( array(
					'theme_location' => 'footer-menu',
					'depth' => '1',
					'container' => 'nav',
					'container_class'	 => 'footer-nav-container',
					'menu_class'	 => 'footer-nav',
				) );
				?>
				</div>

			</div>
	
				
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
