<?php
session_start();
?>
<?php

include '../dbh.php';
	
	if(!isset($_POST['username']) || !isset($_POST['password']) || !isset($_POST['email'])){
		echo 'Wrong Data';
		die();

	}
	






		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$code = (rand(10000,99999));

		$query = $db->prepare('SELECT username FROM user WHERE username = :username');
		$query->execute(array(
			'username'=>$username
			));
		$result=$query->fetchAll(PDO::FETCH_OBJ);

		if(empty($result)){

			$query = $db->prepare('INSERT INTO user (username, password, email, code) VALUES (:username, :password, :email, :code) ');
			$query->execute(array(
				'username'=>$username,
				'password'=>$password,
				'email'=>$email,
				'code'=>$code
				));
			
			$message = $code;
			mail('sirmargas@gmail.com', 'confirmation code', $message);

			header("Location:../page_user.php");	
		}
		else {
			foreach ($result as $row) {
				echo 'User: '.$row->username. ' already exists!!';
			}
			
		}
	
	


	?>

