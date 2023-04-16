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
    <a class="active" href="#Home">Главная</a>
    <a href="#Update">Обновления</a>
    <a href="#Info" onclick="openNav()" >Инфо </a>
    <div class="search-container">
        <a href="login.html">Логин</a>
        <a href="registration.html">Регистрация</a>
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
            <div class="cardblog ">
                <h2>Змейка </h2>
                <h5>Размещена, Апреля 9, 2023</h5>
                <div>
                    <img src="../image/zmeika.png"  style="width: 350px";>
                    <div>
                        <h5>
                            Змейка — это игра, в которой игрок маневрирует по растущей линии, которая становится основным препятствием для самого себя*. Игрок управляет длинным тонким существом, напоминающим змею, которое бродит по окаймленной плоскости. подбирая еду, стараясь не задеть собственный хвост или края игровой площадки. игрок использует клавиши со стрелками, чтобы перемещать «змейку» по доске.
                        </h5>
                    </div>
                </div>
            </div>

            <div class="cardblog ">
                <h2>Тетрис</h2>
                <h5>Размещена, Апреля 9, 2023</h5>
                <div>
                    <img src="../image/Tetris.png"  style="width: 250px";>
                    <div>
                        <h5>
                            В ней игроки вращают и сбрасывают квадратные блоки, содержащие два цвета. Цель — создать на игровом поле заполненные прямоугольные формы одного цвета, которые затем исчезают. За это начисляются очки. По мере прохождения меняются два основных цвета блоков и музыка в игре. Придумал проект основатель студии Enhance Тэцуя Мидзугучи.
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="cardblog ">
                <h2>Это платформа создана для проверки </h2>
                <div class="fakeimg" style="height:100px;">Image</div>
                <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
            </div>
            <div class="cardblog ">
                <h3>Popular Post</h3>
                <div class="fakeimg">Image</div><br>
                <div class="fakeimg">Image</div><br>
                <div class="fakeimg">Image</div>
            </div>

        </div>
    </div>

    </div>
    <div class="footer" style="flex: 100%">
        <footer>

            <h3 style="color: #f1f1f1">Моя работа все</h3>
        </footer>
    </div>
    <script src="../scripts/headerscript.js"></script>
</body>
</html>
