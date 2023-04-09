<?php
include_once("db.php");


$l = $_POST['log'];
$n = $_POST['nick'];
$p = $_POST['psw'];

$sql = "Insert into `users` (`login`,`nickname`, `password`) values
 ('$l','$n', '$p')";

 if ( $l )

 if ( mysqli_query($link,$sql) == 0 )
    {
    echo "<script>
    alert('Ошибка! Пользователь не добавлен! Возможно такой логин уже занят. Попробуйте еще раз');
          </script>";
    echo "<script>
            window.location='../registration.html';
          </script>";
    }

    else
        {
        echo"<script>
              alert('Вы зарегистрированы');
            </script>";
        echo "<script>
            window.location='../site/home.html';
              </script>";
        }

?>