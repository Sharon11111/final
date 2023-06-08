<?php 
session_start(); 
include "db_connect.php";

if (isset($_POST['identification_number']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$identification_number = validate($_POST['identification_number']);
	$pass = validate($_POST['password']);

	if (empty($identification_number)) {
		header("Location: index.php?error=ID number is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
		// $pass = md5($pass);
		$sql = "SELECT * FROM member WHERE identification_number='$identification_number' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['identification_number'] === $identification_number && $row['password'] === $pass) {
            	$_SESSION['identification_number'] = $row['identification_number'];
            	$_SESSION['first_name'] = $row['first_name'];
            	$_SESSION['last_name'] = $row['last_name'];
            	header("Location:/Aboutme_Login11.php");
		        exit();
            }else{
			
				header("Location: index.php?error=Incorect ID number or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect ID number or password");
		        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}












