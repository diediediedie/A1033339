<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
  <head>
    <title>歡迎登入</title>
  </head>

    <body background="http://img.52z.com/softImg/201106/07/1307424484.jpg">
    <center><font color="#00FFFF" size="8" face="微軟正黑體"><b>歡迎進入你的個人小房間</b></font></center>
    <HR>
    <font color="red" size="3" face="微軟正黑體">
    <form action="" method="post">
    <h2><marquee>歡迎回來</marquee></h2>
    <p>歡迎 <?php echo $_SESSION['uname'];?>, 
    這是您第 <?php echo $counter;?> 次登入  <br>
    </font>
    <p align="left">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='http://localhost/profile.php.php'style="text-decoration:none"><font color="#0080FF" size="6" face="微軟正黑體"><b>&spades;&nbsp個人資料</font></a></p></br>
   

    </form>
  </body>
</html>
<?php

//header('location:add.php');
$nowTime=new DateTime("now");
echo $nowTime->format("Y年m月d日h點i分s秒");
echo "<br>";

 
?>
<?php
session_start();

$counter=1;  

if( !isset($_COOKIE['myCounter']) ){
  
  setcookie("myCounter", $counter, time()+30*24*3600 );
}
else{
  
  $counter = (int)$_COOKIE['myCounter']; 
  
  if ( $_SESSION['setCounter'] == TRUE ) 
   
    setcookie("myCounter", ++$counter, time()+30*24*3600);  
}


$_SESSION['setCounter']=FALSE;
?>
