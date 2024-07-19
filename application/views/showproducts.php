<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <table>
        <thead>
            <th>نام محصول</th>
            <th>رنگ محصول</th>
            <th>حذف محصول</th>
        </thead>
        <?php foreach ($result as $row) { ?>
            <tbody>

                <td><?= $row['name'] ?></td>
                <td><?= $row['color'] ?></td>

                <td>
                    <form method="post">
                        <input type="hidden" name="deleteproduct" value="<?= $row['id'] ?>">
                        <input type="submit" value="delete">
                    </form>
                </td>
            </tbody>

        <?php
        }
        ?>
        <a href="<?= base_url("/products/addnew?factoryid={$factoryid}") ?>">افزودن محصول</a>
    </table>
    <a href="">لیست کارخانه</a>
    <a href="<?= base_url('/') ?>">داشبورد </a>

</body>

</html>