<?php

/*
Plugin Name: لاگین شو
Plugin URI: http://wordpress.org/plugins/login-show/
Description: افزونه لاگین وردپرس
Author: kiarash shahbazi
Version: 1.0.0
Author URI: http://www.websoftino.ir/
*/

defined( 'ABSPATH' ) || exit();

define( "LS_PLUGIN_DIR", plugin_dir_path( __FILE__ ) );
define( "LS_PLUGIN_URL", plugin_dir_url( __FILE__ ) );
const LS_PLUGIN_INC    = LS_PLUGIN_DIR . 'inc/';
const LS_PLUGIN_ASSETS = LS_PLUGIN_DIR . 'assets/';
const LS_PLUGIN_VIEWS  = LS_PLUGIN_DIR . 'views/';


if ( is_admin() ) {
	include LS_PLUGIN_INC . 'admin/menu.php';
	include LS_PLUGIN_INC . 'admin/metabox.php';
	include LS_PLUGIN_INC . 'admin/widget.php';
	include LS_PLUGIN_INC . 'admin/settings.php';
	include LS_PLUGIN_INC . 'admin/custom-settings-page.php';
} else {
	include LS_PLUGIN_INC . 'front/list.php';
}
include LS_PLUGIN_INC . 'admin/shortcode-api.php';
include LS_PLUGIN_INC . 'admin/film-post-type.php';
include LS_PLUGIN_INC . 'admin/genre-taxonomy.php';




