<?php
session_start();
if(!isset($_SESSION['name']))
{
	echo"<script>alert('非法操作，请先登陆！');location.href='index.html';</script>";
}

?>
<link href="style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<?php
include("online_user.php");	

//删除指定序号的纪录

//print_r($_GET);

if (isset($_POST['sub_delete']))
{ if ($_POST['sub_delete']=="确认")
	{
		 require_once "config.inc.php";
		$query="delete  from student where id=".$_POST['id'];
		$result=mysql_query($query);
		mysql_close($hd);
	}

}
?>
<P>


<FORM METHOD=POST ACTION="">
确认删除记录<?php echo $_GET['id']; ?>吗？<P>
<input type="hidden" name="id" value="<?php echo $_GET['id']  ?>">
<INPUT TYPE="submit" value="确认" name="sub_delete">
<INPUT TYPE="submit" value="取消" name="sub_delete">
</FORM>

<a href="main.php">返回</a>
