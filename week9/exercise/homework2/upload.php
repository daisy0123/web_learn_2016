<?	  
//�����ļ�
$basedir='./upload/';
if (isset($_POST['submitup']))
{  if (($_FILES['uploadfile']['tmp_name']=="")||($_FILES['uploadfile']['tmp_name']=="none"))
	{	  echo "<script>alert('ûѡ�ļ����ļ�̫��')</script>";
	}
	else
	{	$UploadPath = $basedir;
		$dest_filename=$UploadPath.$_FILES["uploadfile"]["name"];
		if (file_exists($dest_filename))
		{  echo "<script>alert('�ļ�",$_FILES["uploadfile"]["name"],"�Ѿ�����')</script>";
		}
		else
		{
			if (copy($_FILES['uploadfile']['tmp_name'],$dest_filename))
				echo "<script>alert('�ϴ��ļ�",$_FILES["uploadfile"]["name"],"�ɹ���')</script>";
			else
				echo "<script>alert('�ϴ��ļ�",$_FILES["uploadfile"]["name"],"ʧ��')</script>";	
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

		������Ҫ�ϴ����ļ���:
		<INPUT TYPE="file" NAME="uploadfile" >
		<INPUT TYPE="submit"  value="�ϴ�" name="submitup">
	</FORM>
