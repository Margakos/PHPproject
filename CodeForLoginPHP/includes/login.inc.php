<?php
session_start();
include '../dbh.php';

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = $db->query($sql); 

if (!$row = $result->fetch(PDO::FETCH_ASSOC)){
	echo "Λάθος username ή password!";
	
	
	} else {
        $_SESSION['name'] = $row['username'];
        header("Location:../page_user.php");	
	}




?>

