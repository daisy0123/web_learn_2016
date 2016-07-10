<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title> สýื้ </title>
  <LINK REL="stylesheet" TYPE="text/css" HREF="example.css">

 </head>

 <body>
 <pre>
<?php
// example1 

$arr = array(1, 2, 3, 4);
foreach ($arr as $value) {
    $value = $value * 2;
    echo $value,"\n";
}

print_r($arr);



$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
    echo $value,"\n";
}

print_r($arr);
// $arr is now array(2, 4, 6, 8)






?> 

<hr>


<?php
// example2


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
// example3

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
 </body>
</html>
