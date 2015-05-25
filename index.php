<?php get_header(); ?>

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
	<div class="row" id="smallhead">
       <div class="small-10 small-offset-2 columns">
       <div class="row" id="spacer"></div>
       <h2>Campaigning? Hire help.</h2>
       <div class="row" id="spacer"></div>
       </div>
        </div>
	<div class="row" id="smallservices">
		<div class="row" id="spacer"></div>
		<div class="small-11 columns">
		<h4 class="text-center">S+F consultants can help your not-for-profit with</h4>
		</div>
		<div class="row" id="spacer"></div>
		<div class="small-10 small-offset-1 columns">
						<div class="row" id="spacer"></div>

		<ul id="serviceslist">
			<li>Strategy development</li>
			<li>Fundraising</li>
			<li>Movement building</li>
			<li>Research and Evaluation</li>
			<li>Content creation</li>
			<li>Organisational Reviews and Support</li>
			
		</ul>
		<div class="row" id="spacer"></div>
		</div>	
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
	
	<div class="row">
		<div class="show-for-small-only small-11 columns">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/mail59.png" id="whatwedoimg"/></td>
    <td>team@strategyandfield.com</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Toronto, Canada</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/social19.png" id="whatwedoimg"/></td>
    <td><a href="http://twitter.com/strategyfield">@StrategyField</a></td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.png" id="whatwedoimg"/></td>
    <td>+1 (289) 681 1649</td>		
   
  </tr>
</table>
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


<div class="show-for-medium-up">
<section id="splash">
	
	<div class="row">
		<img id="splashimg" src="<?php echo get_template_directory_uri(); ?>/img/herosplash1400.jpg"/>		
	</div>
	<div class="row show-for-large-up" id="spacer"></div>	
	<div class="row show-for-medium-only" id="medspacer"></div>

	<div class="row">
		<div class="large-4 medium-6 large-centered medium-centered columns">
			<?php
			
			$type = $_GET["type"];
			
			if (empty($type)){
				?>
			<h2>Campaigning? Hire help.</h2>
			<?php }
			else {
			echo "<h2>" . $_GET["type"] . "? Hire help.</h2>";
	}
		?>	
			
		</div>	
	</div>
	<div class="row show-for-large-up" id="spacer"></div>	
	<div class="row show-for-large-up">
		<div class="large-6 large-centered columns">
		<p>We can't help you sell cornflakes but we can win campaigns and build huge global movements. Everything from email writing to global strategy development all specifically tailored to the not-for-profit sector.</p>
		</div>	
	</div>
	<div class="row show-for-large-up" id="spacer"></div>
	<div class="row show-for-medium-only" id="medspacer"></div>
	
	<div class="row show-for-large-up">
		<div class="large-5 large-centered columns">
			
			<div class="large-6 columns">
				<a href="#getintouch" class="text-center button radius" id="herobtn">Get in touch</a>
			</div>
			<div class="large-6 columns end">
				<a href="#whatwedo" class="text-center whitebtn" id="whatbtn">What we do</a>
			</div>
		</div>	
	</div>
	
	<div class="row show-for-medium-only">
		<div class="medium-3 medium-centered columns">
				<a href="#getintouch" class="text-center button radius" id="herobtn">Get in touch</a>
		</div>	
	</div>
	
	
	<div class="row">
		
		<div class="large-1 large-centered columns show-for-large-up">
			<a href="#browse"><img src="<?php echo get_template_directory_uri(); ?>/img/down15.png" id="downarrow"/></a>
		</div>
	
	</div>
	
</section>

<section id="browse">
	<div class="row show-for-large-up" id="spacer"></div>
	<div class="row show-for-medium-only" id="specialspacer"></div>
	<div class="row show-for-medium-only" id="specialspacer"></div>
	<div class="row show-for-medium-only" id="specialspacer"></div>
	<div class="row show-for-medium-only" id="spacer"></div>
	<div class="row">
	<div class="large-3 large-offset-1 medium-4 medium-offset-1 columns">
		<img src="<?php echo get_template_directory_uri(); ?>/img/profileright.jpg" id="profileright"/>
	</div>
	<div class="large-5 large-offset-1 medium-6 medium-offset-1 columns end">
		
