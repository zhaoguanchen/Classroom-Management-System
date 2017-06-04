<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学生登录</title>
</head>

<body>
<?php
$flag;

//$url='bottom.html';
// $url='main.html';
$url='main.php';
 if(isset($_POST["submit"]) )  
  
  {
      $name = $_POST["name"];
      $psw = $_POST["password"];
	//  echo $name;
	//  echo $psw;
 
      if($name == "" || $psw == "")
      {
          echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
      }
      else
      {
                  mysql_connect("localhost","gczhao","112477");   //连接数据库  
                  mysql_select_db("classmanage");  //选择数据库  
                  mysql_query("set names 'gbk_chinese_ci'"); //设定字符集  $name
                //成功的查询
			
	
		//bug 根源：单引号
		      $sql = "SELECT * FROM `student` WHERE `name` like '$name' and `password` = $psw ";
               // ; 
               //SQL语句  
                  $result = mysql_query($sql);    //执行SQL语句  
                  $num = mysql_num_rows($result); //统计执行结果影响的行数  
                     

                  if($num)    //如果已经存在该用户  
                  { 
                      echo "<script>alert('登录成功');</script>";  
                      
                  //	  sql_free_result($result);
                        
                    setcookie("name",$name);		
                    setcookie("passed","1");
          
          
          // $_SESSION['username'] = $name;
         //  $_SESSION['userid'] = $result['name'];
          
      //	setcookie('name','$name');
          header("location:$url");
          exit;
                      //$flag=1;
                  }  
                  else    //不存在当前用户名称  
                  {  
                      echo "<script>alert('用户名或密码错误，请重新登录！'); history.go(-1);</script>";  
                      sql_free_result($result);
                  }  
                  
                  
                      if($flag==1)
      {
          setcookie("name",$name);
          
          setcookie("passed","1");
          
          
          // $_SESSION['username'] = $name;
         //  $_SESSION['userid'] = $result['name'];
          
      
          header("location:$url");
      exit;
      }
      }
      }	
      mysql_close($link);
	  
?>
             
</body>
</html>