</!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculator</title>
</head>
<body>
	<center>
		<form action="" method="post">
			<input type="" name="num1" placeholder="Enter Number" required value="<?= $_POST['num1'] ?? null ?>"><br>
			<input type="" name="num2" placeholder="Enter Number" required value="<?= $_POST['num2'] ?? null ?>"><br>
			<button name="result" type="submit" value="+">+</button>
			<button name="result" type="submit" value="-">-</button>
			<button name="result" type="submit" value="*">*</button>
			<button name="result" type="submit" value="/">/</button>
		</form>
	</center>
	<?php

	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];

		if($_POST['result']=='+')
		{
			echo "addition : ".($num1+$num2);
		}
		if($_POST['result']=='-')
		{
			echo "subtraction : ".($num1-$num2);
		}
		if($_POST['result']=='*')
		{
			echo "multiplication : ".($num1*$num2);
		}
		if($_POST['result']=='/')
		{
			echo "Division : ".($num1/$num2);
		}
	}
	else
	{
		echo "Damn Boiiiiiiii, check the code";
	}
	?>
</body>
</html>