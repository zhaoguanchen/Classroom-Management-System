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
       
			        $sql = "SELECT * FROM `labborrow` WHERE `cid` = $broid and `date` = $date and `time` = $time";
			     	 $result = mysql_query($sql);    //执行SQL语句  
			       $test = mysql_result($result,0); 
				    $num = mysql_num_rows($result); 
			if($num==0){ 
				 $sql_1 = "INSERT INTO `classmanage`.`labborrow` (`cid`, `date`, `time`, `pname`, `reason`, `operatetime`) VALUES ('$broid', '$date', '$time', '$pname', '$reason', '$operatedate');";//插入
				     
		  		   $result_1=mysql_query($sql_1);  
			       $num1 = mysql_num_rows($result_1); //统计执行结果影响的行数  
               if($result_1)  {  echo "<script> alert('借用成功！');location.href='main.php'</script>";    }
			   else{ echo "<script> alert('借用失败！');window.history.go(-1);</script>";  }  
			 }
				
			   else{//更新
				       echo "<script> alert('该教室已被借用，借用失败！');window.history.go(-1);</script>";   }  
	  }
	?>