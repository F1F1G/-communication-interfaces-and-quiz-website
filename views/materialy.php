<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Materiały</title>
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



<div class="material">
 <div class="container">
    <section>
        <br><br><br>
        <h1>Interfejsy komunikacyjne</h1> <br><br><br><br>


            <figcaption>I2C</figcaption>
            <a href="index.php?action=interfejsInformacje&id=1"><img src="images/i2c.svg" class="interfejs" alt="i2c "> </a>

            <audio>
                elo
                <source src="/audio/i2c.mp3" type='mp3'>
            </audio>

        <br><br>

    
        <figcaption>SPI</figcaption>
        <a href="index.php?action=interfejsInformacje&id=6"> <img src="images/spi.svg" class="interfejs" alt="spi"> </a>
        <br><br>

 
        <figcaption>UART</figcaption>
        <a href="index.php?action=interfejsInformacje&id=2"> <img src="images/uart.svg" class="interfejs" alt="uart"> </a>
        <br><br>


        <figcaption>1WIRE</figcaption>
        <a href="index.php?action=interfejsInformacje&id=3"> <img src="images/1wire.svg" class="interfejs" alt="1wire"> </a>
        <br><br>

        
        <figcaption>CANBUS</figcaption>
        <a href="index.php?action=interfejsInformacje&id=4"> <img src="images/canbus.svg" class="interfejs" alt="canbus"> </a>
        <br><br>

        
        <figcaption>LINBUS</figcaption>
        <a href="index.php?action=interfejsInformacje&id=5"> <img src="images/linbus.svg" class="interfejs" alt="linbus"> </a>
        <br><br><br><br><br><br>
        


    

    </section>
</div>
</nav>


<a href="#top"> <img src="images/up.svg"  class="gotopbtn"> </i></a>
<a href="index.php?view=kontakt"> <img src="images/email.svg"  class="gotomail" alt="mail"> </a>



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