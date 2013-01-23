<!DOCTYPE html>
<html <?php language_attributes(); ?> id="mozilla-blog">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<META NAME="DESCRIPTION" CONTENT="Bienvenue sur le site web de la communauté Tunisienne de Mozilla ! Venez nous rejoindre pour une utilisation plus agréable et utile d'Internet. Mozilla Tunisia est LA communauté naissante de passionnés de web qui souhaitent faire d'Internet un outil agréable et accessible a tout le monde.">
<META NAME="KEYWORDS" CONTENT="Mozilla Tunisia, Mozilla, FireFox, Tunisia, Tunisie">
<META NAME="SUBJECT" CONTENT="Site officiel de la communauté Mozilla Tunisia">
<META NAME="CATEGORY" CONTENT="Organisation à but non lucratif">
<META NAME="AUTHOR" CONTENT="Mozilla Tunisia">
<META NAME="REPLY-TO" CONTENT="contact@mozilla-tunisia.org">
<META NAME="REVISIT-AFTER" CONTENT="7 DAYS">
<META NAME="LANGUAGE" CONTENT="FR">
<META NAME="ROBOTS" CONTENT="All">
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CHACHE">
<META HTTP-EQUIV="REFRESH" CONTENT="Non">

  <!-- For Facebook -->
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
  <meta property="og:title" content="<?php if (is_singular()) : single_post_title(); else : bloginfo('name'); endif; ?>">
  <meta property="og:url" content="<?php if (is_singular()) : the_permalink(); else : bloginfo('url'); endif; ?>">
  <meta property="og:description" content="<?php fc_meta_desc(); ?>">
<?php if (is_singular() && has_post_thumbnail()) : ?>
  <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
  <meta property="og:image" content="<?php echo $thumb['0']; ?>">
<?php elseif (get_header_image()) : ?>
  <meta property="og:image" content="<?php echo get_header_image(); ?>">
<?php endif; ?>
  
  <meta name="title" content="<?php if (is_singular()) : single_post_title(); echo ' | '; endif; bloginfo('name'); ?>">
  <meta name="description" content="<?php fc_meta_desc(); ?>">
  
  <meta name="Rating" content="General">
  <!--[if IE]>
  <meta name="MSSmartTagsPreventParsing" content="true">
  <meta http-equiv="imagetoolbar" content="no">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/html5.js"></script>
  <![endif]-->
  <link rel="icon" type="image/ico" href="http://mozilla-tunisia.org/wp-content/uploads/2013/01/Favicon.ico" />
  <link rel="copyright" href="#colophon">
  <link rel="profile" href="http://gmpg.org/xfn/11">
 <!-- <link rel="shortcut icon" type="image/ico" href="http://mozilla-tunisia.org/wp-content/uploads/2013/01/Favicon.ico"> -->
  <link rel="stylesheet" type="text/css" media="screen,projection" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" type="text/css" media="all" href="http://www.mozilla.org/tabzilla/media/css/tabzilla.css">
  <link rel="stylesheet" type="text/css" media="print" href="<?php echo get_template_directory_uri(); ?>/css/print.css">
  <!--[if lte IE 7]><link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/ie7.css"><![endif]-->

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  

  <title><?php
    if ( is_single() ) { single_post_title(); echo ' | '; bloginfo('name'); } 
    elseif ( is_home() || is_front_page() ) { bloginfo('name'); if (get_bloginfo('description','display')) { echo ' | '. get_bloginfo('description','display'); } fc_page_number(); } 
    elseif ( is_page() ) { single_post_title(''); echo ' | '; bloginfo('name'); } 
    elseif ( is_search() ) { printf( __('Search results for “%s”', 'onemozilla'), esc_html( $s ) ); fc_page_number(); echo ' | '; bloginfo('name'); }
    elseif ( is_day() ) { $post = $posts[0]; printf(__('Posts from %s', 'onemozilla'), get_the_date()); echo ' | '; bloginfo('name'); fc_page_number(); }
    elseif ( is_month() ) { $post = $posts[0]; printf(__('Posts from %s', 'onemozilla'), get_the_date('F, Y')); echo ' | '; bloginfo('name'); fc_page_number(); }
    elseif ( is_year() ) { $post = $posts[0]; printf(__('Posts from %s', 'onemozilla'), get_the_date('Y')); echo ' | '; bloginfo('name'); fc_page_number(); }
    elseif ( is_404() ) { _e('Not Found', 'onemozilla'); echo ' | '; bloginfo('name'); } 
    else { wp_title(''); echo ' | '; bloginfo('name'); fc_page_number(); } 
  ?></title>

  <?php if ( is_singular() && get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); } ?>
  <?php	wp_head(); ?>
