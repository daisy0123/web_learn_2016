<?
session_start();
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>相册</title>
		<link rel="stylesheet" href="css/reset.css" />
		<link rel="stylesheet" href="css/blog.css">
	</head>

	<body>
		<div class="black">
			<div class="login">
				<div class="ltle">
					<p>
						登录&emsp;|&emsp;注册
					</p>
				</div>
				<form method="post" action="login.php">
					<div class="row">
						<input type="text" placeholder="请填写有效的用户名" name="username" id="user"/>
					</div>
					<div class="row">
						<input type="password" placeholder="请填写有效的密码" name="psd" id="psd"/>
					</div>
					<div class="row">
						<input type="submit" value="登录" name="submit" />
						<input type="submit" value="注册" name="submit" />
					</div>
					<div class="row">
						<p class="exit">
							退出
						</p>
					</div>
				</form>
			</div>
		</div>
		<div class="content">
			<?
				include "nav.php";
			?>
			<div class="photo">			
					<?
					include "upload.php";			
					include"show.php";
					?>
			</div>
			<div class="footer">
				<p>&copy;copyright 丘玉秀 20141002345</p>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="js/jquery.js" ></script>
	<script type="text/javascript" src="js/index.js"></script>
</html>