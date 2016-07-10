<?
session_start();
?>
<meta  charset="utf-8" />
<?
if($_POST['submit']=='注册'){
	
	include "config.php";
	$name=$_POST['username'];
	$pass=$_POST['psd'];
	
	if($name!="" &&$pass!=""){
	$sql="insert into user set uname='$name',upsd='$pass'";
	
	$result=mysql_query($sql);
	if(!$result){
		echo"<script>alert('注册失败！');</script>";
		echo  "<meta http-equiv=\"refresh\" content=\"0; url=index.php\" />";
	}else{
		echo"<script>alert('注册成功，请登录！');</script>";
		echo  "<meta http-equiv=\"refresh\" content=\"0; url=index.php\" />";
	}
	}
	mysql_close($conn);
}else if($_POST['submit']=='登录'){
	include "config.php";
	$name=$_POST['username'];
	$pass=$_POST['psd'];
	$sql="select * from user where uname='$name' and upsd='$pass'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==0){
		echo"<script>alert('用户名或者密码错误！');</script>";
		echo  "<meta http-equiv=\"refresh\" content=\"0; url=index.php\" />";
	}else{
		echo"<script>alert('登录成功');</script>";
		$_SESSION['name']=$sname;
		echo  "<meta http-equiv=\"refresh\" content=\"0; url=index.php\" />";
	}
	mysql_close($conn);
}
?>