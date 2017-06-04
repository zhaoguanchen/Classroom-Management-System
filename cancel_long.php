<h4><p><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<title>借用记录</title>
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
<div  style="width: 95%; height:600px; margin: 100px auto; overflow:visible" >
 <?php
$passed=$_COOKIE["passed"];
$name=$_COOKIE["name"];
//echo $passed;
if($passed != "1")
{
    echo '您尚未登录！请<a href="index.html">点击此处登录</a>';	 
}

?>

  我的借用（有效）<br>
 <form action="cancel_long_1.php" method="post"> 
     <br /><br /> 
   
<br /> 
    请选择要取消首日的记录ID：<br />
    
    
    <select name="sid" size="1"  style="width:40">
    
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
  		<option value="21">21</option>
  		<option value="22">22</option>
		<option value="23">23</option>
  		<option value="24">24</option>
     	<option value="25">25</option>
 		<option value="26">26</option>
  		<option value="27">27</option>
  		<option value="28">28</option>
   		<option value="29">29</option>
  		<option value="30">30</option>
        <option value="31">31</option>
  		<option value="32">32</option>
		<option value="33">33</option>
  		<option value="34">34</option>
     	<option value="35">35</option>
 		<option value="36">36</option>
  		<option value="37">37</option>
  		<option value="38">38</option>
   		<option value="39">39</option>
  		<option value="40">40</option>
    </select>
     <br />
         请选择要取消的教室ID：<br />
    
    
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
  		<option value="21">21</option>
  		<option value="22">22</option>
		<option value="23">23</option>
  		<option value="24">24</option>
     	<option value="25">25</option>
 		<option value="26">26</option>
  		<option value="27">27</option>
  		<option value="28">28</option>
   		<option value="29">29</option>
  		<option value="30">30</option>
        <option value="31">31</option>
  		<option value="32">32</option>
		<option value="33">33</option>
  		<option value="34">34</option>
     	<option value="35">35</option>
 		<option value="36">36</option>
  		<option value="37">37</option>
  		<option value="38">38</option>
   		<option value="39">39</option>
  		<option value="40">40</option>
        
		
	
    </select><br />
      <input type= "hidden" name="pname" width="60" value = <?php echo $name?> required />

<input type="submit" name="id" style="height:30px;width:60px;display:inline-block;"    value="提交">
    </form>  
                 
    <br/>             
                        
<div align="center">
<table border=10 cellspacing=10 align="center" bordcolor = "#00FF00" width="800"  height="100" bgcolor="#FFFF99"> 
<tr cellspacing=10 height=20 bgcolor="#FF00CC"><th>记录ID</th><th>教室ID</th><th>教室名</th><th>位置</th><th>座位数</th><th>借用日期</th><th>开始时间</th><th>结束时间</th><th>事由</th><th>操作时间</th></tr>
    <?php
      $flag;
	    $nowdate= date("Y-m-d");
         include "./includes/mysql_connect.php"; 
		 
		 
		 $sql = "  SELECT * FROM `destine`  WHERE  `pname` = $name and  `date` >= '$nowdate' "; //and  `date` <= $nowdate  and datediff(day,$date,$nowdate)<=0
		 $result=mysql_query($sql);  
		 $num = mysql_num_rows($result); //统计执行结果影响的行数  

   if($num)
   {
          for($i=0;$i<$num;$i++){
                 $sql_arr = mysql_fetch_assoc($result);
                $id = $sql_arr['cid'];
				   $sid = $sql_arr['id'];
                $date = $sql_arr['date']; 
                $reason = $sql_arr['reason'];
				$operatetime = $sql_arr['operatetime'];
				$startdate = $sql_arr['startdate'];
                $enddate = $sql_arr['enddate'];
	
				//教室信息
				$sql_1 = "  SELECT * FROM `classroom`  WHERE  `ID` =$id"; 
				$result_1=mysql_query($sql_1);  
			    $num_1 = mysql_num_rows($result_1); //统计执行结果影响的行数  
				$sql_arr_1 = mysql_fetch_assoc($result_1);
                $cname = $sql_arr_1['name'];
				$location = $sql_arr_1['location'];
		        $max = $sql_arr_1['max'];
            echo "<tr bordercolor='#66CCCC' align='center'  bgcolor='#99FF00' ><td>$sid</td><td>$id</td><td>$cname</td><td>$location</td><td>$max</td><td>$date</td><td>$startdate</td><td>$enddate</td><td>$reason</td><td>$operatetime</td></tr>";
               }
   }
   else
   { 
   echo "没有符合条件的项";
   }
   
    ?>
  
</table>

</div >

<br/><br/><br/>


</body>

<footer>
<div style=" margin-bottom:20; text-align:center; font:normal 14px/24px 'MicroSoft YaHei';">


<p>欢迎使用教室预约管理系统  版权所有：<a href="https://www.zhihu.com/people/zhao-guan-chen-89/activities" target="_blank">赵冠晨</a></p>
</div>
</footer>
</html></p></h4>