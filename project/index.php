<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login11.css">
</head>

<body>
<a href="Aboutme_login.php" class="de" >回主頁</a> 
<form action="login.php" method="post">
      
        <?php if (isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
<div class=three>
<h2>登入</h2>
        <label>身分證</label>
        <br>
        <input type="text" name="identification_number" placeholder="ID number">
        <br>
        <label>密碼</label>
        <br>
        <input type="password" name="password" placeholder="Password">
        <br>
        <button type="submit">登入</button>
        <br>
        <a href="Register.php"  class="ca" >創建新帳號</a>
        </div>
    </form>
</body>
</html>
