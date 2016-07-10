<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>upload</title>
    <LINK REL="stylesheet" TYPE="text/css" HREF="example.css">
</head>
<body>
<?php
//上载文件
$basedir = './uploadtemp/';
if (isset($_POST['submitup'])) {
    if (($_FILES['uploadfile']['tmp_name'] == "") || ($_FILES['uploadfile']['tmp_name'] == NULL)) {
        echo "<script>alert('没选文件或文件太大！')</script>";
    } else {
        $UploadPath = $basedir;
        $dest_filename = $UploadPath . $_FILES["uploadfile"]["name"];
        if (file_exists($dest_filename)) {
            echo "<script>alert('文件", $_FILES["uploadfile"]["name"], "已经存在')</script>\n";
        } else {
            if (copy($_FILES['uploadfile']['tmp_name'], $dest_filename))
                echo "<script>alert('上传文件", $_FILES["uploadfile"]["name"], "成功！')</script>\n";
            else
                echo "<script>alert('上传文件", $_FILES["uploadfile"]["name"], "失败')</script>\n";
        }
    }
    unset($_POST['submitup']);
    unset($_FILES);

} else {
}
?>

<FORM enctype="multipart/form-data" METHOD="post" ACTION="<?php echo $_SERVER['PHP_SELF']; ?>">
    <INPUT TYPE="hidden" name="MAX_FILE_SIZE" value=5000000>
    请输入要上传的文件名:
    <INPUT TYPE="file" NAME="uploadfile">
    <INPUT TYPE="submit" value="上传" name="submitup">
</FORM>

</body>
</html>