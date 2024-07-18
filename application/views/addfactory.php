<html>
<?php echo validation_errors(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<?php echo form_open('factories/addfactory'); ?>
<form method="post">
    <input type="text" name="factorytitle" placeholder="نام کارخانه">
    <input type="text" name="factoryaddress" placeholder="آدرس کارخانه">
    <input type="submit">
</form>