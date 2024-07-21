<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-light">
    <?php if (validation_errors()) { ?>
        <div class="alert alert-danger">
            <?php echo validation_errors(); ?>
        </div>
    <?php } ?>

    <div class="container my-4">
        <h1 class="text-center mb-4">ایجاد کارمند</h1>

        <div style="max-width: 400px; margin: 0 auto;">
            <?php echo form_open('Employees/addnew'); ?>
            <form method="post" class="bg-white p-4 rounded shadow-sm">
                <div class="mb-3">
                    <label for="employee_name" class="form-label">نام کارمند</label>
                    <input type="text" id="employee_name" name="employee_name" class="form-control" placeholder="نام کارمند را وارد کنید" required>
                </div>

                <fieldset class="mb-4">
                    <legend class="form-label">انتخاب کارخانه</legend>
                    <?php foreach ($factories as $factory) { ?>
                        <div class="form-check">
                            <input class="form-check-input" name="factoryid" type="radio" value="<?= $factory['id'] ?>" id="factory<?= $factory['id'] ?>" required>
                            <label class="form-check-label" for="factory<?= $factory['id'] ?>">
                                <?= htmlspecialchars($factory['title']) ?>
                            </label>
                        </div>
                    <?php } ?>
                </fieldset>

                <button type="submit" class="btn btn-primary w-100">افزودن</button>
            </form>
        </div>

        <div class="text-center mt-4">
            <a href="<?= base_url('/factories') ?>" class="btn btn-info me-2">لیست کارخانه</a>
            <a href="<?= base_url('/') ?>" class="btn btn-secondary">داشبورد</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>