<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" content="width=device-width, initial-scale=1">
  <title>База игр</title>
  <link rel="stylesheet" href="../style/headerstyle.css" />
  <style>
  table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
  }

  td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
  }

  tr:nth-child(even) {
      background-color: #dddddd;
  }
  button {
  padding: 10px;
  background-color: grey;
  margin-left: 20px;


  }
  .Pop{
  width: 100%;
  }
  </style>
</head>

<body style="background-image: url(../image/backgr.jpg)">
<div class="topnav" id="myTopnav">
  <a class="active" href="../admin/admin.html">Главная</a>
  <a href="#Update">Обновления создать</a>
  <div class="search-container">
    <a href="../site/home.html">Выход</a>

  </div>


</div>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <div class="overlay-content">
    <a href="#">Редактирование профиля</a>
    <a href="#">Просмотр счета</a>
    <a href="#">Сервис</a>
    <a href="#">Контактные данные</a>
  </div>
</div>


<h2>Список пользователей</h2>
<?php


$conn = mysqli_connect("localhost", "root", "root", "games");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM users";
if($result = mysqli_query($conn, $sql)){

    $rowsCount = mysqli_num_rows($result); // количество полученных строк
    echo "<p>Получено объектов: $rowsCount</p>";

echo "<table><tr><th>Id</th><th>Имя</th><th>Логин</th><th>пароль</th><th>Редактирование</tr>";
?>
<?php
  foreach($result as $row){
  echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["login"] . "</td>";
    echo "<td>" . $row["nickname"] . "</td>";
    echo "<td>" . $row["password"] .  "      </td>";?>
    <td><button>Удалить</button><button>Редактирование</button> </td> <input type="text">
    <?php
    echo "</tr>";
  }
  echo "</table>";
mysqli_free_result($result);
} else{
echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>


<script src="../scripts/headerscript.js"></script>
</body>
</html>