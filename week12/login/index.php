<?php
session_start();
?>
<html>
<head>
<title>登录界面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
   require_once "config.php"; 
   $num=$_POST['num'];
   $name=$_POST['name'];
  $query_st="select * from student  where num='$num'  and name='$name'";
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
	mysql_close($conn);
?>
</body>
</html>