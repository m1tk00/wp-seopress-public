<?php
defined( 'ABSPATH' ) or die( 'Please don&rsquo;t call the plugin directly. Thanks :)' );

///////////////////////////////////////////////////////////////////////////////////////////////////
//Flush permalinks
///////////////////////////////////////////////////////////////////////////////////////////////////
function seopress_flush_permalinks() {
	flush_rewrite_rules();
	die();
}
add_action('wp_ajax_seopress_flush_permalinks', 'seopress_flush_permalinks');
