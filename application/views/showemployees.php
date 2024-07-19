<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <table>
        <thead>
            <th>نام کارمند</th>
            <th>حذف کارمند</th>

        </thead>
        <tbody>
            <!-- //form open messessap everything2 -->
            <!-- //<?php echo form_open("employees"); ?> -->
            <?php foreach ($result as $row) { ?>
                <td><?= $row['name'] ?></td>
                <td>
                    <form method="post">
                        <input type="hidden" name="deleteemployee" value="<?= $row['id'] ?>">
                        <input type="submit" value="delete">
                    </form>
                </td>

            <?php
            }
            ?>
        </tbody>
    </table>
    <a href="">لیست کارخانه</a>
    <a href="<?= base_url('/') ?>">داشبورد </a>

</body>

</html>