<?php
/**
 *  Theme setup
 */

//  Enable WordPress features.
//	=================================================================

    if( ! function_exists( "eulite_bootstrapping" ) ):

        function eulite_bootstrapping(){
            
            //  Make theme available for translation.
            load_theme_textdomain( "eulite" , get_theme_file_path("/languages") );

            //  Add default posts and comments RSS feed links to head.
            add_theme_support( "automatic-feed-links" );

            //  Let WordPress manage the document title.
            add_theme_support( "title-tag" );

            //  Enable support for Post Thumbnails on posts and pages.
            add_theme_support( "post-thumbnails" );

            //  Thumbnail sizes
            //add_image_size( "eulite-small", 160, 160, true );
            //add_image_size( "eulite-standard", 320, 320, true );
            //add_image_size( "eulite-medium", 520, 245, true );
            //add_image_size( "eulite-large", 720, 340, true );

            //  Set custom thumbnail dimensions
            //set_post_thumbnail_size( 100, 100, true );

            //  Theme Menu Support
            register_nav_menus( array(
                "footer-menu" => esc_html__( "Footer Menu", "eulite" ),
            ) );
            register_nav_menus( array(
                "main-menu" => esc_html__( "Main Menu", "eulite" ),
            ) );
            register_nav_menus( array(
                "top-menu" => esc_html__( "Top Menu", "eulite" ),
            ) );

            //  HTML5 Support
            add_theme_support( "html5", array(
                "search-form",
                "comment-form",
                "comment-list",
                "gallery",
                "caption",
            ) );

            //  Enable support for Post Formats.
            add_theme_support( "post-formats", array(
                "aside",
                "image",
                "video",
                "quote",
                "link",
                "gallery",
                "status",
                "audio",
                "chat"
            ) );

            //  

        }

    endif;

    add_action( "after_setup_theme" , "eulite_bootstrapping" );

//  Content Width
//	=================================================================

    if( ! function_exists( "eulite_content_width" ) ):

        function eulite_content_width(){
            if ( ! isset( $content_width ) ) {
                $content_width = 770;
            }
        }

    endif;

    add_action( "after_setup_theme" , "eulite_content_width" , 0 );

//  Custom Header
//	=================================================================

    if ( ! function_exists( "eulite_custom_header_setup" ) ):

        function eulite_custom_header_setup(){

            add_theme_support( "custom-header", apply_filters( "eulite_custom_header_args", array(
                "default-image"          => "",
                "default-text-color"     => "000000",
                "width"                  => 1170,
                "height"                 => 250,
                "flex-height"            => true,
                "wp-head-callback"       => "eulite_custom_header_style",
            ) ) );
        }

    endif;

    add_action( "after_setup_theme" , "eulite_custom_header_setup" );

    if ( ! function_exists( "eulite_custom_header_style" ) ):

        function eulite_custom_header_style(){

        }

    endif;

//  Custom Background
//	=================================================================

    if ( ! function_exists( "eulite_custom_background" ) ):

        function eulite_custom_background(){

            add_theme_support( 'custom-background', apply_filters( 'eulite_custom_background_args', array(
                'default-color' => 'ffffff',
                'default-image' => '',
            ) ) );

        }

    endif;

    add_action( "after_setup_theme" , "eulite_custom_background" );

//  Editor Styling
//	=================================================================

    if ( ! function_exists( "eulite_custom_editor_style" ) ):

        function eulite_custom_editor_style(){

            add_editor_style( "/assets/css/editor-style.css" );

        }

    endif;

    add_action( "after_setup_theme" , "eulite_custom_editor_style" );