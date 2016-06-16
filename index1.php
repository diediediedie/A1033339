<!DOCTYPE html>
<html>
<head>
	<title></title>
	<pre class="PostOffice" name="code">
</head>
<body>
<?php
function mailFilter(){
header("content-type:text/html;charset=utf-8");

if ( @$contents=file_get_contents("string.txt") ) {
  echo
       '<pre>' .                      // 利用 <pre> 標籤
       htmlspecialchars($contents) .  // 讓文字依原文字檔
       '</pre>';                      // 的格式排列
}
else 
  echo '讀取失敗';}
?>
<?php
function mailRegex()
{　
 <param name="text">要被過濾的文字</param>          
 <returns></returns>          
static public string MakePlainText(this HtmlHelper helper, string text)
{
    Regex regex = new System.Text.RegularExpressions.Regex(@"<(?!br|\/?p|b|\/?font|font color)[^>]*>");
    text = regex.Replace(text, "");
    return text;
}
}?>
</body>
</html>