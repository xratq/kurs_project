<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=games", "root", "root");
}
catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Редактирование пользователей</title>
<meta charset="utf-8" />
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1">
    <title>База игр</title>
    <link rel="stylesheet" href="../style/headerstyle.css" />
</head>

<body style="background-image: url(../image/backgr.jpg)">
<div class="topnav" id="myTopnav">
    <a class="active" href="../admin/admin.html">Главная</a>
    <a href="load_game.php">Обновления создать</a>
    <div class="search-container">
        <a href="../admin/load_game.php">Выход</a>

    </div>


</div>
<?php
// если запрос GET
if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))
{
    $userid = $_GET["id"];
    $sql = "SELECT * FROM games_load WHERE id = :userid";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":userid", $userid);
    // выполняем выражение и получаем пользователя по id
    $stmt->execute();
    if($stmt->rowCount() > 0){
        foreach ($stmt as $row) {
            $uname = $row["name"];
            $uaddress = $row["address"];
            $uplacement_date = $row["placement_date"];
            $udescription = $row["description"];
            $uimg_path = $row["img_path"];

        }

        echo "<h3>Обновление пользователя</h3>
                <form method='post'>
                    <input type='hidden' name='id' value='$userid' />
                    <p>Название
                    <input type='text' name='name' value='$uname' /></p>
                    <p>Путь
                    <input type='text' name='address' value='$uaddress' /></p>
                    <p>Дата размещения
                    <input type='text' name='placement_date' value='$uplacement_date' /></p>
                    <p>Описание
                    <input type='text' name='description' value='$udescription' /></p>
                    <p>Путь картинки
                    <input type='text' name='img_path' value='$uimg_path' /></p>
                    <input type='submit' value='Сохранить' />
            </form>";
    }
    else{
        echo "Пользователь не найден";
    }
}
elseif (isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["address"]) && isset($_POST["placement_date"]) && isset($_POST["description"]) && isset($_POST["img_path"])) {

    $sql = "UPDATE games_load SET name = :uname, address = :uaddress, placement_date = :uplacement_date, description = :udescription, img_path = :uimg_path, WHERE id = :userid";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":userid", $_POST["id"]);
    $stmt->bindValue(":uname", $_POST["name"]);
    $stmt->bindValue(":uaddress", $_POST["address"]);
    $stmt->bindValue(":uplacement_date", $_POST["placement_date"]);
    $stmt->bindValue(":udescription", $_POST["description"]);
    $stmt->bindValue(":uimg_path", $_POST["img_path"]);

    $stmt->execute();
    header("Location: infousers.php");
}
else{
    echo "Некорректные данные";
}
?>
</body>
</html>