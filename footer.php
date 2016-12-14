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
              <div class="row">
                   <div class="col-lg-4 col-md-4">
                    <div class="gckid-info">
                        <h5>Городской центр культуры и досуга</h5>
                        <p>Часы работы: 8:00-17:00</p>
                        <p>Телефоны для справок:</p>
                        <p>+7 (36561) 2-12-21, +7 (36561) 2-13-53</p>
                        <p>E-mail: kgckd@mail.ru</p>
                        <p>г. Керчь, ул. Свердлова 8</p>
                    </div> <!-- gckid-info -->
                </div><!-- col-lg-4 col-md-4 -->

                 <div class="col-lg-8 col-md-8">
                     <div class="map-gckid">
                      <i>
                       <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=QeOrALjqtp0b5QFCHSfmpccxd4V5xFJS&amp;width=100%25&amp;height=240&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
                     </i>
                     </div>
                 </div><!-- col-lg-8 col-md-8 -->

                 </div> <!-- row -->

          <div class="row">
             <div class="col-lg-3 col-md-3">
                   <?php if ( is_active_sidebar( 'footer-side' ) ) : ?>
                    <div class="sidebar">
                        <?php dynamic_sidebar( 'footer-side1' ); ?>
                    </div>
                <?php endif; ?>
            </div> <!-- col-lg-4 col-md-4 -->

            <div class="col-lg-3 col-md-3">
                   <?php if ( is_active_sidebar( 'footer-side' ) ) : ?>
                    <div class="sidebar">
                        <?php dynamic_sidebar( 'footer-side2' ); ?>
                    </div>
                <?php endif; ?>
            </div> <!-- col-lg-4 col-md-4 -->

            <div class="col-lg-3 col-md-3">
                   <?php if ( is_active_sidebar( 'footer-side' ) ) : ?>
                    <div class="sidebar">
                        <?php dynamic_sidebar( 'footer-side3' ); ?>
                    </div>
                <?php endif; ?>
            </div> <!-- col-lg-4 col-md-4 -->

            <div class="col-lg-3 col-md-3">
                   <?php if ( is_active_sidebar( 'footer-side' ) ) : ?>
                    <div class="sidebar">
                        <?php dynamic_sidebar( 'footer-side4' ); ?>
                    </div>
                <?php endif; ?>
            </div> <!-- col-lg-4 col-md-4 -->

        </div> <!-- row -->

            <div class="row">
                        <div class="site-info">
                            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'gckid' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'gckid' ), 'WordPress' ); ?></a>
                            <span class="sep"> | </span>
                            <?php printf( esc_html__( 'Верстка: %1$s  %2$s.', 'gckid' ), '', '<a href="https://vk.com/id57910146" rel="designer">Кузьмин В. В.</a>' ); ?>
                        </div><!-- .site-info -->
	                </div> <!-- row -->

            </div> <!-- container bootstrap -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
