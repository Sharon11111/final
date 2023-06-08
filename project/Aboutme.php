<?php 
session_start();
if (isset($_SESSION['identification_number']) && isset($_SESSION['password'])) 
?>


<!DOCTYPE html>
<html>
<head>
<title>柒肆貳</title>
<link rel="stylesheet" href="Aboutme.css">
</head>
</html>

<body>
<nav id="six">
        <ul>
            <li><a href="index.php">Login</a></li>
            <li><a href="Register.php">Register</a></li>
        </ul>
    </nav>
    <h2>柒肆貳</h2>
    <div class="two"> //美好生活，從笑開始//</div>
    <div class="three">
        歡迎來到柒肆貳牙醫診所！
        <br>
        我們是一家致力於提供高品質口腔醫療服務的專業診所。
        <br>
        以七分熱情、四分專業、二分關懷來照顧每一位病患。
        <br>
        我們擁有一支經驗豐富且技術優秀的專業團隊。
        <br>
        並配備先進的診療設備和技術，以確保您的治療過程安全舒適。
        <br>
無論您是需要一般口腔檢查、牙齒修復、牙齒矯正還是其他口腔相關的治療，我們都能為您提供全方位的專業服務。
        
    </div>
    <section>
    <nav>     
       <ul>
        <div class="one">
            <li > 
            <a>Tim</a></li></div>
        <div class="one">
        <li>
           <a>Ellen</a></li></div>
        <div class="one" >
            <li>
             <a>John</a></li></div>
            </ul>
</section>
    <br>
    <div class="four"><img src="doctor2.JPEG" width="400" height="300" alt="海"> 
    <p>Tim</p> </div>
    <div class="four"><img src="doctor1.JFIF" width="400" height="300" alt="資財營"> 
    <p>Ellen</p> </div>
    <div class="four"><img src="doctor3.JPEG" width="400" height="300" alt="唱歌">
    <p>John</p> </div>
</nav>
<main>
</body>
</html>
