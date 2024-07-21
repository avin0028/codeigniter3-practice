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
        <h2 class="text-center mb-4">تولید محصول</h2>
        <form method="post" class="bg-white p-4 rounded shadow-sm">
            <div class="mb-3">
                <h5 class="mb-3">انتخاب کارمند</h5>
                <?php foreach ($employees as $emp) { ?>
                    <div class="form-check">
                        <input type="radio" id="employee_<?= $emp['id'] ?>" name="employee" value="<?= $emp['id'] ?>" class="form-check-input">
                        <label for="employee_<?= $emp['id'] ?>" class="form-check-label"><?= htmlspecialchars($emp['name']) ?></label>
                    </div>
                <?php } ?>
            </div>
            <div class="mb-3">
                <h5 class="mb-3">انتخاب محصول</h5>
                <?php foreach ($products as $product) { ?>
                    <div class="form-check">
                        <input type="radio" id="product_<?= $product['id'] ?>" name="product" value="<?= $product['id'] ?>" class="form-check-input">
                        <label for="product_<?= $product['id'] ?>" class="form-check-label"><?= htmlspecialchars($product['name']) ?></label>
                    </div>
                <?php } ?>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">تعداد مد نظر</label>
                <input type="number" id="quantity" name="quantity" class="form-control" placeholder="تعداد" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">تولید</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>