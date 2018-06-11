<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Добавить хозяйство</title>
</head>

<body>
<?php 
require 'connect.php';

 $ID_researcher = $_REQUEST['ID_researcher'];
 $researcher = $_REQUEST['researcher']; 
 $position = $_REQUEST['position']; 
 $work_place = $_REQUEST['work_place'];
 
 
 mysqli_set_charset($db, "utf8");

  $insert_sql = "INSERT INTO researchers (ID_researcher, researcher, position, work_place)" . "VALUES('{$ID_researcher}', '{$researcher}', '{$position}', '{$work_place}');";
 
  mysqli_query($db, $insert_sql) or die("<p>При добавлении в таблицу ИССЛЕДОВАТЕЛИ произошла ошибка!</p>" . mysql_error()); 
  echo '<p>Запись была успешно добавлена  в таблицу ИССЛЕДОВАТЕЛИ!</p>'; //сохраняем таблицу 4
  ?>

</body>
</html>