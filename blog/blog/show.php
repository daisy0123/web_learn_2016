<?
$basedir = './photos/';
$handle = opendir($basedir);
echo"<ul>";
while ($file = readdir($handle)) {
    if ($file != "." && $file != "..") {
    	 $img = $basedir . $file;
    	echo"<li><img src=$img ><div class='dele'><a href='dele.php?file1=", urlencode($img), "' >删除</a></div></li>";
    }

}
echo("</ul>");
 closedir($handle);
?>

