<style>
    .form-container {
        background-color: lightgray;
        margin: 0 auto;
	    width: 300px;
	    padding: 30px;
	    border-radius: 10px;
    }
    form{
	    display: flex;
	    flex-direction: column;
    }
    form input{
	    margin-bottom: 10px;
    }

    form input[type="submit"]{
	    color: white;
	    background-color: darkseagreen;
	    border: 0;
	    padding: 5px;
	    border-radius: 5px;
    }
    form input[type="submit"]:hover{
        background-color: lightseagreen;
    }
</style>

<h1>افزودن کاربر جدید</h1>

<div class="wrap form-container">
    <form action="<?php echo $_SERVER['PHP_SELF'] . '?page=ls_add_users' ?>" method="post">
        <input type="text" name="user_login" placeholder="نام کاربری">
        <input type="text" name="user_email" placeholder="ایمیل">
        <input type="text" name="ls_phone" placeholder="موبایل">
        <input type="submit" name="submit" value="ذخیره کاربر">
    </form>
</div>
