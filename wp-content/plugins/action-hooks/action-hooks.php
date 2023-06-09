<?php
/*
Plugin Name: Action Hooks
Plugin URI: http://wordpress.org/plugins/action-hooks/
Description: Action Hooks Plugin For Wordpress
Author: kiarash shahbazi
Version: 1.0.0
Author URI: http://www.websoftino.ir/
*/


/*function default_name(){
	return "kiarash";
}


function change_name_to_reza(){
	return "reza";
}

function change_name_to_parnia(){
	return "parnia";
}

add_filter("change_default_name","change_name_to_reza");
add_filter("change_default_name","change_name_to_parnia", 9);

echo apply_filters("change_default_name", "default_name");*/

function change_footer_text(): string {
	return "این سایت توسط کیارش شهبازی طراحی شده است";
}

add_filter("show_admin_bar", "__return_false");
add_filter("admin_footer_text", "change_footer_text");