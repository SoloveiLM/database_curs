<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Добавить хозяйство</title>
</head>

<body>
<?php 
require 'connect.php';

$ID_research = $_REQUEST['ID_research'];
$ID_researcher = $_REQUEST['ID_researcher'];
$date = $_REQUEST['date'];
$ID_fish_farm = $_REQUEST['ID_fish_farm'];
 $anamnesis = $_REQUEST['anamnesis'];
 $clinical_data = $_REQUEST['clinical_data'];
 $pathoanatomical_data = $_REQUEST['pathoanatomical_data'];
 $laboratory_data = $_REQUEST['laboratory_data'];
 $morbility = $_REQUEST['morbility'];
 $mortality = $_REQUEST['mortality'];
 $diagnosis = $_REQUEST['diagnosis'];
 $comment = $_REQUEST['comment'];
 
 
 mysqli_set_charset($db, "utf8");
 
 $insert_sql = "INSERT INTO researches (ID_research, ID_researcher, date, ID_fish_farm, anamnesis, clinical_data, pathoanatomical_data,laboratory_data, morbility, mortality, diagnosis, comment)" . "VALUES('{$ID_research}','{$ID_researcher}','{$date}','{$ID_fish_farm}', '{$anamnesis}', '{$clinical_data}', '{$pathoanatomical_data}', '{$laboratory_data}', '{$morbility}', '{$mortality}', '{$diagnosis}', '{$comment}');";

   
  mysqli_query($db, $insert_sql) or die("<p>При добавлении в таблицу ИССЛЕДОВАТНИЯ произошла ошибка!</p>" . mysql_error()); 
  echo '<p>Запись была успешно добавлена  в таблицу ИССЛЕДОВАНИЯ!</p>'; //сохраняем таблицу 5
  ?>
<a href="TableFive.php">Вернуться к таблице "Исследования"</a><br/><br/>
</body>
</html>