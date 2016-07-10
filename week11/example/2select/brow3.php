<html>
<head>
<title>查看界面3</title>
<link href="style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
</head>
<BODY>
<h1>查看界面3---$re=mysql_fetch_row</h1>
<TABLE>
  <TR>
    <Th align=center>学号</Th>
    <Th align=center>姓名</Th>
    <Th align=center>学院</Th>
    <Th align=center>数组</Th>
  </TR>
  <?
require_once "config.inc.php";

$query_st="select num,name,college from student ";
$result_st=mysql_query($query_st);
while ($re=mysql_fetch_row($result_st))
{
echo "\n<tr>";
echo "\n<td> ",$re[0],"</td>";
echo "\n<td> ",$re[1],"</td>";
echo "\n<td> ",$re[2],"</td>";
     
	 echo "\n<td><pre>re=mysql_fetch_row ";
     print_r ($re);
     echo "\n </pre></td>";

echo "\n</tr>";
}
mysql_close($hd);
?>
</TABLE>
</BODY>
</html>