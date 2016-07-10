<html>
<head>
<title>查看界面4</title>
<link href="style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
</head>
<BODY>
<h1>查看界面4--mysql_fetch_object</h1>
<TABLE  >
  <TR>
    <Th align=center>学号</Th>
    <Th align=center>姓名</Th>
    <Th align=center>学院</Th>
    <Th align=center>对象</Th>
  </TR>
  <?
      require_once "config.inc.php";

	  $query_st="select num,name,college from student ";
	  $result_st=mysql_query($query_st);
	  while ($obj=mysql_fetch_object($result_st))
	 {   echo "\n<tr>";
		 echo "\n<td> ",$obj->num,"</td>";
		 echo "\n<td> ",$obj->name,"</td>";
		 echo "\n<td> ",$obj->college,"</td>";
		 echo "\n<td><pre>obj=mysql_fetch_object 对象 ";
		 print_r ($obj);
		 echo "\n </pre></td>";
		 
		 echo "\n</tr>";
	}
	 mysql_close($hd);
	?>
</TABLE>
</BODY>
</html>