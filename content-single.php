<?php
/**
 * @package wpitalyplu_s
 */
?>
<div class="postcard-container">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="container-top">
			<div class="avatar-container pure-u-1-5">
			<?php echo get_avatar( get_the_author_meta('ID'), 70 ); ?>
			</div>
			<div class="entry-meta pure-u-3-5">

		<div class="">
			<?php wpitalyplu_s_posted_on(); ?>
		</div></div><!-- .entry-meta -->
		<h1 class="entry-title pure-u"><?php the_title(); ?></h1>
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

	<footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'wpitalyplu_s' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'wpitalyplu_s' ) );

			if ( ! wpitalyplu_s_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'wpitalyplu_s' );
				} else {
					$meta_text = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'wpitalyplu_s' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'wpitalyplu_s' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'wpitalyplu_s' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' )
			);
		?>

		<?php edit_post_link( __( 'Edit', 'wpitalyplu_s' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
