<?php
/**
 *  Sidebar and Widgets
 */

//  
//	=================================================================

    function eulite_widgets_init() {

        //
        register_sidebar( array(
            'name'          => esc_html__( 'Primary Widget', 'eulite' ),
            'id'            => 'primary-widget',
            'description'   => '',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );
        
        //
        register_sidebar( array(
            'name'          => esc_html__( 'Sidebar left', 'eulite' ),
            'id'            => 'sidebar-left',
            'description'   => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );

        //
        register_sidebar( array(
            'name'          => esc_html__( 'Sidebar Right', 'eulite' ),
            'id'            => 'sidebar-right',
            'description'   => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );

        //
        register_sidebar( array(
            'name'          => esc_html__( 'Sidebar Blog', 'eulite' ),
            'id'            => 'sidebar-blog',
            'description'   => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );

        //
        register_sidebar( array(
            'name'          => esc_html__( 'Footer One', 'eulite' ),
            'id'            => 'footer-one',
            'description'   => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );

        //
        register_sidebar( array(
            'name'          => esc_html__( 'Footer Two', 'eulite' ),
            'id'            => 'footer-two',
            'description'   => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );

        //
        register_sidebar( array(
            'name'          => esc_html__( 'Footer Three', 'eulite' ),
            'id'            => 'footer-three',
            'description'   => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );

        //
        register_sidebar( array(
            'name'          => esc_html__( 'Footer Four', 'eulite' ),
            'id'            => 'footer-four',
            'description'   => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );

        //
        register_sidebar( array(
            'name'          => esc_html__( 'Shop Sidebar', 'eulite' ),
            'id'            => 'sidebar-shop',
            'description'   => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );
    }
    add_action( 'widgets_init', 'eulite_widgets_init' );