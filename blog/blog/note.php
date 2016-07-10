<?session_start();?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>日志</title>
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
			<div class="picNav other">
				<div class="nav">
					<div class="navLeft">
						<a href="index.php"><img src="img/icon.png"></a>
					</div>
					<div class="navRight">
						<ul>
							<li><span><a href="index.php">首页</a></span></li>
							<li><span style="background: #00A1E9;"><a href="note.php?id=1" style="color:#fff">日志</a></span></li>
							<li><span><a href="photo.php">相册</a></span></li>
							<li><span><a href="friends.php">好友</a></span></li>
							<li><span><a href="aboutMe.php">关于我</a></span></li>
						</ul>
						
							<?
							if (!isset($_SESSION['name'])) {
								echo "<div class='navImg'><span>登录</span>|<span>注册</span>	</div>";
							} else {
								echo "<div class='online'><p><a href='#'>" . $_SESSION['name'];
								echo "  </a> <a class='lred' href='logout.php'>  [退出] </a>";
								echo "</p></div>";
							}
							?>
					</div>

				</div>
			</div>
			<?
			include "noteList.php";
			?>
			
			<div class="footer">
				<p>&copy;copyright 丘玉秀 20141002345</p>
			</div>
		</div>
	</body>
<script type="text/javascript" src="js/jquery.js" ></script>
	<script type="text/javascript" src="js/index.js"></script>

</html>