<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
 
    global $page, $paged;
 
    wp_title( '|', true, 'right' );
 
    bloginfo( 'name' );
 
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
 
    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'starkers' ), max( $paged, $page ) );
 
    ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!--  bootstrap js & style files  -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!--  end files  -->


    <!-- bxSlider CSS file -->
    <link href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css" rel="stylesheet" />







<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.6.min.js"></script>





<?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
 
    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>
</head>
 
<body <?php body_class(); ?> id="body">

<div id="top-header">
<ul>
 <li><a href="http://rkintlllc.com">Home</a></li>
 <li><a href="http://rkintlllc.com/contact-us">Contact</a></li>
<!-- <li><a href="">Sitemap</a></li>-->

</ul>
</div><!-- end top header -->

  <div class="container">
  <div class="row">
   <div class="col-md-3 col-sm-3 col-xs-3">
       <h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
             <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="rk-logo"/>
           </a></h1>

</div>

 <nav class="navbar-default col-md-9 col-sm-12 col-xs-12" role="navigation" id="navbar">
 <div class="" id="navigation">
     <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to the 'starkers_menu' function which can be found in functions.php.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
     
       <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  
    </div>
     
     <?php
     
      wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
     
     ?>



 </div><!-- nav col menu -->
 
</nav>

  </div><!-- end row -->
  </div><!-- end container -->