<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>The Products</title>
</head>
<body>
    <?php
    session_start();
    $products = $_SESSION['products'];
    ?>
    <a href="./create.php" style="color: white;"><button class="btn btn-success">Add New</button></a>

    <?php 
        if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
    ?>

    <table class="table" border="1">
        <thead>
            <tr>
                <th>SL#</th>
                <th>ID</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sl = 0;
            foreach($products as $key => $product){ ?>
             <tr>
                <td><?= ++$sl ?></td>
                <td><?= $product['product_number'] ?></td>
                <td><?= $product['product_name'] ?></td>
                <td><?= $product['product_description'] ?></td>
                <td>
                    <a style="color: white;" href="./show.php?index=<?= $key?>"><button class="btn btn-success">Show</button></a>
                    <a style="color: white;" href="./edit.php?index=<?= $key?>"><button class="btn btn-warning">Edit</button></a>
                    <a style="color: white;" href="./delete.php?index=<?= $key?>"><button class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
            <?php } ?> 

        </tbody>
    </table>
</body>
</html>