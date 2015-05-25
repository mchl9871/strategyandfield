<?php /*
Template Name: Sign up Consultant
*/
get_header(); ?>

<!-- Row for main content area -->

<div class="row">
  <div class="row" id="spacer"></div>
 <div class="large-10 large-offset-1 columns">
	 <h1 class="text-center">Ready for work? Let's start with a few details...</h1>
         <div class="row" id="spacer"></div>
 </div>
</div>
<div class="row">
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