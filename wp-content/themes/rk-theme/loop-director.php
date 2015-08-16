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



		<div class="col-md-12 col-sm-12 col-xs-12" id="main-content">
			<h3><?php the_title(); ?></h3>
				
			<hr>
			<?php if (have_posts()) while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>





			</div><!-- end div row -->



<br />
<br />
<br />


	</div><!-- end row --->
</div><!-- end container -->


<!--<div class="container">-->
<!---->

<!--</div><!-- end container -->
