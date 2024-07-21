<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php if (validation_errors()) { ?>
        <div class="alert alert-danger">
            <?php echo validation_errors(); ?>
        </div>
    <?php } ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>ثبت نام</h2>
                    </div>
                    <?php echo form_open('signup'); ?>
                    <div class="mb-3">
                        <label class="form-label">نام مستعار</label>
                        <input type="text" class="form-control" name="nickname" placeholder="نام مستعار خود را وارد کنید" value="<?php echo set_value('nickname'); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">نام کاربری</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="نام کاربری خود را وارد کنید" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">رمز عبور</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="رمز عبور خود را وارد کنید" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">ثبت نام</button>

                </div>
                <div class="card-footer text-center">
                    <h4>حساب دارید؟<a href="<?= base_url('/signup') ?>">ورود</a></h4>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>