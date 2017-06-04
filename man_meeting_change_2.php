
<head>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>增加教室</title>
</head>

<?php

 if(isset($_POST["submit"]) )  
  
  {
      $id = $_POST["id"];
	  $cname = $_POST["name"];
	  $location = $_POST["location"];
      $max = $_POST["max"];
       if($id == "" || $name == "" || $location == "" || $max == "" )  
            {  
                echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
            }  
            else  
            {  
                include "./includes/mysql_connect.php";  
	                       $sql_insert = "	UPDATE `classmanage`.`meeting` SET `location` = '$location',`ID` = '$id',`name` = '$cname', `max` = '$max' WHERE `classroom`.`ID` = $id;";
				        $res_insert = mysql_query($sql_insert);  
                        if($res_insert)  
                        {  
                            echo "<script>alert('修改成功！'); location.href='man_main.php';</script>";  
                        }  
                        else  
                        {  
                            echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
                        }  
         }}
		
        else  
        {  
            echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
        }  

 
?>