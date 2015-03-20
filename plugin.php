<?php
/*
Plugin Name: API - Prefix Keyword
Plugin URI: https://github.com/freimanas/YOURLS-api-prefix-keyword
Description: Added an ability to add a prefix to a short url created. A very useful if you have loads of links shortened and pointing to your domain and want to track which campaigns performs best.
Version: 0.1
Author: Vladas Freimanas
Author URI: https://github.com/freimanas/
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();


yourls_add_filter( 'random_keyword', 'freimanas_prefix_keyword' );
yourls_add_filter( 'custom_keyword', 'freimanas_prefix_keyword' );

function freimanas_prefix_keyword( $keyword )  {
    $prefix = ( isset( $_REQUEST['prefix'] ) ? $_REQUEST['prefix'] : '' );

    return $prefix . $keyword;

}
