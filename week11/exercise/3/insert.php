<link href="style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?
echo "<pre>post:";
print_r($_POST);
echo "</pre>";

$num=$_POST['num'];
$name=$_POST['name'];
$college=$_POST['college'];

if (($num!="")&&($name!="")&&($college!=""))
{
   require_once "config.inc.php";

   $query="insert into student set num='$num',name='$name',college='$college'";
   //  定义要做的查询语句insert into student ...，保存到变量$query中，便于后面的操作
   //  这一行可以不用，直接把引号里的写到下一句的$query变量处
   echo "<P>",$query;

   $result=mysql_query($query,$hd);
   //  执行查询，把查询结果纪录到 $result中

   mysql_close($hd);
   //  关闭与mysql的连结

   echo "<p>注册正确！";
}
else
{  echo "<p>用户信息不能为空！";
}
?><P>
<P>
<a href="main.php">浏览</a>
