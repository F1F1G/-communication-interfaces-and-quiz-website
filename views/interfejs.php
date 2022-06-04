<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfejs</title>
    <style>
        <?php include "css/main.css" ?>
    </style>

</head>

<body>
<div class="container">
        <header>
            <a href="https://www.polsl.pl/"> <img  src="images/logo.svg" alt="politechnika logo" class="logo" > </a>

            <nav>

                
                <a href="#" class="hide-desktop">
                    <img src="images/ham.svg" alt="toggle menu" class="menu" id="menu">
                </a>
                
                <ul class="show-desktop hide-mobile" id="nav">
                    <li id="exit" class="exit-btn hide-desktop">
                        <img src="images/exit.svg" alt="exit menu">
                    </li>
                    
                    <li><a href="index.php?view=home">Home</a></li>
                    <li><a href="index.php?action=interfejsInformacje&id=1">I2C</a></li>
                    <li><a href="index.php?action=interfejsInformacje&id=6">SPI</a></li>
                    <li><a href="index.php?action=interfejsInformacje&id=2">UART</a></li>
                    <li><a href="index.php?action=interfejsInformacje&id=3">1WIRE</a></li>
                    <li><a href="index.php?action=interfejsInformacje&id=4">CANBUS</a></li>
                    <li><a href="index.php?action=interfejsInformacje&id=5">LINBUS</a></li>
                </ul>
            </nav>
        </header>

    </div>




    <div class="container">
    <section>
    <div>
        <?php
        foreach ($_SESSION['opisy'] as $row) {
            echo "<h1>" . $row['nazwa'] . "</h1>";
            echo "<div>" . $row['opis'] . "</div>";
        }
        ?>
    <div>

    </section>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
        <div class="footer-container">
            <div class="container">
                <a href="#">
                    <a href="https://www.polsl.pl/"> <img src="images/logo-white.png" class="logo" alt="logo"></a>
                </a>

                <p class="address">Informacje<br></p>
                <ul class="footer-links">
                    <li><a href="index.php?view=kontakt">Kontakt</a></li>
                    <li><a href="#">Polityka prywatnosci</a></li>
                    <li><a href="index.php?view=kontakt">Lokalizacja</a></li>
                    <li><a href="index.php?view=kontakt">O nas</a></li>
                    
                </ul>
            </div>
        </div>
    </footer>


    <script>
    
        var menu = document.getElementById('menu');
        var nav = document.getElementById('nav');
        var exit = document.getElementById('exit');

        menu.addEventListener('click', function(e) {
            nav.classList.toggle('hide-mobile');
            e.preventDefault();
        });

        exit.addEventListener('click', function(e) {
            nav.classList.add('hide-mobile');
            e.preventDefault();
        });

    </script>





</body>

</html>