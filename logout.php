<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>退出</title>
</head>

<body>
<div align="center" >

<?php
      setcookie('name','0',time()-3600);  
    setcookie('passed','0',time()-3600);  
    $home_url='index.php';  
    echo '退出成功 点击此处 <a href="index.html">登录</a> ' ;

	?>
   <div/>
</body>
</html>