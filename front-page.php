<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Starter
 */

get_header();
the_post();
?>

	<div id="primary" class="content-area home-content">
		<main id="main" class="site-main py-5" style="background-image: url(<?php the_post_thumbnail_url()?>);">

			<div class="container">
				<div class="jumbotron">
				<?php the_content(); ?>
					
						<h1 class="display-4 <?php if(get_field('title_colour') == 'black') 
		{ echo 'dark_header';}  
		elseif (get_field('title_colour') == 'blue') 
			{ echo 'med_header';} 
		elseif (get_field('title_colour') == 'pink') 
			{ echo 'light_header';} ?>"><?php echo get_field('custom_title'); ?></h1>
				  	<p class="lead"><?php echo get_field('subtitle'); ?></p>
				  	<hr class="my-4">
				  	<?php echo wpautop(get_field('sub_sub_title')); ?>
				  	<p class="lead">

				    	<a class="btn btn-primary btn-lg" href="<?php echo get_field('call_to_action'); ?>" <?php if(get_field('new_tab') == '1') {echo 'target="_blank"'; } ?>  role="button"><?php echo get_field('call_to_action_text'); ?></a>
				  	</p>
				  	

				  		 

				  	<div class="row">
						<div class="col-md-4">
				  		<?php $img = get_field('test_image');?>

				  		<img src="<?php echo $img['sizes']['thumbnail'];?>">

				  		</div>

				  		<div class="col-md-4"></div>

				  		<div class="col-md-4">

				  			<?php
				  				// this is how you call a sidebar 
								if (is_active_sidebar('rec-comments')) { 
								    dynamic_sidebar('rec-comments'); 
									}  ?>
				  		</div>

				  	</div>

				  	

				
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
