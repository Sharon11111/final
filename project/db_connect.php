<?php

$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "final";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

?>

$sql = "CREATE TABLE user_article (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id VARCHAR(30) NOT NULL,
    username VARCHAR(30) NOT NULL,
    title VARCHAR(50) NOT NULL,
    content VARCHAR(500) NOT NULL,
    -- img VARCHAR(500),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    if (mysqli_query($conn, $sql)) {
      echo "Table user_article 新增成功";


    //   if (($handle = fopen($_SERVER["DOCUMENT_ROOT"]. "/php_project_demo/src/csv/user_article.csv", "r")) !== FALSE) {
    //     $i=0;
    //     while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
    //       if($i == 0) {  // 跳過第一列
    //         $i++;
    //         continue;
    //       }
    //       $user_id = $data[1];
    //       $username = $data[2];
    //       $title = $data[3];
    //       $content = $data[4];
    //       $img = $data[5];
    //       $reg_date = $data[6];
    //       // echo $user_id. '  '. $username. '  '. $title. '  '. $content. '  '. $img. '  '. $reg_date. '<br>';
    //       $query = "INSERT INTO user_article (user_id, username, title, content, img, reg_date) VALUES 
    //         ('$user_id', '$username', '$title', '$content', '$img', '$reg_date')";
    //       $result = mysqli_query($conn, $query);
    //       if ($result == false) {
    //         echo 'Error description <br/>' . mysqli_error($conn);
    //       }
    //     }
    //     fclose($handle);
    //   }
    } else {
      echo "Error creating table: " . $conn->error;
    }

<!-- 
 $sql = "CREATE TABLE member(
 	first_name VARCHAR(50),
 	last_name VARCHAR(50), 
 	identification_number VARCHAR(20),
 	email VARCHAR(50), 
 	password VARCHAR(20))";
  if (mysqli_query($conn, $sql)) {
      echo "Table user_article 新增成功";

 }else{
 	echo "Create failed".$conn->error;
 } -->

?>