<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<title>Вносим изменения</title>
</head>

<body>
<?php 
require 'connect.php'; 
$ID_fish=$_REQUEST['user']; 
$select_sql="SELECT * FROM fishes WHERE ID_fish=$ID_fish"; 
mysqli_set_charset($db, "utf8");
$result = mysqli_query($db, $select_sql); 
$row = mysqli_fetch_array($result); 

printf("<form action='update2.php' method='POST' name='forma'> 
        <fieldset> 
		      <label for='ID_fish'>Номер:</label><br/> <input type='int' name='ID_fish' size='30' value='%s'> 
		          <label for='fish'>Вид рыбы:</label><br/> <input type='text' name='fish' size='30' value='%s'>
				  <label for='age'>Возраст:</label><br/> <input type='int' name='age' size='30' value='%s'> 
				  <label for='weight'>Вес:</label><br/> <input type='int' name='weight' size='30' value='%s'>	
				  <label for='length'>Длина:</label><br/> <input type='int' name='length' size='30' value='%s'>			  
		</fieldset> 
		<br/> 
		
		<fieldset>
		  <input id='submit' type='submit' value='Редактировать запись'><br/>
	    </fieldset> 
		  </form>", $row['ID_fish'], $row['fish'], $row['age'], $row['weight'], $row['length']); 
?> 
<a href="info_form2.html">Добавить данные</a><br/><br/> 
<a href="index.php">Вернуться к главной</a><br/><br/> 
<a href="select2.php">Вернуться к выбору записей для редактирования</a><br/><br/>
      
</body>
</html>