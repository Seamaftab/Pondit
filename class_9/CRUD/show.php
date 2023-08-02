<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Showing details</title>
</head>
<body>
	<?php
		session_start();

		$index = $_GET['index'];
	    $person = $_SESSION['person'][$index];
	?>
	<div class="container">
	    <h2><?= $person['first_name']?>'s Details</h2><br>
	    <div class="row justify-content-center">
	    	<dl class="row">
	    		<dt class="col-sm-3">First Name </dt>
	    		<dt class="col-sm-9"><?= $person['first_name'] ?></dt>
	    	</dl>
	    	<dl class="row">
	    		<dt class="col-sm-3">Last Name</dt>
	    		<dt class="col-sm-9"><?= $person['last_name'] ?></dt>
	    	</dl>
	    	<dl class="row">
	    		<dt class="col-sm-3">Email</dt>
	    		<dt class="col-sm-9"><?= $person['email'] ?></dt>
	    	</dl>
	    	<dl class="row">
	    		<dt class="col-sm-3">Phone</dt>
	    		<dt class="col-sm-9"><?= $person['phone'] ?></dt>
	    	</dl>
	    </div>
	  </div>
</body>
</html>