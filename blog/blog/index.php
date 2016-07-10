<?
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>
			我的博客
		</title>
		<link rel="stylesheet" href="css/reset.css" />
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
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
			<div class="picNav">
				<div class="nav">
					<div class="navLeft">
						<a href="index.php">
							<img src="img/icon.png">
						</a>
					</div>
					<div class="navRight">
						<ul>
							<li>
								<span style="background: #00A1E9;">
									<a href="index.php" style="color:#fff">
										首页
									</a></span>
							</li>
							<li>
								<span>
									<a href="note.php?id=1">
										日志
									</a></span>
							</li>
							<li>
								<span>
									<a href="photo.php">
										相册
									</a></span>
							</li>
							<li>
								<span>
									<a href="friends.php">
										好友
									</a></span>
							</li>
							<li>
								<span>
									<a href="aboutMe.php">
										关于我
									</a></span>
							</li>
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
				<div class="pic">
					<div class="mask">
					</div>
					<div class="title">
						<span class="prev">
							<i class="fa fa-angle-left fa-3x" aria-hidden="true">
							</i></span>
						<span class="next">
							<i class="fa fa-angle-right fa-3x" aria-hidden="true">
							</i></span>
					</div>
					<div class="picContent">
						<div class="picList">
							<ul>
								<li>
									<img src="img/image1.jpg" />
								</li>
								<li>
									<img src="img/image2.jpg" />
								</li>
								<li>
									<img src="img/image3.jpg" />
								</li>
								<li>
									<img src="img/image4.jpg" />
								</li>
								<li>
									<img src="img/image5.jpg" />
								</li>
								<li>
									<img src="img/image6.jpg" />
								</li>
								<li>
									<img src="img/image7.jpg" />
								</li>
								<li>
									<img src="img/image1.jpg" />
								</li>
								<li>
									<img src="img/image2.jpg" />
								</li>
								<li>
									<img src="img/image3.jpg" />
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="slide">
				<ul>
					<li>
						<div class="liTop">
							<div class="imgBorder">
								<img src="img/image3.jpg" />
							</div>
						</div>
						<div class="liBottom">
							<p>
								日志：今天很好
							</p>
							<p>
								时间：2016.04.19
							</p>
							<a href="note.php">
								more》
							</a>
						</div>
					</li>
					<li>
						<div class="liTop">
							<div class="imgBorder">
								<img src="img/image2.jpg" />
							</div>
						</div>
						<div class="liBottom">
							<p>
								日志：今天很好
							</p>
							<p>
								时间：2016.04.19
							</p>
							<a href="note.php">
								more》
							</a>
						</div>
					</li>
					<li>
						<div class="liTop">
							<div class="imgBorder">
								<img src="img/image5.jpg" />
							</div>
						</div>
						<div class="liBottom">
							<p>
								日志：今天很好
							</p>
							<p>
								时间：2016.04.19
							</p>
							<a href="note.php">
								more》
							</a>
						</div>
					</li>
					<li>
						<div class="liTop">
							<div class="imgBorder">
								<img src="img/image6.jpg" />
							</div>
						</div>
						<div class="liBottom">
							<p>
								日志：今天很好
							</p>
							<p>
								时间：2016.04.19
							</p>
							<a href="note.php">
								more》
							</a>
						</div>
					</li>
					<li>
						<div class="liTop">
							<div class="imgBorder">
								<img src="img/image7.jpg" />
							</div>
						</div>
						<div class="liBottom">
							<p>
								日志：今天很好
							</p>
							<p>
								时间：2016.04.19
							</p>
							<a href="note.php">
								more》
							</a>
						</div>
					</li>
				</ul>
			</div>
			<div class="footer">
				<p>
					&copy;copyright 丘玉秀 20141002345
				</p>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery.js">
		</script>
		<script type="text/javascript" src="js/index.js">
		</script>
	</body>
</html>