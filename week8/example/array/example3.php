<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title> 二维数组--表格 </title>
  <LINK REL="stylesheet" TYPE="text/css" HREF="example.css">

 </head>

 <body>
  用表格形式把二维数组显示出来

 <?php
 $result=array();

   $result[0]['num'] = "2001";
   $result[0]['name']= "张三";
   $result[0]['college']= "信息学院";
   $result[1]['num']= "2002";
   $result[1]['name']= "李四";
   $result[1]['college']= "管理学院";
   $result[2]['num']= "3001";
   $result[2]['name']= "王五";
   $result[2]['college']= "英文学院";
 
//print_r($result);
//$result为2维数组  $re为1维数组
 echo "<table>";
 foreach ($result as $re) {
     echo "\n<tr>";
     echo "\n<td> ",$re['num'],"</td>";
     echo "\n<td> ",$re['name'],"</td>";
     echo "\n<td> ",$re['college'],"</td>";
	 echo "\n</tr>";

    }
echo "</table>";
?>
 </body>
</html>
