<?php
session_start();
$dbhost = "localhost";
$dbname = "projekt_sm";
$dbuser = "root";
$dbpassword = "";
try {
    $db_conn = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $dbuser, $dbpassword);
} catch (PDOException $error) {
    echo $error->getMessage();
}
define('_ROOT_PATH', dirname(__FILE__));
$actions = array('interfejsInformacje', 'listaInterfejsy', 'quiz', 'quizWynik');
$views = array('listaInterfejsy','interfejs', 'quiz', 'quizWynik', 'home', 'kontakt', 'materialy');
$action = 'listaInterfejsy';
$view = 'home';
if (key_exists('action', $_GET)) {
    if (in_array($_GET['action'], $actions)) {
        $action = $_GET['action'];
    } else {
        $action = 'pageNotFound';
    }
}
if (key_exists('view', $_GET)) {
    if (in_array($_GET['view'], $views)) {
        $view = $_GET['view'];
    } else {
        $view= 'pageNotFound';
    }
}
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'actions' . DIRECTORY_SEPARATOR . $action . '.php');
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $view . '.php');
