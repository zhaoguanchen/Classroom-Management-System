<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学生注册</title>
</head>

<body>
 <?php  
 
        if(isset($_POST["submit"]) )  
        {  
            $name = $_POST["name"];  
			       $relname = $_POST["relname"];  
			 $num = $_POST["number"];  
            $psw = $_POST["password"];  
            $psw_confirm = $_POST["confirm"]; 
			 $class = $_POST["class"]; 
			  $tel = $_POST["tel"];    
            if($name == "" || $psw == "" || $psw_confirm == "" || $num == "" || $class == "" || $tel == "")  
            {  
                echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
            }  
            else  
            {  
                if($psw == $psw_confirm)  
                {  
                    mysql_connect("localhost","gczhao","112477");   //连接数据库  
                    mysql_select_db("classmanage");  //选择数据库  
                    mysql_query("set names 'gdk'"); //设定字符集  
                     $sql = "SELECT * FROM `student` WHERE `name` = $name "; //SQL语句  
                    $result = mysql_query($sql);    //执行SQL语句  
                    $num = mysql_num_rows($result); //统计执行结果影响的行数  
                    if($num)    //如果已经存在该用户  
                    {  
                        echo "<script>alert('用户名已存在'); history.go(-1);</script>";  
                    }  
                    else    //不存在当前注册用户名称  
                    {  
                        $sql_insert = "INSERT INTO `classmanage`.`student` (`name`, `relname`,`number`, `password`, `class`, `tel`) VALUES ('$_POST[name]','$_POST[relname]','$_POST[number]','$_POST[password]','$_POST[class]','$_POST[tel]')";
				
                        $res_insert = mysql_query($sql_insert);  
						
						
                        //$num_insert = mysql_num_rows($res_insert);  
                        if($res_insert)  
                        {  
                            echo "<script>alert('注册成功！'); history.go(-1);</script>";  
							$flag=1;
                        }  
                        else  
                        {  
                            echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
                        }  
                    }  
                }  
                else  
                {  
                    echo "<script>alert('密码不一致！'); history.go(-1);</script>";  
                }  
            }  
        }  
        else  
        {  
            echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
        }  
	
    ?>  
</body>
</html>