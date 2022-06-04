<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontakt</title>
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
            <p>Zapraszamy do kontaktu z nami, jesli masz problem z zrozumieniu tresci zawartych na stronie - napisz do nas! <br>
                Opisz nam swój konkretny problem w celu zrozumieniu materiału a my postaramy się odpowiedzieć jak najszybciej. 
                Mamy nadzieję, że nie zapomniałes sprawdzić swojej wiedzy w naszym specjalnym quizie, <br>
                który pozwoli Ci zweryfikować czy czas spędzony tutaj nie poszedł na marne.
                Jeśli chcesz być na bieżąco ze wszystkimi nowościami to zapisz się do Newslettera <br>
                na dole strony – na pewno nie ominie Cię żaden materiał.</p>
            <img src="images/server.svg" alt="computer graphic" class="server">
            
            <h1>Kontakt z nami</h1>
            <p class="subhead">Dołącz do nauki z nami i wykonaj Quiz.</p>

            <img src="images/scroll.svg" alt="scroll down" class="scroll hide-mobile show-desktop">

            <h1>O Nas</h1><br>
        </section>
    </div>



            <div class="purple-container">
                <div class="container">
                    <ul>
                        <il>
                            Jestesmy grupą studentów, która z ogromnej chęci i ambicji, przygodowała projekt <br>
                            odnosnie interfejsów komunikacyjnych<br>
                            Razem zabralismy naszą wiedzę w celu zgromadzenia niezbędnych informacji w jednym miejscu<br>
                            i przygotowaliśmy dla was specjalny Quiz podsumowujący waszą wiedzę.<br>
                            Mateusz Zuber, Filip Ojczyk, Kamil Niestrój oraz Paweł Sulawa czwórka obiecujących studentów, których ambicje sięgają zenitu.<br>
                            W razie jakichkolwiek pytań, skontaktuj się z nami! Napisz do nas maila.<br><br><br>
                        </il>
                        <il>
                            <img src="images/high-five.png" alt="high five" class="highfive">
                        </il>
                       
                        </ul>
                </div>
            </div>




            <div class="gray-container-letter">
                <div class="container">
                    <form onsubmit="sendEmail(); reset(); return false;">
                   <h3>Napisz do nas!</h3>

                   <input type="text" id="name" placeholder="Podaj imię" required>
                   <input type="email" id="email" placeholder="Twój email" required>
                   <input type="text" id="phone" placeholder="Numer telefonu" required>
                   <textarea id="message" rows="4" placeholder="Jak możemy Ci pomóc? "></textarea>
                   <button type="submit">Wyslij</button>
          
                    <img src="images/email.svg" alt="email" class="email">
                    <br>
                    <br>
                    <br>
                    <br>
              
                </form>
                </div>
            </div>





            <div class="container">
            <section>
            <h2><p class="subhead">Gdzie się znajdujemy</p></h2> 

            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2549.117279653781!2d18.674057915891705!3d50.28973860681264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47113101f611f735%3A0xce01670d475cce60!2sPolitechnika%20Slaska%20Wydzial%20Elektryczny!5e0!3m2!1spl!2spl!4v1651858317893!5m2!1spl!2spl"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> <br><br><br><br><br><br>
            </section>
            </div>







            <a href="#top"> <img src="images/up.svg"  class="gotopbtn"> </i></a>






        <footer>
            <div class="footer-container">
                <div class="container">
                    <a href="#">
                        <img src="images/logo-white.png" class="logo" alt="logo">
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


        <script src= "https://smtpjs.com/v3/smtp.js"></script>
        <script>
        function sendEmail(){
                        Email.send({
                Host : "smtp.elasticemail.com",
                Username : "filipadzik@gmail.com",
                Password : "9523D384F43AD5CB7831EDF1F7A2D40F2CC2",
                To : 'filipadzik@gmail.com',
                From :  document.getElementById("email").value,
                Subject : "Nowy kontakt",
                Body : "And this is the body"
            }).then(
            message => alert(message)
            );
        }
        
        </script>




</body>
</html>