<?php
// 匯入資料庫連線設定
include "ap_db_connect.php";

// 刪除資料表中的資料
$sql = "TRUNCATE TABLE appointments";
if (mysqli_query($conn, $sql)) {
    echo "Data deleted successfully.";
} else {
    echo "Error deleting data: " . mysqli_error($conn);
}

// 關閉資料庫連線
mysqli_close($conn);

// 導向到 Aboutme_login.php 頁面
header("Location: Aboutme_login.php");
exit();
?>
