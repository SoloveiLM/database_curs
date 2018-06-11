<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<title>Редактировать</title>
</head>

<body>
   <form action="edit4.php" method="POST" name="forma"> 
     <fieldset> 
     <h2>Выбрать данные для редактирования</h2>
<?php 
require 'connect.php'; 
$select_sql = "SELECT ID_researcher, researcher, position, work_place FROM researchers"; 
$result = mysqli_query($db, $select_sql); 
$row = mysqli_fetch_array($result); 
do 
  {
	 printf("<input type='radio' name='user' value='%s'<br>%s,%s,%s<br/>", $row['ID_researcher'], $row['researcher'], $row['position'], $row['work_place']); 
	 } 
	 while($row = mysqli_fetch_array($result));
	 
	 ?>
     </fieldset> 
     
     <fieldset> 
        <input type="submit" value="Выбрать данные"> 
     </fieldset> 
      </form> 
   
  <a href="index.php">Вернуться к главной</a><br/><br/> 
  <a href="TableFour.php">Вернуться к таблице "Исследователи"</a><br/><br/>       
</body>
</html>