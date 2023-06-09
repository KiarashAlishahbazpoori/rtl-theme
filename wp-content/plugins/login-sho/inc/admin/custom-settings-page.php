<?php


function ls_register_settings_option_menu() {
	add_options_page( "تنظیمات لاگین شو", "لاگین شو", "manage_options", "loginsho-setting", "ls_options_page_handler" );
}

function ls_options_page_handler() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	$activeTab = $_GET["tab"];
	?>
    <div class="nav-tab-wrapper">
        <a href="?page=loginsho-setting&tab=tab1"
           class="nav-tab  <?php echo $activeTab == 'tab1' ? 'nav-tab-active' : '' ?>">تب اول</a>
        <a href="?page=loginsho-setting&tab=tab2"
           class="nav-tab <?php echo $activeTab == 'tab2' ? 'nav-tab-active' : '' ?> ">تب دوم</a>
    </div>
    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
        <form action="options.php" method="post">
			<?php
			if ( $activeTab == 'tab1' ) {
				settings_fields( "loginsho" );
				do_settings_sections( "loginsho" );
				submit_button( "ذخیره تنظیمات" );
			} elseif ( $activeTab == 'tab2' ) {
				echo "تنظیمات تب دوم لاگین شو";
			}
			?>
        </form>
    </div>
	<?php
}

function ls_register_settings() {
	$args = array(
		'type'              => 'string',
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => null,
	);
	register_setting( "loginsho", "_ls_api_key", $args );
	register_setting( "loginsho", "_ls_password", $args );
	add_settings_section( "ls_settings_section", "", "ls_settings_section_handler", "loginsho" );
	add_settings_field( "ls_api_key_field", "API-KEY", "ls_api_key_field_handler", "loginsho", "ls_settings_section" );
	add_settings_field( "ls_password_field", "کلمه عبور", "ls_password_field_handler", "loginsho", "ls_settings_section" );
}

function ls_settings_section_handler() {
	echo "پنل تنظیمات اختصاصی افزونه لاگین شو";
}

function ls_api_key_field_handler() {
	$option = get_option( "_ls_api_key" );
	?>
    <input type="text" name="_ls_api_key" value="<?php echo esc_attr( $option ); ?>">
	<?php
}

function ls_password_field_handler() {
	$option = get_option( "_ls_password" );
	?>
    <input type="text" name="_ls_password" value="<?php echo esc_attr( $option ); ?>">
	<?php
}


add_action( "admin_menu", "ls_register_settings_option_menu" );
add_action( "admin_init", "ls_register_settings" );
