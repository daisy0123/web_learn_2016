<?php
$server="localhost";
$user="root";
$psd="";
$db_name="network";
$connect=mysql_connect($server,$user,$psd) or die("抱歉，无法连接");
$db=mysql_select_db($db_name,$connect);
mysql_query('SET names gbk');
?>
