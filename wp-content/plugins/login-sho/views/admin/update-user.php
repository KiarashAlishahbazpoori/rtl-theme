<style>
    .form-container {
        background-color: lightgray;
        margin: 0 auto;
        width: 300px;
        padding: 30px;
        border-radius: 10px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    form input {
        margin-bottom: 10px;
    }

    form input[type="submit"] {
        color: white;
        background-color: yellowgreen;
        border: 0;
        padding: 5px;
        border-radius: 5px;
    }

    form input[type="submit"]:hover {
        background-color: lightseagreen;
    }
</style>

<h1>بروزرسانی کاربر</h1>

<?php
$user_id = $_GET['id'];
$user    = get_user_by( 'id', $user_id );
?>

<div class="wrap form-container">
    <form action="<?php echo $_SERVER['PHP_SELF'] . '?page=ls_users_list&action=update&id=' . $user_id ?>"
          method="post">
        <input type="hidden" name="id" value="<?php echo $user->ID ?>">
        <input type="text" disabled name="user_login" placeholder="نام کاربری" value="<?php echo $user->user_login ?>">
        <input type="text" name="user_email" placeholder="ایمیل" value="<?php echo $user->user_email ?>">
        <input type="submit" name="submit" value="بروزرسانی کاربر">
    </form>
</div>
