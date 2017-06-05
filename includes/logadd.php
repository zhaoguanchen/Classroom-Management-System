
<?php
  header("Content-type: text/html; charset=utf-8");
/** 
 * 文件操作(生成日志)支持多条插入 
 * (如果插入多条语句并换行  用','逗号分开) 
 * 
 */  
class log {  
    public $path    = './log.txt';     //默认值文件  
    public $mode    = 'a';              //默认追加写  
    public $content = '默认值:空';          //默认内容是 空  
          
    public function addlog($path = null, $mode = null, $content = null) {  
          
        //判断写入的文件名是否为空  
        if (! empty ( $path )) {  
            $this->path = $path;  
        }  
          
        //判断操作方式 a追加写  
        if (! empty ( $mode )) {  
            $this->mode = $mode;  
        }  
          
        //判断写入的内容  
        if (! empty ( $content )) {  
            $this->content = $content;  
        }  
          
        $handle = fopen ( $this->path, $this->mode );  
          
        //拆分换行  
        $string = explode ( ",", $this->content );  
        foreach ( $string as $v ) {  
            fwrite ( $handle, $v . "\t" );  
        }  
        fclose ( $handle );  
    }  
} 
 ?>