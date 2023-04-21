<?php 
session_start(); 
include "db_connect.php";

if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
    $name = validate($_POST['name']);
	$re_pass = validate($_POST['re_password']);

    $user_data ='uname=' . $uname. '&name=' . $name;



	if (empty($uname)) {
		header("Location: Register.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: Register.php?error=Password is required&$user_data");
	    exit();
	}else if(empty($re_pass)){
        header("Location: Register.php?error=Confirmed Password is required&$user_data");
	    exit();
    }
    else if(empty($name)){
        header("Location: Register.php?error=Name is required&$user_data");
	    exit();
    }
    else if($pass !== $re_pass){
        header("Location: Register.php?error=The confirmation password does not match&$user_data");
	    exit();
    }
    else{
        // hashing the password
        $pass = md5($pass);

		$sql = "SELECT * FROM  neeka WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) >0) {
            header("Location: Register.php?error=The username is taken try another&$user_data");
	    exit();

        }else{
            $sql2 = "INSERT INTO  neeka(user_name, password , name) VALUES('$uname','$pass','$name')";
            $result2 = mysqli_query($conn, $sql2);
            if($result2)
            {
                header("Location: Register.php?success=Your account has been created successfully&$user_data");
               exit();
	            
            }else{
                header("Location: Register.php?error=unknown error occured&$user_data");
            }
        }

	}
	
}else{
	header("Location: Register.php");
	exit();
}