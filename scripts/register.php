<?php
include_once("db.php");

$u = $_POST['username'];
$n = $_POST['nick'];
$p = $_POST['psw'];

$sql = "Insert into `users` (`login`,`nickname`, `password`) values
 ('$u','$n', '$p')";

 if ( mysqli_query($link,$sql) == 0 )
    {
    echo "<script>
    alert('Ошибка! Пользователь не добавлен! Возможно такой логин уже занят. Попробуйте еще раз');
          </script>";
    echo "<script>
            window.location='../site/registration.html';
          </script>";
    }
    else
    {
    echo"<script>
          alert('Вы зарегистрированы');
        </script>";
    echo "<script>
        window.location='../site/home.php';
          </script>";
    }
?>