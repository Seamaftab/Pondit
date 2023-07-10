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
	?>
</body>
</html>