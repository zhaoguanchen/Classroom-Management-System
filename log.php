 <?php
  header("Content-type: text/html; charset=utf-8");
  /********************
  1、写入内容到文件,追加内容到文件
  2、打开并读取文件内容
  ********************/
   $file  = 'log.txt';//要写入文件的文件名（可以是任意文件名），如果文件不存在，将会创建一个
   $content = "第一次写入的内容\n";
   
  if($f  = file_put_contents($file, $content,FILE_APPEND)){// 这个函数支持版本(PHP 5) 
   echo "写入成功。<br />";
  }
  $content = "第二次写入的内容";
  if($f  = file_put_contents($file, $content,FILE_APPEND)){// 这个函数支持版本(PHP 5)
      echo "写入成功。<br />";
  }
  if($data = file_get_contents($file)){; // 这个函数支持版本(PHP 4 >= 4.3.0, PHP 5) 
   echo "写入文件的内容是：$data";
  }
 ?>