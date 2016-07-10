<?php
session_start();
/*
PHP 4.2.3之后的版本
直接给$_SESSION数组定义下标，并赋值
*/
$_SESSION["number"]="n1001";
$_SESSION["name"]="张三";
$_SESSION["abc"]="信息学院";


/*
If your script uses session_register(), it will not work in environments where the PHP directive register_globals is disabled. 
If you are using $_SESSION (or $HTTP_SESSION_VARS), do not use session_register(), session_is_registered(), and session_unregister(). 


	$number="n1001";
	session_register("number");
	$name="张三";
	session_register("name");
*/
?>

<link href="style.css" rel="stylesheet" type="text/css">
<p>设置session命令</p>
<pre>
 session_start(); 

$_SESSION["number"]="n1001";
$_SESSION["name"]="张三";
$_SESSION["abc"]="信息学院";
</pre>
<p><a href="session_display.php">显示session的内容</a></p>
<p><a href="session_delete.php">删除session中的内容</a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
