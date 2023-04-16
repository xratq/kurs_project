<?php

if(isset($_POST["id"]))
{
    try {
        $conn = new PDO("mysql:host=localhost;dbname=games", "root", "root");
        $sql = "DELETE FROM games_load WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":id", $_POST["id"]);
        $stmt->execute();
        header("Location: ../admin/load_game.php");
    }
    catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}
?>