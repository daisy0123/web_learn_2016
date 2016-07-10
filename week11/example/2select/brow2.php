<html>
<head>
    <title>查看界面2</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
</head>
<BODY>
<h1>查看界面2--mysql_fetch_array</h1>
<TABLE>
    <TR>
        <Th align=center>学号</Th>
        <Th align=center>姓名</Th>
        <Th align=center>学院</Th>
        <Th align=center>数组</Th>
    </TR>
    <?
    require_once "config.inc.php";

    $query_st = "select * from student  ";
    $result_st = mysql_query($query_st);

    while ($re = mysql_fetch_array($result_st))           //用mysql_fetch_array()把查询结果保存到数组$re中，每次取一条纪录
    {
        echo "\n<tr>";
        echo "\n<td> ", $re['num'], "</td>";
        echo "\n<td> ", $re['name'], "</td>";
        echo "\n<td> ", $re['college'], "</td>";

        echo "\n<td> <pre>re=mysql_fetch_array（）数组及下标 ";
        print_r($re);
        echo "\n </pre></td>";

        echo "\n</tr>";
    }
    mysql_close($hd);
    ?>
</TABLE>
</BODY>
</html>