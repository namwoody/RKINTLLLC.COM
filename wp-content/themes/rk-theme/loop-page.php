<?php
/**
 * The loop that displays a page.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.2
 */
?>



<div class="container">
	<div class="row">
		 <div class="col-md-3 col-sm-3" id="director-message">



<figure>
    <img src="<?php bloginfo('template_directory'); ?>/images/support.jpg" alt="support" width="220px"/>
</figure>

<h4>Contact us</h4>
<p><h4><img src="<?php bloginfo('template_directory'); ?>/images/india.png" width="24px" height="24px"/> India Address</h4>
      
        Shop No 47/2<br />
        Sector 41B, Chandigarh.<br />
        Phone:-+91-9216248005<br />
        
        <h4><img src="<?php bloginfo('template_directory'); ?>/images/us.png" width="24px" height="24px"/> US Address</h4>
        Rajesh Kumar <br />8737 216th Street<br /> Queens Village New York 11427<br /> +1 612-839-7906 <br /> info@rkintlllc.com
</p>


    </div><!-- end col-md-3 -->


		<div class="col-md-8 col-sm-8 col-xs-8" id="main-content">
			<h3><?php the_title(); ?></h3>
			<hr>
			<?php if (have_posts()) while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>





			</div><!-- end div row -->






	</div><!-- end row --->
</div><!-- end container -->


<!--<div class="container">-->
<!---->

<!--</div><!-- end container -->
