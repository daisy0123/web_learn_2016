<?php
$basedir = './photos/';
if (isset($_POST['submitup'])) {
	if (($_FILES['uploadfile']['tmp_name'] == "") || ($_FILES['uploadfile']['tmp_name'] == "none")) {
		echo "<script>alert('没选文件或文件太大！')</script>";
	} else {
		$name=$_FILES["uploadfile"]["name"];
	if(strpos($name, "jpg")||strpos($name, "gif")){
		$UploadPath = $basedir;
		$dest_filename = $UploadPath . $name;
		if (file_exists($dest_filename)) {
			echo "<script>alert('文件", $name, "已经存在')</script>";
		} else {
			if (copy($_FILES['uploadfile']['tmp_name'], $dest_filename))
				echo "<script>alert('上传文件", $name, "成功！')</script>";
			else
				echo "<script>alert('上传文件", $name, "失败')</script>";
		}
	}else{
		echo("<script>alert('只能上传jpg或者gif格式的图片!');</script>");
	}
}
	unset($_POST['submitup']);
	unset($_FILES);
} 
?>
<div class="add">
<form enctype="multipart/form-data" method="post" action="<?php echo $PHP_SELF; ?>">
	<INPUT TYPE="hidden" name="MAX_FILE_SIZE" value=5000000>
	<span>添加照片:</span>
	<input type="file" name="uploadfile" />
	<input type="submit" value="添加" name="submitup" />
</form>
</div>