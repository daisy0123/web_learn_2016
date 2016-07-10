<LINK REL="stylesheet" TYPE="text/css" HREF="example.css">
	<meta charset="utf-8" />
<p>如何把文件夹下的每个图片显示出来,增加几幅图到image文件夹，查看效果</p>

<?php
if ($handle = opendir('./images')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
		echo "<img src='./images/$file'>  <p> \n";        }
    }
    closedir($handle);
}
?> 