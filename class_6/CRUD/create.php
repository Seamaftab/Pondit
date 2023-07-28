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
    <h2>Enter a Product</h2>
    <form action="./store.php" method="post">
      <div class="form-group">
        <label>Product Number:</label>
        <input type="text" class="form-control" placeholder="Product Number" name="product_number">
      </div>
      <div class="form-group">
        <label>Product Name :</label>
        <input type="text" class="form-control" placeholder="Product Name" name="product_name">
      </div>
      <div class="form-group">
        <label>Product description :</label>
        <input type="text" class="form-control" placeholder="Product Description" name="product_description">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


    <!-- <form action="./store.php" method="post">
        <input type="text" name="id" placeholder="Enter ID"/>
        <input type="text" name="title" placeholder="Enter title"/>
        <input type="text" name="description" placeholder="Enter Description"/>
        <button type="submit">Save</button>
    </form> -->

</body>
</html>
