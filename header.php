<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package wpitalyplu_s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700italic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="pure-skin" class="pure-skin-wpitalyplus">
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
<header id="masthead" class="site-header" role="banner">
		<!--<div class="site-branding">
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>-->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="menu-container">
                <div class="menu-image">
                    <img src="wp-content/themes/wpitalyplu_s/css/images/menu-toggle.png" class="menu-toggle">
                </div>
                <div class="menu-header">
                    <h1 class="site-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                    </h1>
                </div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            
		  </div>
        </nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div class="pure-g-r">
	<div id="content" class="site-content">
