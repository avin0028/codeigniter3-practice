<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title><?= $title ?></title>
</head>

<body class="bg-light">
    <div class="container my-4">
        <h1 class="text-center mb-4"><?= $name ?> عزیز خوش آمدید</h1>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post" class="p-4 border rounded bg-white shadow-sm">
                    <div class="mb-3">
                        <label class="form-label">می‌خواهید نام خود را تغییر دهید؟</label>
                        <input type="text" name="newname" class="form-control" placeholder="نام جدید خود را وارد کنید">
                    </div>
                    <button type="submit" name="job" value="changename" class="btn btn-primary w-100">تغییر</button>
                </form>
            </div>
        </div>

        <div class="text-center my-4">
            <a href="<?= base_url('/factories') ?>" class="btn btn-info">مشاهده کارخانه ها</a>
            <a href="<?= base_url('/producers') ?>" class="btn btn btn-secondary">مشاهده تولیدات</a>

        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post" class="p-4 border rounded bg-white shadow-sm">
                    <button type="submit" name="job" value="logout" class="btn btn-warning w-100 mb-2">خروج از حساب</button>
                    <button type="submit" name="job" value="deleteaccount" class="btn  btn-danger w-100">حذف حساب</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>