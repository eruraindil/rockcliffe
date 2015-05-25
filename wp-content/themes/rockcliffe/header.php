<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Rockcliffe
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'rockcliffe' ); ?></a>
<div id="page" class="hfeed site">

    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">
            <div class="container" id="site-header">
                <h1 class="site-title sr-only"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <img src="<?php echo get_template_directory_uri() ?>/images/rockcliffe-logo-trans.png" alt="Rockcliffe Logo" />
                <div id="sm-icons" class="col-xs-3">
                    <a href="tel:18006684337">1-800-66-TIDES</a><br>
                    <a href="mailto:jroberts@rockcliffebythesea.com">jroberts@rockcliffebythesea.com</a><br>
                    <address>
                        118 Rockcliffe Dr. RR#2<br>
                        Parrsboro, Nova Scotia<br>
                        Canada  B0M 1S0
                    </address>

                    <div class="row">
                        <div class="col-xs-4">
                            <a href="https://www.facebook.com/rockcliffebythesea">
                              <img src="<?php echo get_template_directory_uri() ?>/images/facebook_50x50.png" alt="facebook" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="https://twitter.com/rockcliffebtsea">
                              <img src="<?php echo get_template_directory_uri() ?>/images/twitter_50x50.png" alt="twitter" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="http://rockcliffebythesea.com/blog/">
                              <img src="<?php echo get_template_directory_uri() ?>/images/rss_50x50.png" alt="blog" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav id="site-navigation" class="main-navigation navbar navbar-default" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#rockcliffe-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>
                        <div class="collapse navbar-collapse" id="rockcliffe-navbar-collapse">
                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav' ) ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">
        <div id="main-content" class="container">
            <div class="row">
