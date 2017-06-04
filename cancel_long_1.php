 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </head>
  <?php
$passed=$_COOKIE["passed"];
$name=$_COOKIE["name"];
//echo $passed;
if($passed != "1")
{
    echo '您尚未登录！请<a href="index.html">点击此处登录</a>';	 
}
?>
 <?php
	  if(isset($_POST["id"]) )  
	  {     $cid= $_POST["cid"];
			 $sid= $_POST["sid"];
		
			  $pname= $_POST["pname"];
		
     include "./includes/mysql_connect.php";  
	echo   $cid;

   echo	$pname;    
	  			// $sql = "UPDATE `classborrow` SET `date`=0000-00-00, `time`=0 WHERE  `cid`=$cid and `id`=$sid and `pname`=$pname and `startdate`=$startdate";
		 $sql_1 = "  SELECT * FROM `destine`  WHERE  `id` = $sid  "; //and  `date` <= $nowdate  and datediff(day,$date,$nowdate)<=0
          $result_1=mysql_query($sql_1);  
		   $sql_arr = mysql_fetch_assoc($result_1);
                $startdate = $sql_arr['startdate'];
				   $enddate = $sql_arr['enddate'];
	echo $enddate;
	 
			echo $startdate;	
			 $sql = "  UPDATE `destine` SET `date` = '0000-00-00', `startdate` = '0000-00-00', `enddate` = '0000-00-00' WHERE  `cid`=$cid and `pname`=$pname and `startdate` = '$startdate' and `enddate` = '$enddate'";
				//	 $sql = " UPDATE `destine` SET `date` = '2017-05-09', `startdate` = '2017-06-06', `enddate` = '2017-06-18' WHERE  `cid`=$cid and `pname`=$pname and `startdate`=$startdate and `enddate`=$enddate";
			 $result = mysql_query($sql);    //执行SQL语句  
			$num = mysql_num_rows($result);
			echo $num; 
			
			
			
         if($result)  {  echo "<script> alert('取消成功！');location.href='main.php'</script>";    }
		   else{ echo "<script> alert('取消失败！请确认信息正确性');window.history.go(-1);</script>";  }  
    }
	
	  ?>
 