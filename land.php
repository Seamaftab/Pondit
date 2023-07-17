<?php
	print_r($_POST);

	echo "<br>";
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
		echo "Damn Boiiiiiiii";
	}
?>