<?
 $server="localhost";  //mysql��������ַ
 $user="root";         //��½mysql���û���
 $pass="";          //��½mysql������
 $db_name="evote1";   //mysql��Ҫ���������ݿ���
 
 $hd=mysql_connect($server,$user,$pass) or die("��Ǹ���޷�����,�������ӵ��û���������");
 $db=mysql_select_db($db_name,$hd)      or die("��Ǹ���޷�����,�������ݿ��Ƿ����");
  mysql_query('SET names gbk');   
?>