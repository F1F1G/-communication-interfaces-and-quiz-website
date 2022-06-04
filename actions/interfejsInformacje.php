<?php
try {
    $sql = 'SELECT nazwa, opis FROM opisy WHERE id_interfejsu=:id';
    $stmt_opisy = $db_conn->prepare($sql);
    $stmt_opisy->execute(array(
        ':id' => $_GET['id']
    ));
    $_SESSION['opisy'] = $stmt_opisy->fetchAll();
} catch (PDOException $error) {
    $_SESSION['error'] = $error->getMessage();
}
header("Location:index.php?view=interfejs");
