<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1">
    <title>База игр</title>
    <link rel="stylesheet" href="../style/headerstyle.css" />
    <style>
        img{
            width: 350px;
        }

    </style>
</head>

<body style="background-image: url(../image/backgr.jpg)">
<div class="topnav" id="myTopnav">
    <a class="active" href="homeusers.php">Главная</a>
    <a href="#Update">Обновления</a>
    <a href="#Info" onclick="openNav()" >Инфо </a>
    <div class="search-container">
        <a href="home.php">Выход</a>

    </div>


</div>

<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <div class="overlay-content">
        <a href="#">Тут можно узнать о нас</a>
        <a href="#">Адрес</a>
        <a href="#">Сервис</a>
        <a href="#">Контактные данные</a>
    </div>
</div>




<div class="headerblog">
    <h2>Стенды игр</h2>
</div>

<div class="row">
    <div class="flexx flexxhide" id="Flexhide">
    <div class="leftcolumn">
        <?php
     $conn = mysqli_connect("localhost", "root", "root", "games");
     if (!$conn) {
       die("Ошибка: " . mysqli_connect_error());
     }
     $sql = "SELECT * FROM games_load";



     if($result = mysqli_query($conn, $sql)){

         $rowsCount = mysqli_num_rows($result); // количество полученных строк


     ?>
     <?php
       foreach($result as $row){
       echo "<tr>";
       ?>

       
         


<div class="cardblog "> <?php 

  ?>  <h2> <?php   echo "<td>" . $row["name"] . "</td>";  ?>   <h2> <?php


  ?>   <h5> <?php     echo "<td>" . $row["placement_date"] .  "      </td>"; ?> <h5> <?php

 ?> <div>

<?php


        



echo "<td>" . $row["description"] .  "      </td>";

?>
 </div>
<div>
<h5><?php


echo "<td><img src='../image/" . $row["img_path"] .  "'>      </td>";
?>  </h5>
</div>
<div>
<button class="knopka">
<?php echo "<a href='../games/" .$row["address"] . "'>Играть </a>"  ?>
                </button>
       </div>
       </div>
    




   <?php



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
    <div class="rightcolumn">
            <div class="cardblog ">
                <h2>Это платформа создана для проверки </h2>
                <div class="fakeimg" style="height:100px;">Image</div>
                <p>На этом сайте размещено множество игр</p>
            </div>
            <div class="cardblog ">
                <h3>Популярные игры</h3>
                <div class="fakeimg">Image</div><br>
                <div class="fakeimg">Image</div><br>
                <div class="fakeimg">Image</div>
            </div>

        </div>
        </div>
   
</div>
<div class="footer" style="flex: 100%">
    <footer>

        <h3 style="color: #f1f1f1">Здесь конец страницы</h3>
    </footer>
</div>
<script src="../scripts/headerscript.js"></script>
</body>
</html>