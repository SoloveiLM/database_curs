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
$ID_fish=($_REQUEST['ID_fish']); 
$fish=trim($_REQUEST['fish']); 
$age=trim($_REQUEST['age']); 
$weight=trim($_REQUEST['weight']); 
$length=trim($_REQUEST['length']);

 $update_sql = "UPDATE fishes SET ID_fish='$ID_fish', fish='$fish', age='$age', weight='$weight', length='$length' WHERE ID_fish='$ID_fish'"; 
 mysqli_query($db, $update_sql) or die("Ошибка вставки!" . mysql_error());
 
  echo '<p>Запись успешно обновлена!</p>'; 
  ?> 
 
  <a href="TableTwo.php">Вернуться к таблице "Объект исследования"</a><br/><br/> 
  <a href="select2.php">Вернуться к выбору данных для редактирования</a><br/><br/>      
</body>
</html>