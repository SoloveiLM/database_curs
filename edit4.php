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
$ID_researcher=$_REQUEST['user']; 
$select_sql="SELECT * FROM researchers WHERE ID_researcher= $ID_researcher"; 
mysqli_set_charset($db, "utf8");
$result = mysqli_query($db, $select_sql); 
$row = mysqli_fetch_array($result); 

printf("<form action='update4.php' method='POST' name='forma'> 
        <fieldset> 
		      <label for='ID_researcher'>Номер:</label><br/> <input type='int' name='ID_researcher' size='30' value='%s'> 
		          <label for='researcher'>ФИО:</label><br/> <input type='text' name='researcher' size='30' value='%s'>
				  <label for='position'>Должность:</label><br/> <input type='text' name='position' size='30' value='%s'> 
				  <label for='work_place'>Место работы:</label><br/> <input type='text' name='work_place' size='30' value='%s'>				  
		</fieldset> 
		<br/> 
		
		<fieldset>
		  <input id='submit' type='submit' value='Редактировать запись'><br/>
	    </fieldset> 
		  </form>", $row['ID_researcher'], $row['researcher'], $row['position'], $row['work_place']); 
?> 
<a href="info_form4.html">Добавить данные</a><br/><br/> 
<a href="index.php">Вернуться к главной</a><br/><br/> 
<a href="select4.php">Вернуться к выбору записей для редактирования</a><br/><br/>
      
</body>
</html>