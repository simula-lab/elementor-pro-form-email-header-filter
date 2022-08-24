<?php
/**
 * Plugin Name: Simula elementor-pro form email header filter
 * Plugin URI: https://github.com/simula-lab/simula-elementor-pro-form-email-header-filter
 * Description: Registers the filter "elementor_pro/forms/wp_mail_headers". The filter get called by elementor-pro to filter the string header of outgoing emails before calling wp_mail() command. Currently this plugin returns an empty string
 * Version: 1.0.0
 * Author: SiMULA
 * Author URI: https://simulalab.org/
 * License: GPL2
 * Text Domain: 
 * Domain Path: /languages
 *
 */

/*
 *  Abort, if this file is called directly.
 */
if ( !defined( 'WPINC' ) ) {
	die;
}

/**
 * Replaces Arabic numerals with Arabic-Indic numberals in given string.
 *
 * @since 1.0.0
 *
 * @param headers 	The string containg the email form header that elementor-pro generate
 * @return string	An empty string
 */
function empty_string( $headers ) {
	return '';
}

/*
 * Adds the filter 
 */
add_filter( 'elementor_pro/forms/wp_mail_headers', 'empty_string');

?>
