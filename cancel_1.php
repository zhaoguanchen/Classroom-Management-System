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
			  $type= $_POST["type"];
			  $pname= $_POST["pname"];
     include "./includes/mysql_connect.php";  
	//echo $broid;

   // echo	$pname;    
	  
		if($type==1)
		{
			
			 $sql = "UPDATE `classborrow` SET `date`=0000-00-00, `time`=0 WHERE  `cid`=$cid and `id`=$sid and `pname`=$pname";
		}
       	if($type==2)
		{
			 $sql = "UPDATE `labborrow` SET `date`=0000-00-00,`time`=0  WHERE  `cid`=$cid and `id`=$sid and `pname`=$pname";
		}
		if($type==3)
		{
			 $sql = "UPDATE `meetborrow` SET `date`=0000-00-00,`time`=0  WHERE  `cid`=$cid and `id`=$sid and `pname`=$pname";
		}
			      
				  
				  //  $sql = "SELECT * FROM `classborrow` WHERE `cid` = $broid and `date` = $date and `time` = $time";
			     	 $result = mysql_query($sql);    //执行SQL语句  
				    $num = mysql_num_rows($result);
					echo $num; 
         if($result)  {  echo "<script> alert('取消成功！');location.href='main.php'</script>";  
		 			                           //log 
include "./includes/logadd.php";   
$log = new log ();   
$date = date("Y-m-d") ; 
$time = date("h:i:sa");
 $log->addlog ( "./logs/log_stu_canel", "a", "学生 $name    日期 $date  时间$time   取消类型  $type   教室$cid 记录ID $sid  " ); //一次插入并换行    
  $log->addlog ( "./logs/log_stu_cancel", "a", "\n" ); //一次插入并换行            

      }
		   else{ echo "<script> alert('取消失败！请确认信息正确性');window.history.go(-1);</script>";  }  
    }
	
	  ?>
 