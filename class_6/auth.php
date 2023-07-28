<?php
session_start();

$username="Seam Aftab";
$password = "2712";

if(($username == $_POST['username']) && ($password == $_POST['password'])) {
    $_SESSION['isAuthenticated'] = true;
    $_SESSION['username'] = $_POST['username'];

    header('location: ./CRUD/index.php');
} else {
    $_SESSION['isAuthenticated'] = false;
    header('location: ./login.php');
}