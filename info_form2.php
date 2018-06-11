<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<title>Форма добавления</title>
</head>

<body>
<h3>Выбрать таблицу</h3>
<a href="TableOne.php"><input id="submit" type="submit" value="Хозяйства"></a>
<a href="TableTwo.php"><input id="submit" type="submit" value="Рыба"></a>
<a href="TableThree.php"><input id="submit" type="submit" value="Место отлова"></a>
<a href="TableFour.php"><input id="submit" type="submit" value="Кто исследовал"></a>
<a href="TableFive.php"><input id="submit" type="submit" value="Результат исследования"></a>
<form action="form2.php" method="POST" name="forma">
<fieldset>
<h2>Объект исследования</h2>
<label for="fish">Вид рыбы:</label><br/><input type="text" name="fish" size="60"><br/>
<label for="age">Возраст:</label><br/><input type="int" name="age" size="60"><br/>
<label for="weight">Вес:</label><br/><input type="int" name="weight" size="60"><br/>
<label for="length">Длина:</label><br/><input type="int" name="length" size="60"><br/>
</fieldset><br/>
<fieldset>
<input id="submit" type="submit" value="Добавить данные" >
</fieldset>
  <a href="info_form2.php">Добавить данные</a><br/><br/>
  <a href="index.php">Вернуться к главной</a><br/><br/>
  <a href="TableTwo.php">Вернуться к таблице "Место отлова"</a><br/><br/>
  <a href="select2.php">Вернуться к выбору данных для редактирования</a><br/><br/>
</form>
</body>
</html>