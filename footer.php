<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package wpitalyplu_s
 */
?>

	</div></div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'wpitalyplu_s_credits' ); ?>
<!--
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'wpitalyplu_s' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'wpitalyplu_s' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
-->
			<?php //printf( __( 'Theme: %1$s by %2$s.', 'wpitalyplu_s' ), 'wpitalyplu_s', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</div>
<div class="scrolltotop" id="top"><div class="top-arrow"><a href="#top"></a></div><span>Scroll</span></div>
</body>
</html>
