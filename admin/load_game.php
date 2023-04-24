
<!DOCTYPE html>
<html>
<head>
<title>Редактирование пользователей</title>
<meta charset="utf-8" />
</head>
<body>
<!DOCTYPE html>
<html lang="en">
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

  a{
  color: black;
  }
  </style>
<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1">
    <title>База игр</title>
    <link rel="stylesheet" href="../style/headerstyle.css" />
</head>

<body style="background-image: url(../image/backgr.jpg)">
<div class="topnav" id="myTopnav">
    <a class="active" href="../admin/admin.html">Главная</a>
    <div class="search-container">
        <a href="../admin/admin.html">Выход</a>

    </div>
</div>


    <h2>Список Обновлений</h2>

<button><a href="add_game.php">Добавить игру</a></button>
 <?php
 $conn = mysqli_connect("localhost", "root", "root", "games");
 if (!$conn) {
   die("Ошибка: " . mysqli_connect_error());
 }
 $sql = "SELECT * FROM games_load";
 if($result = mysqli_query($conn, $sql)){

     $rowsCount = mysqli_num_rows($result); // количество полученных строк
     echo "<p>Получено объектов: $rowsCount</p>";

 echo "<table><tr><th>Id</th><th>Имя</th><th>Адрес</th><th>Дата</th><th>Описание<th>Путь</th><th>Редактирование<th></tr>";
 ?>
 <?php
   foreach($result as $row){
   echo "<tr>";
     echo "<td>" . $row["id"] . "</td>";
     echo "<td>" . $row["name"] . "</td>";
     echo "<td>" . $row["address"] . "</td>";
     echo "<td>" . $row["placement_date"] .  "      </td>";
     echo "<td>" . $row["description"] .  "      </td>";
     echo "<td>" . $row["img_path"] .  "      </td>";
     echo "<td><form action='../scripts/delete_game.php' method='post'>
                             <input type='hidden' name='id' value='" . $row["id"] . "' />
                             <input type='submit' value='Удалить'>
                         <a href='game_update.php?id=" . $row["id"] . "'>Обновить</a>
                         </form></td>";

     echo "</tr>";
   }
   echo "</table>";
 mysqli_free_result($result);
 } else{
 echo "Ошибка: " . mysqli_error($conn);
 }
 mysqli_close($conn);
 ?>
</div>