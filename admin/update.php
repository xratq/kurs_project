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
        <a href="../admin/Infousers.php">Выход</a>

    </div>


</div>
<?php
// если запрос GET
if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))
{
    $userid = $_GET["id"];
    $sql = "SELECT * FROM Users WHERE id = :userid";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":userid", $userid);
    // выполняем выражение и получаем пользователя по id
    $stmt->execute();
    if($stmt->rowCount() > 0){
        foreach ($stmt as $row) {
            $userlogin = $row["login"];
            $usernick = $row["nickname"];
            $userpass = $row["password"];
        }
        echo "<h3>Обновление пользователя</h3>
                <form method='post'>
                    <input type='hidden' name='id' value='$userid' />
                    <p>Логин:
                    <input type='text' name='login' value='$userlogin' /></p>
                    <p>Имя пользователя:
                    <input type='text' name='nickname' value='$usernick' /></p>
                    <p>Пароль:
                    <input type='text' name='password' value='$userpass' /></p>
                    <input type='submit' value='Сохранить' />
            </form>";
    }
    else{
        echo "Пользователь не найден";
    }
}
elseif (isset($_POST["id"]) && isset($_POST["login"]) && isset($_POST["nickname"]) && isset($_POST["password"])) {

    $sql = "UPDATE Users SET login = :userlogin, nickname = :usernick, password = :userpass WHERE id = :userid";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":userid", $_POST["id"]);
    $stmt->bindValue(":userlogin", $_POST["login"]);
    $stmt->bindValue(":usernick", $_POST["nickname"]);
    $stmt->bindValue(":userpass", $_POST["password"]);
    $stmt->execute();
    header("Location: infousers.php");
}
else{
    echo "Некорректные данные";
}
?>
</body>
</html>