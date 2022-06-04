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
                <h1>Sprawdź swoją wiedzę i rozwiąż Quiz</h1>
                <br>
                <figcaption>Zacznij już teraz!</figcaption>
                <p class="subhead">– Poniższy quiz zawiera 8 pytań, po rozwiązaniu i zatwierdzeniu uzyskasz wynik!</p>
            
        
            </section>
        </div>

    </div>

    <div class="container_quiz">
    <section>
    <form method="post" action="index.php?action=quizWynik">
        <?php
        foreach ($_SESSION['pytania'] as $row) {
            echo "<div>
                    <h2>Pytanie " . $row['id'] . "</h2>
                    <p>" . $row['pytanie'] . "</p><br>
                    <label>
                        <input name=\"pytanie" . $row['id'] . "\" type=\"radio\" value=\"" . $row['odp1'] . "\">" . $row['odp1'] . " 
                    </label><br>
                    <label>
                        <input name=\"pytanie" . $row['id'] . "\" type=\"radio\" value=\"" . $row['odp2'] . "\">" . $row['odp2'] . " 
                    </label><br>
                    <label>
                        <input name=\"pytanie" . $row['id'] . "\" type=\"radio\" value=\"" . $row['odp3'] . "\">" . $row['odp3'] . " 
                    </label><br>
                    <label>
                        <input name=\"pytanie" . $row['id'] . "\" type=\"radio\" value=\"" . $row['odp4'] . "\">" . $row['odp4'] . " 
                     </label><br>
                </div><br>";
        }
        ?>
       <input name='submit' type='submit' value='Zatwierdź' class="submit" />
    </form>
    </section>
    </div>
        <br><br><br><br><br><br><br><br><br><br><br>


        
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