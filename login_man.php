<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员登录</title>
</head>

<body>
   
   
 <?php
 $url='man_main.php';
   if(isset($_POST["Submit"]) )  
	
	{
		$name = $_POST["name"];
		$psw = $_POST["password"];
		if($name == "" || $psw == "")
		{
			echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
		}
		else
		{
			        mysql_connect("localhost","gczhao","112477");   //连接数据库  
                    mysql_select_db("classmanage");  //选择数据库  
                    mysql_query("set names 'gdk'"); //设定字符集  
                  //成功的查询
			    $sql = "SELECT * FROM `manager` WHERE `name` = '$name' and `password` = $psw ";
				 // ; 
				 //SQL语句  
                    $result = mysql_query($sql);    //执行SQL语句  
                    $num = mysql_num_rows($result); //统计执行结果影响的行数  
					
                    if($num)    //如果已经存在该用户  
                    { 
                        echo "<script>alert('登录成功'); history.go(-1);</script>";  
						   setcookie("name",$name);		
                    setcookie("passed","1");
          
          
          // $_SESSION['username'] = $name;
         //  $_SESSION['userid'] = $result['name'];
          
      //	setcookie('name','$name');
          header("location:$url");
                    }  
                    else    //不存在当前用户名称  
                    {  
                        echo "<script>alert('用户名或密码错误，请重新登录！'); history.go(-1);</script>";  
                    }  
		}
		}	
?>
		   	   
       
       
</body>
</html>