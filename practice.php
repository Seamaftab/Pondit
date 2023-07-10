<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Practice - Class 3</title>
</head>
<body>

    <?php
        $n = 0;
        $number = 0;
        while ($number<20) {
            $n++;
            $number = $n;
            //echo $number."<br>";   
        }
        echo "The number finally is : ".$number;
        echo "<br>Let's Create a table, shall we?<br>";
        function table($number)
        {
            for($i=1;$i<=10;$i++)
            {
                print $number." x ".$i." = ".$i*$number."<br>";
            }
        }

        table($number);
        echo "<br><br>";
        print("time for some string operations<br>shall we?<br>");

        function Trying($name, $Age) //Default age
        {
            echo "My name is $name and my age is $Age<br>";
        }
        Trying("Seam", 25);
        Trying("Habib", 20);
    ?>

    <?php
        echo "Time for array<br>";

        $cars = ['Lambo','Ferrari','Porsche'];

        echo '<pre>';
        print_r($cars);
    ?>
</body>
</html>