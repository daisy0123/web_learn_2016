<?
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>关于我</title>
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
							<li><span ><a href="note.php?id=1" >日志</a></span></li>
							<li><span><a href="photo.php">相册</a></span></li>
							<li><span><a href="friends.php">好友</a></span></li>
							<li><span style="background: #00A1E9;"><a href="aboutMe.php" style="color:#fff">关于我</a></span></li>
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
			<div class="about">
				<div class="aboutLeft">
						<p>我的信息</p>
						
					<ul>
						<li class="liO">
							<p class="liP">基本信息</p>
						
						</li>
						<li class="liO">
							<p class="liP">学籍信息</p>
							
						</li>
						<li class="liO">
							<p class="liP">课余信息</p>
							
						</li>
						<li class="liO">
							<p class="liP">活动信息</p>
							
						</li>
						<li class="liO">
							<P class="liP">其他信息</P>							
						</li>
					</ul>
				</div>
				<div class="noteRight">
					<div class="msgContent">
						<div class="msgTilte">
							<h1>基本信息</h1>
							
						</div>
						<div class="msg friendMsg">							
							<div class="friendImg" ><img src="img/image2.jpg">	
							
							</div>	
							<div class="friendText">
								<dl>
									<dd>昵称：</dd>
									<dt>wings</dt>									
								</dl>
								<dl>
									<dd>性别：</dd>
									<dt>女</dt>									
								</dl>
								
								<dl>
									<dd>学校：</dd>
									<dt>广东外语外贸大学</dt>									
								</dl>
								<dl>
									<dd>班级：</dd>
									<dt>计算机1403班</dt>									
								</dl>
								<dl>
									<dd>微信：</dd>
									<dt>12334566</dt>									
								</dl>
								<dl>
									<dd>qq：</dd>
									<dt>1264575091</dt>									
								</dl>
								<dl>
									<dd>qq邮箱：</dd>
									<dt>1264575091@qq.com</dt>									
								</dl>
								<dl>
									<dd>手机号码：</dd>
									<dt>12334566</dt>									
								</dl>
								<dl>
									<dd>兴趣爱好：</dd>
									<dt>喜欢打羽毛球，喜欢看电影</dt>									
								</dl>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer">
				<p>&copy;copyright 丘玉秀 20141002345</p>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery.js">
		</script>
		<script type="text/javascript" src="js/index.js">
		</script>
	</body>
</html>
