<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Добавить хозяйство</title>
</head>

<body>
<?php 
require 'connect.php';

 
 $fish = $_REQUEST['fish'];
 $age = $_REQUEST['age'];
 $weight = $_REQUEST['weight'];
 $length = $_REQUEST['length'];
 
 
 mysqli_set_charset($db, "utf8");

  $insert_sql = "INSERT INTO fishes (fish, age, weight, length)" . "VALUES('{$fish}', '{$age}', '{$weight}', '{$length}');";
 
  mysqli_query($db, $insert_sql) or die("<p>При добавлении в таблицу ОБЪЕКТ ИССЛЕДОВАНИЯ произошла ошибка!</p>" . mysql_error()); 
  echo '<p>Запись была успешно добавлена  в таблицу ОБЪЕКТ ИССЛЕДОВАНИЯ !</p>'; //сохраняем таблицу 2
  ?>
 <a href="info_form2.php">Добавить данные</a><br/><br/>   
  <a href="index.php">Вернуться к главной</a><br/><br/> 
  <a href="TableTwo.php">Вернуться к таблице "Место отлова"</a><br/><br/>
</body>
</html>