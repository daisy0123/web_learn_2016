<?php

session_start();
if(!isset($_SESSION['name']))
{
	echo"<script>alert('非法操作，请先登陆！');location.href='index.html';</script>";
}
else {


?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>
			账号显示
		</title>
		<link rel="stylesheet" href="css/reset.css" />
		<link rel="stylesheet" href="css/login.css" />
	</head>
	<body>
		<div class="show">
			<div class="show_title">
				<p>
					账号显示
				</p>
				<div id="user_info">
				<?
				include("online_user.php");	
				?>
				</div>
			</div>
		
			<table>
				<tr>
					<th class="th1">
						id
					</th>
					<th  class="th2">
						学号
					</th>
					<th  class="th2">
						姓名
					</th>
					<th  class="th2">
						学院
					</th>
					<th  class="th3" colspan="2">
						操作
					</th>
				</tr>
				<?PHP
					require_once "config.php";
					$query_st = "select * from student order by id";
					$result_st = mysql_query($query_st);
					while ($re = mysql_fetch_array($result_st)) {
						echo "\n<tr>";
						echo "\n<td> ", $re['id'], "</td>";
						echo "\n<td> ", $re['num'], "</td>";
						echo "\n<td> ", $re['name'], "</td>";
						echo "\n<td> ", $re['college'], "</td>";
						echo "\n<td> <a href='delete.php?id=", $re['id'], "'>删除</a> </td>";
						echo "\n<td> <a href='update.php?id=", $re['id'], "'>更新</a> </td>";
						echo "\n</tr>";
					}
					mysql_close($conn);
				?>
			</table>
		
			<div class="rep">
			<span>	<a href="reg.html">
					添加用户
				</a></span>
				<span><a href="index.html">
					返回
				</a></span>
			</div>
		</div>
	</body>
</html>
<?php
}	
?>