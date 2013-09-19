<?php
/**
 * The Sidebar containing the posts and pages widget areas.
 *
 * @package wpitalyplu_s
 */
?>
	<div id="secondary" class="widget-area pure-u-1-3" role="complementary">
		<div class="widgetcard">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>
			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>
			<aside id="archives" class="widget widget_archive">
				<h1 class="widget-title"><?php _e( 'Archives', 'wpitalyplu_s' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>
			<aside id="meta" class="widget widget_meta">
				<h1 class="widget-title"><?php _e( 'Meta', 'wpitalyplu_s' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>
		<?php endif; // end sidebar widget area ?>
	</div></div><!-- #secondary -->
