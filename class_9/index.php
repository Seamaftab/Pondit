<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Test Work </title>
	<?php
		include './vendor/autoload.php';
		use jarvis\person;

		// $p = new person();
	?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="well container">	
		<?php
			session_start();
			$person = $_SESSION['person'];
		?>
		<a href="./CRUD/create.php" style="color: white;"><button class="btn btn-primary">Add New</button></a>

		<?php 
	        if(isset($_SESSION['message'])){
	            echo $_SESSION['message'];
	            unset($_SESSION['message']);
	        }
	    ?>

		<table class="table" border="1">
	        <thead>
	            <tr>
	                <th>#</th>
	                <th>First Name</th>
	                <th>Last Name</th>
	                <th>Email</th>
	                <th>Action</th>
	            </tr>
	        </thead>
	        <tbody>
	        	<?php
	        		$serial = 0;
		        	foreach ($person as $key => $p) {?>
		        		<tr>
		        			<td><?= ++$serial ?></td>
		        			<td><?= $p['first_name'] ?></td>
		        			<td><?= $p['last_name'] ?></td>
		        			<td><?= $p['email'] ?></td>
		        			<td>
			                    <a style="color: white;" href="CRUD/show.php?index=<?= $key?>"><button class="btn btn-success">Show</button></a>
			                    <a style="color: white;" href="CRUD/edit.php?index=<?= $key?>"><button class="btn btn-warning">Edit</button></a>
			                    <a style="color: white;" href="CRUD/delete.php?index=<?= $key?>"><button class="btn btn-danger">Delete</button></a>
			                </td>
		        		</tr>
	        	<?php
	        	}
	        	?>
	        </tbody>
	    </table>
	</div>
</body>
</html>