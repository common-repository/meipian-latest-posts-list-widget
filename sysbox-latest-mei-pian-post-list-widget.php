<?php
/**
 * Plugin Name:   Sysbox - Latest MeiPian Post List Widget
 * Plugin URI:    https://sysbox.com.au
 * Description:   A small widget for display the latest MeiPian posts.
 * Version:       1.0
 * Author:        SysboxDevelopers
 * Author URI:    https://sysbox.com.au
 */

require_once dirname(__FILE__) . '/common/widget.class.php';
require_once dirname(__FILE__) . '/common/PhpSimple/HtmlDomParser.php';

if(!function_exists('register_sysbox_latest_mei_pian_post_list_widget')) {
    function register_sysbox_latest_mei_pian_post_list_widget() {
        register_widget( 'sysbox_latest_mei_pian_post_list_widget' );
    }
}
add_action( 'widgets_init', 'register_sysbox_latest_mei_pian_post_list_widget' );


function enqueue_sysbox_latest_mei_pian_post_list_widget_scripts() {
    wp_enqueue_script( 'sysbox-latest-mei-pian-post-list-widget-script', plugins_url( 'common/script.js', __FILE__ ), array('jquery'), null, true );
}
function enqueue_sysbox_latest_mei_pian_post_list_widget_styles() {
    wp_enqueue_style( 'sysbox-latest-mei-pian-post-list-widget-style', plugins_url( 'common/style.css', __FILE__  ) );
}

add_action( "plugins_loaded", 'enqueue_sysbox_latest_mei_pian_post_list_widget_scripts' );
add_action( "plugins_loaded", 'enqueue_sysbox_latest_mei_pian_post_list_widget_styles' );

add_action( 'wp_ajax_sysbox_meipian_getPostList', array( 'sysbox_latest_mei_pian_post_list_widget', 'getPostList' ) );
add_action( 'wp_ajax_nopriv_sysbox_meipian_getPostList', array( 'sysbox_latest_mei_pian_post_list_widget', 'getPostList' ) );


?>