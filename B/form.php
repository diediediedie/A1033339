<html>  
<head>  
<title>計算機巧合數</title>  
</head>  
<body>    
<form id="form1" name="form1" method="post" action="">  
  <p>請輸入第一個數字:  
    <label>  
      <input type="text" name="numA" id="numA" />  
    </label>  
  </p>  
  <p>請輸入第二個數字:  
    <label>  
      <input type="text" name="numB" id="numB" />  
    </label>  
  </p>  
  
  <p>  
    <label>  
      <input type="submit" value="運算">  
    </label>  
    <label>  
      <input type="reset" value="重新填寫">  
    </label>  
  </p>  
  <p>結果:  
    <label>  
      <input type="text" name="textfield" id="textfield" value="<?php echo $end;?>"/>  
    </label>  
  </p>  
</form>  
</body>  
</html>  