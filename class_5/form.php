<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
</head>
<body>
    <form action="" method='post'>
        <input name="number1" placeholder="Enter Number 1" required value="<?= $_POST['number1'] ?? null ?>"/>
        <input name="number2" placeholder="Enter Number 2" required value="<?= $_POST['number2'] ?? null ?>"/>
        <button name="result" type="submit" value='+'>+</button>
        <button name="result" type="submit" value="-">-</button>
    </form>

    <?php
    
    function sum($number1, $number2) {
        return $number1 + $number2;
    }
    
    function sub($number1, $number2) {
        return $number1 - $number2;
    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
       
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        
        if($_POST['result'] == '+'){
            echo 'Sum='.sum($number1, $number2);
        }
        
        if($_POST['result'] == '-'){
            echo 'Sub='.sub($number1, $number2);
        }
    }
    ?>

</body>
</html>