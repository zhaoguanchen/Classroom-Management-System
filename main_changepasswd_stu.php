<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改密码</title>

<link media="screen" rel="stylesheet" href="./css/demo.css"/>
<link rel="stylesheet" href="css/style_index.css">
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
<div style=" margin-bottom:20; text-align:center; font:normal 14px/24px 'MicroSoft YaHei';">
<?php
include './includes/checklogin.php';
include './includes/mysql_connect.php';

   
                //name的查询
              $sql = "SELECT `name` FROM `student` WHERE `name` = $name";
               // ; 
               //SQL语句  
                  $result = mysql_query($sql);    //执行SQL语句  
                  $num = mysql_num_rows($result); //统计执行结果影响的行数 
				  $user = mysql_result($result,0); 

				 				     
                //number的查询
              $sql_2 = "SELECT `password` FROM `student` WHERE `name` = $name";
               // ; 
               //SQL语句  
                  $result_2 = mysql_query($sql_2);    //执行SQL语句  
                  $num_2 = mysql_num_rows($result_2); //统计执行结果影响的行数 
				  $passwd = mysql_result($result_2,0); 
				 // echo $num_2;
				 ?>


<html>  
  
    <head>  
        <title>我的资料</title>  
        <link rel="stylesheet" href="css/login.css" media="screen" />  
      
    </head>  
  
    <body>  
    
    <div >
		
    
        <div >  
              
            <!--  面板    -->  
          
            <form action="passwd_change_stu.php" method="post" id="regForm">  
  
               
                    <label for="nickname">  用户名:</label>  
                    <input type="text" name="name"  style="width:200px; height=100px ;" value="<?php echo $name ?>" />  
             
                 <div class="group">  
                    <label for="nickname">    密码:</label>  
                    <input type="text" name="passwd"style="width:200px; height=100px ;"  value="<?php echo $passwd ?>" />  
                </div>  
                 <div class="group">  
                    <label for="nickname">修改密码:</label>  
                    <input type="text" name="repasswd"style="width:200px; height=100px ;"   />  
                </div> 
               <div class="group">  
                    <label for="nickname">确认密码:</label>  
                    <input type="text" name="confirm"style="width:200px; height=100px ;"  />  
                </div> 
              
              
                <div class="login">  
                    <button type="submit"style="width:200px; height=100px ;"  name="mod">确认修改</button>  
                </div>  
            </div>  
               
            </form>  
        
     
               
</div>
<div class="clear"></div>
	</div>
	<div class="footer-w3l">
		<p class="agileinfo"> 教室预约管理系统  版权所有  <a href="http://www.baidu.com/" target="_blank">赵冠晨</a>
 </p>
	</div>
</body>
</html>