<?php
try {
    $sql = 'SELECT id, pytanie, odp1, odp2, odp3, odp4 FROM pytania';
    $stmt = $db_conn->query($sql);

    $_SESSION['pytania'] = $stmt->fetchAll();
} catch (PDOException $error) {
    $_SESSION['error'] = $error->getMessage();
}
header("Location:index.php?view=quiz");
