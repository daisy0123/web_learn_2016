<?
session_start();
?>
<meta charset="UTF-8"/>
<?
if (isset($_POST['fsub'])) {
	if ($_POST['fsub'] == '发表评论') {
		$comment = $_POST['fcomment'];
		$cname = $_SESSION['name'];
		$nid=$_GET['id'];
		if ($comment != "") {
			include "config.php";
			$sql = "insert into comment set cname='$cname',nid='$nid',ccomment='$comment'";
			$result = mysql_query($sql);
			mysql_close($conn);
			if ($result) {
				echo "<script>alert('评论日志成功！');</script>";
				echo "<meta http-equiv=\"refresh\" content=\"0; url=note.php?id=1\" />";
			} else {
				echo "<script>alert('评论日志失败！');</script>";
				echo "<meta http-equiv=\"refresh\" content=\"0; url=note.php?id=1\" />";
			}

		} else {
			echo "<script>alert('评论日志失败！');</script>";
			echo "<meta http-equiv=\"refresh\" content=\"0; url=note.php?id=1\" />";
		}
	}

}
?>