<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Monitoring</title>
<style type="text/css">
table{
	border-collapse: collapse;
	width: 80%;
	font-size: 11pt;
	}
	table,th,td{
border:10px solid rgd(0,0,0);

	}
	th{
background: rgba(70,129,147,1.00);
color: white;
font-size: 15pt;
      }
	  tr:nth-child(odd){
		  background: rgba(227,227,227,1.00);
		  }
	  </style>

</head>

<body>
<h3>Выбрать таблицу</h3>
<a href="TableOne.php"><input id="submit" type="submit" value="Хозяйства"></a>
<a href="TableTwo.php"><input id="submit" type="submit" value="Рыба"></a>
<a href="TableThree.php"><input id="submit" type="submit" value="Место отлова"></a>
<a href="TableFour.php"><input id="submit" type="submit" value="Кто исследовал"></a>
<a href="TableFive.php"><input id="submit" type="submit" value="Результат исследования"></a>
 <h3>Выбрать действие</h3>
<a href="info_form.php">Добавить данные</a><br/>
<a href="select.php">Редактировать данные</a><br/>
<a href="select_delete.php">Удалить данные</a><br/>
<a onclick="printit()" href="#"><input id="submit" type="submit" value="Распечатать"></a>
<SCRIPT Language="Javascript">
function printit(){
if (window.print) {
window.print() ;
} else {
var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';
document.body.insertAdjacentHTML('beforeEnd', WebBrowser);
WebBrowser1.ExecWB(6, 2);//Use a 1 vs. a 2 for a prompting dialog box WebBrowser1.outerHTML = "";
}
}
</script>
  <center>
    <table border="1">
    <caption><h1><strong>Общие данные мониторинга заболеваний рыб</strong></h1></caption>

    <tr><th>id</th><th>Место отлова</th><th>Вид рыбы</th><th>Дата</th><th>Диагноз</th><th>Комментарий</th><th>Исследователь</th></tr>
  </center>



<?php

header("Content-Type: text/html; charset=UTF-8");
$db = mysqli_connect("127.0.0.1","fish_user", "fish_password", "fish") or die ("Error");
$db->query( "SET CHARSET utf8" );
$query = "SELECT fish_farm.ID_fish_farm, fish_farm.place, fishes.fish, researches.date, researches.diagnosis, researches.comments, researchers.researcher FROM `fish_farm`,`fishes`,`researches`, `researchers` WHERE fish_farm.ID_fish_farm=researches.ID_fish_farm AND fishes.ID_fish=fish_farm.ID_fish AND researchers.ID_researcher=researches.ID_researcher";
$result = mysqli_query($db, $query);
while($row = mysqli_fetch_array($result)){
	echo "<tr><td>".$row["ID_fish_farm"]."</td><td>".$row["place"]."</td><td>".$row["fish"]."</td><td>".$row["date"]."</td><td>".$row["diagnosis"]."</td><td>".$row["comments"]."</td><td>".$row["researcher"]."</td></tr>";
}


mysqli_free_result($result);
mysqli_close($db);
?>

</body>


<!-- ALTER TABLE `fish_farm` ADD CONSTRAINT `fish_id_1` FOREIGN KEY (`ID_fish`) REFERENCES `test_fish`.`fishes`(`ID_fish`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `fish_farm` ADD CONSTRAINT `farm_id_1` FOREIGN KEY (`ID_farm`) REFERENCES `test_fish`.`farms`(`ID_farm`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `researchers` ADD CONSTRAINT `researcher_id_1` FOREIGN KEY (`ID_researcher`) REFERENCES `test_fish`.`researches`(`ID_researcher`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `fishes` ADD CONSTRAINT `fish_id_2` FOREIGN KEY (`ID_fish`) REFERENCES `test_fish`.`fish_farm`(`ID_fish`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `fish_farm` ADD CONSTRAINT `fish_farm_3` FOREIGN KEY (`ID_fish_farm`) REFERENCES `test_fish`.`researches`(`ID_fish_farm`) ON DELETE CASCADE ON UPDATE CASCADE;





-->
</html>