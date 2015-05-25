<?php /*
Template Name: Sign up Customer
*/
get_header(); ?>

<!-- Row for main content area -->

<div class="row">
  <div class="row" id="spacer"></div>
	<div class="large-6 large-offset-3 columns">
	<h1 class="text-center">First, let's grab a few details...</h1>
         <div class="row" id="spacer"></div>
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
				<?php the_content(); ?>
			
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	
</div>
<?php get_footer(); ?>