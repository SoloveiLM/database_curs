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
$ID_farm = $_REQUEST['user']; 
$select_sql = "SELECT * FROM farms WHERE ID_farm= $ID_farm"; 
mysqli_set_charset($db, "utf8");
$result = mysqli_query($db, $select_sql); 
$row = mysqli_fetch_array($result); 

printf("<form action='update1.php' method='POST' name='forma'> 
        <fieldset> 
		      <label for='ID_farm'>Номер:</label><br/> <input type='int' name='ID_farm' size='30' value='%s'> 
		          <label for='farm'>Название хозяйства:</label><br/> <input type='text' name='farm' size='30' value='%s'>
				  <label for='address'>Адрес:</label><br/> <input type='text' name='address' size='30' value='%s'> 
				  <label for='director'>Директор:</label><br/> <input type='text' name='director' size='30' value='%s'> 
		          <label for='head_doctor'>Главврач:</label><br/> <input type='text' name='head_doctor' size='30' value='%s'>
				  <label for='vet'>Ветврач:</label><br/> <input name='vet' type='text' size='30' value='%s'> <br/> 				  
		</fieldset> 
		<br/> 
		
		<fieldset>
		  <input id='submit' type='submit' value='Редактировать запись'><br/>
	    </fieldset> 
		  </form>", $row['ID_farm'], $row['farm'], $row['address'], $row['director'], $row['head_doctor'], $row['vet']); 
?> 
<a href="info_form.html">Добавить данные</a><br/><br/> 
<a href="index.php">Вернуться к таблице</a><br/><br/> 
<a href="select.php">Вернуться к выбору записей для редактирования</a><br/><br/>


      
</body>
</html>