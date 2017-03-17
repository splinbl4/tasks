<?php
session_start();
if (isset($_SESSION['login'])) {
    header("Location: {$_SERVER['HTTP_REFERER']}");
    var_dump($_SERVER['HTTP_REFERER']);
    var_dump($_SESSION['login']);
    exit;
} else {
    header('Location: login.php');
}