<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === "AbCdEfGhI" && $password === "e") {
    $_SESSION['authenticated'] = true;
    header("Location: encryption.html");
} else {
    header("Location: login.html");
}
?>
