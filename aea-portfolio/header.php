<?php
/**
 * The Header for our theme.
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>
<body>

<div class="spinner-container"><div class="spinner"></div></div>

<div class="page-wrapper">

<header>
    <div class="header__container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h3 id="logo" class="header__logo">Amy Allen</h3></a>
        <nav class="header__nav">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'fallback_cb' => false ) ); ?>
        </nav>
    </div>
</header>

<section class="hero-banner">
	<div class="hero-banner__wrapper">

		<div class="hero-banner__main-heading">
			
			<div class="typewriter">
				<?php if( is_front_page() ) { ?>
			    <h1>Hi, I'm Amy<span>.</span></h1>
			    <?php } else { ?>
			    <h1><?php the_title();?><span>.</span></h1>
			    <?php } ?>
			</div>

		</div>

		<h2><?php the_field('page_tagline'); ?></h2>
	</div>  

	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 144.7059937 156.4597778" style="enable-background:new 0 0 144.7059937 156.4597778;" xml:space="preserve">
<g id="Layer_1">
	<polyline class="st0" points="142.2059937,78.9597778 107.2794952,116.4597778 72.3529968,153.9597778 37.4264984,116.4597778 
		2.5,78.9597778 	"/>
	<polyline class="st0" points="128.2353973,54.5431099 100.2941895,84.5431061 72.3529968,114.5431061 44.4117966,84.5431061 
		16.4705982,54.5431099 	"/>
	<polyline class="st0" points="114.2647934,30.1264439 93.3088913,52.626442 72.3529968,75.126442 51.3970947,52.626442 
		30.4411983,30.1264439 	"/>
</g>
</svg>

	
</section><!-- Hero Banner Section -->