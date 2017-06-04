<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>速览</title>
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
							<a href="main_findpasswd_stu.html">修改密码</a>
						</h2>
					</li>
					<li _t_nav="support">
						<h2>
							<a href="help_stu.php">帮助与支持</a>
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
	<div class="navigation-down">
		<div id="product" class="nav-down-menu menu-1" style="display: none;" _t_nav="product">
			<div class="navigation-down-inner">
				<dl style="margin-left: 480px;">
					<dt>最近空闲</dt>
					<dd>
						<a hotrep="hp.header.product.compute1" href="total_class.php">空闲教室</a>
					</dd>
					
				</dl>
			
				
			</div>
		</div>
        <div id="wechat" class="nav-down-menu menu-3 menu-1" style="display: none;" _t_nav="wechat">
			<div class="navigation-down-inner">
              
            				<dl style="margin-left: 380px;">
					<dt>教室借用</dt>
					<dd>
						<a hotrep="hp.header.product.storage1" href="borrow_class.php">教室借用</a>
					</dd>
                    <dd>
						<a hotrep="hp.header.product.storage1" href="information_class.php">教室信息</a>
					</dd>
				
				</dl>
				<dl>
					<dt>会议室借用</dt>
					<dd>
						<a hotrep="hp.header.product.monitoring1" href="borrow_meetting.php">会议室借用</a>
					</dd>
					<dd>
						<a hotrep="hp.header.product.monitoring2" href="information_lab.php">会议室信息</a>
					</dd>
					
				</dl>
				<dl>
					<dt>实验室借用</dt>
					<dd>
						<a hotrep="hp.header.product.analysis1" href="borrow_lab.php">实验室借用</a>
					</dd>
					<dd>
						<a hotrep="hp.header.product.analysis2" href="information_lab.php">实验室信息</a>
					</dd>
				</dl>



			
			</div>
		</div>
	 <div id="solution" class="nav-down-menu menu-3 menu-1" style="display: none;" _t_nav="solution">
            <div class="navigation-down-inner">
                <dl style="margin-left: 400px;">
                    <dd>
                        <a class="link" hotrep="hp.header.solution.1" href="my_borrowed.php">我的借用</a>
                    </dd>
                </dl>
                <dl>
                    <dd>
                        <a class="link" hotrep="hp.header.solution.2" href="main_information_stu.php">我的信息</a>
                    </dd>
                </dl>
            </div>
        </div>
        <div id="support" class="nav-down-menu menu-3 menu-1" style="display: none;" _t_nav="support">
            <div class="navigation-down-inner">
                <dl style="margin-left: 400px;">
                    <dd>
                        <a class="link" hotrep="hp.header.support.1" href="method.php">借用流程</a>
                    </dd>
                </dl>
                <dl>
                    <dd>
                        <a class="link" hotrep="hp.header.support.2" href="people.php">开发人员</a>
                    </dd>
                </dl>
            </div>
        </div>
		<div id="cooperate" class="nav-down-menu menu-3 menu-1" style="display: none;" _t_nav="cooperate">
			<div class="navigation-down-inner">
            	
				<dl style="margin-left: 480px;">
					<dd>
                    <a hotrep="hp.header.product.devtool1" href="main_findpasswd_stu.php">查看密码</a>
					
					</dd>
				</dl>
				<dl>
					<dd>
							<a hotrep="hp.header.product.devtool2" href="main_changepasswd_stu.php">修改密码</a>
					</dd>
				</dl>
				
			</div>
		</div>
        <div id="exit" class="nav-down-menu menu-3 menu-1" style="display: none;" _t_nav="exit">
			<div class="navigation-down-inner">
            	
				<dl style="margin-left: 500px;">
					<dd>
                    <a hotrep="hp.header.product.devtool1" href="logout.php">退出登录</a>
					
					</dd>
				</dl>
				
				
			</div>
	</div>
</div>

<h1>我要自习</h1>
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
      
<form action="total_class.php" method="post"> 

</SELECT><br/>
 请选择要借用的时间段（仅选一个）： <br/><br/>
	<select name="time"> 
     	<option value="1" selected="selected">第一节08:00-10:00</option>
		<option value="2">第二节10:00-12:00</option>
		<option value="3">第三节12:00-14:00</option>
		<option value="4">第四节14:00-16:00</option>
        <option value="5">第五节16:00-18:00</option>
</select><br /><br /> 
   <input type="submit" name="submit"style="height:30px;width:60px;display:inline-block;"    value="查询">
    </form> 
    
     <?php
	   $date = date("Y.m.d"); 
	  if(isset($_POST["submit"]) )  
	  {
		     $time = $_POST["time"]; 
		   
		 
			// echo $x1,$x2;
			// echo $x3,$x4,$x5;
		  }
	  ?>

    </div>
    
   
      
<div     id="right" class="container">
	
<link rel="stylesheet" type="text/css" href="form.css">
<link rel="stylesheet" type="text/css" href="./form/css/style.css" />
<link rel="stylesheet" type="text/css" href="./form/css/basictable.css" />
<br/><br/>

<?php
echo "日期：";echo $date;
echo "------- ";
echo "时间：";
if($time==1){echo "第一节08:00-10:00";}

if($time==2){echo "第二节10:00-12:00";}
if($time==3){echo "第三节12:00-14:00";}
if($time==4){echo "第四节14:00-16:00";}
if($time==5){echo "第五节16:00-18:00";}



?>


<br/><br/>
<table border=10 cellspacing=10  bordcolor = "#00FF00" width="800"  height="100" bgcolor="#FFFF99"> 


         <tr cellspacing=10 height=20 bgcolor="#FF00CC"><th>教室ID</th><th>教室名</th><th>位置</th><th>座位数</th></tr>
    <?php
      $flag;
         include "./includes/mysql_connect.php";  	
		//查询不可借的
		// $sql = "  SELECT ID FROM `classroom`  WHERE 1  except SELECT cid FROM `classborrow`   WHERE `date` = '$date' and `time` = '$time'"; 
		 $sql = "  SELECT * FROM `classroom`  WHERE ID not in ( SELECT cid FROM `classborrow`  WHERE `date` = '$date' and `time` = '$time')"; 

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
                echo "<tr bordercolor='#66CCCC'  bgcolor='#99FF00' ><td>$id</td><td>$cname</td><td>$age</td><td>$sex</td></tr>";
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
		<p class="agileinfo"> 教室预约管理系统  版权所有  <a href="http://www.baidu.com/" target="_blank">赵冠晨</a>
 </p>
	</div>


</body>
</html>