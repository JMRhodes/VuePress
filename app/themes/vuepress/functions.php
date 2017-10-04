<?php
/**
 * Functions and definitions
 *
 * @package AD Starter
 */

use AD\App\Core\Init;
use AD\App\Setup;
use AD\App\Scripts;
use AD\App\Media;
use AD\App\ACF;

/**
 * Define Theme Version
 * Define Theme directories
 */
define( 'THEME_VERSION', '2.0.2' );
define( 'AD_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'AD_THEME_PATH_URL', trailingslashit( get_template_directory_uri() ) );

/**
 * Theme Setup
 */
add_action( 'after_setup_theme', function () {

    ( new Init() )
        ->add( new Setup() )
        ->add( new Scripts() )
        ->add( new ACF() )
        ->initialize();
    new Media();

    // Add Post Thumbnail Image sizes and support
    add_theme_support( 'post-thumbnails' );

} );