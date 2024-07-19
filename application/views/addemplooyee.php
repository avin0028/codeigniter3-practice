<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <?php echo form_open('Employees/addnew'); ?>
    <form method="post">
        <input type="text" name="employee_name" placeholder="نام کارمند را وارد کنید">
        <?php foreach ($factories as $factory) { ?>
            <label><?= $factory['title'] ?></label>
            <input name="factoryid" type="radio" value="<?= $factory['id'] ?>">


        <?php
        }
        ?>
        <input type="submit">

    </form>

</body>

</html>