<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Monitoring</title>
</head>

<body>

<?php

$db = mysqli_connect("127.0.0.1","fish_user", "fish_password", "fish") or die ("<p>Ошибка подключения к базе данных!".mysqli_error(). "</p>");
mysqli_set_charset($db, "utf8");
?>
</body>
</html>