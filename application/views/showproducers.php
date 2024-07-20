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
            <th>تاریخ تولید</th>
        </thead>
        <?php foreach ($result as $row) {
        ?>
            <tbody>
                <td><?= $row['product_name'] ?></td>
                <td><?= $row['employee_name'] ?></td>
                <td><?= $row['factories_name'] ?></td>
                <td><?= $row['produced'] ?></td>
                <td><?= date('d-m-y', intval($row['date'])) ?></td>



            </tbody>
        <?php
        }
        ?>
    </table>
    <a href="<?= base_url('/producers/produce') ?>">تولید جدید</a>
    <a href="<?= base_url('/') ?>">داشبورد</a>
</body>

</html>