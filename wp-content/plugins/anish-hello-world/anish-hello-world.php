<?php
/**
 * Anish Hello World Plugin is the simplest WordPress plugin for beginner.
 * Take this as a base plugin and modify as per your need.
 *
 * @package Anish Hello World Plugin
 * @author Anish
 * @license GPL-2.0+
 * @link https://wordpress.com/
 * @copyright 2017 Anish, LLC. All rights reserved.
 *
 *            @wordpress-plugin
 *            Plugin Name: Anish Hello World Plugin
 *            Plugin URI: 
 *            Description: Anish Hello World Plugin is the simplest WordPress plugin for beginner. Take this as a base plugin and modify as per your need.
 *            Version: 3.0
 *            Author: Anish
 *            Author URI: https://wordpress.com/
 *            Text Domain: anish-hello-world
 *            Contributors: Anish
 *            License: GPL-2.0+
 *            License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
 
/**
 * Adding Submenu under Settings Tab
 *
 * @since 1.0
 */
function anish_add_menu() {
	add_submenu_page ( "options-general.php", "Anish Plugin", "Anish Plugin", "manage_options", "anish-hello-world", "anish_hello_world_page" );
}
add_action ( "admin_menu", "anish_add_menu" );
 
/**
 * Setting Page Options
 * - add setting page
 * - save setting page
 *
 * @since 1.0
 */
function anish_hello_world_page() {
	?>
<div class="wrap">
	<h1>
		Hello World Plugin Template By <a
			href="https://wordpress.com/" target="_blank">Anish</a>
	</h1>
 
	<form method="post" action="options.php">
            <?php
	settings_fields ( "anish_hello_world_config" );
	do_settings_sections ( "anish-hello-world" );
	submit_button ();
	?>
         </form>
</div>
 
<?php
}
 
/**
 * Init setting section, Init setting field and register settings page
 *
 * @since 1.0
 */
function anish_hello_world_settings() {
	add_settings_section ( "anish_hello_world_config", "", null, "anish-hello-world" );
	add_settings_field ( "anish-hello-world-text", "This is sample Textbox", "anish_hello_world_options", "anish-hello-world", "anish_hello_world_config" );
	register_setting ( "anish_hello_world_config", "anish-hello-world-text" );
}
add_action ( "admin_init", "anish_hello_world_settings" );
 
/**
 * Add simple textfield value to setting page
 *
 * @since 1.0
 */
function anish_hello_world_options() {
	?>
<div class="postbox" style="width: 65%; padding: 30px;">
	<input type="text" name="anish-hello-world-text"
		value="<?php
	echo stripslashes_deep ( esc_attr ( get_option ( 'anish-hello-world-text' ) ) );
	?>" /> Provide any text value here for testing<br />
</div>
<?php
}
 
/**
 * Append saved textfield value to each post
 *
 * @since 1.0
 */
add_filter ( 'the_content', 'anish_com_content' );
function anish_com_content($content) {
	return $content . stripslashes_deep ( esc_attr ( get_option ( 'anish-hello-world-text' ) ) );
}