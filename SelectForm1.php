<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<title>Редактировать хозяйства</title>
</head>

<body>
<a href="index.php"><input id="submit" type="submit" value="Главная"></a>
   <center>
    <table border="1">
    <caption><h1><strong>Заболевания в хозяйствах</strong></h1></caption>

    <tr><th>id</th><th>Название хозяйста</th><th>Место отлова</th><th>Заболевание</th></tr>
  </center>

<?php


header("Content-Type: text/html; charset=UTF-8");
$diagnos = $_REQUEST['diagnos'];


    $diagnos = trim($diagnos); 
    $diagnos = mysql_real_escape_string($diagnos);
    $diagnos = htmlspecialchars($diagnos);

$db = mysqli_connect("127.0.0.1","fish_user", "fish_password", "fish") or die ("Error");
$db->query( "SET CHARSET utf8" );
$query = "SELECT farms.ID_farm, farms.farm, fish_farm.place, researches.diagnosis FROM `farms`, `fish_farm`,`researches` WHERE farms.ID_farm=fish_farm.ID_farm AND fish_farm.ID_fish_farm=researches.ID_fish_farm AND researches.diagnosis LIKE '$diagnos'";
$result = mysqli_query($db, $query);
while($row = mysqli_fetch_array($result)){
	echo "<tr><td>".$row["ID_farm"]."</td><td>".$row["farm"]."</td><td>".$row["place"]."</td><td>".$row["diagnosis"]."</td></tr>";
}

mysqli_free_result($result);
mysqli_close($db);

 
?>
 
       
</body>
</html>