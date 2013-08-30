<?php
/**
 * The Template for displaying all single posts.
 *
 * @package wpitalyplu_s
 */

get_header(); ?>

	<div id="primary" class="content-area pure-u-2-3">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="single-container"><?php get_template_part( 'content', 'single' ); ?>
		<div class="comments-container">
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>
		</div></div>
		<div class="postcard-container">
		<?php wpitalyplu_s_content_nav( 'nav-below' ); ?>

		<?php endwhile; // end of the loop. ?>

		</div></main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
