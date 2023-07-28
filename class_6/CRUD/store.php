<?php
session_start();

// print_r($_POST);

$_SESSION['products'][] = [
    'product_number' => $_POST['product_number'],
    'product_name' => $_POST['product_name'],
    'product_description' => $_POST['product_description']
];

$_SESSION['message'] = 'Created Successfully!';

header('location: ./index.php');

?>
