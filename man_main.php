﻿<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<title>首页</title>
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
							<a href="man_main.php">首页</a>
						</h2>
					</li>
					<li class="" _t_nav="wechat">
						<h2>
							<a href="man_manage_class.php">教室管理</a>
						</h2>
					</li>
                    <li class="" _t_nav="people">
						<h2>
							<a href="man_student.php">学生管理</a>
						</h2>
					</li>
					<li class="" _t_nav="solution">
						<h2>
							<a href="man_borrow.php">借用管理</a>
						</h2>
					</li>
					<li class="" _t_nav="cooperate">
						<h2>
                         <a href="main_changepasswd_man.php">修改密码</a>						
                         </h2>
					</li>
					<li _t_nav="support">
						<h2>
							<a href="help_man.php">帮助与支持</a>
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
		
        
        <div id="wechat" class="nav-down-menu menu-3 menu-1" style="display: none;" _t_nav="wechat">
			<div class="navigation-down-inner">
              
            				<dl style="margin-left: 380px;">
					<dt>教室管理</dt>
					<dd>
						<a hotrep="hp.header.product.storage1" href="man_manage_class.php">教室管理</a>
					</dd>
                    <dd>
						<a hotrep="hp.header.product.storage1" href="information_class.php">教室信息</a>
					</dd>
				
				</dl>
				<dl>
					<dt>会议室借用</dt>
					<dd>
						<a hotrep="hp.header.product.monitoring1" href="man_manage_meeting.php">会议室管理</a>
					</dd>
					<dd>
						<a hotrep="hp.header.product.monitoring2" href="information_meeting.php">会议室信息</a>
					</dd>
					
				</dl>
				<dl>
					<dt>实验室借用</dt>
					<dd>
						<a hotrep="hp.header.product.analysis1" href="man_manage_lab.php">实验室管理</a>
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
                        <a class="link" hotrep="hp.header.solution.1" href="man_borrow.php">借用管理</a>
                    </dd>
                </dl>
                
               </div>
        </div>
        <div id="support" class="nav-down-menu menu-3 menu-1" style="display: none;" _t_nav="support">
            <div class="navigation-down-inner">
                <dl style="margin-left: 400px;">
                    <dd>
                        <a class="link" hotrep="hp.header.support.1" href="method.php">帮助</a>
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
<div  style="width: 95%; height:1200px; margin: 100px auto; overflow:hidden" >
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

						<h1>
                        <font color="#000066" size="22" face="Georgia, Times New Roman, Times, serif">
                       欢迎登录 教室预约管理系统管理员端<br>
                       <?php 
					   echo "欢迎您" ;
					   echo $name;
					//  include "log.php"; 
					   ?>  
                       </font>
                     
                     
                     
 <?php //log 
include "./includes/logadd.php";   
$log = new log ();   
$date = date("Y-m-d") ; 
$time = date("h:i:sa");
// $log->addlog ( "./log", "a", " 内容1:$content1  内容2: $content2  内容3: $content3 " ); //传多个内容  
 $log->addlog ( "./logs/log_man_login", "a", "管理员$name    日期 $date  时间$time" ); //一次插入并换行  
  $log->addlog ( "./logs/log_man_login", "a", "\n" ); //一次插入并换行         
?>
                     
                     
                     
                     
						</h1>
                        </div>
                        
</body>

<footer>
<div style=" margin-bottom:20; text-align:center; font:normal 14px/24px 'MicroSoft YaHei';">


<p>欢迎使用教室预约管理系统  版权所有：<a href="https://www.zhihu.com/people/zhao-guan-chen-89/activities" target="_blank">赵冠晨</a></p>
</div>
</footer>
</html>