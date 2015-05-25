<?php /*
Template Name: Login
*/
get_header(); ?>

<!-- Row for main content area -->
<div class="row">
  <div class="row" id="spacer"></div>
  	
        <h1 class="text-center">Welcome, please login below</h1>

</div>
<div class="row">
  <div class="row" id="spacer"></div>
	<div class="large-6 large-offset-3 columns">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
				<?php the_content(); ?>
			
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	
</div>

<?php get_footer(); ?>
