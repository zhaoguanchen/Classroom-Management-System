
<head>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学生登录</title>
</head>

<?php

 if(isset($_POST["submit"]) )  
  
  {
      $id = $_POST["name"];
	  $psw = $_POST["password"];
	  $psw_confirm = $_POST["confirm"];
      $number = $_POST["number"];
	  $class = $_POST["class"];
      $tel = $_POST["tel"];
	  $relname = $_POST["relname"];
   
   
   
       if($id == "" || $psw == "" || $psw_confirm == "" || $number == "" || $class == "" || $relname = ""|| $tel == "")  
            {  
                echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
            }  
            else  
            {  
                if($psw == $psw_confirm)  
                {  
                  
                include "./includes/mysql_connect.php";  
	
                     $sql = "SELECT * FROM `student` WHERE `name` = $id "; //SQL语句  
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
                            echo "<script>alert('添加成功！'); history.go(-1);</script>";  
							$flag=1;
							
									 							    //log 
include "./includes/logadd.php";   
$log = new log ();   
$date = date("Y-m-d") ; 
$time = date("h:i:sa");
 $log->addlog ( "./logs/log_man_s_inc", "a", "管理员 $name    日期 $date  时间$time   增加学生信息$id 密码 $password  $number   $relname $class  $tel" ); //一次插入并换行    
  $log->addlog ( "./logs/log_man_s_inc", "a", "\n" ); //一次插入并换行            
 
							
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