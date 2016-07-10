<?	  
//上载文件
$basedir='./upload/';
if (isset($_POST['submitup']))
{  if (($_FILES['uploadfile']['tmp_name']=="")||($_FILES['uploadfile']['tmp_name']=="none"))
	{	  echo "<script>alert('没选文件或文件太大！')</script>";
	}
	else
	{	$UploadPath = $basedir;
		$dest_filename=$UploadPath.$_FILES["uploadfile"]["name"];
		if (file_exists($dest_filename))
		{  echo "<script>alert('文件",$_FILES["uploadfile"]["name"],"已经存在')</script>";
		}
		else
		{
			if (copy($_FILES['uploadfile']['tmp_name'],$dest_filename))
				echo "<script>alert('上传文件",$_FILES["uploadfile"]["name"],"成功！')</script>";
			else
				echo "<script>alert('上传文件",$_FILES["uploadfile"]["name"],"失败')</script>";	
		}
	}	
			unset($_POST['submitup']);
			unset($_FILES);
			
}
else
{}
		?>


	<FORM enctype="multipart/form-data"  METHOD="post" ACTION="<? echo $PHP_SELF; ?>">

		<INPUT TYPE="hidden" name="MAX_FILE_SIZE" value=5000000>

		请输入要上传的文件名:
		<INPUT TYPE="file" NAME="uploadfile" >
		<INPUT TYPE="submit"  value="上传" name="submitup">
	</FORM>
