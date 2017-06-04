
<head>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>增加教室</title>
</head>

<?php

 if(isset($_POST["submit"]) )  
  
  {
      $id = $_POST["id"];
	  $name = $_POST["name"];
	  $location = $_POST["location"];
      $max = $_POST["max"];
	//  $class = $_POST["class"];
    
   
   
       if($id == "" || $name == "" || $location == "" || $max == "" )  
            {  
                echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
            }  
            else  
            {  
                  
                  
                include "./includes/mysql_connect.php";  
	
                     $sql = "SELECT * FROM `meeting` WHERE `ID` = $id "; //SQL语句  
                    $result = mysql_query($sql);    //执行SQL语句  
                    $num = mysql_num_rows($result); //统计执行结果影响的行数  
                    if($num)    //如果已经存在该用户  
                    {  
                        echo "<script>alert('id已存在'); history.go(-1);</script>";  
                    }  
                    else    //不存在当前注册用户名称  
                    {  
                        $sql_insert = "INSERT INTO `classmanage`.`meeting` (`ID`, `name`,`location`, `max`) VALUES ('$_POST[id]','$_POST[name]','$_POST[location]','$_POST[max]')";
				
                        $res_insert = mysql_query($sql_insert);  
						
						
                        //$num_insert = mysql_num_rows($res_insert);  
                        if($res_insert)  
                        {  
                            echo "<script>alert('添加成功！'); location.href='man_main.php';</script>";  
							$flag=1;
                        }  
                        else  
                        {  
                            echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
                        }  
                    }  
               
            }  
        }  
		
        else  
        {  
            echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
        }  
	
   
   
   
   
   
   
   
   		
 
?>