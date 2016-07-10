<?php
$username = $_GET["username"];
$pwd = $_GET["pwd"];

if (($username == "abc") && ($pwd == "123"))
	echo "用户名和密码正确！！！";
else
	echo "对不起，用户名或密码错！";

?>