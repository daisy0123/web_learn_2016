<?php
session_start();
?>

<link href="style.css" rel="stylesheet" type="text/css">


<?php
echo "<p>ɾ��ǰ��",$_SESSION['number'];
session_unregister('number');

unset($_SESSION["name"]);
echo "<p>ɾ����",$_SESSION['number'];

session_unset();
echo "<hr> after unset,before destroy --session id:  ",session_id();

session_destroy() ;
echo "<p>after destroy---session id:  ",session_id();

?>
<hr>
<p>ɾ��session�еı���number</p>
<p>session_unregister('number'); //����ֵnumberΪ��</p>
<p>session_unset(); //ɾ�����б��� </p>
<p>session_destroy() ; //����session<br />
  <br />
</p>
<hr>
<p><a href="session_display.php">��ʾsession���� </a></p>
