<?php get_header(); ?>
<div class="col-md-9">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div id="gallery" class="content">

        <?php if ( post_password_required() ) : ?>
          <?php print get_the_password_form(); ?>
        <?php else : ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div <?php post_class(); ?>>

              <h2><?php the_title(); ?></h2>

              <?php gpp_gallery_images(); ?>

              <p class="gpp-gallery-description"><?php echo get_post_meta( $post->ID, 'gpp_gallery_description', true ); ?></p>

            </div><!-- .post -->

          <?php endwhile; endif; ?>
        <?php endif; ?>
      </div><!-- #gallery .content -->
    </main><!-- #main -->
  </div><!-- #primary -->
</div>
<div class="col-md-3">
  <?php get_sidebar(); ?>
</div>
<!-- Begin Footer -->
<?php get_footer(); ?>
