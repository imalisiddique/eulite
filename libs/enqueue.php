<?php
/**
 *  Enqueue.
 */

//  Load Theme Stylesheets
//	=================================================================

    function eulite_assets_styles()
    {
        //  Milligram / Base
        wp_enqueue_style('normalize', get_theme_file_uri('/assets/css/normalize.css'), null, '1.1');
        wp_enqueue_style('eulite-basestyle', get_theme_file_uri('/assets/css/theme-base.css'), null, VERSION);

        //  Theme responsivemultimenu
        wp_enqueue_style('eulite-responsivemultimenu', get_theme_file_uri('/inc/responsive-multi-menu/css/responsivemultimenu.css'), null, VERSION);

        //  WooCommerce
        //wp_enqueue_style( "eulite-woocommerce", get_theme_file_uri( "/woocommerce.css"),null, VERSION );

        //  Theme eulite-style
        wp_enqueue_style('eulite-style', get_theme_file_uri('/assets/css/theme-style.css'), null, VERSION);

        //  Theme WP Style
        wp_enqueue_style('eulite-wp', get_theme_file_uri('/assets/css/theme-wp.css'), null, VERSION);

        //  Theme Responsive style
        wp_enqueue_style('eulite-responsive', get_theme_file_uri('/assets/css/theme-responsive.css'), null, VERSION);

        //  WP Style
        wp_enqueue_style('eulite', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'eulite_assets_styles');

//  Load Theme Scripts
//	=================================================================

    function eulite_assets_scripts()
    {
        //  Modernizr & Respond
        wp_enqueue_script('eulite-modernizr-respond', get_theme_file_uri('/assets/js/libs/modernizr-2.8.3-respond-1.4.2.min.js'), null, '1.0', false);

        //  Bootstrap V4
        wp_enqueue_script('eulite-responsivemultimenu', get_theme_file_uri('/inc/responsive-multi-menu/js/responsivemultimenu.js'), array('jquery'), '1.0', true);

        //  comment-reply script
        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }

        //  Custom Script
        wp_enqueue_script('eulite-script', get_theme_file_uri('/assets/js/script.js'), array('jquery'), VERSION, true);
    }
    add_action('wp_enqueue_scripts', 'eulite_assets_scripts');

//  Load Theme Fonts
//	=================================================================

    function eulite_assets_fonts()
    {
        wp_enqueue_style(
            'eulite_font_poppin', '//fonts.googleapis.com/css?family=Poppins:100,300,700,900',
            array(), null, 'screen'
        );

        wp_enqueue_style(
            'eulite_font_jura', '//fonts.googleapis.com/css?family=Jura:300,700',
            array(), null, 'screen'
        );
    }
    add_action('wp_print_styles', 'eulite_assets_fonts');
