<?php /*
Template Name: Profile
*/
get_header(); ?>

<!-- Row for main content area -->
     <div class="row" id="spacer"></div>
     <h1 class="text-center">Now complete your profile</h1>
     <h3 class="text-center">Click on each element to update your information</h3>
     <div class="row" id="spacer"></div>
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
