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
 <?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '<div class="tags-item">#', '</div><div class="tags-item tags-item-after">#', '</div>' );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
			<div class="single-container">
                <?php get_template_part( 'content', 'single' ); ?>
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

<?php get_sidebar('postside'); ?>
<?php get_footer(); ?>
