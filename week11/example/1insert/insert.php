<html lang="en">
<head>

    <link href="style.css" rel="stylesheet" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
</head>
<body>
<?php
//echo "<pre>post:";
//print_r($_POST);
//echo "</pre>";

$num = $_POST['num'];
$name = $_POST['name'];
$college = $_POST['college'];

if (($num != "") && ($name != "") && ($college != "")) {
    require_once "config.inc.php";

    $query = "insert into student set num='$num',name='$name',college='$college'";
    //  ����Ҫ���Ĳ�ѯ���insert into student ...�����浽����$query�У����ں���Ĳ���
    //  ��һ�п��Բ��ã�ֱ�Ӱ��������д����һ���$query������
    //  echo "<P>",$query;

    $result = mysql_query($query, $hd);
    //  ִ�в�ѯ���Ѳ�ѯ�����¼�� $result��
    if ($result)
        echo "<p>ע����ȷ��";
    else
        echo "<p>����Sql�﷨����</p>", $query;
    mysql_close($hd);
    //  �ر���mysql������


} else {
    echo "<p>�û���Ϣ����Ϊ�գ�";

}
?><P>
</body>
</html>