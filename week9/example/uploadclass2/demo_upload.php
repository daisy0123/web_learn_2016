<?php
//�����ϴ���
include('iebupload.class.php'); 
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>upload</title>
</head>

<body style="font-size:12px;">
<PRE>
��Ҫ���ܣ�
1�ļ��ϴ�����ȡ�ļ�����
2��ȡ�ļ���С��
3����������ļ�����
4��ȡ�ļ����ͣ�
5ͼƬ��������ͼ��
6��������ͼ�ļ�����
7�����ϴ������ɵ��ļ����ļ�����
8�����ϴ�����ļ�·��</PRE>
<hr>

<form action="" method="post" enctype="multipart/form-data" name="form1">
<input type="file" name="file">
<input type="submit" name="Submit" value="�ύ">
<input name="scan" type="hidden" id="up" value="true">
</form><b /><br/>


<?php
if(isset($_REQUEST['scan'])){
//����һ���ϴ���
$upfos = new ieb_upload('file','upload'); 

/* ieb_upload( FormName, [Directroy, MaxSize])

�� FormName: �ļ�������ƣ�����������õ��� file �������������ʡ�ԡ�
�� Directroy: �����ϴ��ļ���Ŀ¼���ơ��˲������ʡ�ԣ��ļ����ϴ����ô���ҳĿ¼�С�
�� MaxSize: �����ϴ����ļ��Ĵ�С���ơ�Ĭ��ֵΪ 2097152 byte (�� 2M)��
*/ 

//���ؽ�Ҫ�ϴ����ļ�����
echo '�ļ����ƣ�' . $upfos -> getName() . '<br/>';

//�����ļ���׺��
echo '�ļ����ͣ�' . $upfos -> getExt() . '<br/>'; 

//�����ļ���С
echo '�ļ���С��' . $upfos -> getSize() . '<br/>';

/* getSize( format )

�� format: �����ļ���С�ĵ�λֵ��Ĭ��ֵΪ B��
�� B Ϊ byte
�� M Ϊ MB 
�� ����getSize( 'B' );
*/

//������ɵ��ļ���
echo '����ļ���' . $upfos -> newName() . '<br/>';

//�ϴ��ļ�
$upfos -> upload(); 

/* upload( filename )

�� filename: �ϴ�������������������ļ�����Ĭ��ֵΪԭ�����ļ�����
*/ 

//��������ͼ
$upfos -> thumb();


/* thumb( [key, width, height] )

�� key: ��������ͼ�Ĺؼ��֡�Ĭ��ֵΪ"sm_"������ϴ����ļ���Ϊ 12345.jpg������ͼ���ļ�����Ϊ sm_12345.jpg��
�� width: ����ͼ�Ŀ��ȡ�Ĭ��ֵΪ 150 ��
�� height: ����ͼ�ĸ߶ȡ�Ĭ��ֵΪ 113��
�� ����$upfos -> thumb ( 'slt_', 200, 140);
*/

//�������ɵ��ļ���
echo '�����ļ���' . $upfos -> UpFile() . '<br/>'; 

//�����ļ���·��
echo '�ļ�·����' . $upfos -> filePath() . '<br/>';

//��������ͼ������
echo '����ͼƬ��' . $upfos -> thumbMap() . '<br/>'; 

//�����ϴ���汾��Ϣ
echo '�汾��Ϣ��' . $upfos -> ieb_version() . '<br/>';


}
?>
</body>
</html>