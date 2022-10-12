<?php

/**
 * Plugin Name:       Portfolio
 * Plugin URI:        https://www.fiverr.com/wp_expert42
 * Description:       Exclusive Divi child Portfolio post
 * Version:           1.10.3
 * Author:            Developer Hasan Mahmud
 * Author URI:        https://www.fiverr.com/wp_expert42
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       divi-child-portfolio
 * Domain Path:       /languages
 */
require_once(plugin_dir_path(__FILE__) . "/inc/dvc-portfolio.php");

add_filter('acf/settings/show_admin', '__return_false');


