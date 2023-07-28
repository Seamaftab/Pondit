<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Object Oriented Calculatior</title>
	<style>
		.container
		{
			height: 350px;
			width: 550px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-8">
				<h1 class="justify-content-center"> CALCULATOR </h1>
			</div>
		</div>
		<form method="POST">
			<div class="mb-3 row justify-content-center">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="number1" placeholder="Enter Number" required value="<?= $_POST['number1'] ?? null ?>">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="number2" placeholder="Enter Number" value="<?= $_POST['number2'] ?? null ?>">
				</div>
			</div>
			<!-- part 1 -->

			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-8">
					<button class="btn btn-primary" type="submit" name="calc" value="+">+</button>
					<button class="btn btn-primary" type="submit" name="calc" value="-">-</button>
					<button class="btn btn-primary" type="submit" name="calc" value="*">*</button>
					<button class="btn btn-primary" type="submit" name="calc" value="/">/</button>
				</div>
				<div class="col-sm-4"></div>
			</div>
			<!-- part 2  -->
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-8">
					<button class="btn btn-primary" type="submit" name="calc" value="mod">modulas</button>
					<button class="btn btn-primary" type="submit" name="calc" value="pow">power</button>
				</div>
				<div class="col-sm-4"></div>
			</div>
			<!-- part 3 -->
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-8">
					<button class="btn btn-primary" type="submit" name="calc" value="root">sqrt</button>
					<button class="btn btn-primary" type="submit" name="calc" value="square">^2</button>
					<button class="btn btn-primary" type="submit" name="calc" value="cube">^3</button>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</form>
	</div>

	<!-- Below here is the calculations, functions, classes, objects, properties and methods -->

	<?php
		class Calculator
		{
			public $num1=0;
			public $num2=0;

			public function __construct($n1, $n2)
			{
				$this->num1 = $n1;
				$this->num2 = $n2;
			}

			public function add($n1, $n2)
			{
				return $n1+$n2;
			}
			public function sub($n1, $n2)
			{
				return $n1-$n2;
			}
			public function mult($n1, $n2)
			{
				return $n1*$n2;
			}
			public function div($n1, $n2)
			{
				return $n1/$n2;
			}
			public function mod($n1, $n2)
			{
				return $n1%$n2;
			}
			public function power($n1, $n2)
			{
				return $n1**$n2;
			}
			public function root($n1)
			{
				return sqrt($n1);
			}
			public function square($n1)
			{
				return $n1*$n1;
			}
			public function cube($n1)
			{
				return $n1*$n1*$n1;
			}
		}

		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			$n1 = $_POST['number1'];
			$n2 = $_POST['number2'];

			$result = new Calculator($n1, $n2);

			if($_POST['calc']=='+')
			{
				echo $result->num1.' + '.$result->num2.' = '.$result->add($n1, $n2);
			}
			if($_POST['calc']=='-')
			{
				echo $result->num1.' - '.$result->num2.' = '.$result->sub($n1, $n2);
			}
			if($_POST['calc']=='*')
			{
				echo $result->num1.' * '.$result->num2.' = '.$result->mult($n1, $n2);
			}
			if($_POST['calc']=='/')
			{
				echo $result->num1.' / '.$result->num2.' = '.$result->div($n1, $n2);
			}
			if($_POST['calc']=='mod')
			{
				echo $result->num1.' modulus of '.$result->num2.' = '.$result->mod($n1, $n2);
			}
			if($_POST['calc']=='pow')
			{
				echo $result->num1.' power of '.$result->num2.' = '.$result->power($n1, $n2);
			}
			if($_POST['calc']=='root')
			{
				echo  'Square root of '.$result->num1.' = '.$result->root($n1);
			}
			if($_POST['calc']=='square')
			{
				echo  'Square of '.$result->num1.' = '.$result->square($n1);
			}
			if($_POST['calc']=='cube')
			{
				echo  'Cube of '.$result->num1.' = '.$result->cube($n1);
			}
		}
		else
		{
			print '$_GET method came in. Check the code.';
		}
	?>
</body>
</html>