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
<form action="form3.php" method="POST" name="forma">
<fieldset>
<h2>Место отлова</h2>
<label for="ID_fish_farm">Номер места отлова:</label><br/><input type="int" name="ID_fish_farm" size="100"><br/>
<label for="ID_fish">Номер рыбы:</label><br/><input type="int" name="ID_fish" size="100"><br/>
<label for="place">Место отлова:</label><br/><input type="text" name="place" size="100"><br/>
<label for="ID_farm">Номер хозяйства:</label><br/><input type="int" name="ID_farm" size="100"><br/></fieldset><br/>
<fieldset>
<input id="submit" type="submit" value="Добавить данные" >
</fieldset>
  <a href="info_form3.php">Добавить данные</a><br/><br/>
  <a href="index.php">Вернуться к главной</a><br/><br/>
  <a href="TableThree.php">Вернуться к таблице "Место исследования"</a><br/><br/>
  <a href="select3.php">Вернуться к выбору данных для редактирования</a><br/><br/>
</form>
</body>
</html>