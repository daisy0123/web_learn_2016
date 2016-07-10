<?php
session_start();
?>
<html>
<head>
<title>登录界面</title>
<link href="style.css" rel="stylesheet" type="text/css">

<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
</head>
<BODY>
<?php
   require_once "config.inc.php";
   
   $num=$_POST['num'];
   $name=$_POST['name'];
   $query_st="select * from student  where num='$num'  and name='$name'";
//   echo   $query_st;
   $result_st=mysql_query($query_st);
   $count=mysql_num_rows($result_st);

   if($count==0) {
	   echo "学号或姓名错,将在2秒后返回主界面" ;
	   echo " <meta http-equiv=\"refresh\" content=\"2; url=index.html\" />";

   }
   else
   {  
	   $_SESSION['name']=$name;
	   echo " <meta http-equiv=\"refresh\" content=\"0; url=main.php\" />";
   }

	mysql_close($hd);
?>
</BODY>
</html>