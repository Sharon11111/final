<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<!DOCTYPE html>
<html>
<head>
<title>朱采翎的profile</title>
<link rel="stylesheet" href="Aboutme.css">
</head>
</html>

<nav id="six">
        <ul>
            <li><a href="login_system\login\change_password.php">Change</a></li>
            <li><a href="login_system\login\logout.php">Logout</a></li>
        </ul>
    </nav>
<body>

    <h2>朱采翎 Neeka Chu   </h2>
    <div class="two"> //面對陽光，陰影就在你背後//</div>
    <div class="three">
        <img class="pho" src="Neeka photo small.jpg" width="150" height="150" alt="海"> 
         姓名:朱采翎
        <br>
        生日:2002/12/14
        <br>
        學校:國立陽明交通大學
        <br>
        科系:資訊管理與財務金融學系 二年級
        <br>
        手機號碼:0971-711866
        <br>
       mail:imei05912@gmail.com
     
    </div>
    <section>
    <nav>     
       <ul>
        <div class="one">
            <li > 
            <a href="profile.php">自我介紹</a></li></div>
        <div class="one">
        <li>
           <a href="university.php">大學生活</a></li></div>
        <div class="one" >
            <li>
             <a href="skill.php">專長能力</a></li></div>
            </ul>
</section>
    <br>
    <div class="four"><img src="sea.png" width="400" height="300" alt="海"> 
    <p>更多介紹~about me!</p> </div>
    <div class="four"><img src="imf camp.JPG" width="400" height="300" alt="資財營"> 
    <p>大學活動們!</p> </div>
    <div class="four"><img src="sing.JPG" width="400" height="300" alt="唱歌">
    <p>更多專長、競賽!</p> </div>
</nav>

</body>
</html>
<?php 
}else{
     header("Location: login_system/login/index.php");
     exit();
}
 ?>