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
$ID_research=$_REQUEST['user']; 
$select_sql="SELECT * FROM researches WHERE ID_research= $ID_research"; 
mysqli_set_charset($db, "utf8");
$result = mysqli_query($db, $select_sql); 
$row = mysqli_fetch_array($result); 

printf("<form action='update5.php' method='POST' name='forma'> 
        <fieldset> 
		      <label for='ID_research'>Номер исследования:</label><br/><input type='int' name='ID_research' size='30' value='%s'> 
			   <label for='ID_researcher'>Номер исследователя:</label><br/><input type='int' name='IID_researcher' size='30' value='%s'> 
			   <label for='date'>Дата:</label><br/><input type='date' name='date' size='30' value='%s'>
			    <label for='ID_fish_farm'>Номер места отрлова:</label><br/><input type='int' name='ID_fish_farm' size='30' value='%s'> 		          
				  <label for='anamnesis'>Анамнез:</label><br/><input type='text' name='anamnesis' size='100' value='%s'> 
				  <label for='clinical_data'>Клинические данные:</label><br/><input type='text' name='clinical_data' size='100' value='%s'>	
				   <label for='pathoanatomical_data'>Патологоанатомические данные:</label><br/><input type='text' name='pathoanatomical_data' size='100' value='%s'>
				    <label for='laboratory_data'>Лабораторные данные:</label><br/><input type='text' name='laboratory_data' size='100' value='%s'>
					 <label for='morbility'>Заболеваемость:</label><br/><input type='text' name='morbility' size='30' value='%s'>
					  <label for='mortality'>Смертность:</label><br/><input type='text' name='mortality' size='30' value='%s'>
					   <label for='diagnosis'>Диагноз:</label><br/><input type='text' name='diagnosis' size='100' value='%s'>
					    <label for='comment'>Комментарии:</label><br/><input type='text' name='comment' size='100' value='%s'>			  
		</fieldset> 
		<br/> 
		
		<fieldset>
		  <input id='submit' type='submit' value='Редактировать запись'><br/>
	    </fieldset> 
		  </form>", $row['ID_research'], $row['ID_researcher'], $row['date'], $row['ID_fish_farm'], $row['anamnesis'], $row['clinical_data'], $row['pathoanatomical_data'], $row['laboratory_data'], $row['morbility'], $row['mortality'], $row['diagnosis'], $row['comment']); 
?> 
<a href="info_form4.html">Добавить данные</a><br/><br/> 
<a href="index.php">Вернуться к главной</a><br/><br/> 
<a href="select5.php">Вернуться к выбору записей для редактирования</a><br/><br/>      
</body>
</html>