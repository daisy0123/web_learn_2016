<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
<meta charset="utf-8" />
<title>用户调查表</title>
 <link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
$login = $_POST['login']; 
$name = $_POST['yourname'];
echo("你的帐号是:" . $login);
echo("<br>"); 
echo("你的姓名是：" . $name); 

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
 <p>版权所有：丘玉秀 20141002345</P>
</body>
</html>