<h6></br>Strategy + Field is a consultancy designed to meet the needs of advocacy and campaigning organisations. We help organisations achieve positive social change. </br></br>Over the years we've built complex coalitions, grown huge global movements and helped raise money to fund campaigns.</br></br> We guarantee all our work and plan to exceed your expectations. Get in touch with us below and we can discuss working together.</br></br> Michael Hayworth - Founder</h6>

		</div>
	</div>
	<div class="row" id="spacer"></div>
	<div class="row" id="spacer"></div>
</section>
<div class="row" id="whatwedospacer"></div>
<section id="whatwedo">
	<div class="row" id="spacer"></div>
	
	<div class="row">
		<div class="large-5 large-offset-1 medium-10 medium-offset-1 columns">
			<h3>Campaign, research and movement building specialists</h3>
		</div>
		<div class="large-5 large-offset-1 medium-6 medium-offset-9 columns">
			<img src="<?php echo get_template_directory_uri(); ?>/img/whatwedo.jpg" id="whatwedoimg"/>
		</div>
	</div>
	<div class="row">
		<div class="large-5 large-offset-1 medium-6 medium-offset-1 columns" id="whatwedotext">
			<p>Whether you're a political campaign, start-up or an established civil society organisation we can help start, relaunch and boost your campaigning efforts.</br></br> We use a combination of narrative based campaigns, research, advocacy, media, fundraising and movement building to grow and win campaigns.</p>
		</div>
		
	</div>
	<div class="large-5 large-offset-1 medium-5 medium-offset-1 columns">
				<a href="/services" class="text-center button radius" id="whatwedobtn">See our services</a>
	</div>
	
</section>

<section id="getintouch">
	<div class="row" id="spacer"></div>
	<div class="row">
		<div class="large-8 large-offset-2 columns">
			<h2 class="text-center">Get in touch with us</h2>	
		</div>	
	</div>
	<div class="row" id="spacer"></div>
	<div class="row">
		<div class="large-4 large-offset-2 columns">
				<?php echo do_shortcode( '[wufoo username="strategyandfield" formhash="z1fkq09g090iw34" autoresize="true" height="557" header="hide" ssl="true"]' ); ?>
			</div>
		<div class="large-4 large-offset-1 columns end">
			<div class="row" id="spacer"></div>
			<div class="show-for-large-up">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/mail59.png" id="whatwedoimg"/></td>
    <td>team@strategyandfield.com</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Toronto, Canada</td>		
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/social19.png" id="whatwedoimg"/></td>
    <td><a href="http://twitter.com/strategyfield">@StrategyField</a></td>		
   
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.png" id="whatwedoimg"/></td>
    <td>+1 (289) 681 1649</td>		
   
  </tr>
</table>
</div>
<div class="medium-8 medium-centered columns show-for-medium-only">
<table>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/mail59.png" id="whatwedoimg"/></td>
    <td>team@strategyandfield.com</td>
     
    
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/social19.png" id="whatwedoimg"/></td>
    <td><a href="http://twitter.com/strategyfield">@StrategyField</a></td>
    
  </tr>
  <tr>
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/pin56.png" id="whatwedoimg"/></td>
    <td>Toronto, Canada</td>
   	
    <td><img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.png" id="whatwedoimg"/></td>
     <td>+1 (289) 681 1649</td>
  </tr>
  
  
</table>
	</div>		
			
			
		</div>
	</div>
	
	<div class="row" id="spacer"></div>
	
</section>

<!--container div for large-->		
</div>	


	
	
	
	
		
<?php get_footer(); ?>