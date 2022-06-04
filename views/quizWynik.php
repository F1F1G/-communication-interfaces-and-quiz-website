<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz</title>
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


        <div class="container">
            <section>
                <br><br><br>
                <h1>Tak prezentują się wyniki twojego quizu</h1>
                <br>
                <figcaption>Ukończyłes swój quiz!</figcaption>
                <p class="subhead">– Jesli, któres z twoich pytań było błędne, wróć do naszych materiałów!</p>
            
        
            </section>
        </div>

    </div>

<body>



    <div class="purple-container">
        <div class="container">

    <?php
    $i = 1;
    echo "<h1>Wynik: " . $_SESSION['punkty'] . "/" . count($_SESSION['wyniki']) . "</h1>"; ?>        </div>
    </div> 
    
    
    <div class="gray-container">
        <div class="container_quiz">
            <ul>
                <li>  <?php
    foreach ($_SESSION['wyniki'] as $row) {
        echo "<h2> Pytanie " . $i . "</h2>";
        echo "<p>" . $row . "</p>";
        $i++;
    }
    ?>
                </li>
            </ul>
        </div>
    </div>

    <br><br><br>
<a href="#top"> <img src="images/up.svg"  class="gotopbtn"> </i></a>
    <a href="index.php?view=kontakt"> <img src="images/email.svg"  class="gotomail" alt="mail"> </a>

    <div class="container">
    <h2>Wróc do naszych materiałów!</h2>
        <a href="index.php?view=materialy" class="cta">Materiały</a>
    </div>


    <br><br><br><br><br>

    

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