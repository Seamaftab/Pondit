<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Class 4</title>
</head>
<body>
	<?php
		//Multidimentional Array

		$department = [
			'cse' => ['Seam','Erfan'],
			'bba' => ['Ananna', 'Mehedi']
		];

		foreach ($department as $key => $value) {
			echo $key." : <br>";
			foreach ($value as $k => $v) {
				echo "&nbsp;&nbsp;&nbsp;".($k+1)." = ".$v."<br>";
			}
		}

		// //fibonacci

		// function fibonacci($f)
		// {
		// 	if (($f==0) || ($f==1)) {
		// 		return $f;
		// 	} else {
		// 		return (fibonacci($f-1)+fibonacci($f-2));
		// 	}
		// }
		// $limit = 50;
		// echo "fibonacci series : ";
		// while($j < $limit)
		// {
		// 	echo fibonacci($j);
		// 	$j++;
		// }

		echo "<br>fibonacci series : ";
		$t1 = 0; $t2 = 1; $nextTerm = 0;

		for ($j = 1; $j <= 10; ++$j) {
	        if($j == 1) {
	            echo $t1.",";
	            continue;
	        }
	        if($j == 2) {
	            echo $t2.",";
	            continue;
	        }
	        $nextTerm = $t1 + $t2;
	        $t1 = $t2;
	        $t2 = $nextTerm;
	        
	        echo $nextTerm.",";
	    }

		//Function

		function add($a,$b)
		{
			return $a+$b;
		}
		function sub($a,$b)
		{
			if($a>$b)
				return $a-$b;
			else
				return $b-$a;
		}
		function mult($a,$b)
		{
			return $a*$b;
		}
		function div($a,$b)
		{
			if($a>$b)
				return $a/$b;
			else
				return $b/$a;
		}
		function mod($a,$b)
		{
			if($a>$b)
				return $a%$b;
			else
				return $b%$a;
		}

		$number_1 = 22;
		$number_2 = 7;

		echo "<br><br>Operations for $number_1 and $number_2 are : <br><br>";

		echo "Addition : ".add($number_1,$number_2)."<br>";
		echo "Subtraction : ".sub($number_1,$number_2)."<br>";
		echo "Multiplication : ".mult($number_1,$number_2)."<br>";
		echo "Division : ".div($number_1,$number_2)." with modulas being ".mod($number_1,$number_2)."<br><br>";

		//Array String Functions

		$phones = ['Nokia', 'Blackberry', 'Motorolla', 'Samsung', 'Redmi', 'Realme','OnePlus', 'Vivo', 'Apple'];

		foreach ($phones as $key => $value) {
			echo ($key+1)." => $value<br>";
		}

		echo "size of the array : ",sizeof($phones),"<br>";

		sort($phones);
		echo "<br>This shows the array as in alphabatical ascending order : <br>";
		foreach ($phones as $key => $value) {
			echo ($key+1)." => $value<br>";
		}

		rsort($phones);
		echo "<br>This shows the array as in alphabatical decending order : <br>";
		foreach ($phones as $key => $value) {
			echo ($key+1)." => $value<br>";
		}

		print("<br><br>");
		//String Operations (functions)

		$str = "fname:Seam lname:Aftab";
		sscanf($str,"fname:%s lname:%s",$fname,$lname);
		// show types and values
		var_dump($fname,$lname);
	?>
</body>
</html>