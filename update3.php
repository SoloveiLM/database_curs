<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<title>Обновление данных</title>
</head>

<body>
<?php 
require 'connect.php'; 
$ID_fish_farm=($_REQUEST['ID_fish_farm']); 
$ID_fish=trim($_REQUEST['ID_fish']); 
$place=trim($_REQUEST['place']); 
$ID_farm=trim($_REQUEST['ID_farm']); 

 $update_sql = "UPDATE fish_farm SET ID_fish_farm='$ID_fish_farm', ID_fish='$ID_fish', place='$place', ID_farm='$ID_farm' WHERE ID_fish_farm='$ID_fish_farm'"; 
 mysqli_query($db, $update_sql) or die("Ошибка вставки!" . mysql_error());
 
  echo '<p>Запись успешно обновлена!</p>'; 
  ?> 
 
  <a href="TableThree.php">Вернуться к таблице "Место отлова"</a><br/><br/> 
  <a href="select3.php">Вернуться к выбору данных для редактирования</a><br/><br/>


      
</body>
</html>