<?php
/**
 * Template Name: director page
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>




  <?php get_template_part('coursel','index'); ?>
<?php get_template_part('middle','index'); ?>

	<?php get_template_part( 'loop', 'director' ); ?>

<?php get_footer(); ?>