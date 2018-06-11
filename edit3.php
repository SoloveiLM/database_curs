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
$ID_fish_farm = $_REQUEST['user']; 
$select_sql = "SELECT * FROM fish_farm WHERE ID_fish_farm=$ID_fish_farm"; 
mysqli_set_charset($db, "utf8");
$result = mysqli_query($db, $select_sql); 
$row = mysqli_fetch_array($result); 

printf("<form action='update3.php' method='POST' name='forma'> 
        <fieldset> 
		      <label for='ID_fish_farm'>Номер места:</label><br/> <input type='int' name='ID_fish_farm' size='30' value='%s'> 
		          <label for='ID_fish'>Номер рыбы:</label><br/> <input type='int' name='ID_fish' size='30' value='%s'>
				  <label for='place'>Место отлова:</label><br/> <input type='text' name='place' size='30' value='%s'> 
				  <label for='ID_farm'>Номер хозяйства:</label><br/> <input type='int' name='ID_farm' size='30' value='%s'> 			  
		</fieldset> 
		<br/> 
		
		<fieldset>
		  <input id='submit' type='submit' value='Редактировать запись'><br/>
	    </fieldset> 
		  </form>", $row['ID_fish_farm'], $row['ID_fish'], $row['place'], $row['ID_farm']); 
?> 
<a href="info_form3.html">Добавить данные</a><br/><br/> 
<a href="TableThree.php">Вернуться к таблице "Место отлова"</a><br/><br/> 
<a href="select3.php">Вернуться к выбору записей для редактирования</a><br/><br/>


      
</body>
</html>