<?php
try {
    $sql = 'SELECT popr_odp FROM pytania';
    $stmt = $db_conn->query($sql);
    $nr_pytania = 1;
    $_SESSION['punkty'] = 0;
    $_SESSION['wyniki'] = [];
    while ($row = $stmt->fetch()) {
        $odp = "pytanie" . $nr_pytania;
        if (!array_key_exists($odp, $_POST)) {
            $wynik = "Nie udzielono odpowiedzi. Poprawna odpowiedz to: " . $row["popr_odp"] . ".";
            array_push($_SESSION['wyniki'], $wynik);
        } else {
            foreach ($_POST as $key => $value) {
                if ($key !== 'submit') {
                    if ($row["popr_odp"] === $value && $odp === $key) {
                        $_SESSION['punkty']++;
                        $wynik = "Odpowiedź: " . $value . " jest poprawna.";
                        array_push($_SESSION['wyniki'], $wynik);
                    } elseif ($row["popr_odp"] !== $value && $odp === $key) {
                        $wynik = "Odpowiedź: " . $value . " jest niepoprawna. Poprawna odpowiedz to: " . $row["popr_odp"] . ".";
                        array_push($_SESSION['wyniki'], $wynik);
                    }
                }
            }
            $nr_pytania++;
        }
    }
} catch (PDOException $error) {
    $_SESSION['error'] = $error->getMessage();
}
header("Location:index.php?view=quizWynik");
