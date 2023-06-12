<?php

function ls_register_menu() {
	add_menu_page(
		"لاگین شو",
		"لاگین شو",
		"manage_options",
		"ls_home_page",
		"ls_home_page",
		"dashicons-admin-network",
		"5"
	);
	add_submenu_page(
		"ls_home_page",
		"تنظیمات",
		"تنظیمات",
		"manage_options",
		"ls_setting_page",
		"ls_setting_page",
		""
	);
	add_submenu_page(
		"ls_home_page",
		"لیست کاربران",
		"لیست کاربران",
		"manage_options",
		"ls_users_list",
		"ls_users_list_handler"
	);
	add_submenu_page(
		"ls_home_page",
		"افزودن کاربر",
		"افزودن کاربر",
		"manage_options",
		"ls_add_users",
		"ls_add_users_handler"
	);
}

function ls_home_page() {
	echo "<h3>افزونه لاگین شو</h3>";
}

function ls_setting_page() {
	if ( isset( $_POST['submit'] ) && $_SERVER['REQUEST_METHOD'] == 'POST' ) {

		$data = [];
		foreach ( $_POST as $key => $value ) {
			if ( $key != 'submit' ) {
				$data[ $key ] = $value;
			}
		}

		if ( get_option( '_ls_settings' ) ) {
			update_option( "_ls_settings", $data );
		} else {
			add_option( "_ls_settings", $data );
		}
	}
	include_once LS_PLUGIN_VIEWS . 'admin/setting.php';
}

function ls_add_users_handler() {
	if ( isset( $_POST['submit'] ) && $_SERVER['REQUEST_METHOD'] == 'POST' ) {
		$password  = wp_generate_password( 8 );
		$user_data = [
			"user_login" => apply_filters( "pre_user_login", $_POST["user_login"] ),
			"user_email" => apply_filters( "pre_user_email", $_POST["user_email"] ),
			"user_pass"  => apply_filters( "pre_user_pass", $password )
		];
		wp_insert_user( $user_data );
	}
	include LS_PLUGIN_VIEWS . "admin/add-user.php";
}

function ls_users_list_handler() {
	switch ( $_GET['action'] ) {
		case 'delete':
			if ( intval( $_GET['id'] ) ) {
				wp_delete_user( $_GET['id'] );
			}
			break;
		case 'update':
			if ( isset( $_POST['submit'] ) && intval( $_POST['id'] ) ) {
				$user_data = [
					'ID'         => intval( $_POST['id'] ),
					'user_email' => apply_filters( "pre_user_email", $_POST['user_email'] )
				];
				$update = wp_update_user( $user_data );
			}
			include LS_PLUGIN_VIEWS . "admin/update-user.php";

			return;
			break;
	}
	include LS_PLUGIN_VIEWS . "admin/users-list.php";
}

add_action( "admin_menu", "ls_register_menu" );