<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
<form action="login.php" method="post">
       <h2>Login</h2>
        <?php if (isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error']; ?></p>    
        <?php } ?>
<div class=three> 
        
       
        <label>身分證</label>
        <br>
        <input type="password" name="password" placeholder="Password">
        <br>
        <label>密碼</label>
        <br>
        <input type="password" name="password" placeholder="Password">
        <br>
        <button type="submit">Login</button>
        <br>
        <a href="Register.php"  class="ca" >Have a new account.</a>
        </div>
    </form>
</body>
</html>
