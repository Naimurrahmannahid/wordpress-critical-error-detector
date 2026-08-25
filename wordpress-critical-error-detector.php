<?php
/**
 * Plugin Name: Custom Fatal Error Catcher
 * Author: Naimur Rahman Nahid
 * Author URI: https://naimurrahmannahid.com/
 * Description: Catches fatal errors and emails the details to track conflicts.
 * Version: 1.0
 */


if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function custom_track_fatal_errors() {
    $error = error_get_last();

    
    $fatal_error_types = array( E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR, E_USER_ERROR );

    if ( $error !== null && in_array( $error['type'], $fatal_error_types ) ) {
        
        
        $to = get_option( 'admin_email' ); 
        $site_url = home_url();
        $subject = 'Critical Fatal Error Detected on ' . $site_url;
        
        $message  = "Hello,\n\n";
        $message .= "A fatal error has been detected on your website. Here are the details to debug the conflict:\n\n";
        
        $message .= "Error Message: " . $error['message'] . "\n\n";
        $message .= "File Causing Error: " . $error['file'] . "\n";
        $message .= "Line Number: " . $error['line'] . "\n\n";
        
        $message .= "Request URI: " . ( isset( $_SERVER['REQUEST_URI'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REQUEST_URI'] ) ) : 'N/A' ) . "\n";
                
        wp_mail( $to, $subject, $message );
    }
}


register_shutdown_function( 'custom_track_fatal_errors' );
