<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <form method="post">
        <div class="employees">
            <?php
            foreach ($employees as $emp) { ?>
                <label><?= $emp['name'] ?></label>
                <input type="radio" name="employee" value="<?= $emp['id'] ?>" />
            <?php } ?>
        </div>
        </br>
        <div class="products">
            <?php
            foreach ($products as $product) { ?>
                <label><?= $product['name'] ?></label>
                <input type="radio" name="product" value="<?= $product['id'] ?>" />
            <?php } ?>
        </div>
        <input type="number" name="quantity" placeholder="تعداد">
        <input type="submit">

    </form>
</body>

</html>