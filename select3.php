<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<title>Выбор пользователя для редактирования</title>
</head>

<body>
   <form action="edit3.php" method="POST" name="forma"> 
     <fieldset> 
     <h3>Выбрать для редактирования</h3>
<?php 
require 'connect.php'; 
$select_sql = "SELECT ID_fish_farm, ID_fish, place, ID_farm FROM fish_farm"; 
$result = mysqli_query($db, $select_sql); 
$row = mysqli_fetch_array($result); 
do 
  {
	 printf("<input type='radio' name='user' value='%s'<br>%s,%s,%s<br/>", $row['ID_fish_farm'], $row['ID_fish'], $row['place'], $row['ID_farm']); 
	 } 
	 while($row = mysqli_fetch_array($result));
	 
	 ?>
     </fieldset> 
     
     <fieldset> 
        <input type="submit" value="Редактировать"> 
     </fieldset> 
      </form> 
   
  <a href="index.php">Вернуться к таблице</a><br/><br/> 


      
</body>
</html>