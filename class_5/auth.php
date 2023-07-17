<?php
session_start();

$userName="Seam Aftab";
$password = "2712";

if(($userName == $_POST['username']) && ($password == $_POST['password'])) {
    $_SESSION['isAuthenticated'] = true;
    $_SESSION['username'] = $_POST['username'];

    header('location: ./admin/page1.php');
} else {
    $_SESSION['isAuthenticated'] = false;
    header('location: ./index.php');
}