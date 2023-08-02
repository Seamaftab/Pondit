<?php
	namespace jarvis;

	class person 
	{
		
		public function __construct()
		{
			echo "from constructor";
		}
		public function store()
		{
			session_start();
			$_SESSION['person'][] = [
			    'first_name' => $_POST['first_name'],
			    'last_name' => $_POST['last_name'],
			    'email' => $_POST['email'],
			    'phone' => $_POST['phone']
			];

			$_SESSION['message'] = 'Created Successfully!';

			header('location: ../index.php');
		}
		// public function show()
		// {
		// 	echo "show";
		// }
		public function update()
		{
			session_start();

			$index = $_GET['index'];

			$_SESSION['person'][$index] = [
			    'first_name' => $_POST['first_name'],
			    'last_name' => $_POST['last_name'],
			    'email' => $_POST['email'],
			    'phone' => $_POST['phone']
			];

			$_SESSION['message'] = 'Updated Successfully!';

			header('location: ../index.php');
		}
		public function delete()
		{
			session_start();

			$index = $_GET['index'];
			unset($_SESSION['person'][$index]);

			$_SESSION['message'] = 'Deleted Successfully!';

			header('location: ../index.php');
		}
	}
?>