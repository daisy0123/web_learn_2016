<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">

<HTML>
<HEAD>

  <TITLE>用户调查表</TITLE>
  <LINK REL="stylesheet" TYPE="text/css" HREF="style.css">


</HEAD>

<BODY>
<?php
$zh = $_POST['login']; //接收来自表上的变量，赋值到PHP变量$zh中
$xm = $_POST['yourname'];
echo("你的帐号是:" . $zh); //输出帐号
echo("<br>"); //换行
echo("你的姓名是：" . $xm); //输出姓名

echo("<br>");
echo("你的密码是：" . $_POST['passwd']);
echo("<br>");
echo("你的查询密码问题是：" . $_POST['question']);
echo("<br>");
echo("你的性别是：" . $_POST['gender']);
echo("<br>");

echo("你的爱好是：<br>");
foreach($_POST['hobby'] as $hobby)
echo($hobby . "<br>");

?>

</BODY>
</HTML>
