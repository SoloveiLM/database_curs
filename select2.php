<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<title>Редактировать</title>
</head>

<body>
   <form action="edit2.php" method="POST" name="forma"> 
     <fieldset> 
     <h2>Выбрать данные для редактирования</h2>
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
        <input type="submit" value="Выбрать данные"> 
     </fieldset> 
      </form> 
   
  <a href="index.php">Вернуться к главной</a><br/><br/> 
  <a href="TableTwo.php">Вернуться к таблице "Объекты исследования"</a><br/><br/>       
</body>
</html>