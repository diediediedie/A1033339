<html>
 <head>
   <title>註冊</title>
 </head><body background="http://www.51pptmoban.com/d/file/2014/03/29/b817c21792a828fc471254626d1a2398.jpg">
  <font color="#BBFFFF" size="4" face="微軟正黑體">
  <h2><center>註冊系統</center></h2>
  <form action="log.php" method="post">
  <HR>
  <font color="white" size="2" face="微軟正黑體">
  <h2><marquee>歡迎加入我們~~~~~</marquee></h2>
  </font>
    <center>帳號: <input type="int" name="uname"></center><br/>
    <center>密碼: <input type="password" name="pwd1"></center><br/>
    <center>信箱: <input type="email" name="email1"></center><br/>
    <center>電話: <input type="tel" name="tel1"></center><br/>

    <center><input type="submit" value="註冊">
    <input type="reset" value="重新輸入"></center>
  </form>

  <?php
    $conn=@mysqli_connect("localhost","root","","a");
    if(@mysqli_connect("localhost","root","","a")){
    echo "welcome";
    }else{
     echo "nono";
    }

    if(!empty($_POST['uname']) && !empty($_POST['pwd1'])){
    $t="INSERT login(uname,pwd1,email1,te1)
    values('{$_POST['uname']}','{$_POST['pwd1']}','{$_POST['email1']}','{$_POST['te1']}')";
    mysqli_query($conn,$t);
    }
    

  ?>
 </body>
</html>