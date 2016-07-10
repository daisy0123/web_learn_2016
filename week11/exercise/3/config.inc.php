<?
 $server="localhost";  //mysql服务器地址
 $user="root";         //登陆mysql的用户名
 $pass="";          //登陆mysql的密码
 $db_name="network";   //mysql中要操作的数据库名
 $hd=mysql_connect($server,$user,$pass) or die("抱歉，无法连接");
 $db=mysql_select_db($db_name,$hd);
 mysql_query('SET names gbk');   

?>