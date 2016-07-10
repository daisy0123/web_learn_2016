<?php
session_start();
?>

<link href="style.css" rel="stylesheet" type="text/css">


<?php
echo "<p>删除前：",$_SESSION['number'];
session_unregister('number');

unset($_SESSION["name"]);
echo "<p>删除后：",$_SESSION['number'];

session_unset();
echo "<hr> after unset,before destroy --session id:  ",session_id();

session_destroy() ;
echo "<p>after destroy---session id:  ",session_id();

?>
<hr>
<p>删除session中的变量number</p>
<p>session_unregister('number'); //变量值number为空</p>
<p>session_unset(); //删除所有变量 </p>
<p>session_destroy() ; //结束session<br />
  <br />
</p>
<hr>
<p><a href="session_display.php">显示session内容 </a></p>
