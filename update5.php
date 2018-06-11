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
$ID_research=($_REQUEST['ID_research']); 
$ID_researcher=trim($_REQUEST['ID_researcher']); 
$date=trim($_REQUEST['date']); 
$ID_fish_farm=trim($_REQUEST['ID_fish_farm']); 
$anamnesis =($_REQUEST['anamnesis']); 
$clinical_data=trim($_REQUEST['clinical_data']); 
$pathoanatomical_data=trim($_REQUEST['pathoanatomical_data']); 
$laboratory_data=trim($_REQUEST['laboratory_data']);
$morbility =($_REQUEST['morbility']); 
$mortality=trim($_REQUEST['mortality']); 
$diagnosis=trim($_REQUEST['diagnosis']); 
$comment=trim($_REQUEST['comment']);

 $update_sql = "UPDATE researches SET ID_research='$ID_research',  	ID_researcher='$ID_researcher', date='$date', ID_fish_farm='$ID_fish_farm', anamnesis='$anamnesis', clinical_data='$clinical_data', pathoanatomical_data='$pathoanatomical_data', laboratory_data='$laboratory_data', morbility='$morbility', mortality='$mortality', diagnosis='$diagnosis', comment='$comment' WHERE ID_research='$ID_research'"; 
 mysqli_query($db, $update_sql) or die("Ошибка вставки!" . mysql_error());
 
  echo '<p>Запись успешно обновлена!</p>'; 
  ?> 
 
  <a href="TableFive.php">Вернуться к таблице "Исследования"</a><br/><br/> 
  <a href="select4.php">Вернуться к выбору данных для редактирования</a><br/><br/>      
</body>
</html>