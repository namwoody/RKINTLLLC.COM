<!-- start middle footer -->



<!-- end middle footer -->




<div id="footer">
<div class="container">
<div class="row"><!- start row -->
	<footer>
    <div class="col-md-9" id="footer-nav">
		<span style="display: inline; float: left; padding-right: 15px; margin-left:30px;">RK INTERNATIONAL  LLC &copy; 2015  All Rights Reserved    </span>
		<ul></ul>
	</div>
    <div class="col-md-3" id="contact_form">
    	
    <ul>
    	<li style="list-style: none;"><a href="https://www.facebook.com/rkintlllc"><i class="fa fa-facebook-official fa-2x"></i></a></li>
    	<li style="list-style: none;"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
    	<li style="list-style: none;"><a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
    </ul>	
	

	</div><!-- end form -->
	</footer>

</div><!-- end row -->
</div><!-- end footer container -->
</div><!-- end div footer -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<!-- bxSlider Javascript file -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.min.js"></script>


<script type="text/javascript">
	$(document).ready(function(){
		$('.bxslider').bxSlider(
			{
				auto:true

			}
		);
	});
</script>

</body>
</html>