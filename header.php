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

		<nav id="site-navigation" class="pure-menu pure-menu-open pure-menu-fixed pure-menu-horizontal" role="navigation">
			<h1 class="site-title pure-menu-heading"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<?php //set menu's elements
						$defaults = array(
							'theme_location'  => 'primary',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'nav-menu',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="pure-nav">%3$s</ul>',
							'depth'           => 0,
							'walker'          => ''
						);

						wp_nav_menu( $defaults ); //call menu here

						?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div class="pure-g-r">
	<div id="content" class="site-content">
