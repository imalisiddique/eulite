<?php
/**
 * 	Sidebar
 */

if ( function_exists('is_shop') && is_shop() ){
	$eulite_sidebar = 'sidebar-shop';
}else {
	$eulite_sidebar = 'primary-widget';
}

if ( ! is_active_sidebar( $eulite_sidebar ) ) {
	return;
}
?>

<div id="sidebar-widget" class="widget-area" role="complementary">

	<?php if ( is_active_sidebar( $eulite_sidebar ) ) : ?>
		<?php dynamic_sidebar( $eulite_sidebar ); ?>
	<?php endif; ?>

</div>