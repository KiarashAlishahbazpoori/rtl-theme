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
                <td></td>
            </tr>
		<?php endforeach; ?>
        </tbody>
    </table>
</div>