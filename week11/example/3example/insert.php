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
			<link href="style.css" rel="stylesheet" type="text/css">
			<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
		</head>
		<body>
		<?php
		//echo "<pre>post:";
		//print_r($_POST);
		//echo "</pre>";

		$num=$_POST['num'];
		$name=$_POST['name'];
		$college=$_POST['college'];

		if (($num!="")&&($name!="")&&($college!=""))
		{
		   require_once "config.inc.php";

		   $query="insert into student set num='$num',name='$name',college='$college'";
		   //  定义要做的查询语句insert into student ...，保存到变量$query中，便于后面的操作
		   //  这一行可以不用，直接把引号里的写到下一句的$query变量处
		 //  echo "<P>",$query;

		   $result=mysql_query($query,$hd);
		   //  执行查询，把查询结果纪录到 $result中

		   mysql_close($hd);
		   //  关闭与mysql的连结
			if ($result)
			{ echo "<p>注册正确！"; 
			   $_SESSION['name']=$name;
			   echo " <meta http-equiv=\"refresh\" content=\"0; url=main.php\" />";
			}
			else 
			  echo "<p>请检查Sql语法错误</p>",$query;

			

		}
		else
		{  echo "<p>用户信息不能为空！";
			   echo " <meta http-equiv=\"refresh\" content=\"2; url=reg.htm\" />";
		}
		?><P>
		</body>
		</html>


<?php
  }
?>