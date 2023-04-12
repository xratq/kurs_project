<?php

if(isset($_POST["id"]))
{
    try {
        $conn = new PDO("mysql:host=localhost;dbname=games", "root", "root");
        $sql = "DELETE FROM users WHERE id = :userid";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":userid", $_POST["id"]);
        $stmt->execute();
        header("Location: ../admin/infousers.php");
    }
    catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}
?>