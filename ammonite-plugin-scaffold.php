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
  * -Remove example dunctions
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
  }

  // Call methods on load here
  Ammonite_Plugin_Scaffold::example_function();
}
