<?php
try {
   $stmt = $db_conn->query('SELECT id, nazwa FROM interfejsy');
   $_SESSION['interfejsy'] = $stmt->fetchAll();
} catch (PDOException $error) {
   $_SESSION['error'] = $error->getMessage();
}
