<?php


echo "<table align=center  border=0   cellspacing='0'>";
echo "<tr class='trhead'>\n";
echo "    <td>文件名</td>\n";
echo "    <td>大小</td>\n";
echo "    <td colspan=6>操作</td>\n";

echo "</tr>\n";

$basedir = './upload/';
$handle = opendir($basedir);
while ($file = readdir($handle)) {
    if ($file != "." && $file != "..") {
        echo "<tr>\n";
//		echo "    <td><A HREF=\"".$basedir.$file." \"  target='_blank'>$file</A></td>\n";
        echo "    <td>$file</td>\n";
        echo "    <td>" . filesize($basedir . $file) . "</td>\n";
        echo "    <td><a href='disp.php?file1=", urlencode($basedir . $file), "'>显示1</a></td>\n";
        echo "    <td><INPUT TYPE='button' value='显示2' onclick=\"disp('" . urlencode($basedir . $file) . "')\"></td>\n";
        echo "    <td><a href='dele.php?file1=", urlencode($basedir . $file), "' target='_blank'>删除1</a></td>\n";
        echo "    <td><INPUT TYPE='button' value='删除' onclick=\"dele('" . urlencode($basedir . $file) . "')\"></td>\n";
        echo "    <td><INPUT TYPE='button' value='改名' onclick=\"ren('" . urlencode($basedir . $file) . "')\"></td>\n";
        echo "    <td><INPUT TYPE='button' value='修改' onclick=\"edit('" . urlencode($basedir . $file) . "')\"></td>\n";

        echo "</tr>\n";
    }
}
echo "</table>\n";
closedir($handle);


?>

