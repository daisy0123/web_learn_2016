<link href="style.css" rel="stylesheet" type="text/css">

<?
echo "<pre>post:";
print_r($_POST);
echo "</pre>";
$num=$_POST['num'];
$name=$_POST['name'];
$college=$_POST['college'];

if (($num!="")&&($name!="")&&($college!=""))
{
   $hd=mysql_connect("localhost","root","") ;
   //  连结mysql服务器的语句  服务器：localhost 用户名：root  密码：
   //  连结号$hd为一个整数，如果为空则连结失败

   $dbname=mysql_select_db("network",$hd);
    //  选择要操作的数据库  network
   mysql_query('SET names gbk');   
   // 设置查询字符串为gbk格式

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
<A HREF="brow1.php">查看student内容1</A><P>
<A HREF="brow2.php">查看student内容2</A><P>
<A HREF="brow3.php">查看student内容3</A><P>
<A HREF="brow4.php">查看student内容4</A><P>