<?php


echo "<table align=center  border=0   cellspacing='0'>";
echo "<tr class='trhead'>\n";
echo "    <td>�ļ���</td>\n";
echo "    <td>��С</td>\n";
echo "    <td colspan=6>����</td>\n";

echo "</tr>\n";

$basedir = './upload/';
$handle = opendir($basedir);
while ($file = readdir($handle)) {
    if ($file != "." && $file != "..") {
        echo "<tr>\n";
//		echo "    <td><A HREF=\"".$basedir.$file." \"  target='_blank'>$file</A></td>\n";
        echo "    <td>$file</td>\n";
        echo "    <td>" . filesize($basedir . $file) . "</td>\n";
        echo "    <td><a href='disp.php?file1=", urlencode($basedir . $file), "'>��ʾ1</a></td>\n";
        echo "    <td><INPUT TYPE='button' value='��ʾ2' onclick=\"disp('" . urlencode($basedir . $file) . "')\"></td>\n";
        echo "    <td><a href='dele.php?file1=", urlencode($basedir . $file), "' target='_blank'>ɾ��1</a></td>\n";
        echo "    <td><INPUT TYPE='button' value='ɾ��' onclick=\"dele('" . urlencode($basedir . $file) . "')\"></td>\n";
        echo "    <td><INPUT TYPE='button' value='����' onclick=\"ren('" . urlencode($basedir . $file) . "')\"></td>\n";
        echo "    <td><INPUT TYPE='button' value='�޸�' onclick=\"edit('" . urlencode($basedir . $file) . "')\"></td>\n";

        echo "</tr>\n";
    }
}
echo "</table>\n";
closedir($handle);


?>

