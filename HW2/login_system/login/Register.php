<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="Register.css">
</head>
<body>
    <form action="signup-check.php" method="post">
 
        <?php if (isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error']; ?></p>    
        <?php } ?>

        <?php if (isset($_GET['success'])) {?>
            <p class="success"><?php echo $_GET['success']; ?></p>    
        <?php } ?>
<div class =three>
        <label>Name</label>
        <br>
        <?php if (isset($_GET['name'])) {?>
            <input  type="text" 
                    name="name" 
                    placeholder="Name" 
                    value="<?php echo $_GET['name']; ?>"><br>  
        <?php } else{?>
            <input  type="text" 
                    name="name" 
                    placeholder="Name"><br>
        <?php }?>

        <label>User Name</label>
        <br>
        <?php if (isset($_GET['uname'])) {?>
            <input  type="text" 
                    name="uname" 
                    placeholder="User Name" 
                    value="<?php echo $_GET['uname']; ?>"><br>  
        <?php } else{?>
            <input  type="text" 
                    name="uname" 
                    placeholder="User Name"><br>
        <?php }?>
        
    
        <label>Password</label>
        <br>
        <input  type="password" 
                name="password" 
                placeholder="Password"><br>

        <label>Confirm your password</label>
        <br>
        <input  type="password" 
                name="re_password" 
                placeholder="Confirm your password">
                <br>
                <br>
        <button type="submit">Sign Up</button>
        <br>
        <a href="index.php" class="ca">Log in!</a>
        </div>
    </form>
</body>
</html>