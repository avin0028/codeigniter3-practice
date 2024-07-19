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
            <th>نام کارمند</th>
            <th>نام کارخانه</th>
            <th>تعداد</th>
        </thead>
        <tbody>
            <?php foreach ($result as $row) {
            ?>
                <td><?= $row['product_name'] ?></td></br>
                <td><?= $row['employee_name'] ?></td></br>
                <td><?= $row['factories_name'] ?></td></br>
                <td><?= $row['produced'] ?></td></br>
    </table>


<?php
            }
?>
</tbody>
<a href="<?= base_url('/') ?>">داشبورد</a>
</body>

</html>