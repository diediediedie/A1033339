<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
  <head>
    <title>你的個人資料</title>
  </head>

    <body background="http://img.52z.com/softImg/201106/07/1307424484.jpg">
    <center><font color="#00FFFF" size="8" face="微軟正黑體"><b>個人資料</b></font></center>
    <HR>
    <font color="red" size="3" face="微軟正黑體">
    <form action="" method="post">
    <h2><marquee>歡迎修改</marquee></h2>

    </font>
    密碼:<?php echo $row['pwd1'];?>
    信箱:<?php echo $row['email1'];?>
    電話:<?php echo $row['tel1'];?>
    <input name="uname" type="hidden" value="<?php echo $row['no'];?>"/>
    <input name="submit" type="submit" value="修改"/>
    </form>
  </body>
</html>
<?php
    $conn=@mysqli_connect("localhost","root","","a");
    $r="select * from login";
    $s=mysqli_query($conn,$r);
    echo '<center><table border=2 ><th>帳號</th><th>密碼</th><th>信箱</th><th>電話</th></center>';
    while($row=mysqli_fetch_array($s)){
     echo "<tr><td>$row[1] </td><td> $row[2] </td><td>$row[3] </td><td>$row[4] </td><tr>";
      }
    echo '</table>'

   
    ?>
