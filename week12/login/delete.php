<?php
session_start();
if(!isset($_SESSION['name']))
{
	echo"<script>alert('非法操作，请先登录！');location.href='index.html';</script>";
}

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/login.css" />
<?php

if (isset($_POST['sub_delete']))
{ if ($_POST['sub_delete']=="确认")
	{
		 require_once "config.php";
		$query="delete  from student where id=".$_POST['id'];
		$result=mysql_query($query);
		mysql_close($conn);
		echo("<script>location.href='main.php';</script>");
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

