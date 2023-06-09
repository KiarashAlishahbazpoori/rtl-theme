<?php

/*
function ls_register_settings() {
	$args = array(
		'type'              => 'string',
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => null,
	);
	register_setting( "general", "_ls_api_key", $args );
	register_setting( "general", "_ls_password", $args );
	add_settings_section( "ls_settings_section", "تنظیمات لاگین شو", "ls_settings_section_handler", "general" );
	add_settings_field( "ls_api_key_field", "API-KEY", "ls_api_key_field_handler", "general", "ls_settings_section" );
	add_settings_field( "ls_password_field", "رمز ورود", "ls_password_field_handler", "general", "ls_settings_section" );
}

function ls_settings_section_handler() {
	echo "تنظیمات مخصوص به افزونه لاگین شو";
}

function ls_api_key_field_handler() {
	$apiKey = get_option( "_ls_api_key" );
	*/?><!--
    <label>
	    <input type="text" name="_ls_api_key" value="<?php /*echo esc_attr( $apiKey ) */?>">
    </label>
	<?php
/*}

function ls_password_field_handler() {
	$password = get_option( "_ls_password" );
	*/?>
	<label>
		<input type="text" name="_ls_password" value="<?php /*echo esc_attr( $password ) */?>">
	</label>
	--><?php
/*}


add_action( 'admin_init', 'ls_register_settings' );*/
