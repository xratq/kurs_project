<?php
include_once("db.php");

$n = $_POST['name'];
$a = $_POST['address'];
$d = $_POST['description'];
$i = $_POST['img_path'];

$sql = "Insert into `games_load` (`name`,`address`, `description`, `img_path`) values
 ('$n','$a', '$d', '$i')";

 if ( mysqli_query($link,$sql) == 0 )
    {
    echo "<script>
    alert('Ошибка! Игра не добавлена! Возможно такой путь уже занят. Попробуйте еще раз');
          </script>";
    echo "<script>
            window.location='../admin/add_game.php';
          </script>";
    }
    else
    {
    echo"<script>
          alert('Игра добавлена');
        </script>";
    echo "<script>
        window.location='../admin/load_game.php';
          </script>";
    }
?>