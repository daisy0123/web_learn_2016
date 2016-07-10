<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title> 数组 </title>
  <LINK REL="stylesheet" TYPE="text/css" HREF="example.css">

 </head>

 <body>
 <pre>
<?php

$arr = array(1, 2, 3, 4);
foreach ($arr as $value) {
    $value = $value * 2;
    echo $value,"\n";
}

print_r($arr);

?> 

<hr>

<?php
$arr = array("one", "two", "three");
reset($arr);
while (list(, $value) = each($arr)) {
    echo "Value: $value<br>\n";
}

echo "<hr />";

foreach ($arr as $value) {
    echo "Value: $value<br />\n";
}
?> 
<hr />
<?php
$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";

foreach ($a as $v1) {
    foreach ($v1 as $v2) {
        echo "$v2\n";
    }
}

?>
</pre>
 <p>版权所有：丘玉秀 20141002345</P>
 </body>
</html>
