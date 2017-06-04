
<head>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>删除教室</title>
</head>

<?php
						$id=$_GET['id'];          
               			 include "./includes/mysql_connect.php";  
                        $sql_insert = "	DELETE  FROM `classroom` WHERE `classroom`.`ID` = $id";
	                       $res_insert = mysql_query($sql_insert);  
                       if($res_insert)  
                        {  
                            echo "<script>alert('删除成功！'); location.href='man_main.php';</script>";  
                        }  
                        else  
                        {  
                            echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
                        }  

?>