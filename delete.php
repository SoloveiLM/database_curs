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
$delete_sql1 = "DELETE FROM farms WHERE ID_farm=$ID_farm";

 mysqli_query($db, $delete_sql1) or die("<p>При удалении произошла ошибка</p>" . mysql_error());

  echo '<p>Запись ХОЗЯЙСТВА была успешно удалена!</p>';

  $ID_fish = $_REQUEST['user'];
$delete_sql2 = "DELETE FROM fishes WHERE ID_fish=$ID_fish";

 mysqli_query($db, $delete_sql2) or die("<p>При удалении произошла ошибка</p>" . mysql_error());

  echo '<p>Запись ОБЪЕКТ ИССЛЕДОВАНИЯ была успешно удалена!</p>';

  $ID_fish_farm = $_REQUEST['user'];
$delete_sql3 = "DELETE FROM fish_farm WHERE ID_fish_farm=$ID_fish_farm";

 mysqli_query($db, $delete_sql3) or die("<p>При удалении произошла ошибка</p>" . mysql_error());

  echo '<p>Запись МЕСТО ОТЛОВА была успешно удалена!</p>';

  $ID_researcher=$_REQUEST['user'];
$delete_sql4 = "DELETE FROM researchers WHERE ID_researcher=$ID_researcher";

 mysqli_query($db, $delete_sql4) or die("<p>При удалении произошла ошибка</p>" . mysql_error());

  echo '<p>Запись ИССЛЕДОВАТЕЛИ была успешно удалена!</p>';

  $delete_sql5 = "DELETE FROM researches WHERE ID_research=$ID_research";

 mysqli_query($db, $delete_sql5) or die("<p>При удалении произошла ошибка</p>" . mysql_error());

  echo '<p>Запись ИССЛЕДОВАНИЯ была успешно удалена!</p>';
  ?>

  <a href="index.php">Вернуться к таблице</a><br/><br/>
  <a href="select_delete.php">Вернуться к выбору данных для удаления</a><br/><br/>



</body>
</html>