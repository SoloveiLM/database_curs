<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Добавить хозяйство</title>
</head>

<body>
<?php 
require 'connect.php';

 $farm = $_REQUEST['farm'];
 $address = $_REQUEST['address']; 
 $director = $_REQUEST['director']; 
 $head_doctor = $_REQUEST['head_doctor'];
 $vet = $_REQUEST['vet'];
 
 mysqli_set_charset($db, "utf8");

  $insert_sql = "INSERT INTO farms (farm, address, director, head_doctor, vet)" . "VALUES('{$farm}', '{$address}', '{$director}', '{$head_doctor}', '{$vet}');";
 
  mysqli_query($db, $insert_sql) or die("<p>При добавлении в первую таблицу произошла ошибка!</p>" . mysql_error()); 
  echo '<p>Запись была успешно добавлена  в первую таблицу!</p>'; //сохраняем таблицу 1
  ?>
</body>
</html>