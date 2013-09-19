<?php
/**
 * @package wpitalyplu_s
 */
?>

<div class="post-container">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="container-top">
          <div class="avatar-container">
			<?php echo get_avatar( get_the_author_meta('ID'), 90 ); ?>
          </div>
          <div class="entry-meta">
			<?php wpitalyplu_s_posted_on(); ?>
                			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'wpitalyplu_s' ) );
				if ( $categories_list && wpitalyplu_s_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'in %1$s', 'wpitalyplu_s' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>
		  </div><!-- .entry-meta -->
		  <h1 class="entry-title pure-u"><?php the_title(); ?></h1>
		  <div class="pure-u cover-attachment-postcard"><!--Post Thumbnail-->
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php 
						if ( has_post_thumbnail() ) {
						the_post_thumbnail('postcard');
			}?></a>
          </div><!--End Post Thumbnail-->
        </div>
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
		<?php edit_post_link( __( 'Edit', 'wpitalyplu_s' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article></div><!-- #post-## -->
