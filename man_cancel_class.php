  <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </head>
  <?php
$passed=$_COOKIE["passed"];
$name=$_COOKIE["name"];
if($passed != "1")
{
    echo '您尚未登录！请<a href="index.html">点击此处登录</a>';	 
}
?>
 <?php
 
 
   $id=$_GET['id'];
   
   echo $id;
    include "./includes/mysql_connect.php";  
   		
			 $sql = "UPDATE `classborrow` SET `date`='0000-00-00', `time`=0, `reason`='强制取消',`sys`='$name' WHERE  `id`='$id'";
			 
			 			  //  $sql = "SELECT * FROM `classborrow` WHERE `cid` = $broid and `date` = $date and `time` = $time";
			     	 $result = mysql_query($sql);    //执行SQL语句  
				    $num = mysql_num_rows($result);
					echo $num; 
         if($result)  {  echo "<script> alert('取消成功,请及时通知该学生！');location.href='man_main.php'</script>";    }
		   else{ echo "<script> alert('取消失败！请确认信息正确性');window.history.go(-1);</script>";  }  
   

	
	  ?>
 