<?php
session_start();
/*
PHP 4.2.3֮��İ汾
ֱ�Ӹ�$_SESSION���鶨���±꣬����ֵ
*/
$_SESSION["number"]="n1001";
$_SESSION["name"]="����";
$_SESSION["abc"]="��ϢѧԺ";


/*
If your script uses session_register(), it will not work in environments where the PHP directive register_globals is disabled. 
If you are using $_SESSION (or $HTTP_SESSION_VARS), do not use session_register(), session_is_registered(), and session_unregister(). 


	$number="n1001";
	session_register("number");
	$name="����";
	session_register("name");
*/
?>

<link href="style.css" rel="stylesheet" type="text/css">
<p>����session����</p>
<pre>
 session_start(); 

$_SESSION["number"]="n1001";
$_SESSION["name"]="����";
$_SESSION["abc"]="��ϢѧԺ";
</pre>
<p><a href="session_display.php">��ʾsession������</a></p>
<p><a href="session_delete.php">ɾ��session�е�����</a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
