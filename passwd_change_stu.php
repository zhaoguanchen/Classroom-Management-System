 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>学生修改密码</title>
</head>
   <?php  
        if(isset($_POST['mod'])){  
		  $name = $_POST["name"];
          $passwd = $_POST["passwd"];
	      $repasswd = $_POST["repasswd"];
		  $confirm = $_POST["confirm"];
		  
 if($name == "" || $passwd == "" || $confirm == "" || $repasswd == "" )  
    {  
          echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
            }  
else  
    {  
     if($repasswd == $confirm) 
		 {
   //       $class = $_POST["class"];
            include "./includes/mysql_connect.php";  
        /*根据用户通过POST提交的数据组合插入数据库的SQL语句*/  
		
            $sql_12 = "UPDATE `student` SET `password`=$repasswd WHERE name = '$name'";  
   
            $result_12=mysql_query($sql_12);  
             
            /*如果INSERT语句执行成功，并对数据表userdata有行数影响，则插入成功*/  
			     $num1 = mysql_num_rows($result_12); //统计执行结果影响的行数  
         if($result_12)  {  
            echo "<script> alert('修改成功！');location.href='main.php'</script>";  
              }
		         else
		       {  
             echo "<script> alert('修改失败！');window.history.go(-1);</script>";  
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