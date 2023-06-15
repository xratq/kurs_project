<?php
include_once("db.php");

$l = $_POST['log'];
$p = $_POST['pass'];
$log = "admin";
$pass = "admin";

if ($l == $log and $p == $pass){
     echo"<script>
                  alert('Добро пожаловать');
                </script>";
    echo
        "<script>
                          window.location='../admin/admin.html';
                        </script>";
}

else{
    $sql = "Select * From `users` where `login`='$l'
    and `password` = '$p'";


     $result = mysqli_query($link,$sql);


    if ( mysqli_num_rows($result) == 0 )
        {
          echo"<script>
                alert('Ошибка! Пользователь не найден! Возможно введён неверный логин или пароль. Попробуйте еще раз');
               </script>";
          echo "<script>
                  window.location='../site/login.html';
                </script>";
        }

    else
        {
        $row = mysqli_fetch_array($result);
        $name = $row['Логин'];
        $role = $row['Роль'];
        setcookie("user", "$name", time()+30*24*60*60,"/");
        setcookie("role", "$role", time()+30*24*60*60,"/");
        echo"<script>
              alert('Вы вошли.');
            </script>";
        echo "<script>
              window.location='../site/homeusers.php';
              </script>";
        }
}

?>