

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<title>借用流程</title>
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
<body>

<h1 align="left">借用流程</h1>
<div align="left">各位师生：网上借用教室启用，具体流程如下：
</div>
<div align="left">1、登录http://learn.ustb.edu.cn，用户名为学生的学号或教师职工号，密码为登录教务系统密码。
</div>
<div align="left">2、点击“教室借用”。
</div>
<div align="left">3、输入借用单位、借用理由、活动类别、选择借用时间和地方，点击“提交”，页面显示教室借用具体信息,其中处理状态为 “待申请单位审核”。
</div>
<div align="left">4、学生可登录查询“我的教室借用单”状态，状态可为 “待申请单位审核”, “待教务处审批”和“已批准”，如为“已批准”即可按时使用教室。

如需再次确认，可到所申请的教学楼物业管理员处查询。
</div>
<div align="left">5、“已批准”教室借用单申请取消，必须到相应教学楼物业管理员处签字确认。

没签字取消申请的,教务处将对申请人和申请单位进行通报批评。如因没及时取消造成教室内设备被盗或被损坏,由借用人和申请单位负责赔偿。
</div>
申请教室借用注意事项：

<div align="left">1、借用教室借用的单位，必须按经批准的活动内容、时间和地点进行。凡以非盈利理由申请教室作盈利使用（做培训课程等），一经发现，按照盈利性质收费标准的十倍收取费用，并在一学年内对借用教室申请不予批准。

申请教室借用的单位，不得在举办活动中为赞助商进行商品促销及以宣传盈利为目的的活动，一经发现， 将立即取消本次活动并按照相关规定进行处罚。
</div>
<div align="left">2、请保持教室干净、整洁，禁止在教室里吃东西(尤其是蛋糕和汽水)，禁止把桌椅搬出教室外使用，禁止大声喧哗，以免影响其他教室正常教学。
</div>
<div align="left">3、禁止私自接线自带设备，因此造成设备损坏，借用单位需承担相应赔偿。
</div>
<div align="left">4、未经审核通过擅自使用教室，一经发现，将按照学校的相关规定进行处罚。
</div>

<br />gczhao
<br />
2017年5月26日
</body>
</body>

<footer>
<div style=" margin-bottom:20; text-align:center; font:normal 14px/24px 'MicroSoft YaHei';">


<p>欢迎使用教室预约管理系统  版权所有：<a href="https://www.zhihu.com/people/zhao-guan-chen-89/activities" target="_blank">赵冠晨</a></p>
</div>
</footer>
</html>



</html>