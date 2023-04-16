<!DOCTYPE html>
<html>
<head>
<title>Добавление игр</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../style/headerstyle.css" />
</head>
<body>
<body style="background-image: url(../image/backgr.jpg)">
<div class="topnav" id="myTopnav">
    <a class="active" href="../site/home.html">Главная</a>
    <a href="load_game.php">Обновления создать</a>
    <a href="Infousers.php" onclick="openNav()" >Инфо о пользователях </a>
    <div class="search-container">
        <a href="../site/home.html">Выход</a>
    </div>
</div>
  <div class='centralize'>
    <form class="block" action="../scripts/new_game.php" method="post">
      <fieldset>
        <p><b>Название</b></p>
        <input type="text" size="50" name="name" maxlength="50" required>
        <p><b>Адрес</b></p>
        <input type="text" size="50" name="address" maxlength="50" required>
        <p><b>Описание</b></p>
        <input type="text" size="50" name="description" maxlength="5000" required>
        <p><b>Путь к картинке</b></p>
        <input type="text" size="50" name="img_path" required>
        <input type="submit"><input type="reset">
        </fieldset>
    </form>
  </div>
</body>
</html>
