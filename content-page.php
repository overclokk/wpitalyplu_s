<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package wpitalyplu_s
 */
?>
<div class="post-container">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title entry-title pure-u"><?php the_title(); ?></h1>
		<div class="pure-u cover-attachment-postcard"><!--Post Thumbnail-->
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php 
						if ( has_post_thumbnail() ) {
						the_post_thumbnail('postcard');
			}?></a>
			</div><!--End Post Thumbnail-->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'wpitalyplu_s' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'wpitalyplu_s' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article></div><!-- #post-## -->
