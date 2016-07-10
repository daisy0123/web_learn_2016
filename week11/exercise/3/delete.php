<h1>删除数据</h1>
<pre>
<?
//删除指定序号的纪录
print_r($_GET);

print_r($_REQUEST);

require_once "config.inc.php";
$query="______ from student where _____";
echo $query;
$result=mysql_query($query);
mysql_close($hd);

?>
</pre>
<P>
<a href="main.php">浏览</a>
