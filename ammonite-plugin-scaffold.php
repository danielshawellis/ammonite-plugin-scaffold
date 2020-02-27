<?php
/**
 * Plugin Name:       Ammonite Plugin Scaffold
 * Plugin URI:
 * Description:
 * Version:           1.0.0
 * Requires at least:
 * Requires PHP:
 * Author:            Daniel Ellis
 * Author URI:        https://danielellisdevelopment.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:
 * Domain Path:
 */

 /**
  * GETTING STARTED WITH THIS SCAFFOLD
  * -Fill out plugin header information
  * -Search and replace container class name ('Ammonite_Plugin_Scaffold') in this file
  * -Rename root plugin directory and ammonite-plugin-scaffold.php to match
  * -Remove unecessary example functions
  * -Rename stylesheet and script in both this file (handle and path) and their location if they are being used
  */

/*
  Basic Security
*/
if ( ! defined( 'ABSPATH' ) ) {
  die;
}

/*
  Plugin Base Class
*/
if ( !class_exists( 'Ammonite_Plugin_Scaffold' ) ) {
  class Ammonite_Plugin_Scaffold {
    // Add class methods here
    public static function example_function() {

    }

    public static function example_register_styles_and_scripts() {
      add_action( 'wp_enqueue_scripts', function() {
        // Remove jQuery dependency if unnecessary
        wp_register_script( 'ammonite-plugin-scaffold-script', plugins_url('assets/js/ammonite-plugin-scaffold.js', __FILE__ ), array('jquery'), '1.0.0', true );
        wp_register_style( 'ammonite-plugin-scaffold-styles', plugins_url('assets/css/ammonite-plugin-scaffold.css', __FILE__ ), array(), '1.0.0', 'all' );
      } );
    }

    public static function example_enqueue_styles_and_scripts() {
      add_action( 'wp_enqueue_scripts', function() {
        wp_enqueue_script( 'ammonite-plugin-scaffold-script' );
        wp_enqueue_style( 'ammonite-plugin-scaffold-styles' );
      } );
    }
  }

  // Call methods on load here
  Ammonite_Plugin_Scaffold::example_function();
  Ammonite_Plugin_Scaffold::example_register_styles_and_scripts();
  Ammonite_Plugin_Scaffold::example_enqueue_styles_and_scripts();
}
