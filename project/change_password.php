

<!DOCTYPE html>
<html>
<head>

	<title>修改密碼</title>
	<link rel="stylesheet" type="text/css" href="change_password.css">
</head>
<body>
<a href="Aboutme_login.php" class="de" >回主頁</a>
   <a href="login_system\login\logout.php" class="de">登出</a>
    <form action="change-p.php" method="post">

        <h2>修改密碼 </h2>
        <div class=three>
        <?php if (isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error']; ?></p>    
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <label>舊密碼  :</label>
        <input  type="password" 
                name="op" 
                placeholder="舊密碼">
                <br>
        
        <label>新密碼  :</label>
        <input  type="password" 
                name="np" 
                placeholder="新密碼">
                <br>

        <label>再次確認新密碼  :</label>
        <input  type="password" 
                name="c_np" 
                placeholder="再次確認">
                <br>

        <button type="submit">修改</button>
    
       
    </form>
</body>
</html>

<?php 
