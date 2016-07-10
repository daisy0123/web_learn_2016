<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
	<meta charset="utf-8" />
<title> 网页计数器 </title>
<style type="text/css">
<!--
* {
	font-size: 20pt;
	color: #0000cc;
	padding: 50px;
}
-->
</style>

</head>


<?
function counttxt()
{
	$fp=fopen("countdat.txt","r");
	$str1=fgets($fp,10);
	fclose($fp);

	$str1++;
	$fp=fopen("countdat.txt","w");
	fputs($fp,$str1);
	fclose($fp);
	print $str1;
}
?>

<body bgcolor="#ffffff">

	<center>
	
		你是第
		<? counttxt(); ?>
		个访问者
		
	</center>
	
</body>
</html>

