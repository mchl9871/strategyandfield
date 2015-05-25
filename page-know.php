<?php
/*
Template Name: KnowledgeBase
*/
get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-12 columns" id="content" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php reverie_entry_meta(); ?>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	
	<div class="row" id="spacer"></div>
	<div class="row" id="spacer"></div>
	<div class="row" id="spacer"></div>
	
	<div class="row">
		
		<div class="row" id="spacer"></div><div class="row" id="spacer"></div><div class="row" id="spacer"></div>
		<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>the Gambia</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jammeh</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>2 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>South Africa</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Zuma</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>48 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, civil</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Brazil</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Rousseff</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>200 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Civil</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>

<div class="large-4 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Nigeria</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/public6.png" id="whatwedoimg"/></td>
    <td>President Jonathon</td>		
   
  </tr>
  
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pop.png" id="whatwedoimg"/></td>
    <td>177 million</td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/scale.png" id="whatwedoimg"/></td>
    <td style="min-width:210px;">Common, Islamic, traditional</td>		
   
  </tr>
</table>
</div>
		<div class="row" id="spacer"></div><div class="row" id="spacer"></div><div class="row" id="spacer"></div>
	</div>
	
		
<?php get_footer(); ?>