<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projekt SM</title>
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
                    <li><a href="index.php?view=materialy">Materiały</a></li>
                    <li><a href="index.php?action=quiz">Quiz</a></li>
                    <li><a href="index.php?view=kontakt">Kontakt</a></li>
                </ul>
            </nav>
        </header>

        <section>
            <br><br><br><br>
            <p>Witaj. Jeśli chcesz się dowiedzieć czegoś na temat interfejsów komunikacyjnych to dobrze trafiłeś. Mamy nadzieję, <br>
                że zgromadzone materiały spełnią Twoje oczekiwania i polecisz stronę znajomym.
                Nie zapomnij sprawdzić swojej wiedzy przed opuszczeniem strony – przygotowaliśmy specjalny Quiz, <br>
                który pozwoli Ci zweryfikować czy czas spędzony tutaj nie poszedł na marne.
                Jeśli chcesz być na bieżąco ze wszystkimi nowościami to zapisz się do Newslettera <br>
                na dole strony – na pewno nie ominie Cię żaden materiał.</p>
            <img src="images/server.svg" alt="computer graphic" class="server">
            
            <h1>Interfejsy komunikacyjne</h1>
            <p class="subhead">Dołącz do nauki z nami i wykonaj Quiz.</p>

            <img src="images/scroll.svg" alt="scroll down" class="scroll hide-mobile show-desktop">

            
        </section>
    </div>

    <div class="purple-container">
        <div class="container">
            <ul>
                <li>
                    <img src="images/wifi.svg" alt="wifi icon">
                    <p>Z nami nauczysz się więcej!                </p>
                </li>
                <li>
                    <img src="images/server1.svg" alt="Computer icon">
                    <p>Poszerz swoją wiedzę!</p>
                </li>
                <li>
                    <img src="images/cloud.svg" alt="Cloud icon">
                    <p>Włącz umysł informatyka</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="gray-container">
        <div class="container">
            <ul>
                <li>
                    <figure>
                        <img src="images/albert.svg" alt="albert">
                        <blockquote>Jeżeli nie potrafisz czegoś prosto wyjaśnić - to znaczy, że niewystarczająco to rozumiesz.</blockquote>
                        <figcaption>- Albert Einstein</figcaption>
                    </figure>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
    <section>
        <br><br><br>
        <h1>Przykłady interfejsów komunikacyjnych</h1>
        <img src="images/i2c.svg" alt="i2c">
        <figcaption>I2C</figcaption>
        <p class="subhead">– Szeregowa magistrala niskiej szybkości, służąca do komunikacji między procesorami<br>
            a układami cyfrowymi niewymagającymi częstej i szybkiej obsługi np. pamięcią EEPROM, zegarem czasu rzeczywistego,<br>
            kontrolery klawiatury, odczyt z czujników i przetworników A/C</p>

        <img src="images/spi.svg" alt="spi">
        <figcaption>SPI</figcaption>
        <p class="subhead">– Magistrala szeregowej transmisji synchronicznej do komunikacji mikrokontrolerów z urządzeń zewnętrznych<br>
            (pamięci Flash, EEPROM, sterowniki ETHERNET).</p>
    

    </section>
</div>

    <div class="container">
        <h2>Zacznij już teraz!</h2>
        <a href="index.php?view=materialy" class="cta">Materiały</a>
    </div>

   

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