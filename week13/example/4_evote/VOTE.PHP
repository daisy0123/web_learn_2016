<?php
session_start();
// 获得投票人的IP地址
$VIPAddr=$_SERVER['REMOTE_ADDR'];
/*
if(isset($_COOKIE["VIPAddr"])) {
    //若VIPAddr存在，则不能再投票，以访作弊
    echo "来自",$VIPAddr,"的用户，您已经投过票，谢谢您的支持!";
} else 
	*/
	{
    //若VIPAddr不存在，则设置Cookie，有效期是一年
    $_SESSION['VIPAddr']=$VIPAddr;

	// 从表单中获得投票内容
    $vote=$_POST['options'];

	// 建立与数据库服务器的连接
	require "config.inc.php";

	// 定义一个SQL语句，该语句根据投票结果更新Votes表,使相应的字段递增1
    $strSQL="update votes set star".$vote."=star".$vote."+1 where vid=1";
 
	// 发送strSQL语句
    $result=mysql_query($strSQL,$hd);

	// 关闭连接
    mysql_close($hd);

	// 投票后立即显示投票结果
    require("result.php");
}

echo "<hr><PRE>HTTP_COOKIE_VARS   _COOKIE   _REQUEST   ";
print_r($_SESSION);
print_r($_REQUEST);

echo "</PRE>";


?>
<link href="style.css" rel="stylesheet" type="text/css">


