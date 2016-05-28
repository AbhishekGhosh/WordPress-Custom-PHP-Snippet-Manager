<?php

/**
 *
 * @link              https://thecustomizewindows.com/
 * @since             1.0.0
 * @package           Custom PHP Snippet Manager
 *
 * @wordpress-plugin
 * Plugin Name:       Custom PHP Snippet Manager
 * Plugin URI:        http://example.com/test-uri/
 * Description:       Plugin Which Replaces the Need to Manually Add Custom PHP Snippet on Theme's functions.php File Via FTP.
 * Version:           1.0.0
 * Author:            Abhishek Ghosh
 * Author URI:        https://thecustomizewindows.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cpsm
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}
add_action('admin_menu', 'cpsm_setup_menu');
function shell_plugin_setup_menu(){
	add_menu_page( 'CPSM', 'Custom PHP Snippet Manager', 'manage_options', 'cpsm-plugin', 'cpsm_init' );
}
function cpsm_init(){
	echo "<h2>Custom PHP Snippet Manager Plugin Has No Extra Settings</h2>";
	echo "<p>Go to Plugins > Editor and select this plugin. Then Edit the default.php file under snippets sub directory. You can drop file with the function and php extension inside the snippets sub directory too.</p>";
}
/**
 * Begins execution
 *
 * @since    1.0.0
 */
 foreach (glob("snippets/*.php") as $filename)
{
    include $filename;
}
