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
    <caption><h1><strong>Заболеваемость по видам рыб</strong></h1></caption>

    <tr><th>id</th><th>Вид рыбы</th><th>Возраст</th><th>Вес</th><th>Длина</th><th>Заболевание</th></tr>
  </center>

<?php


header("Content-Type: text/html; charset=UTF-8");
$diagnos = $_REQUEST['diagnos'];


    $diagnos = trim($diagnos); 
    $diagnos = mysql_real_escape_string($diagnos);
    $diagnos = htmlspecialchars($diagnos);

$db = mysqli_connect("127.0.0.1","fish_user", "fish_password", "fish") or die ("Error");
$db->query( "SET CHARSET utf8" );
$query = "SELECT fishes.ID_fish, fishes.fish, fishes.age, fishes.weight, fishes.length, researches.diagnosis FROM `fishes`,`fish_farm`,`researches` WHERE fishes.ID_fish= fish_farm.ID_fish AND fish_farm.ID_fish_farm=researches.ID_fish_farm AND researches.diagnosis LIKE '$diagnos'";
$result = mysqli_query($db, $query);
while($row = mysqli_fetch_array($result)){
	echo "<tr><td>".$row["ID_fish"]."</td><td>".$row["fish"]."</td><td>".$row["age"]."</td><td>".$row["weight"]."</td><td>".$row["length"]."</td><td>".$row["diagnosis"]."</td></tr>";
}

mysqli_free_result($result);
mysqli_close($db);

 
?>
 
       
</body>
</html>