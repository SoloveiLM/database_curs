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
$ID_farm =($_REQUEST['ID_farm']); 
$farm=trim($_REQUEST['farm']); 
$address=trim($_REQUEST['address']); 
$director=trim($_REQUEST['director']); 
$head_doctor=trim($_REQUEST['head_doctor']);
$vet=trim($_REQUEST['vet']);

 $update_sql = "UPDATE farms SET ID_farm='$ID_farm', farm='$farm', address='$address', director='$director', head_doctor='$head_doctor', vet='$vet' WHERE ID_farm='$ID_farm'"; 
 mysqli_query($db, $update_sql) or die("Ошибка вставки!" . mysql_error());
 
  echo '<p>Запись успешно обновлена!</p>'; 
  ?> 
 
  <a href="TableOne.php">Вернуться к таблице "Хозяйства"</a><br/><br/> 
  <a href="select.php">Вернуться к выбору данных для редактирования</a><br/><br/>


      
</body>
</html>