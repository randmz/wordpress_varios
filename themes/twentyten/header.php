<?php
set_time_limit(0);
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<?php 
  $direccion = $_SERVER['REQUEST_URI']; 
	$direccion = preg_replace('/\/wp_codelco\//','',$direccion);
?>
<html <?php language_attributes(); ?>>
<head>
<!-- *****************************************
	 *										 *
   	 *		Sitio web desarrollado por		 *
	 *		Hugo Borquez R.					 *
 	 *		hugo.borquez@xap.cl 			 *
	 *										 *
	 ***************************************** -->
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!--[if IE]><link rel="stylesheet" href="wp-content/themes/twentyten/ie.css" type="text/css" media="screen, projection" /><![endif]-->
<!--[if lte IE 7]><link rel="stylesheet" href="wp-content/themes/twentyten/ie6.css" type="text/css" media="screen, projection" /><![endif]--> 
<script type="text/javascript" src="wp-content/themes/twentyten/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="wp-content/themes/twentyten/js/funciones.js"></script>


<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
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
<body class="bg">
					<div id="header_bg">
					<div id="wrapper-2" class="hfeed">
						<div class="container">
							<div id="logo-activate"><a href="<?php bloginfo('url');?>" onclick='$("#camion").stop(); $("#nube1").stop(); $("#nube2").stop(); $("#carroceria").stop();'><img src="wp-content/themes/twentyten/images/logo-activate.png" width="137" height="52"/></a></div>
							<div id="texto-header"><span class="amarillo">Act&iacute;vate</span> - Deportes | Fitness &amp; Salud | Outdoors</div>
						
						<?php 
						$the_cat = get_the_category();
						$category_name = $the_cat[0]->cat_name;
						$category_id = $the_cat[0]->cat_ID;

						$category_name = preg_replace('/ - Noticias/','',$category_name);
						$category_name = preg_replace('/ - Fixture/','',$category_name);
						$category_name = preg_replace('/ - Equipos/','',$category_name);
						$category_name = preg_replace('/ - Fotos/','',$category_name);
						
						if($category_name == 'Futbol'):?>
						<!-- menu -->
						<div id="access" role="navigation">
						  <?php /* Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
							<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
							<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
							<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
						</div><!-- #access -->
						<?php endif;?>
						</div>
					</div>
					</div>
					
					<div id="marco">
						
	
