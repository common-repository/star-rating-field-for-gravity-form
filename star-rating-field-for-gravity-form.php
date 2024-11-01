<?php
/*
  Plugin Name: Star Rating Field For Gravity Form
  Description: This plugin allows create star rating Field For Gravity Forms plugin.
  Version: 1.0.0
  Copyright: 2022
  License: GPLv3 or later
  License URI: https://www.gnu.org/licenses/gpl-3.0.txt
  Text Domain: star-rating-field-for-gravity-form
*/

if (!defined('ABSPATH')) {
  die('-1');
}


// define for base name
define('SRFFGF_BASE_NAME', plugin_basename(__FILE__));


// define for plugin file
define('SRFFGF_plugin_file', __FILE__);


// define for plugin dir path
define('SRFFGF_PLUGIN_URL',plugins_url('', __FILE__));
define('SRFFGF_PLUGIN_DIR',plugin_dir_path(__FILE__));
// Include function files
include_once(SRFFGF_PLUGIN_DIR.'includes/admin.php');

function SRFFGF_load_script_style(){
    wp_enqueue_script( 'jquery-raty', SRFFGF_PLUGIN_URL . '/public/jquery.rating/jquery.raty.js', array('jquery'), '2.0');
    wp_enqueue_script( 'jquery-rating', SRFFGF_PLUGIN_URL. '/public/js/custom.raty.js', array('jquery'), '1.0');
    
    wp_localize_script( 'jquery-rating', 'rating_ajax', array( 'ajax_urla' => SRFFGF_PLUGIN_URL) );
}
add_action( 'wp_enqueue_scripts', 'SRFFGF_load_script_style' );