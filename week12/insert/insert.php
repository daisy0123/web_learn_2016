<html>
<head>
    <title>查看界面</title>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
</head>
<BODY>
<?php
$num = $_POST['num'];
$name = $_POST['name'];
$college = $_POST['college'];
if (($num != "") && ($name != "") && ($college != "")) {
    include  "config.inc.php";
    $query = "insert into student set num='$num',name='$name',college='$college'";
    $result = mysql_query($query, $connect);
    if ($result)
        echo "<p>注册正确！";
    else
        echo "<p>请检查Sql语法错误</p>", $query;
} else {
    echo "<p>用户信息不能为空！";
}
?>
<h1>查看界面2</h1>
<TABLE>
    <TR>
        <Th align=center>学号</Th>
        <Th align=center>姓名</Th>
        <Th align=center>学院</Th>
    </TR>
 <?php

    $query_st = "select * from student  ";
    $result_st = mysql_query($query_st);
    while ($re = mysql_fetch_array($result_st))
    {
        echo "\n<tr>";
        echo "\n<td> ", $re['num'], "</td>";
        echo "\n<td> ", $re['name'], "</td>";
        echo "\n<td> ", $re['college'], "</td>";
        echo "\n</tr>";
    }
    mysql_close($connect);
    ?>
</TABLE>
</BODY>
</html>

