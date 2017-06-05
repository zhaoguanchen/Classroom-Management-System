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
	  {     $broid= $_POST["cid"];
			 $startdate= $_POST["startdate"];
			  $enddate= $_POST["enddate"];
			   $pname= $_POST["pname"];
			   $reason= $_POST["reason"];
			   $operatedate= date("Y-m-d");
			   
   if($startdate!= $enddate )
   { $nextdate = date('Y-m-d',strtotime("$startdate +1 day"));
	// echo $nextday;
   //前一天
     $lastdate = date('Y-m-d',strtotime("$enddate -1 day"));
   }
   			   
   else
   { $nextdate =$startdate;
     $lastdate= $enddate;
   }
   
		    include "./includes/mysql_connect.php";  
     
	 $sql =" SELECT cid FROM `destine`  WHERE `date` = '$startdate'  or `date` = '$nextdate' or `date` = '$lastdate' or `date` = '$enddate')";
	 
	 //
		//	        $sql = "SELECT * FROM `destine` WHERE `cid` = $broid and `date` = $startdate";
			     	 $result = mysql_query($sql);    //执行SQL语句  
			       $test = mysql_result($result,0); 
				    $num = mysql_num_rows($result); 
			if($num==0){ 
				 $sql_1 = "INSERT INTO `classmanage`.`destine` (`cid`, `date`, `pname`, `reason`, `operatetime`, `startdate`, `enddate`) VALUES ('$broid', '$startdate', '$pname', '$reason', '$operatedate', '$startdate', '$enddate');";//插入
				 $sql_3 = "INSERT INTO `classmanage`.`destine` (`cid`, `date`, `pname`, `reason`, `operatetime`, `startdate`, `enddate`) VALUES ('$broid', '$lastdate', '$pname', '$reason', '$operatedate', '$startdate', '$enddate');";//插入
				 $sql_2 = "INSERT INTO `classmanage`.`destine` (`cid`, `date`, `pname`, `reason`, `operatetime`, `startdate`, `enddate`) VALUES ('$broid', '$nextdate', '$pname', '$reason', '$operatedate', '$startdate', '$enddate');";//插入
				 $sql_4 = "INSERT INTO `classmanage`.`destine` (`cid`, `date`, `pname`, `reason`, `operatetime`, `startdate`, `enddate`) VALUES ('$broid', '$enddate', '$pname', '$reason', '$operatedate', '$startdate', '$enddate');";//插入

		  	if($startdate==$enddate)//1 day
			{
			
				$result_1=mysql_query($sql_1);  
			}
			else if($enddate==$nextdate)//2 day
			{
			
				$result_1=mysql_query($sql_1);  

				$result_4=mysql_query($sql_4);  
			}
			else if($nextdate == $lastdate)//3 day
			{
			
				$result_1=mysql_query($sql_1);  
				$result_2=mysql_query($sql_2);  
				$result_4=mysql_query($sql_4);  
			}
			else{
			
				$result_1=mysql_query($sql_1);  
				$result_2=mysql_query($sql_2);  
			    $result_3=mysql_query($sql_3);  
				$result_4=mysql_query($sql_4);  
			}
			     $num2 = mysql_num_rows($result_2); //统计执行结果影响的行数  
				 $num3 = mysql_num_rows($result_3);
				$num1 = mysql_num_rows($result_1);
				 $num4 = mysql_num_rows($result_4);
               if($result_1 || ($result_1 && $result_4) || ($result_1 && $result_2 && $result_4) || ($result_1 && $result_2&& $result_3 && $result_4)) 
			    {  echo "<script> alert('借用成功！');location.href='main.php'</script>"; 
							   include "./includes/logadd.php";   
$log = new log ();   
$date = date("Y-m-d") ; 
$time = date("h:i:sa");
 $log->addlog ( "./logs/log_stu_bro_l", "a", "学生 $name    日期 $date  时间$time   长期教室$cid 借用日期时间$startdate to $endtime  事由$reason" ); //一次插入并换行    
  $log->addlog ( "./logs/log_stu_bro_l", "a", "\n" ); //一次插入并换行 
     }
			   else{ echo "<script> alert('借用失败！');window.history.go(-1);</script>";  }  
			 }
				
			   else{
				       echo "<script> alert('该教室已被借用，借用失败！');window.history.go(-1);</script>";   }  
			

    }
	
	  ?>
 