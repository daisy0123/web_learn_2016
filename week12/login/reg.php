<?php
 
	session_start();
	if(!isset($_POST['name']))
	{
		echo"<script>alert('非法操作，请先输入内容！');location.href='index.html';</script>";
	}
	else
	{
?>
		<html>
		</head>
			<link rel="stylesheet" href="css/reset.css" />
			<link rel="stylesheet" href="css/login.css" />
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		</head>
		<body>
		<?php
		$num=$_POST['num'];
		$name=$_POST['name'];
		$college=$_POST['college'];

		if (($num!="")&&($name!="")&&($college!=""))
		{
		   require_once "config.php";
		   $query="insert into student set num='$num',name='$name',college='$college'";	
		   $result=mysql_query($query,$conn);
		   mysql_close($conn);
			if ($result)
			{ echo "<script>alert('注册正确！');</script>"; 
			   $_SESSION['name']=$name;
			   echo " <meta http-equiv=\"refresh\" content=\"0; url=main.php\" />";
			}
			else 
			  echo "<p>请检查Sql语法错误</p>",$query;			
		}
		else
		{  echo "<script>alert('信息不能为空！');location.href='reg.html';</script>";
			
		}
		?><P>
		</body>
		</html>


<?php
  }
?>