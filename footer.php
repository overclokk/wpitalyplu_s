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

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</div>
<div class="scrolltotop" id="top"><div class="top-arrow"><a href="#top"></a></div><span>Scroll</span></div>
</body>
</html>
