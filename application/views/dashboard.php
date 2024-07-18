<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<h1><?= $name ?> عزیز خوش آمدید</h1>
<?php echo form_open('dashboard'); ?>
<form method="post">
    <label>می خواهید نام خود را تغییر دهید؟</label>
    <input type="text" name="newname" placeholder="نام جدید خود را وارد کنید">
    <input type="submit" value="changename" name="job">
</form>
<form method="post">
    <input type="submit" name="job" value="logout">
    <input type="submit" name="job" value="deleteaccount">
</form>

</html>