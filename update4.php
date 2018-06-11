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
$ID_researcher =($_REQUEST['ID_researcher']); 
$researcher=trim($_REQUEST['researcher']); 
$position=trim($_REQUEST['position']); 
$work_place=trim($_REQUEST['work_place']); 

 $update_sql = "UPDATE researchers SET ID_researcher='$ID_researcher', researcher='$researcher', position='$position', work_place='$work_place' WHERE ID_researcher='$ID_researcher'"; 
 mysqli_query($db, $update_sql) or die("Ошибка вставки!" . mysql_error());
 
  echo '<p>Запись успешно обновлена!</p>'; 
  ?> 
 
  <a href="TableFour.php">Вернуться к таблице "Исследователи"</a><br/><br/> 
  <a href="select4.php">Вернуться к выбору данных для редактирования</a><br/><br/>      
</body>
</html>