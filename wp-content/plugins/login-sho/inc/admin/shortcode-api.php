<?php


function ls_warning_box_handler( $attr, $content ) {
	return "<div style='background-color: yellow;border-right: 4px solid orangered;padding: 10px;'>{$content}</div>";
}

function ls_welcome_message_handler() {
	return "<div>به این سایت و این محتوا خوش آمدید</div>";
}

function ls_video_tag_handler( $attr ) {
	return " <video controls><source src='{$attr['src']}' type='video/mp4'></video>";
}

function ls_login_form_handler(){
	include LS_PLUGIN_VIEWS . "front/login-form.php";
}

add_shortcode( "warning-box", "ls_warning_box_handler" );
add_shortcode( "wellcome-message", "ls_welcome_message_handler" );
add_shortcode( "video-tag", "ls_video_tag_handler" );
add_shortcode("ls-login-form", "ls_login_form_handler");