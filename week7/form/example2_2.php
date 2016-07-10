<?php
$username = $_POST["username"];
$pwd = $_POST["pwd"];

if (($username == "abc") && ($pwd == "123"))
	echo "用户名和密码正确！！！";
else
	echo "对不起，用户名或密码错！";

?>