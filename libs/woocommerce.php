<?php
/**
 * 	WooCommerce Compatibility File
 */


//	WooCommerce setup function.
function eulite_woocommerce_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'eulite_woocommerce_setup' );

//	WooCommerce specific scripts & stylesheets.
function eulite_woocommerce_scripts() {
	
	wp_enqueue_style( 'eulite-woocommerce-style',  get_theme_file_uri() . '/woocommerce/woocommerce.css' );

}
add_action( 'wp_enqueue_scripts', 'eulite_woocommerce_scripts' );
