<?php

/*
 * Plugin Name: Footer Content
 * Description: Adds a custom admin pages with sample styles and scripts.
 * Version: 1.0.0
 * Author: Duc
 * Author URI: http://antking.asia
 * Text Domain: my-custom-admin-page
*/

function content_footer() {
    add_menu_page(
        __( 'Duc Nguyen', 'my-textdomain' ),
        __( 'Footer Content', 'my-textdomain' ),
        'manage_options',
        'sample-page',
        'content_footer_html',
        'dashicons-schedule',
        3
    );
}
add_action( 'admin_menu', 'content_footer' );

function content_footer_html() {
    ?>
  <div class="wrap">
        <h2>Custom Footer Page </h2>
        <form method="post" action="options.php">
            <?php settings_fields('field_register_setting'); ?>
 
        <table class="form-table">
 
            <tr>
                <th><label for="copuright_mess">Copyright Message:</label></th>
 
                <td>
<input type = 'text' class="regular-text" id="copuright_mess" name="copyright_mess_name" value="<?php echo get_option('copyright_mess_name'); ?>">
                </td>
            </tr>
 
            <tr>
                <th><label for="brought">Brought:</label></th>
                <td>
<input type = 'text' class="regular-text" id="brought" name="brought_name" value="<?php echo get_option('brought_name'); ?>">
                </td>
            </tr>
 
        </table>
 
        <?php submit_button(); ?>
 
    </div>

    </form>
    <?php
}




function add_field_register_setting() {
 
    register_setting('field_register_setting', 'copyright_mess_name');
     
    register_setting('field_register_setting', 'brought_name');
    
     
}
    add_action('admin_init', 'add_field_register_setting');


function show_copyright_test() {
    
    echo get_option('copyright_mess_name');
}
add_action( 'show_copyright', 'show_copyright_test' );

function show_brought_test() {
    
    echo get_option('brought_name');
}
add_action( 'show_brought', 'show_brought_test' );


