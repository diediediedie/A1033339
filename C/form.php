<?php
$myTable='surl';           
$myHost=$_SERVER['HTTP_HOST'];  
$myUri=$_SERVER['PHP_SELF'];    
$shortUrl="";                   


if (isset($_POST['longUrl'])) $longUrl=$_POST['longUrl'];
else                            $longUrl="";

if ( isset($_GET['id']) ) $id=$_GET['id'];
else                        $id="";


if ($longUrl != "") {

  $stmt = mysqli_prepare($conn, 
               "INSERT $myTable (url) VALUES (?)");

  mysqli_stmt_bind_param($stmt, 's', $longUrl); 


  mysqli_stmt_execute($stmt);
  
  $id=mysqli_insert_id($conn);
  

  $shortUrl="http://$myHost$myUri?id=$id";
}

elseif ($id != "") {

  $stmt = mysqli_prepare($conn, 
               "SELECT url FROM surl WHERE id=?");
  
  mysqli_stmt_bind_param($stmt, 'd', $id); 

  mysqli_stmt_execute($stmt);
  
 
  mysqli_stmt_bind_result ($stmt, $url);
  
 
  mysqli_stmt_fetch($stmt);
  
 
  header("Location: ". $url);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>短網址網站</title>
  <link href="Ch09.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
  <div id="title">
    <h1>短網址網站</h1>
  </div>
  <div id="maintext">
<?php

if ( $shortUrl != "") {
  echo "
  您的網址: <a href='$longUrl'>$longUrl</a><br>
  已經縮短為: <a href='$shortUrl'>$shortUrl</a>";
}

else {
  echo '
  <form method="post" action="" name="addurl">
    請輸入想要縮短的網址：<br>
    <input maxlength="128" size="50" name="longUrl" required>
    <br><input name="submit" value="送出" type="submit">
  </form>';
}
?>
  </div>
<div>
</body>
</html>