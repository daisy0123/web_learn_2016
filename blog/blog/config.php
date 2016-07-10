<?
$server="localhost";
$user="root";
$password="";
$db_name="blog";
$conn=mysql_connect($server,$user,$password);
if(!$conn){
	echo "连接失败";
}
mysql_select_db($db_name);
mysql_query("SET NAMES UTF8");
?>