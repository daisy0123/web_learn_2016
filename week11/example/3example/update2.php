<link href="style.css" rel="stylesheet" type="text/css">
<PRE>
<?
print_r($_GET);
print_r($_POST);

require_once "config.inc.php";
if (isset($_GET['sub']))
{ //更新数据
	$query="update student set num='".$_GET['num']."',";
	$query=$query." name='".$_GET['name']."',";
	$query=$query." college='".$_GET['college']."'";
	$query=$query." where id=".$_GET['id'].";";
	echo $query;
	$result=mysql_query($query);

//___________________;

//___________________;


}

$query="select * from student where id=".$_GET['id'];
$result=mysql_query($query);
$re=mysql_fetch_array($result);
mysql_close($hd);

?>
</PRE>

<h1>更新数据</h1>
<FORM METHOD=geT ACTION="update.php">
序号：<INPUT TYPE="text" NAME="id"       size=11 maxlength=11 value='<? echo $re['id'];?>' readonly><P>
学号：<INPUT TYPE="text" NAME="num"       size=11 maxlength=11 value='<? echo $re['num'];?>' ><P>

姓名：<INPUT TYPE="text" NAME="name"        size=8 maxlength=8 value='<? echo $re['name'];?>'  ><P>
学院：<INPUT TYPE="text" NAME="college"  size=16 maxlength=16  value='<? echo $re['college'];?>'><P>
<INPUT TYPE="submit" value="更新" name="sub">
</FORM>

<P>
<a href="main.php">浏览</a>
