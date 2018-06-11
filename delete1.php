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

$ID_farm = $_REQUEST['user']; 
$delete_sql = "DELETE FROM farms WHERE ID_farm=$ID_farm";
  
 mysqli_query($db, $delete_sql) or die("<p>При удалении произошла ошибка</p>" . mysql_error());
 
  echo '<p>Запись была успешно удалена!</p>'; 
  ?> 
   <a href="TableOne.php"><input id="submit" type="submit" value="таблица Хозяйства"></a> 
    <a href="select_delete1.php"><input id="submit" type="submit" value="Удалить"></a>
  


      
</body>
</html>