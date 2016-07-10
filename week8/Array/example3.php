<!doctype html public "-//w3c//dtd xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <title> 二维数组--表格 </title>
 <meta charset="utf-8" />
 <style>
 table{
 	width: 240px;
 	height: 300px;
 	border: 1px solid dodgerblue;
 }
 	td{
 		width:100px;
 		height: 60px;
 
 	}
 	tr{
 		display: block;
 		width: 240px;
 		height: 60px;
 		border-bottom: 1px solid dodgerblue;
 	}
 	tr:last-child{
 		border-bottom: none;
 	}
 	tr:nth-child(2n){
 		background:#1E90FF;
 	}
 </style>
 </head>
 <body>
 <?php
 $result=array();
   $result[0]['num'] = "20141002";
   $result[0]['name']= "张三";
   $result[0]['college']= "信息学院";
   $result[1]['num']= "20141003";
   $result[1]['name']= "李四";
   $result[1]['college']= "管理学院";
   $result[2]['num']= "20141003";
   $result[2]['name']= "王五";
   $result[2]['college']= "英文学院";
   $result[3]['num']= "20141004";
   $result[3]['name']= "王六";
   $result[3]['college']= "信息学院";
   $result[4]['num']= "20141005";
   $result[4]['name']= "张七";
   $result[4]['college']= "商学院";
 
 echo "<table>";
 foreach ($result as $re) {
     echo "<tr>";
     echo "<td> ".$re['num']."</td>";
     echo "<td> ".$re['name']."</td>";
     echo "<td> ".$re['college']."</td>";
	 echo "</tr>";
    }
echo "</table>";
?>
 <p>版权所有：丘玉秀 20141002345</P>
</body>
</html>
