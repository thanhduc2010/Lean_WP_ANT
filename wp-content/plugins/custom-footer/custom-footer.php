<?php
    /*
* Plugin Name: Custom Footer
* Description: This plugin is the custom plugin and created by Duc Nef
* Version : 1.0.0
* Author: Duc Nguyen
*/
function custom_footer_register() {
 
    register_setting('custom_footer_plugin_options_group', 'copyright');
     
    register_setting('custom_footer_plugin_options_group', 'brought');
     
    }
    add_action('admin_init', 'custom_footer_register');


    function custom_footer_register_page() {
         
        add_options_page('Custom Footer', 'Custom Footer Setting', 'manage_options', 'custom-plugin-setting-url', 'custom_footer_register_page_html');
          
    }
    add_action('admin_menu', 'custom_footer_register_page');

    function custom_footer_register_page_html() { ?>
        <div class="wrap">
            <h2>Custom Footer Page </h2>
            <form method="post" action="options.php">
                <?php settings_fields('custom_footer_plugin_options_group'); ?>
     
            <table class="form-table">
     
                <tr>
                    <th><label for="copuright_mess">Copyright Message:</label></th>
     
                    <td>
                        <input type = 'text' class="regular-text" id="copyright_id" name="copyright" value="<?php echo get_option('copyright'); ?>">
                    </td>
                </tr>
     
                <tr>
                    <th><label for="second_field_id">Brought:</label></th>
                    <td>
                        <input type = 'text' class="regular-text" id="brought_id" name="brought" value="<?php echo get_option('brought'); ?>">
                    </td>
                </tr>
     
                
            </table>
     
            <?php submit_button(); ?>
     
        </div>
    <?php } 
    
    
        function show_copyright_test() {
            
            echo get_option('copyright');
        }
        add_action( 'show_copyright', 'show_copyright_test' );

        function show_brought_test() {
            
            echo get_option('brought');
        }
        add_action( 'show_brought', 'show_brought_test' );
    
    
    
    ?>


    
