<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<title>Добавление</title>
</head>

<body>
<h3>Выбрать таблицу</h3>
<a href="TableOne.php"><input id="submit" type="submit" value="Хозяйства"></a>
<a href="TableTwo.php"><input id="submit" type="submit" value="Рыба"></a>
<a href="TableThree.php"><input id="submit" type="submit" value="Место отлова"></a>
<a href="TableFour.php"><input id="submit" type="submit" value="Кто исследовал"></a>
<a href="TableFive.php"><input id="submit" type="submit" value="Результат исследования"></a>
<form action="form5.php" method="POST" name="forma">
<fieldset>
<h2>Исследование</h2>
<label for="ID_research">Номер исследования:</label><br/><input type="int" name="ID_research" size="100"><br/>
<label for="ID_researcher">Номер исследователя:</label><br/><input type="int" name="ID_researcher" size="100"><br/>
<label for="date">Дата:</label><br/><input type="date" name="date" size="100"><br/>
<label for="ID_fish_farm">Номер хозяйства:</label><br/><input type="int" name="ID_fish_farm" size="100"><br/>
<label for="anamnesis">Анамнез:</label><br/><input type="text" name="anamnesis" size="100"><br/>
<label for="clinical_data">Клинические данные:</label><br/><input type="text" name="clinical_data" size="100"><br/>
<label for="pathoanatomical_data">Патологоанатомические данные:</label><br/><input type="text" name="pathoanatomical_data" size="100"><br/>
<label for="laboratory_data">Лабораторные данные:</label><br/><input type="text" name="laboratory_data" size="100"><br/>
<label for="morbility">Заболеваемость:</label><br/><input type="int" name="morbility" size="60"><br/>
<label for="mortality">Смертность:</label><br/><input type="int" name="mortality" size="60"><br/>
<label for="diagnosis">Диагноз:</label><br/><input type="text" name="diagnosis" size="60"><br/><label for="comment">Комментарии:</label><br/><input name="comment" type="text" value="" size="100">
</fieldset> <br/>
<fieldset>
<input id="submit" type="submit" value="Добавить данные" >
</fieldset>
  <a href="info_form5.php">Добавить данные</a><br/><br/>
  <a href="index.php">Вернуться к главной</a><br/><br/>
  <a href="TableFive.php">Вернуться к таблице "Исследователи"</a><br/><br/>
  <a href="select5.php">Вернуться к выбору данных для редактирования</a><br/><br/>
</form>
</body>
</html>