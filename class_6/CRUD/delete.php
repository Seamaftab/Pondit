<?php
session_start();

$index = $_GET['index'];

unset($_SESSION['products'][$index]);

$_SESSION['message'] = 'Deleted Successfully!';

header('location: ./index.php');
?>