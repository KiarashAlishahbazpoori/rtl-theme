<?php $option =  get_option('_ls_settings'); ?>
<h2>تنظیمات افزونه لاگین شو</h2>
<div style="width: 100%;padding: 20px">
    <form action="" method="post">
        <label for="form_title">عنوان فرم</label>
        <input id="form_title" style="margin-bottom: 10px;display: block" type="text" name="form_title"
               placeholder="عنوان فرم را وارد کنید..." value="<?php echo $option['form_title']; ?>">
        <label for="form_description">توضیحات فرم</label>
        <textarea style="margin-bottom: 10px;display: block" name="form_description" id="form_description" cols="30"
                  rows="10"><?php echo $option['form_description']; ?></textarea>
        <input type="submit" value="ذخیره" name="submit">
    </form>
</div>