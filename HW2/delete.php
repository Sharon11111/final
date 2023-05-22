<?php
session_start();
include "ap_db_connect.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM appointments WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // 刪除成功，重新導向到 search.php
        header("Location: search.php");
        exit();
    } else {
        // 刪除失敗，重新導向到 search.php，並傳遞錯誤訊息
        header("Location: search.php?error=Failed to delete appointment");
        exit();
    }
} else {
    // 如果未提供有效的 ID，重新導向到 search.php
    header("Location: search.php");
    exit();
}
?>
