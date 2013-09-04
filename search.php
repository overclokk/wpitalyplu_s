<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package wpitalyplu_s
 */

get_header(); ?>

	<section id="primary" class="content-area pure-u-2-3">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header postcard-container">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'wpitalyplu_s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php wpitalyplu_s_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'search' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
