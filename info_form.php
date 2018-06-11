<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<title>Monitoring</title>
</head>

<body>
<h3>Выбрать таблицу</h3>
<a href="TableOne.php"><input id="submit" type="submit" value="Хозяйства"></a>
<a href="TableTwo.php"><input id="submit" type="submit" value="Рыба"></a>
<a href="TableThree.php"><input id="submit" type="submit" value="Место отлова"></a>
<a href="TableFour.php"><input id="submit" type="submit" value="Кто исследовал"></a>
<a href="TableFive.php"><input id="submit" type="submit" value="Результат исследования"></a>
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
<form action="form.php" method="POST" name="forma">
<fieldset>
<h2>Хозяйство</h2>
<label for="farm">Название хозяйства:</label><br/><input type="text" name="farm" size="100"><br/>
<label for="address">Адрес хозяйства:</label><br/><input type="text" name="address" size="100"><br/>
<label for="director">Директор:</label><br/><input type="text" name="director" size="100"><br/>
<label for="head_doctor">Главврач:</label><br/><input type="text" name="head_doctor" size="100"><br/>
<label for="vet">Ветврач:</label><br/><input type="text" name="vet" size="100">
<h2>Объект исследования</h2>
<label for="fish">Вид рыбы:</label><br/><input type="text" name="fish" size="100"><br/>
<label for="age">Возраст,лет:</label><br/><input type="int" name="age" size="60"><br/>
<label for="weight">Вес,г:</label><br/><input type="int" name="weight" size="60"><br/>
<label for="length">Длина,см:</label><br/><input type="int" name="length" size="60"><br/>
<!--<h2>Место отлова</h2>
<label for="ID_fish_farm">Номер места отлова:</label><br/><input type="int" name="ID_fish_farm" size="60"><br/>
<label for="ID_fish">Номер рыбы:</label><br/><input type="int" name="ID_fish" size="60"><br/>-->
<label for="place">Место отлова:</label><br/><input type="text" name="place" size="100"><br/>
<!--<label for="ID_farm">Номер хозяйства:</label><br/><input type="int" name="ID_farm" size="60"><br/>-->
<h2>Результаты исследования</h2>
<label for="anamnesis">Анамнез:</label><br/><input type="text" name="anamnesis" size="100"><br/>
<label for="clinical_data">Клинические данные:</label><br/><input type="text" name="clinical_data" size="100"><br/>
<label for="pathoanatomical_data">Патологоанатомические данные:</label><br/><input type="text" name="pathoanatomical_data" size="100"><br/>
<label for="laboratory_data">Лабораторные данные:</label><br/><input type="text" name="laboratory_data" size="100"><br/>
<label for="morbility">Заболеваемость,%:</label><br/><input type="int" name="morbility" size="60"><br/>
<label for="mortality">Смертность,%:</label><br/><input type="int" name="mortality" size="60"><br/>
<label for="diagnosis">Диагноз:</label><br/><input type="text" name="diagnosis" size="100"><br/>
<label for="comments">Комментарии:</label><br/><input name="comments" type="text" value="" size="100">
 <label for="date">Дата проведения исследования:</label><br/><input type="date" name="date" value="" size="60"><br/>
 <label for="researcher">Исследователь:</label><br/><input name="researcher" type="text" value="" size="100">
<label for="position">Должность:</label><br/><input name="position" type="text" value="" size="100">
<label for="work_place">Место работы:</label><br/><input name="work_place" type="text" value="" size="100">

</fieldset> <br/>
<fieldset>
<input id="submit" type="submit" value="Добавить данные" >
</fieldset>
  <a href="info_form.html">Добавить данные</a><br/><br/>
  <a href="index.php">Вернуться к главной</a><br/><br/>
  <a href="select.php">Вернуться к выбору данных для редактирования</a><br/><br/>
</form>
</body>
</html>