<?php
/*
Template Name: Blog
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
<div class="small-10 small-offset-1 columns show-for-small-only">
  	<div class="row show-for-small-only" id="spacer"></div>
   <?php
   query_posts( array ( 'post_type' => 'post', 'cat' => 2,'posts_per_page' => 10 ) );
      if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="row"><h2><?php the_title(); ?></h2></div>
	<div class="row" id="spacer"></div>
        <div class="row"><?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail();
}
?><div class="row" id="spacer"></div><?php
the_content(); ?></div>

	
	
	<div class="row" id="spacer"></div>
	
	
      <?php endwhile; else: ?>
                   
		   
		    <p><?php _e('Oh no we lost our posts! We will fix this as soon as possible.'); ?></p><?php endif; ?>

</div>

<div class="row" id="spacer"></div>
<?php get_sidebar(); ?>

</div>
	
		<div class="row">
		<div class="small-9 small-offset-1 columns">
					<div class="row" id="spacer"></div>

			<h4 class="text-center">Get in touch with us</h4>
			<div class="row" id="medspacer"></div>
</div>
				<div class="small-6 small-offset-2 columns end">		

			<a href="mailto:team@strategyandfield.com?Subject=Web%20enquiry" class="text-center button radius" id="herobtn">Email us</a>
			<div class="row" id="spacer"></div>
				</div>
			
	</div>
	
	
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


<div class="row">
<div class="large-7 large-offset-1 medium-10 medium-offset-1 columns show-for-medium-up">
  	<div class="row show-for-medium-up" id="spacer"></div>
   <?php
   query_posts( array ( 'post_type' => 'post', 'cat' => 2,'posts_per_page' => 10 ) );
      if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="row"><h2><?php the_title(); ?></h2></div>
	<div class="row" id="spacer"></div>
        <div class="row"><?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail();
}
?><div class="row" id="spacer"></div><?php
the_content(); ?></div>

	
	
	<div class="row" id="spacer"></div>
	
	
      <?php endwhile; else: ?>
                   
		   
		    <p><?php _e('Oh no we lost our posts! We will fix this as soon as possible.'); ?></p><?php endif; ?>

</div>

<div class="row" id="spacer"></div>
<?php get_sidebar(); ?>

</div>



		
<?php get_footer(); ?>