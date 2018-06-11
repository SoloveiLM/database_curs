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
<form action="form1.php" method="POST" name="forma">
<fieldset>
<h2>Хозяйство</h2>
<label for="farm">Название хозяйства:</label><br/> <input type="text" name="farm" size="100"><br/>
<label for="address">Адрес хозяйства:</label><br/> <input type="text" name="address" size="100"><br/>
<label for="director">Директор:</label><br/> <input type="text" name="director" size="100"><br/>
<label for="head_doctor">Главврач:</label><br/> <input type="text" name="head_doctor" size="100"><br/>
<label for="vet">Ветврач:</label><br/> <input type="text" name="vet" size="100">

</fieldset> <br/>
<fieldset>
<input id="submit" type="submit" value="Добавить данные" >
</fieldset>
  <a href="info_form1.php">Добавить данные</a><br/><br/>
  <a href="index.php">Вернуться к главной</a><br/><br/>
  <a href="TableOne.php">Вернуться к таблице "Хозяйства"</a><br/><br/>
  <a href="select.php">Вернуться к выбору данных для редактирования</a><br/><br/>
</form>
</body>
</html>