</head>


<?php $theme_options = onemozilla_get_theme_options(); ?>

<body <?php body_class($theme_options[color_scheme]); ?> role="document">
	  <a href="http://www.mozilla.org/" id="tabzilla">Mozilla</a>    

<div id="page">

<div class="wrap">

  <!-- <nav id="nav-access">
    <ul role="navigation">
      <li><a href="#content-main" tabindex="1"><?php _e( 'Skip to main content', 'onemozilla' ); ?></a></li>
      <li><a href="#content-sub" tabindex="2"><?php _e( 'Skip to sidebar', 'onemozilla' ); ?></a></li>
    <?php if ( is_active_widget( false, false, 'search', true ) || ( !is_active_sidebar('sidebar') ) ) : ?>
      <li><a href="#search" tabindex="3"><?php _e( 'Skip to blog search', 'onemozilla' ); ?></a></li>
    <?php endif; ?>
    </ul>
  </nav>-->
<div id="navigation-box">
        <ul class="nav-bar">          
         <li><a href="http://www.flickr.com/photos/mozillatunisia" ><img src="http://mozilla-tunisia.org/wp-content/themes/OneMozilla/img/social/flickr.png"/></a></li>
         <li><a href="http://www.youtube.com/MozillaTunisia" ><img src="http://mozilla-tunisia.org/wp-content/themes/OneMozilla/img/social/youtube.png"/></a></li>
         <li><a href="https://plus.google.com/115470308405633706413" ><img src="http://mozilla-tunisia.org/wp-content/themes/OneMozilla/img/social/googleplus.png"/></a></li>
         <li><a href="https://twitter.com/MozillaTunisia" ><img src="http://mozilla-tunisia.org/wp-content/themes/OneMozilla/img/social/twitter.png"/></a></li>
         <li><a href="https://www.facebook.com/MozillaTunisia" ><img src="http://mozilla-tunisia.org/wp-content/themes/OneMozilla/img/social/facebook.png"/></a></li>
        </ul>
		
      </div>
	  <br/>



  <?php /*get_template_part( 'masthead' ); */?>

	<table width="92%" style="margin-left: 2%; left: 0px; position: relative; top: -50px;">	
		<tr>
			<td>
			
				<?php if ( (is_front_page()) && ($paged < 1) ) : ?>
				  <h1 id="site-title"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></h1>
				<?php else : ?>
				  <h1 id="site-title"><a href="<?php echo esc_url( home_url('/') ); ?>" rel="home" title="<?php _e('Go to the front page', 'onemozilla'); ?>"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a></h1>
				<?php endif; ?>
			
				<?php if (get_bloginfo('description','display')) : ?>
				  <h2 id="site-description"><?php echo esc_attr( get_bloginfo('description', 'display') ); ?></h2>
				<?php endif; ?>
		
			</td>
			<td class="divlogo" height="100px">
				
			</td>
		</tr>
	</table>
		
	<?php /*wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'nav', 'container_id' => 'nav-primary', 'fallback_cb' => 'false', ) ); */?>


<nav id="nav-primary" class="menu-home-container">
<ul class="menu" id="menu-home">
	
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-179" id="menu-item-179">
		<a href="/category/article/">Articles</a>
	</li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-180" id="menu-item-180">
		<a href="/contribuer/">Contribuer</a>
	</li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-180" id="menu-item-182">
		<a href="/nous-contacter/">Contact</a>
	</li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-181" id="menu-item-181">
		<a href="http://wiki.mozilla-tunisia.org">Wiki</a>
	</li>
</ul>
</nav>

	<div id="content">
