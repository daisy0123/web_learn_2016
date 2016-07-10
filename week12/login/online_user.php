<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/login.css" />
<div class="user_info">
<?php
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