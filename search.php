<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="search.css">
</head>

<body>
    <button>回主頁</button>
    <button>登出</button>
<form action="login.php" method="post">
       <h2>查詢預約</h2>
        <?php if (isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error']; ?></p>    
        <?php } ?>
     
  

<div class=three> 
    <br>
<table> 
  <tr> 
  <th>日期</th> 
  <th>時段</th>
  <th>醫生</th>
  </tr> 
  <tr> 
  <td>資料1</th> 
   <td>資料2</td> 
   <td>資料32</td> 
  </tr> 
  <tr> 
  <td>資料3</th> 
   <td>資料4</td> 
   <td>資料55</td> 
  </tr> 
  </table>
  <br>
  <br>
        <button type="submit">刪除</button>
        <br>
        <a href="Register.php"  class="ca" >新增其他預約</a>
        </div>
    </form>
</body>
</html>