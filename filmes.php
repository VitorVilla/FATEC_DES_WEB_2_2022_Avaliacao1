<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}
?>

<?php

if (file_exists('cadastro.txt')) {
    echo file_get_contents('cadastro.txt');
}
