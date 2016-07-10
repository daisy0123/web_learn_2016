<?php
// 建立与数据库服务器的连接
	require "config.inc.php";

// 定义一个SQL语句，该语句从Votes表中选择第一条记录
$strSQL="select * from votes where vid=1";

// 发送strSQL语句
$result=mysql_db_query("evote1",$strSQL,$hd);

// 计算各个明星的投票数
$star0=mysql_result($result,0,"star0");
$star1=mysql_result($result,0,"star1");
$star2=mysql_result($result,0,"star2");
$star3=mysql_result($result,0,"star3");

// 计算总投票数
$Total=$star0+$star1+$star2+$star3;
// 计算各个明星的投票率
$P0=($star0/$Total)*100;
$P1=($star1/$Total)*100;
$P2=($star2/$Total)*100;
$P3=($star3/$Total)*100;
// 关闭连接
mysql_close($hd);
?>

<html>
<head><title>投票结果</title></head>
<link href="style.css" rel="stylesheet" type="text/css">

<body>
<center>
<table  cellspacing="0" cellpadding="0">
<tr>
  <td colspan="4">
  <p align="center">明星人气指数</p><hr>
  </td>
</tr>

<tr>
  <td>明星</td>
  <td>票数</td>
  <td colspan="2">比例</td>
</tr>

<tr>
  <td>章洋</td>
  <td><?php echo $star0 ?>人</td>
  <td><img src="./image/bar.gif" width=<?php echo (int)($P0*6) ?> height=10></td>
  <td><?php echo number_format($P0,2)."%" ?> </td>
</tr> 
 
<tr>
  <td>谢峰</td>
  <td><?php echo $star1 ?>人&nbsp;</td>
  <td><img src="./image/bar.gif" width=<?php echo (int)($P1*6) ?> height=10></td>
  <td><?php echo number_format($P1,2)."%" ?></td>
</tr>

<tr>
  <td>赵海</td>
  <td><?php echo $star2 ?>人&nbsp;</td>
  <td><img src="./image/bar.gif" width=<?php echo (int)($P2*6) ?> height=10></td>
  <td><?php echo number_format($P2,2)."%" ?></td>
</tr> 
 
<tr>
  <td>
      刘莉</td>
  <td>
      <?php echo $star3 ?>人&nbsp;</td>
  <td>
      <img src="./image/bar.gif" width=<?php echo (int)($P3*6) ?> height=10></td>
  <td>
       <?php echo number_format($P3,2)."%" ?></td>
</tr>  

<tr>  
  <td  colspan="4">
  <p align="center">共有<?php echo $Total ?>人参加投票</td>    
</tr>
</table>    
</center>
</body>   
</html>   
