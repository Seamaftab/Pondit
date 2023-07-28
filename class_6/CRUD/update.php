<?php

session_start();

$index = $_GET['index'];

// $_SESSION['products'][$index] = [
//     'product_number' => $_POST['product_number'],
//     'product_name' => $_POST['product_name'],
//     'product_description' => $_POST['product_description']
// ];


$_SESSION['products'][$index]['product_number'] =  $_POST['product_number'];
$_SESSION['products'][$index]['product_name'] =  $_POST['product_name'];
$_SESSION['products'][$index]['product_description'] =  $_POST['product_description'];

// print_r($_POST);

// die();

$_SESSION['message'] = 'Updated Successfully!';

header('location: ./index.php');

?>