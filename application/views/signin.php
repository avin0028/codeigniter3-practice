<html>
<?php echo validation_errors(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<?php echo form_open('signin'); ?>

<body>
    <form method="post">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit">

    </form>
    <h4>dont have an account? <a href="#">create one</a></h4>

</body>

</html>