<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>page 1</title>
</head>
<body>
    <form action="../index.php" method="post">
        <button type="submit">Log Out</button>
    </form>
    <?php
    session_start();

    if(isset($_SESSION['isAuthenticated']) && $_SESSION['isAuthenticated']){
        echo "Welcome, ".$_SESSION['username'];
    } else {
        header('location: ./index.php');
    }
    ?>

</body>
</html>