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

<div class="page-wrapper">
<header>
    <div class="header__container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h3 id="logo" class="header__logo">First<span>3</span>Months</h3></a>
        <nav class="header__nav">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'fallback_cb' => false ) ); ?>
        </nav>
    </div>
</header>

<section class="hero-banner">
	<div class="hero-banner__wrapper">
		<div class="hero-banner__content-ctn">

		    <h1>Oops<span>!</span> We can't seem to find the page you're looking for<span>.</span></h1>
		    <h2>Error code: 404</h2>

		</div>
	</div>  

</section><!-- Hero Banner Section -->

	

<?php get_footer(); ?>