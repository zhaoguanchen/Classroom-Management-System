<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>教室信息</title>
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
						<a hotrep="hp.header.product.monitoring2" href="information_meeting.php">会议室信息</a>
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
<br />

<div align="center">
<h1>教室信息</h1>
</div>

<br />
<div align="center">
<table border=10 cellspacing=10  align="center" bordcolor = "#00FF00" width="800"  height="100" bgcolor="#FFFF99"> 


         <tr cellspacing=10 height=20 bgcolor="#FF00CC"><th>教室ID</th><th>教室名</th><th>位置</th><th>座位数</th></tr>
    <?php
      $flag;
         include "./includes/mysql_connect.php";  	
		//查询不可借的
		// $sql = "  SELECT ID FROM `classroom`  WHERE 1  except SELECT cid FROM `classborrow`   WHERE `date` = '$date' and `time` = '$time'"; 
		 $sql = "  SELECT * FROM `classroom`  WHERE 1"; 

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
                echo "<tr bordercolor='#66CCCC'  align='center' bgcolor='#99FF00' ><td>$id</td><td>$cname</td><td>$age</td><td>$sex</td></tr>";
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