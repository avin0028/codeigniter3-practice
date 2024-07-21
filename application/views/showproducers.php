<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">

    <div class="container my-4">
        <h2 class="text-center mb-4">لیست تولیدات</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>نام محصول</th>
                    <th>نام کارمند</th>
                    <th>نام کارخانه</th>
                    <th>تعداد</th>
                    <th>تاریخ تولید</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $row) { ?>
                    <tr>
                        <td><?= $row['product_name'] ?></td>
                        <td><?= $row['employee_name'] ?></td>
                        <td><?= $row['factories_name'] ?></td>
                        <td><?= $row['produced'] ?></td>
                        <td><?= date('d-m-Y', intval($row['date'])) ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <div class="text-center mt-4">
            <a href="<?= base_url('/producers/produce') ?>" class="btn btn-success me-2">تولید جدید</a>
            <a href="<?= base_url('/') ?>" class="btn btn-secondary">داشبورد</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>