<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<HTML>
<HEAD>
  <LINK rel="stylesheet" type="text/css" href="example.css">

  <TITLE></TITLE>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</HEAD>

<BODY>
  本例列出目前目录的所有文件 
  
  <?php
$handle = opendir('.');

echo "目录 handle: $handle  <p>\n";
echo "文件: <p> \n";
while ($file = readdir($handle))
{
	echo "$file   <p> \n";
}
closedir($handle);

?>
</BODY>
</HTML>
