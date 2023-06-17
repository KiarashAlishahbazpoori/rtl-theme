<h1>لیست کاربران لاگین شو</h1>
<div class="wrap">
    <table class="widefat striped">
        <thead>
        <tr>
            <th>شناسه</th>
            <th>نام کاربری</th>
            <th>ایمیل</th>
            <th>نام نمایشی</th>
            <th>موبایل</th>
            <th>عملیات</th>
        </tr>
        </thead>
        <tbody>
		<?php
		$users = get_users();
		foreach ( $users as $key => $user ):
			?>
            <tr>
                <td><?php echo $user->ID ?></td>
                <td><?php echo $user->user_login ?></td>
                <td><?php echo $user->user_email ?></td>
                <td><?php echo $user->display_name ?></td>
                <td><?php echo get_user_meta($user->ID, "ls_phone", true);?></td>
                <td>
                    <a href="<?php echo $_SERVER['PHP_SELF'] . '?page=ls_users_list&action=delete&id=' . $user->ID ?>"
                       class="dashicons dashicons-trash" style="color: orangered"></a>
                    <a href="<?php echo $_SERVER['PHP_SELF'] . '?page=ls_users_list&action=update&id=' . $user->ID ?>"
                       class="dashicons dashicons-edit" style="color: green"></a></td>
            </tr>
		<?php endforeach; ?>
        </tbody>
    </table>
</div>