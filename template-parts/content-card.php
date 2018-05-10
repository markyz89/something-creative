<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Starter
 */

?>

	<div class="col-6">
				<div class="card mb-3">
  		<img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>">
 			 <div class="card-body">
   				 <div class="card-title"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></div>
    				<?php the_excerpt(); ?>

    				
    				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
 			 </div>
</div>

	</div>


