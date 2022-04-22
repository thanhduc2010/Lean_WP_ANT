<?php
    /*
* Plugin Name: Footer Bottom Div
* Description: This plugin is the custom plugin and created by Duc Nef
* Version : 1.0.0
* Author: Duc Nguyen
*/

    function footer_bottom_page() {
         
        add_options_page('Footer Bottom', 'Custom Footer Bottom', 'manage_options', '', '');
          
    }
    
    add_action('admin_menu', 'footer_bottom_page');

  


    function show_footer_bottom() {
        printf(
            '<div id="footer_bottom_duc"></div>'
        );
    }
    add_action( 'wp_footer', 'show_footer_bottom' );



    function footer_bottom_css() {
        echo "
        <style type='text/css'>
        #footer_bottom_duc{
            width: 100%;
            height: 50px;
            background-color: red;
        }
        </style>
        ";
    }
    
    add_action( 'wp_head', 'footer_bottom_css' );


    function footer_bottom_shortcode( $atts = array(), $content = null ) {
        printf(
            '<div id="footer_bottom_duc"></div>'
        );
    }
    add_shortcode( 'duc_footer_bottom', 'footer_bottom_shortcode' );














    
    ?>


    
