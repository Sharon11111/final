<?php 
session_start(); 
include "db_connect.php";

if (isset($_POST['first_name']) && isset($_POST['last_name'])  && isset($_POST['identification_number'])  && isset($_POST['email'])  && isset($_POST['password']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$first_name = validate($_POST['first_name']);
    $last_name = validate($_POST['last_name']);
    $id_number = validate($_POST['identification_number']);
    $email = validate($_POST['email']);
	$pass = validate($_POST['password']);
	$re_pass = validate($_POST['re_password']);

    $user_data = $id_number;
    // $user_data ='first_name=' . $first_name. '&last_name=' . $last_name;



	if (empty($id_number)) {
		header("Location: Register.php?error=ID Number is required&$user_data");
	    exit();
	}else if(empty($first_name)){
        header("Location: Register.php?error=First Name is required&$user_data");
	    exit();
    }else if(empty($last_name)){
        header("Location: Register.php?error=Last Name is required&$user_data");
	    exit();
     }else if(empty($pass)){
        header("Location: Register.php?error=Password is required&$user_data");
	    exit();
	}else if(empty($re_pass)){
        header("Location: Register.php?error=Confirmed Password is required&$user_data");
	    exit();
    }
    else if(empty($email)){
        header("Location: Register.php?error=Email is required&$user_data");
	    exit();
    }
    else if($pass !== $re_pass){
        header("Location: Register.php?error=The confirmation password does not match&$user_data");
	    exit();
    }
    else{
        // hashing the password
        // $pass = md5($pass);

		$sql = "SELECT * FROM  member WHERE identification_number ='$id_number' ";
		$result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) >0) {
            header("Location: Register.php?error=The ID Number is taken try another&$user_data");
	    exit();

        }else{
            $sql2 = "INSERT INTO  member( first_name, last_name, identification_number, email, password) VALUES('$first_name', '$last_name','$id_number','$email', '$pass')";
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
?>