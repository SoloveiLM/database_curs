<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<title>Выбор пользователя для удаления</title>
</head>

<body>
  <h3>Выбрать таблицу</h3>
<a href="TableOne.php"><input id="submit" type="submit" value="Хозяйства"></a>
<a href="TableTwo.php"><input id="submit" type="submit" value="Рыба"></a>
<a href="TableThree.php"><input id="submit" type="submit" value="Место отлова"></a>
<a href="TableFour.php"><input id="submit" type="submit" value="Кто исследовал"></a>
<a href="TableFive.php"><input id="submit" type="submit" value="Результат исследования"></a>
   <form action="delete.php" method="POST" name="forma">
     <fieldset>
<?php
require 'connect.php';
$select_sql1 = "SELECT ID_farm, farm, address,director, head_doctor,vet FROM farms";
$result1 = mysqli_query($db, $select_sql1);
$row = mysqli_fetch_array($result1);
do
  {
    printf("<input type='radio' name='user' value='%s'<br>%s,%s,%s,%s,%s<br/>", $row['ID_farm'], $row['farm'], $row['address'], $row['director'], $row['head_doctor'], $row['vet']);
   }
   while($row = mysqli_fetch_array($result1));

   $select_sql2 = "SELECT ID_fish, fish, age, weight, length FROM fishes";
$result2 = mysqli_query($db, $select_sql2);
$row = mysqli_fetch_array($result2);
do
  {
    printf("<input type='radio' name='user' value='%s'<br>%s,%s,%s,%s<br/>", $row['ID_fish'], $row['fish'], $row['age'], $row['weight'], $row['length']);
   }
   while($row = mysqli_fetch_array($result2));

   $select_sql3 = "SELECT ID_fish_farm, ID_fish, place, ID_farm FROM fish_farm";
$result3 = mysqli_query($db, $select_sql3);
$row = mysqli_fetch_array($result3);
do
  {
    printf("<input type='radio' name='user' value='%s'<br>%s,%s,%s<br/>", $row['ID_fish_farm'], $row['ID_fish'], $row['place'], $row['ID_farm']);
   }
   while($row = mysqli_fetch_array($result3));

	 $select_sql4 = "SELECT ID_researcher, researcher, position, work_place FROM researchers";
$result4 = mysqli_query($db, $select_sql4);
$row = mysqli_fetch_array($result4);
do
  {
    printf("<input type='radio' name='user' value='%s'<br>%s,%s,%s<br/>", $row['ID_researcher'], $row['researcher'], $row['position'], $row['work_place']);
   }
   while($row = mysqli_fetch_array($result4));

   $select_sql5 = "SELECT ID_research, ID_researcher, date, ID_fish_farm, anamnesis, clinical_data, pathoanatomical_data, laboratory_data, morbility, mortality, diagnosis, comment  FROM researches";
$result5 = mysqli_query($db, $select_sql5);
$row = mysqli_fetch_array($result5);
do
  {
    printf("<input type='radio' name='user' value='%s'<br>%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s<br/>", $row['ID_research'], $row['ID_researcher'], $row['date'], $row['ID_fish_farm'], $row['anamnesis'], $row['clinical_data'], $row['pathoanatomical_data'], $row['laboratory_data'], $row['morbility'], $row['mortality'], $row['diagnosis'], $row['comment']);
   }
   while($row = mysqli_fetch_array($result5));
	 ?>
     </fieldset>

     <fieldset>
        <input type="submit" value="Удалить данные">
     </fieldset>
      </form>

  <a href="index.php">Вернуться к таблице</a><br/><br/>



</body>
</html>