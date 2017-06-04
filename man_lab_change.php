  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="css/style.css">
	<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Sign In And Sign Up Forms  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	</script><script src="js/jquery.min.js"></script>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script type="text/javascript" src="js/modernizr.custom.53451.js"></script> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>教室信息更改</title>
</head>

<body>
 
  <?php
$passed=$_COOKIE["passed"];
$name=$_COOKIE["name"];
if($passed != "1")
{
    echo '您尚未登录！请<a href="index.html">点击此处登录</a>';	 
}
?>
  <?php $id=$_GET['id'];
 
   echo $id;
   include "./includes/mysql_connect.php";  
    $sql = "SELECT * FROM `lab`  WHERE `ID` ='$id'"; 

		 $result=mysql_query($sql);  
		 $num = mysql_num_rows($result); //统计执行结果影响的行数  
         $sql_arr = mysql_fetch_assoc($result);
          $id = $sql_arr['ID'];
           $cname = $sql_arr['name'];
            $location = $sql_arr['location'];
		$max = $sql_arr['max'];

   
   
     ?>
   <div align="center">
    <form action="man_class_change_2.php" method="post" id="submit">  
   				<div class="group">  
               
                    <label for="nickname">  教室ID:</label>  
                    <input type="text" name="id"  style="width:200px; height=100px ;" value="<?php echo $id ?>" />  
           		  </div>
                 <div class="group">  
                    <label for="nickname">    教室名:</label>  
                    <input type="text" name="name"style="width:200px; height=100px ;"value="<?php echo $cname ?>" />  
                </div>  
                 <div class="group">  
                    <label for="nickname">位置:</label>  
                    <input type="text" name="location"style="width:200px; height=100px ;"  value="<?php echo $location ?>" />  
                </div> 
               <div class="group">  
                    <label for="nickname">容量:</label>  
                    <input type="text" name="max"style="width:200px; height=100px ;"  value="<?php echo $max ?>"/>  
                </div> 
               <div class="login">  
                    <button type="submit" style="width:200px; height=100px ;"  name="submit">确认修改</button>  
                </div>  
         
               
            </form>  
           </div>  
</body>
</html>
 
 