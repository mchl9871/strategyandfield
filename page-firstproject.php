<?php /*
Template Name: First Project
*/
get_header(); ?>

<div class="show-for-small-only">
	<header>
    <div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <nav class="tab-bar">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <h1 class="title">Strategy + Field</h1>
      </section>
    </nav>

    <aside class="left-off-canvas-menu" style="height: 300px;">
      <ul class="off-canvas-list">
        <li><a href="/">Home</a></li>
	<li><a href="/blog">Blog</a></li>
	<li><a href="/getintouch">Contact</a></li>
      </ul>
    </aside>

    <section class="main-section show-for-small-only">
	<div class="row">
  <div class="row" id="spacer"></div>
  	
        <h1 class="text-center">Get in touch with us</h1>

</div>
<div class="row">
  <div class="row" id="spacer"></div>
	<div class="large-6 large-offset-3 columns" id="formbg">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
				<?php the_content(); ?>
			
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	
</div>

<div class="row" id="spacer"></div>
	
		
	
	
	<footer class="full-width" role="contentinfo" id="footer">

<p id="copytext">Copyright Strategy and Field 2015</p>

</footer>
	
    </section>

  <a class="exit-off-canvas"></a>

  </div>
</div>
   
</header>
	 
	
<!--container div for small-->	
</div>


<!-- Row for main content area -->
<div class="row show-for-medium-up">
  <div class="row" id="spacer"></div>
  	
        <h1 class="text-center">Get in touch with us</h1>

</div>
<div class="row">
  <div class="row" id="spacer"></div>
	<div class="large-6 large-offset-3 columns" id="formbg">
					<?php echo do_shortcode( '[wufoo username="strategyandfield" formhash="z1fkq09g090iw34" autoresize="true" height="557" header="hide" ssl="true"]' ); ?>

	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
				<?php the_content(); ?>
			
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	
</div>

<div class="row" id="spacer"></div>


<?php get_footer(); ?>