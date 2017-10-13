<?php

/**
 * Plugin Name: vuejs-wp-plugin
 * Description: A skeletion for creating a Vue.js-powered WordPress plugin.
 * Version: 0.1.0
 * Author: EasyPath IT Solutions Inc.
 * Author URI: https://www.easypath.ca
 */

// Enqueue scripts and styles required by Vue
// These are automatically generated during the Webpack build process
function vue_enqueue_scripts() {
  wp_enqueue_script('vue-manifest', plugin_dir_url( __FILE__ ) . 'dist/static/js/manifest.js', array(), '0.1.0', true);
  wp_enqueue_script('vue-vendor', plugin_dir_url( __FILE__ ) . 'dist/static/js/vendor.js', array('vue-manifest'), '0.1.0', true);
  wp_enqueue_script('vue-app', plugin_dir_url( __FILE__ ) . 'dist/static/js/app.js', array('vue-vendor'), '0.1.0', true);
  wp_enqueue_style('vue-css', plugin_dir_url( __FILE__ ) . 'dist/static/css/app.css', array(), '0.1.0');    
  }

add_action('wp_enqueue_scripts', 'vue_enqueue_scripts');
