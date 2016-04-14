<html>
 <head>
   <title>登入</title>
 </head><body background="http://www.51pptmoban.com/d/file/2014/03/29/b817c21792a828fc471254626d1a2398.jpg">
  <font color="#BBFFFF" size="4" face="微軟正黑體">
  <h2><center>登入系統</center></h2>
  <form action="index.php" method="post">
  <HR>
    <center>帳號: <input type="int" name="uname"></center><br/>
    <center>密碼: <input type="password" name="pwd1"></center><br/>
    
    <center><input type="submit" value="登入">
    <input type="reset" value="重新輸入"></center><br><br>
    <center><a href='http://localhost/reg.php'><IMG SRC=http://120.126.49.250/IRC/Images/ta/login.jpg></IMG></a></center>
  </form>

  <?php
    $conn=@mysqli_connect("localhost","root","","a");
    if(@mysqli_connect("localhost","root","","a")){
    echo "welcome";
    }else{
     echo "nono";
    }

    if(!empty($_POST['uname'])or !empty($_POST['pwd1'])){
      $id=$_POST['uname'];
      $pwd1=$_POST['pwd1'];
      @$sqlstr="SELECT * from a where login = '".$_POST['uname']."' and pwd1 = '".$_POST['pwd1']."' ";
      @$result = mysqli_query($sqlstr)or die(mysqli_error());
     
      if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_array($result);
        $_SESSION['uname']=$row['uname'];
        header("location:index.php");
      }
      else{
        echo "帳號或密碼錯誤，請重新登入";
        exit();
      }   
    }    
  ?>
 </body>
</html>