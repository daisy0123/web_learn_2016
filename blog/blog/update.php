<meta charset="utf-8">
<?php
if (isset($_POST['fsub'])) {
	if ($_POST['fsub'] == '提交') {
		$ntitle = $_POST['ftilte'];
		$ndate = $_POST['fdate'];
		$ncontent = $_POST['fcontent'];
		if ($ntitle != "" && $ndate != "" && $ncontent != "") {
			include "config.php";
			$sql = "insert into note set nnid=0,nnname='admin',ntitle='$ntitle',ndate='$ndate',ncontent='$ncontent'";
			$result = mysql_query($sql);
			mysql_close($conn);
			if ($result) {
				echo "<script>alert('成功');</script>";
				echo "<meta http-equiv=\"refresh\" content=\"0; url=note.php?id=1\" />";
			} else {
				echo "<script>alert('失败');</script>";
				echo "<meta http-equiv=\"refresh\" content=\"0; url=note.php?id=1\" />";
			}
		}
	}else if($_POST['fsub'] == '更新'){
		$ntitle = $_POST['ftilte'];
		$ndate = $_POST['fdate'];
		$ncontent = $_POST['fcontent'];
		if ($ntitle != "" && $ndate != "" && $ncontent != "") {
			include "config.php";
			$sql = "update note set nnid=0,nnname='admin',ntitle='$ntitle',ndate='$ndate',ncontent='$ncontent' where nid=$_GET[id]";
			$result = mysql_query($sql);
			mysql_close($conn);
			if ($result) {
				echo "<script>alert('更新成功');</script>";
				echo "<meta http-equiv=\"refresh\" content=\"0; url=note.php?id=1\" />";
			} else {
				echo "<script>alert('更新失败');</script>";
				echo "<meta http-equiv=\"refresh\" content=\"0; url=note.php?id=1\" />";
			}
		}
	}
}
?>