<html>
<?php echo validation_errors(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<?php echo form_open('signup'); ?>
<form method="post">
    <input type="text" name="nickname" placeholder="نام خود را وارد کنید">
    <input type="text" name="username" placeholder="نام کاربری خود را وارد کنید">
    <input type="password" name="password" placeholder="رمز عبور خود را وارد کنید">
    <input type="submit" value="ثبت نام">
</form>
<h4>already have an account? <a href="<?= base_url('/signin')  ?>">log in</a></h4>


</html>