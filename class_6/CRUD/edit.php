<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
  	<a href="./index.php" style="color: white;"><button class="btn btn-primary">List</button></a>
    <h2>Update Information</h2>
    <?php
    	session_start();

    	$index = $_GET['index'];
	    $product = $_SESSION['products'][$index];
    ?>
    <form action="./update.php?index=<?= $index ?>" method="post">
      <div class="form-group">
        <label>Product Number:</label>
        <input type="text" class="form-control" placeholder="Product Number" name="product_number" value="<?= $product['product_number'] ?>">
      </div>
      <div class="form-group">
        <label>Product Name :</label>
        <input type="text" class="form-control" placeholder="Product Name" name="product_name" value="<?= $product['product_name'] ?>">
      </div>
      <div class="form-group">
        <label>Product description :</label>
        <input type="text" class="form-control" placeholder="Product Description" name="product_description" value="<?= $product['product_description'] ?>">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>

</body>
</html>
