<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>


<body>
    <table>
        <thead>
            <th>عنوان</th>
            <th>آدرس</th>
            <th>کارمندان</th>
            <th>حذف</th>


        </thead>
        <tbody>
            <?php echo form_open('Factories'); ?>

            <?php
            foreach ($result as $row) {
                //NOTE: check if bro has no factories dont show the table;
            ?>
                <tr>
                    <td><?= $row['title'] ?></td>
                    <td><?= $row['address'] ?></td>
                    <td><a href='<?= base_url("/employees/?factoryid={$row['id']}") ?>'>مشاهده</a></td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="deletefactory" value="<?= $row['id'] ?>">
                            <input type="submit" value="delete">
                        </form>
                    </td>

                </tr>
                </br>
            <?php
            }
            ?>
            <a href="<?= base_url('/factories/addfactory') ?>">اضافه کردن کارخانه </a>
            <a href="<?= base_url('/') ?>">داشبورد </a>


</body>

</html>