<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>2-2</title>
	<script type="text/javascript" src="jQuery-1.12.4.min.js"></script>
</head>
<body>
	<!--使用ajax從後台抓出資料-->
	<form>
	<!--此為範例 請自行修改-->
		<select name="YourLocation">
　			<option value="Taipei">台北市</option>
			<option value="Tainan">台南市</option>
　			<option value="Kaohsiung">高雄市</option>
		</select>
		<select name="area">
		<<?php 
  $host = "localhost";
  $user = "";
  $pass = "";

  $databaseName = "2";
  $tableName = "area";

 
  include '2-2.php';
  $con = mysqli_connect($host,$user,$pass,$databaseName);
  $dbs = mysqli_select_db($databaseName, $con);

 
  $result = mysql_query("SELECT * FROM $tableName");        
  echo json_encode($array);

?>
 <script id="source" language="javascript" type="text/javascript">

  $(function () 
  {
    $.ajax({                                         
      data: "",                       
                                     
      dataType: 'json',              
      success: function(data)         
      {
        var area = data[1];            
      
        $('#output').html("area_name");
      
      } 
    });
  }); 
</script>
		</select>
	</form>
	<!--3-3題-->縣市+區域<input type="text" id="address"></br>
	<!--加分題(需chrome可用)--><input type="button" value="下載">
<? php
$data = new area($db); 
$ = $area_name->getData(); 

$tempjson = json_encode($area_nam); 
$jsonarray = json_decode($tempjson); 
var_dump($jsonarray); ?>
</body>

</html>


