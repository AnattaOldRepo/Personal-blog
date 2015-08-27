<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package personal
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="header" role="banner">
		<div class="container">
			<div class="header__branding">
				<div class="header__avatar">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php 
						if ( $blogname = get_option( 'blogname' ) ) { 
							echo get_shortname( $blogname );
						} 
					?>
				</a>
				</div>
				<h1 class="header__logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo('name'); ?>
					</a>
					<p class="header__description"><?php bloginfo('description'); ?></p>
				</h1>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="header__navigation" role="navigation">
				<?php
					$menuParameters = array(
					  'container'       => false,
					  'echo'            => false,
					  'items_wrap'      => '%3$s',
					  'depth'           => 0,
					);
					echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
				 ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
