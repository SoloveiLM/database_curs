<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Документ без названия</title>
</head>

<body>

<?php
require 'connect.php';

ini_set('display_errors',1);
error_reporting(E_ALL);


 $farm = $_REQUEST['farm'];
 $address = $_REQUEST['address'];
 $director = $_REQUEST['director'];
 $head_doctor = $_REQUEST['head_doctor'];
 $vet = $_REQUEST['vet'];
 $fish = $_REQUEST['fish'];
 $age = $_REQUEST['age'];
 $weight = $_REQUEST['weight'];
 $length = $_REQUEST['length'];
 //$ID_fish_farm = $_REQUEST['ID_fish_farm'];
//$ID_fish = $_REQUEST['ID_fish'];
 $place = $_REQUEST['place'];
 // $ID_researcher = $_REQUEST['ID_researcher'];
 //$ID_farm = $_REQUEST['ID_farm'];
 $researcher = $_REQUEST['researcher'];
 $position = $_REQUEST['position'];
 $work_place = $_REQUEST['work_place'];
 $date = $_REQUEST['date'];
 $anamnesis = $_REQUEST['anamnesis'];
 $clinical_data = $_REQUEST['clinical_data'];
 $pathoanatomical_data = $_REQUEST['pathoanatomical_data'];
 $laboratory_data = $_REQUEST['laboratory_data'];
 $morbility = $_REQUEST['morbility'];
 $mortality = $_REQUEST['mortality'];
 $diagnosis = $_REQUEST['diagnosis'];
 $comments = $_REQUEST['comments'];


 mysqli_set_charset($db, "utf8");

 $insert_sql1 = "INSERT INTO farms (farm, address, director, head_doctor, vet)" . "VALUES('{$farm}', '{$address}', '{$director}', '{$head_doctor}', '{$vet}');";
  $insert_sql2 = "INSERT INTO fishes (fish, age, weight, length)" . "VALUES('{$fish}', '{$age}', '{$weight}', '{$length}');";
 // $insert_sql3 = "INSERT INTO fish_farm (ID_fish_farm, ID_fish, place, ID_farm)" . "VALUES('{$ID_fish_farm}', '{$ID_fish}', '{$place}', '{$ID_farm}');";
  $insert_sql3 = "INSERT INTO fish_farm (place)" . "VALUES('$place');";
 //$insert_sql4 = "INSERT INTO researchers (ID_researcher, researcher, position, work_place)" . "VALUES('{$ID_researcher}', '{$researcher}', '{$position}', '{$work_place}');";
  $insert_sql4 = "INSERT INTO researchers (researcher, position, work_place)" . "VALUES('{$researcher}', '{$position}', '{$work_place}');";
	 $insert_sql5 = "INSERT INTO researches (date, anamnesis, clinical_data, pathoanatomical_data,laboratory_data, morbility, mortality, diagnosis, comments)" . "VALUES('{$date}', '{$anamnesis}', '{$clinical_data}', '{$pathoanatomical_data}', '{$laboratory_data}', '{$morbility}', '{$mortality}', '{$diagnosis}', '{$comments}');";


 mysqli_query($db, $insert_sql1) or die("<p>При добавлении в таблицу ХОЗЯЙСТВА произошла ошибка</p>" . mysql_error());
  echo '<p>Запись была успешно добавлена  в таблицу ХОЗЯЙСТВА!</p>'; //сохраняем таблицу 1
   mysqli_query($db, $insert_sql2) or die("<p>При добавлении в  таблицу ОБЪЕКТ ИССЛЕДОВАНИЯ произошла ошибка</p>" . mysql_error());
    echo '<p>Запись была успешно добавлена в таблицу ОБЪЕКТ ИССЛЕДОВАНИЯ!</p>'; //сохраняем таблицу 2
   mysqli_query($db, $insert_sql3) or die("<p>При добавлении в таблицу МЕСТО ОТЛОВА произошла ошибка!</p>" . mysql_error());
  echo '<p>Запись была успешно добавлена  в таблицу МЕСТО ОТЛОВА!</p>'; //сохраняем таблицу 3
   mysqli_query($db, $insert_sql4) or die("<p>При добавлении в таблицу ИССЛЕДОВАТЕЛИ произошла ошибка</p>" . mysql_error());
    echo '<p>Запись была успешно добавлена в таблицу ИССЛЕДОВАТЕЛИ!</p>'; //сохраняем таблицу 4
   mysqli_query($db, $insert_sql5) or die("<p>При добавлении в таблицу ИССЛЕДОВАНИЯ произошла ошибка</p>" . mysql_error());
    echo '<p>Запись была успешно добавлена в таблицу ИССЛЕДОВАНИЯ!</p>'; //сохраняем таблицу 5

 ?>

<a href="info_form.php">Добавить данные</a><br/><br/>
<a href="index.php">Вернуться к главной</a><br/><br/>

</body>
</html>