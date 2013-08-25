<?php
/**
 * @package wpitalyplu_s
 */
    
?>
<div class="pure-u">
<div class="postcard-container">
<article id="post-<?php the_ID(); ?>" class="pure-u">
	<header class="entry-header pure-u">
		
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="container-top"><div class="pure-u-1-5 avatar-container"><?php echo get_avatar( get_the_author_meta('ID'), 70 ); ?></div><div class="entry-meta pure-u-4-5">
			<?php wpitalyplu_s_posted_on(); ?>
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'wpitalyplu_s' ) );
				if ( $categories_list && wpitalyplu_s_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'in %1$s', 'wpitalyplu_s' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'wpitalyplu_s' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'wpitalyplu_s' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'wpitalyplu_s' ), __( '1 Comment', 'wpitalyplu_s' ), __( '% Comments', 'wpitalyplu_s' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'wpitalyplu_s' ), '<span class="edit-link">', '</span>' ); ?>
	</div></div><!-- .entry-meta -->
		<?php endif; ?>
		<h1 class="pure-u entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	</header><!-- .entry-header -->
	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary pure-u">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content pure-u">
		<?php the_excerpt(); ?><a class="" href="<?php echo get_permalink( get_the_ID() ); ?>"><?php _e( 'Read More', 'wpitalyplu_s' ); ?></a>
		<div class="pure-u"><!--Post Thumbnail-->
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php 
						if ( has_post_thumbnail() ) {
						the_post_thumbnail('postcard');
			}?></a>
			</div><!--End Post Thumbnail-->
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'wpitalyplu_s' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>
</article></div></div><!-- #post-## -->
