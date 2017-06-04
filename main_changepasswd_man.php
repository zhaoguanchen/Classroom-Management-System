


<div style=" margin-bottom:20; text-align:center; font:normal 14px/24px 'MicroSoft YaHei';">
<?php
include './includes/checklogin.php';
include './includes/mysql_connect.php';

   
                //name的查询
              $sql = "SELECT `name` FROM `manager` WHERE `name` = $name";
               // ; 
               //SQL语句  
                  $result = mysql_query($sql);    //执行SQL语句  
                  $num = mysql_num_rows($result); //统计执行结果影响的行数 
				  $user = mysql_result($result,0); 

				 				     
                //number的查询
              $sql_2 = "SELECT `password` FROM `manager` WHERE `name` = $name";
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
          
            <form action="passwd_change_man.php" method="post" id="regForm">  
  
               
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


