<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">

    <div class="container my-4">
        <?php if (validation_errors()) { ?>
            <div class="alert alert-danger">
                <?php echo validation_errors(); ?>
            </div>
        <?php } ?>


        <?php echo form_open('factories/addfactory'); ?>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <form method="post" class="bg-white p-4 rounded shadow-sm">
                    <h2 class="text-center mb-4">ایجاد کارخانه</h2>

                    <div class="mb-3">
                        <label for="factorytitle" class="form-label">نام کارخانه را وارد کنید</label>
                        <input type="text" id="factorytitle" name="factorytitle" class="form-control" placeholder="نام کارخانه">
                    </div>

                    <div class="mb-3">
                        <label for="factoryaddress" class="form-label">آدرس کارخانه را وارد کنید</label>
                        <input type="text" id="factoryaddress" name="factoryaddress" class="form-control" placeholder="آدرس کارخانه">
                    </div>

                    <button type="submit" class="btn btn-primary w-100">افزودن</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>