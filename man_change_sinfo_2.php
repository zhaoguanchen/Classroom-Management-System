
<head>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学生信息更改</title>
</head>

<?php

 if(isset($_POST["submit"]) )  
  
  {
      $id = $_POST["name"];
      $number = $_POST["number"];
	  $class = $_POST["class"];
      $tel = $_POST["tel"];
	  $relname = $_POST["relname"];
   
   
       include "./includes/mysql_connect.php";  
			 $sql = "UPDATE `student` SET `class`='$class', `tel`=$tel, `relname`='$relname',`number`='$number' WHERE  `name`='$id'";
			$result = mysql_query($sql);    //执行SQL语句  
			$num = mysql_num_rows($result);
		
         if($result)  {  echo "<script> alert('修改成功,请及时通知该学生！');location.href='man_main.php'</script>";    }
		   else{ echo "<script> alert('修改失败！请确认信息正确性');window.history.go(-1);</script>";  }  
	  }
 
?>