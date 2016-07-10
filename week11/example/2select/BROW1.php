<html>
<head>
    <title>查看界面1</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
</head>
<BODY>
<h1>查看界面1---mysql_num_rows 、mysql_result </h1>
<TABLE>
    <TR>
        <th align=center>学号</th>
        <th align=center>姓名</th>
        <th align=center>学院</th>
    </TR>
    <?
    $hd = mysql_connect("localhost", "root", "") or die("连结失败");
    //  连结mysql服务器的语句  服务器：localhost 用户名：webdb   密码：123
    //一般加上die()可以在连结失败时，跳出程序，相当于exit

    $dbname = mysql_select_db("network", $hd);
    //  选择要操作的数据库  network
    mysql_query('SET CHARACTER SET gbk');

    $query_st = "select num,name,college from student ";
    //  定义要做的查询语句，保存到变量$query_  st中，便于后面的操作
    $result_st = mysql_query($query_st, $hd);
    //  执行查询，把查询结果纪录到 $result_st中

    $num_st = mysql_num_rows($result_st);
    //  取出查询结果共有多少行，保存到变量$num_st中

    for ($i = 0; $i < $num_st; $i++) // 用循环语句 显示出所有的查询结果 循环次数$num_st，从0行开始计数
    {
        // 用mysql_result（）函数取出查询结果，

        $numb = mysql_result($result_st, $i, "num");
        //  从查询数据取出第i行，num字段的内容

        $name = mysql_result($result_st, $i, "name");
        //    ...    name

        $college = mysql_result($result_st, $i, "college");
        //   ...    college

        echo "\n<tr>";
        echo "\n<td> ", $numb, "</td>";
        echo "\n<td> ", $name, "</td>";
        echo "\n<td> ", $college, "</td>";
        echo "\n</tr>";
    }

    mysql_close($hd);
    //  关闭与mysql的连结
    ?>
</TABLE>
</BODY>
</html>