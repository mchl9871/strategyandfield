<?php get_header(); ?>

<!-- Row for main content area -->

<div class="row">
  <div class="row" id="spacer"></div>
	<div class="large-10 large-offset-1 columns">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
				<?php the_content(); ?>
			
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	
</div>
<?php get_footer(); ?>