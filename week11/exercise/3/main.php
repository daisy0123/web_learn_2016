<html>
<head>
<title>操作student界面</title>
 <META   HTTP-EQUIV="pragma"     CONTENT="no-cache">
<link href="style.css" rel="stylesheet" type="text/css">

</head>
<BODY>
<h1>network数据库student表基本操作</h1>
<TABLE>
    <TR>
        <Th align=center>id</Th>
        <Th align=center>学号</Th>
        <Th align=center>姓名</Th>
        <Th align=center>学院</Th>
        <Th align=center colspan='2'>操作</Th>
    </TR>
<?
   require_once "config.inc.php";
   
   $query_st="select * from student ";
   $result_st=mysql_query($query_st);

	while ($re=mysql_fetch_array($result_st))         {
     echo "\n<tr>";
     echo "\n<td> ",$re['id'],"</td>";
     echo "\n<td> ",$re['num'],"</td>";
     echo "\n<td> ",$re['name'],"</td>";
     echo "\n<td> ",$re['college'],"</td>";
	 echo "\n<td> <A HREF='delete.php?id=",$re['id'],"'>删除</A> </td>";
	 echo "\n<td> <A HREF='update.php'>更新</A> </td>";
	 echo "\n</tr>";
   }
   mysql_close($hd);
?>
  </TABLE>
  <A HREF="reg.htm">添加</A>
</BODY>
</html>