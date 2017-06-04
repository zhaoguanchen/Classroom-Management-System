<code><code><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>找回密码</title>
</head>

<body>

 <?php  
        if(isset($_POST["submit"]) )  
        {  
            $name = $_POST["name"];  
			 $num = $_POST["number"];  
        //    $psw = $_POST["password"];  
        //    $psw_confirm = $_POST["confirm"];  
            if($name == ""  || $num == "")  
            {  
                echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
            }  
            else  
            {  
         //       if($psw == $psw_confirm)  
//{  
                    mysql_connect("localhost","gczhao","112477");   //连接数据库  
                    mysql_select_db("classmanage");  //选择数据库  
                    mysql_query("set names 'gdk'"); //设定字符集  
					 $sql = "SELECT * FROM `manager` WHERE `name` = $name and `number` = $num "; //SQL语句  
                    $result = mysql_query($sql);    //执行SQL语句  
                    $num = mysql_num_rows($result); //统计执行结果影响的行数  
					
					$row = mysql_fetch_array($result);
                    if($num)    //如果已经存在该用户  
                    {   
					//echo $result;
                  
   echo "<script>alert('您的密码是{$row['password']}'); history.go(-1);</script>";  
						
                 
         //       echo $row['password'] . "<br/>";
 
 
}
						
                    else    //不存在当前注册用户名称  
                    {  
                       echo "<script>alert('不存在！'); history.go(-1);</script>";  
                        }  
                    }  
				
               
            }  
          
        else  
        {  
            echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
        }  
    ?>  
</body>
</html></code></code>