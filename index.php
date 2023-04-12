<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<h2>Список пользователей</h2>
<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=games", "root", "root");
    $sql = "SELECT * FROM Users";
    $result = $conn->query($sql);
    echo "<table><tr><th>login</th><th>password</th><th></th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["login"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
            echo "<td><form action='delete.php' method='post'>
                        <input type='hidden' name='id' value='" . $row["id"] . "' />
                        <input type='submit' value='Удалить'>
                    </form></td>";
        echo "</tr>";
    }
    echo "</table>";
}
catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
</body>
</html>