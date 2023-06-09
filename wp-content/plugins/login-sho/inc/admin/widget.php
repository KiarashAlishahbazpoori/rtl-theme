<?php


function ls_register_widget() {
	wp_add_dashboard_widget( "ls_widget", "ویجت من", "ls_widget_handler" );
}

function ls_widget_handler() {
	?>
    <p>تعداد کاربران: <?php echo count_users()['total_users']; ?></p>
    <p>تعداد پست: <?php echo wp_count_posts()->publish ?></p>
	<?php
}

add_action( "wp_dashboard_setup", "ls_register_widget" );
