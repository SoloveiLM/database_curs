<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<title>Удаление</title>
</head>

<body>
  <h3>Выбрать таблицу</h3>
<a href="TableOne.php"><input id="submit" type="submit" value="Хозяйства"></a>
<a href="TableTwo.php"><input id="submit" type="submit" value="Рыба"></a>
<a href="TableThree.php"><input id="submit" type="submit" value="Место отлова"></a>
<a href="TableFour.php"><input id="submit" type="submit" value="Кто исследовал"></a>
<a href="TableFive.php"><input id="submit" type="submit" value="Результат исследования"></a>
   <form action="delete2.php" method="POST" name="forma">
     <fieldset>
     <h2>Выбрать данные для удаления</h2>
<?php
require 'connect.php';
$select_sql = "SELECT ID_fish, fish, age, weight, length FROM fishes";
$result = mysqli_query($db, $select_sql);
$row = mysqli_fetch_array($result);
do
  {
	  printf("<input type='radio' name='user' value='%s'<br>%s,%s,%s,%s<br/>", $row['ID_fish'], $row['fish'], $row['age'], $row['weight'], $row['length']);
	 }
	 while($row = mysqli_fetch_array($result));

	 ?>
     </fieldset>

     <fieldset>
        <input type="submit" value="Удалить данные">
     </fieldset>
      </form>

   <a href="TableTwo.php"><input id="submit" type="submit" value="таблица Объект исследования"></a>



</body>
</html>