<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Villeconin
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
<?php
	if ( of_get_option('tickertext', false) ) {
		?><marquee><?php echo of_get_option('tickertext'); ?></marquee><?php
	}
	dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
