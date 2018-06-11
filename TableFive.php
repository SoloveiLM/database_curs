<div id="block-content">

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
      <h3>Выбрать таблицу</h3>
<a href="index.php"><input id="submit" type="submit" value="Общие данные"></a>
<a href="TableOne.php"><input id="submit" type="submit" value="Хозяйства"></a>
<a href="TableTwo.php"><input id="submit" type="submit" value="Рыба"></a>
<a href="TableThree.php"><input id="submit" type="submit" value="Место отлова"></a>
<a href="TableFour.php"><input id="submit" type="submit" value="Кто исследовал"></a>
<a href="TableFive.php"><input id="submit" type="submit" value="Результат исследования"></a>
 <h3>Выбрать действие</h3>
<a href="info_form5.php">Добавить данные</a><br/>
<a href="select5.php">Редактировать данные</a><br/>
<a href="select_delete5.php">Удалить данные</a><br/>
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
    <caption><h1><strong>Результаты исследования</strong></h1></caption>
    <tr><th>Номер исследования</th><th>Дата</th><th>Анамнез</th><th>Клинические данные</th><th>Патологоанатом данные</th><th>Лабораторные данные</th><th>Заболеваемость</th><th>Смертность</th><th>Диагноз</th><th>Комментарии</th></tr>
  </center>
  <?php

header("Content-Type: text/html; charset=UTF-8");
$db = mysqli_connect("127.0.0.1","fish_user", "fish_password", "fish") or die ("Error");
$db->query( "SET CHARSET utf8" );
$query = "SELECT * FROM researches";
$result = mysqli_query($db, $query);
while($row = mysqli_fetch_array($result)){
	echo "<tr><td>".$row["ID_research"]."</td><td>".$row["date"]."</td><td>".$row["anamnesis"]."</td><td>".$row["clinical_data"]."</td><td>".$row["pathoanatomical_data"]."</td><td>".$row["laboratory_data"]."</td><td>".$row["morbility"]."</td><td>".$row["mortality"]."</td><td>".$row["diagnosis"]."</td><td>".$row["comments"]."</td></tr>";
}
?>