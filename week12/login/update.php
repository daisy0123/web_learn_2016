<?php
session_start();
if(!isset($_SESSION['name']))
{
	echo"<script>alert('非法操作，请先登陆！');location.href='index.html';</script>";
}

?>
<link rel="stylesheet" href="css/login.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("online_user.php");	
require_once "config.php";
if (isset($_REQUEST['sub']))
{ 
	$query="update student set num='".$_REQUEST['num']."',";
	$query=$query." name='".$_REQUEST['name']."',";
	$query=$query." college='".$_REQUEST['college']."'";
	$query=$query." where id=".$_REQUEST['id'].";";
	$result=mysql_query($query);
}

$query="select * from student where id=".$_REQUEST['id'];
$result=mysql_query($query);
$re=mysql_fetch_array($result);
mysql_close($conn);

?>


<h1>更新数据</h1>
<FORM METHOD=POST ACTION="update.php">
序号：<INPUT TYPE="text" NAME="id"       size=11 maxlength=11 value='<? echo $re['id'];?>' readonly><P>
学号：<INPUT TYPE="text" NAME="num"       size=11 maxlength=11 value='<?php echo $re['num'];  ?>' ><P>
姓名：<INPUT TYPE="text" NAME="name"        size=8 maxlength=8 value='<? echo $re['name'];?>'  ><P>
学院：<INPUT TYPE="text" NAME="college"  size=16 maxlength=16  value='<? echo $re['college'];?>'><P>
<INPUT TYPE="submit" value="更新" name="sub">
</FORM>
<P>
<a href="main.php">返回</a>
