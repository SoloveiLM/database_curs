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
<form action="form4.php" method="POST" name="forma">
<fieldset>
<h2>Исследователи</h2>
<label for="ID_researcher">Номер исследователя:</label><br/><input type="int" name="ID_researcher" size="100"><br/>
<label for="researcher">ФИО:</label><br/><input type="int" name="researcher" size="100"><br/>
<label for="position">Должность:</label><br/><input type="text" name="position" size="100"><br/>
<label for="work_place">Место работы:</label><br/><input type="text" name="work_place" size="100"><br/>
</fieldset> <br/>
<fieldset>
<input id="submit" type="submit" value="Добавить данные" >
</fieldset>
  <a href="info_form4.php">Добавить данные</a><br/><br/>
  <a href="index.php">Вернуться к главной</a><br/><br/>
  <a href="TableFour.php">Вернуться к таблице "Исследователи"</a><br/><br/>
  <a href="select4.php">Вернуться к выбору данных для редактирования</a><br/><br/>
</form>
</body>
</html>