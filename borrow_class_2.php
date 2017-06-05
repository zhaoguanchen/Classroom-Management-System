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
			 $time= $_POST["time"];
			  $date= $_POST["date"];
			   $pname= $_POST["pname"];
			   $reason= $_POST["reason"];
			   $operatedate= date("Y-m-d");
		    include "./includes/mysql_connect.php";  
	//echo $broid;
echo	$time;
echo	$date;
    echo	$pname;    
	  
		 //   $ff=1;
       
			        $sql = "SELECT * FROM `classborrow` WHERE `cid` = $broid and `date` = $date and `time` = $time";
			     	 $result = mysql_query($sql);    //执行SQL语句  
			       $test = mysql_result($result,0); 
				    $num = mysql_num_rows($result); 
			if($num==0){ 
				 $sql_1 = "INSERT INTO `classmanage`.`classborrow` (`cid`, `date`, `time`, `pname`, `reason`, `operatetime`) VALUES ('$broid', '$date', '$time', '$pname', '$reason', '$operatedate');";//插入
				     
		  		   $result_1=mysql_query($sql_1);  
			       $num1 = mysql_num_rows($result_1); //统计执行结果影响的行数  
               if($result_1)  {  echo "<script> alert('借用成功！');location.href='main.php'</script>";  
			                           //log 
include "./includes/logadd.php";   
$log = new log ();   
$date = date("Y-m-d") ; 
$time = date("h:i:sa");
 $log->addlog ( "./logs/log_stu_bro_c", "a", "学生 $name    日期 $date  时间$time   教室$cid 借用日期时间$date $time  事由$reason" ); //一次插入并换行    
  $log->addlog ( "./logs/log_stu_bro_c", "a", "\n" ); //一次插入并换行            

      
			   
			   
			     }
			   else{ echo "<script> alert('借用失败！');window.history.go(-1);</script>";  }  
			 }
				
			   else{//更新
				       echo "<script> alert('该教室已被借用，借用失败！');window.history.go(-1);</script>";   }  
			
				
 /* 
           else if($time ==2){
		         $sql = "SELECT `sec` FROM `classroom` WHERE `ID` = $broid";
				 $result = mysql_query($sql);    //执行SQL语句  
				 $test = mysql_result($result,0); 
				 if($test==0){ $sql_12 = "UPDATE `classroom` SET `sec`=$ff WHERE ID = '$broid'";  }		
				 else{echo "不可借用，请返回重新选择";}}
          else if($time ==3){
		         $sql = "SELECT `thi` FROM `classroom` WHERE `ID` = $broid";
				 $result = mysql_query($sql);    //执行SQL语句  
				 $test = mysql_result($result,0); 
				 if($test==0){ $sql_12 = "UPDATE `classroom` SET `thi`=$ff WHERE ID = '$broid'";  }
				 else{echo "不可借用，请返回重新选择";}}
          else if($time ==4){
		   		 $sql = "SELECT `fou` FROM `classroom` WHERE `ID` = $broid";
				 $result = mysql_query($sql);    //执行SQL语句  
				 $test = mysql_result($result,0); 
				 if($test==0){ $sql_12 = "UPDATE `classroom` SET `fou`=$ff WHERE ID = '$broid'";  }
				 else{echo "不可借用，请返回重新选择";}}
          else 	if($time ==5){
		   		 $sql = "SELECT `fir` FROM `classroom` WHERE `ID` = $broid";
				 $result = mysql_query($sql);    //执行SQL语句  
				 $test = mysql_result($result,0); 
				 if($test==0){ $sql_12 = "UPDATE `classroom` SET `fif`=$ff WHERE ID = '$broid'";  }
				 else{echo "不可借用，请返回重新选择";}}
          else if($time ==6){
		    		$sql = "SELECT `six` FROM `classroom` WHERE `ID` = $broid";
				 $result = mysql_query($sql);    //执行SQL语句  
				 $test = mysql_result($result,0); 
				 if($test==0){ $sql_12 = "UPDATE `classroom` SET `six`=$ff WHERE ID = '$broid'";  }
				 else{echo "不可借用，请返回重新选择";}}*/
	    //  else{echo "请先选择借用时间段";}
           
		  //  $result_12=mysql_query($sql_12);  
             
         //   /*如果INSERT语句执行成功，并对数据表userdata有行数影响，则插入成功*/  
			//     $num1 = mysql_num_rows($result_12); //统计执行结果影响的行数  
  /*                if($result_12) 
       {  
            echo "<script> alert('借用成功！');location.href='main.php'</script>";  
        }else
		{  
            echo "<script> alert('借用失败！');window.history.go(-1);</script>";  
        }  */
    }
	
	  ?>
 