<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊</title>
    <link rel="stylesheet" href="Register.css">
</head>
<body>
<a href="Aboutme.php" class="de" >回主頁</a>
   
<form action="signup-check.php" method="post">

    <h2>註冊</h2>
<div class =three>
    <?php if (isset($_GET['error'])) {?>
     <p class="error"><?php echo $_GET['error']; ?></p>    
     <?php } ?>

     <?php if (isset($_GET['success'])) {?>
     <p class="success"><?php echo $_GET['success']; ?></p>    
    <?php } ?>
       
        <br>
        <label>名字</label>
        <br>
        <?php if (isset($_GET['first_name'])) {?>
            <input  type="text" 
                    name="first_name" 
                    placeholder="First Name" 
                    value="<?php echo $_GET['first_name']; ?>"><br>  
        <?php } else{?>
            <input  type="text" 
                    name="first_name" 
                    placeholder="First Name"><br>
        <?php }?>

        <label>姓氏</label>
        <br>
        <?php if (isset($_GET['last_name'])) {?>
            <input  type="text" 
                    name="last_name" 
                    placeholder="Last Name" 
                    value="<?php echo $_GET['last_name']; ?>"><br>  
        <?php } else{?>
            <input  type="text" 
                    name="last_name" 
                    placeholder="Last Name"><br>
        <?php }?>
        
        <label>身分證</label>
        <br>
        <?php if (isset($_GET['identification_number'])) {?>
            <input  type="text" 
                    name="identification_number" 
                    placeholder="ID Number" 
                    value="<?php echo $_GET['identification_number']; ?>"><br>  
        <?php } else{?>
            <input  type="text" 
                    name="identification_number" 
                    placeholder="ID Number"><br>
        <?php }?>

        <label>信箱</label>
        <br>
        <?php if (isset($_GET['email'])) {?>
            <input  type="text" 
                    name="email" 
                    placeholder="Email" 
                    value="<?php echo $_GET['email']; ?>"><br>  
        <?php } else{?>
            <input  type="text" 
                    name="email" 
                    placeholder="Email"><br>
        <?php }?>
        
        <label>密碼</label>
        <br>
        <input  type="password" 
                name="password" 
                placeholder="Password"><br>

        <label>再次確認密碼</label>
        <br>
        <input  type="password" 
                name="re_password" 
                placeholder="Confirm your password">
                <br>
                <br>
        <button type="submit">註冊</button>
        <br>
        <a href="index.php" class="ca">登入!</a>
        </div>
    </form>
</body>
</html>
