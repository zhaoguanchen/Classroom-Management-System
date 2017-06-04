<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<title>长期借用</title>
<link media="screen" rel="stylesheet" href="./css/demo.css"/><link rel="stylesheet" href="css/style_index.css">
	<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
<script src="./js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
	var qcloud={};
	$('[_t_nav]').hover(function(){
		var _nav = $(this).attr('_t_nav');
		clearTimeout( qcloud[ _nav + '_timer' ] );
		qcloud[ _nav + '_timer' ] = setTimeout(function(){
		$('[_t_nav]').each(function(){
		$(this)[ _nav == $(this).attr('_t_nav') ? 'addClass':'removeClass' ]('nav-up-selected');
		});
		$('#'+_nav).stop(true,true).slideDown(200);
		}, 150);
	},function(){
		var _nav = $(this).attr('_t_nav');
		clearTimeout( qcloud[ _nav + '_timer' ] );
		qcloud[ _nav + '_timer' ] = setTimeout(function(){
		$('[_t_nav]').removeClass('nav-up-selected');
		$('#'+_nav).stop(true,true).slideUp(200);
		}, 150);
	});
});
</script>

</head>
<script>   
        var a=$name;  
    </script>  
<body  text="#000066" style="text-align:center"background="images/2.jpg">
<div class="head-v3">
	<div class="navigation-up">
		<div class="navigation-inner">
        
					
			<div class="navigation-v3">
				<ul>
                
					<li class="nav-up-selected-inpage" _t_nav="home">
						<h2>
							<a href="main.php">首页</a>
						</h2>
					</li>
					<li class="" _t_nav="product">
						<h2>
							<a href="total_class.php">最近空闲教室</a>
						</h2>
					</li>
					<li class="" _t_nav="wechat">
						<h2>
							<a href="borrow_class.php">教室借用</a>
						</h2>
					</li>
					<li class="" _t_nav="solution">
						<h2>
							<a href="main_information_stu.php">个人信息</a>
						</h2>
					</li>
					<li class="" _t_nav="cooperate">
						<h2>
                         <a href="main_changepasswd_stu.php">修改密码</a>						
                         </h2>
					</li>
					<li _t_nav="support">
						<h2>
							<a href="method.php">帮助与支持</a>
						</h2>
					</li>
                    <li _t_nav="exit">
						<h2>
							<a href="logout.php" >退出</a>
						</h2>
					</li>
                  
                   
                   
				</ul>
			</div>
		</div>
</div>
 <?php
$passed=$_COOKIE["passed"];
$name=$_COOKIE["name"];
//echo $passed;
if($passed != "1")
{
    echo '您尚未登录！请<a href="index.html">点击此处登录</a>';	 
		 //header("Refresh:5;url=index.php");
	//header(  "Refresh:5;location:index.html");
}
?>

<div>
<style>

#left{width:250px;height:600px;}
#right{width:700px;height:600px;margin-left:10px;}
#left,#right{float:left;}
</style>
<div id="left">
 
  
  
       
<form action="borrow_long_class.php" method="post"> 
请选择预定开始日期（最多四天）：<br/>

<label for="meeting">日期：</label><input id="startdate" name ="startdate" type="date" value=""/><br/>
请选择预定结束日期：<br/>

<label for="meeting">日期：</label><input id="enddate"  name="enddate" type="date" value=""/><br/>

   <input type="submit" name="submit"style="height:30px;width:60px;display:inline-block;"    value="查询">
    </form> 
    
     <?php
	  if(isset($_POST["submit"]) )  
	  {
		     $startdate = $_POST["startdate"]; 
		     $enddate = $_POST["enddate"]; 
		 
		  }
	  ?>
<form action="borrow_long_class_2.php" method="post"> 
     <br /><br /> 
    请选择要借用的教室ID<br/>（仅从以上选一个）：<br /><br /> 
    
    
    <select name="cid" size="1"  style="width:40">
    
        <option value="1">1</option>
        <option value="2">2</option>
  		<option value="3">3</option>
  		<option value="4">4</option>
     	<option value="5">5</option>
 		<option value="6">6</option>
  		<option value="7">7</option>
  		<option value="8">8</option>
   		<option value="9">9</option>
  		<option value="10">10</option>
  		<option value="11">11</option>
  		<option value="12">12</option>
		<option value="13">13</option>
  		<option value="14">14</option>
     	<option value="15">15</option>
 		<option value="16">16</option>
  		<option value="17">17</option>
  		<option value="18">18</option>
   		<option value="19">19</option>
  		<option value="20">20</option>
    </select>
     <br /><br />
     请填写借用事由：<br /><br /> 
      <input type="text" name="reason" width="60" placeholder="借用事由" required />
       <input type= "hidden" name="pname" width="60" value = <?php echo $name?> required />
       <input type= "hidden" name="startdate" width="60" value = <?php echo $startdate?> required />
       <input type= "hidden" name="enddate" width="60" value = <?php echo $enddate?> required />
<input type="submit" name="id" style="height:30px;width:60px;display:inline-block;"    value="借用">
    </form>  
  
    </div>
    
   
      
<div    align="center" id="right" class="container">
	
<link rel="stylesheet" type="text/css" href="form.css">
<link rel="stylesheet" type="text/css" href="./form/css/style.css" />
<link rel="stylesheet" type="text/css" href="./form/css/basictable.css" />
<br/><br/><br/>

<?php
echo "日期：";echo $startdate;
echo "-----------";
echo $enddate;
?>


<br/><br/>
<table border=10 cellspacing=10  align="center" bordcolor = "#00FF00" width="800"  height="100" bgcolor="#FFFF99"> 


         <tr cellspacing=10 height=20 bgcolor="#FF00CC"><th>教室ID</th><th>教室名</th><th>位置</th><th>座位数</th></tr>
    <?php

      if($statrdate!== $enddate )
   { $nextday = date('Y-m-d',strtotime("$startdate +1 day"));
	// echo $nextday;
   //前一天
     $lastday = date('Y-m-d',strtotime("$enddate -1 day"));
   }
   			   
   else
   { $nextday =$startdate;
     $lastday = $enddate;
   }
      $flag;
         include "./includes/mysql_connect.php"; 
		 	 $sql ="SELECT * FROM `destineroom`  WHERE ID not in ( SELECT cid FROM `destine`  WHERE `date` = '$startdate'  or `date` = '$nextdate' or `date` = '$lastdate' or `date` = '$enddate')";
 
		 $result=mysql_query($sql);  
		 $num = mysql_num_rows($result); //统计执行结果影响的行数  	
   if($num)
   {
            for($i=0;$i<$num;$i++){
                $sql_arr = mysql_fetch_assoc($result);
                $id = $sql_arr['ID'];
                $cname = $sql_arr['name'];
                $age = $sql_arr['location'];
                $sex = $sql_arr['max'];
                echo "<tr bordercolor='#66CCCC' align='center'  bgcolor='#99FF00' ><td>$id</td><td>$cname</td><td>$age</td><td>$sex</td></tr>";
            }
   }
   else
   { 
   echo "没有符合条件的项";
   }
    ?>
</table>
</div>


<div class="clear"></div>
	<div class="footer-w3l">
		<p class="agileinfo"> 教室预约管理系统  版权所有  <a href="http://www.baidu.com/" target="_blank">赵冠晨</a> </p>
	</div>
</body>
</html>