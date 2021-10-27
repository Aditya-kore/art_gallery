<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Not Admin</title>
</head>
<body>
    <?php 

    echo "<script>alert('Only Admins allowed, please login with correct details');window.location.href = '/phpmyadmin/art_gallery/login.php';</script>";

    ?>
</body>
</html>