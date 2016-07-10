
 <style type="text/css">
	#user_info {background-color:#66CCFF;width:200pt;float:right;text-align:right;}
 </style>
 
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
 
<div id="user_info">
<?php
//session_start()				 ;
if(isset($_SESSION['name']))
{
	echo "在线用户：". $_SESSION['name'];
	echo  "   <a href='logout.php'>  [退出] </a>";
}
else {
	echo "在线用户：游客";
	echo  "<a href='index.html'>登录</a>";
	
}
?>
</div>