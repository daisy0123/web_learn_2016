<meta charset="UTF-8"/>
<?
include "config.php";
$sql="delete from note where nid='$_GET[id]'";
$result=mysql_query($sql);
mysql_close($conn);
if($result){
	echo "<script>alert('删除日志成功！');</script>";
	echo  "<meta http-equiv=\"refresh\" content=\"0; url=note.php?id=1\" />";
}

?>