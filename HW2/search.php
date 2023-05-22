<?php
session_start();
include "ap_db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="search.css">
</head>

<body>
    <button ><a href="Aboutme_login.php">回主頁</a></button>
    <button ><a href="login_system\login\logout.php">登出</a></button>
<form action="login.php" method="post">
       <h2>查詢預約</h2>
        <?php if (isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error']; ?></p>    
        <?php } ?>
     
<div class=three> 
    <br>
<table> 
  <tr> 
    <th>ID</th>
    <th>日期</th> 
    <th>時段</th>
    <th>醫生</th>
    <th>刪除</th>
  </tr> 
  <?php
    $query = "SELECT * FROM appointments";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['appointment_date'] . "</td>";
            echo "<td>" . $row['appointment_time'] . "</td>";
            echo "<td>" . $row['doctor_name'] . "</td>";
            echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No appointment information yet</td></tr>";
    }
  ?>
</table>
<br>
<br>
<button type="submit"><a href="delete_all.php">刪除</a></button>

<br>
<a href="appointment.php" class="ca">新增一筆預約</a>
</div>
</form>
</body>
</html>
