<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Добавить хозяйство</title>
</head>

<body>
<?php 
require 'connect.php';

 $ID_fish_farm = $_REQUEST['ID_fish_farm'];
 $ID_fish = $_REQUEST['ID_fish']; 
 $place = $_REQUEST['place']; 
 $ID_farm = $_REQUEST['ID_farm'];
 
 
 mysqli_set_charset($db, "utf8");

  $insert_sql = "INSERT INTO fish_farm (ID_fish_farm, ID_fish, place, ID_farm)" . "VALUES('{$ID_fish_farm}', '{$ID_fish}', '{$place}', '{$ID_farm}');";
 
  mysqli_query($db, $insert_sql) or die("<p>При добавлении в таблицу МЕСТО ОТЛОВА произошла ошибка!</p>" . mysql_error()); 
  echo '<p>Запись была успешно добавлена  в таблицу МЕСТО ОТЛОВА!</p>'; //сохраняем таблицу 3
  ?>
 
</body>
</html>