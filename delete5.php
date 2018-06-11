<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<title>Удаление данных</title>
</head>

<body>
<?php 
require 'connect.php'; 

$ID_research=$_REQUEST['user']; 
$delete_sql = "DELETE FROM researches WHERE ID_research=$ID_research";
  
 mysqli_query($db, $delete_sql) or die("<p>При удалении произошла ошибка</p>" . mysql_error());
 
  echo '<p>Запись была успешно удалена!</p>'; 
  ?> 
   <a href="TableFive.php"><input id="submit" type="submit" value="таблица Исследования"></a> 
    <a href="select_delete5.php"><input id="submit" type="submit" value="Удалить"></a>      
</body>
</html>