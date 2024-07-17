<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<h1><?= $name ?> عزیز خوش آمدید</h1>
<?php echo form_open('dashboard'); ?>
<form method="post">
    <input type="submit" name="job" value="logout">
</form>