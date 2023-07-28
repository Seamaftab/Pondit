<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Product details</title>
</head>
<body>
	<?php
		session_start();

		$index = $_GET['index'];
	    $product = $_SESSION['products'][$index];

	    //print_r($product);
	    // foreach ($product as $key => $value) {
	    // 	echo $key." to ".$value."<br>";
	    // }
	?>
	<div class="container">
	    <h2>Product Details</h2><br>
	    <div class="row justify-content-center">
	    	<dl class="row">
	    		<dt class="col-sm-3">Serial Number </dt>
	    		<dt class="col-sm-9"><?= $product['product_number'] ?></dt>
	    	</dl>
	    	<dl class="row">
	    		<dt class="col-sm-3">Product Name</dt>
	    		<dt class="col-sm-9"><?= $product['product_name'] ?></dt>
	    	</dl>
	    	<dl class="row">
	    		<dt class="col-sm-3">Description</dt>
	    		<dt class="col-sm-9"><?= $product['product_description'] ?></dt>
	    	</dl>
	    </div>
	  </div>
</body>
</html>