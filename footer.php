<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gckid
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	 <div class="container">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="site-info">
                            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'gckid' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'gckid' ), 'WordPress' ); ?></a>
                            <span class="sep"> | </span>
                            <?php printf( esc_html__( 'Верстка: %1$s  %2$s.', 'gckid' ), 'ГЦКиД', '<a href="#" rel="designer">Кузьмин В. В.</a>' ); ?>
                        </div><!-- .site-info -->
	                </div> <!-- row -->
                </div> <!-- col-lg-12 -->
            </div> <!-- container bootstrap -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
