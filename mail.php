<?php
include("PHPMailerAutoload.php"); //匯入PHPMailer類別  
 
$mail= new PHPMailer(); //建立新物件   
$mail->IsSMTP(); //設定使用SMTP方式寄信   
$mail->SMTPAuth = true; //設定SMTP需要驗證   
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; //設定SMTP埠位，預設為25埠。   
$mail->CharSet = "big5"; //設定郵件編碼   
$mail->SMTPDebug = 4;
$mail->Username = "lafukanim@gmail.com"; //設定驗證帳號   
$mail->Password = "matty118598711"; //設定驗證密碼   
 
$mail->From = "lafukanim@gmail.com"; //設定寄件者信箱   
$mail->FromName = "a1033339"; //設定寄件者姓名   
 
$mail->Subject = "期末報到+a1033339"; //設定郵件標題   
$mail->Body = "a1033339,192.168.56.1,18-CF-5E-70-53-C6
"; //設定郵件內容   
$mail->IsHTML(true); //設定郵件內容為HTML   
$mail->AddAddress("php@nuk.im", "php"); //設定收件者郵件及名稱   
 
if(!$mail->Send()) {   
echo "Mailer Error: " . $mail->ErrorInfo;   
} else {   
echo "Message sent!";   
}
?>