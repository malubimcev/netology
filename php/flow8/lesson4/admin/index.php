<?php
    require_once 'functions.php';
    if(!isAdmin()) {
        location('login');
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админа</title>
</head>
<body>
    Добро пожаловать, <?= getAdminName() ?><br />
    <a href="/8/admin/logout.php">Выход</a>
</body>
</html>