<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Rockcliffe
 */

get_header(); ?>
    <div class="col-md-9">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
              <!--<div class="slick" style="display: none;">
                <div><img src="<?php echo get_template_directory_uri() ?>/slider/beachcliff.jpg" alt="cliff face" /></div>
                <div><img src="<?php echo get_template_directory_uri() ?>/slider/fiveislands.jpg" alt="cliff face" /></div>
                <div><img src="<?php echo get_template_directory_uri() ?>/slider/oceanview.jpg" alt="cliff face" /></div>
              </div>-->
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'page' ); ?>

                    <div class="clearfix"></div>
                    <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || '0' != get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>

                <?php endwhile; // end of the loop. ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
    <div class="col-md-3">
        <?php get_sidebar( 'page' ); ?>
    </div>
<?php get_footer(); ?>
