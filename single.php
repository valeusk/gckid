<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gckid
 */

get_header(); ?>

	<div id="primary" class="content-area">
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <main id="main" class="site-main" role="main">

                    <?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			/*the_post_navigation();*/


			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

                </main>
                <!-- #main -->
            </div>
            <!-- row -->
        </div>
        <!-- col-lg-12 -->
    </div>
    <!-- container bootstrap -->
    <div class="container">
       <div class="single-nav row">
         <div class="previous col-lg-6 col-md-6" style="">
         <? previous_post_link();?>
         </div> <!-- previous -->


        <div class="next col-lg-6 col-md-6" style=""  >
         <? next_post_link();?>
         </div> <!-- next -->
        </div> <!-- single-nav row -->
    </div> <!-- container -->
</div>
<!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
