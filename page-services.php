<?php /*
Template Name: Services
*/
get_header(); ?>




<!-- Row for main content area -->
<div class="row show-for-medium-up">
		<img id="sersplashimg" src="<?php echo get_template_directory_uri(); ?>/img/servicesplash.jpg"/>		
<div class="large-5 large-offset-1 medium-5 medium-offset-1 columns">
    <div class="row show-for-large-up" id="spacer"></div><div class="row show-for-large-up" id="spacer"></div><div class="row show-for-large-up" id="spacer"></div>
    <div class="row show-for-medium-only" id="medspacer"></div>
    <h2 id="servicehead">Specialist campaigning and advocacy services.</h2>
</div>
</div>

        
  


<section id="services">
<div class="row">
    <div class="row show-for-large-up" id="spacer"></div>
  <div class="row show-for-large-up" id="spacer"></div>
	<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns" id="centre">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
				<?php the_content(); ?>
			
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	
</div>

</section>
<div class="row" id="spacer"></div>
<div class="row" id="spacer"></div>
<div class="row" id="spacer"></div>
<div class="row" id="spacer"></div>
<div class="row" id="spacer"></div>

<?php get_footer(); ?>