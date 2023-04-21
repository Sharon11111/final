
<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<!DOCTYPE html>
<html>
<head>

	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <form action="change-p.php" method="post">

        <h2>Change Password</h2>
        <div class=three>
        <?php if (isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error']; ?></p>    
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <label>Old Password</label>
        <input  type="password" 
                name="op" 
                placeholder="Old Password">
                <br>
        
        <label>New Password</label>
        <input  type="password" 
                name="np" 
                placeholder="New Password">
                <br>

        <label>Confirm New One</label>
        <input  type="password" 
                name="c_np" 
                placeholder="Confirm New Password">
                <br>

        <button type="submit">Change</button>
        <a href="../../Aboutme_Login.php"  class="ca" >Home</a>
        </div>
    </form>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
?>