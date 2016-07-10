<?
session_start();
$number="n1001";
session_register("number");
$name="张三";
session_register("name");
?>
<link href="style.css" rel="stylesheet" type="text/css">

<p>设置session</p>
<p>session_start();<br />
  $number=&quot;n1001&quot;;<br />
  session_register(&quot;number&quot;);<br />
  $name=&quot;张三&quot;;<br />
session_register(&quot;name&quot;);</p>
<p><a href="session_display.php">显示session的内容</a></p>
<p><a href="session_delete.php">删除session中的内容</a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
