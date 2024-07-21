<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-light">

    <div class="container my-4">
        <h1 class="text-center mb-4">لیست کارمندان</h1>

        <div class="table-container" style="max-width: 400px; margin: 0 auto;">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>نام کارمند</th>
                        <th>حذف کارمند</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $row) { ?>
                        <tr>
                            <td><?= $row['name'] ?></td>
                            <td>
                                <form method="post" class="d-inline">
                                    <input type="hidden" name="deleteemployee" value="<?= $row['id'] ?>">
                                    <button type="submit" class="btn btn-danger btn-sm">حذف</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="text-center mt-4">
            <a href="<?= base_url('/employees/addnew') ?>" class="btn btn-success">افزودن کارمند</a>
            <a href="<?= base_url('/factories') ?>" class="btn btn-info">لیست کارخانه</a>
            <a href="<?= base_url('/') ?>" class="btn btn-secondary">داشبورد</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>