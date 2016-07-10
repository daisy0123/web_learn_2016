<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<meta charset="utf-8" />
<title> 网页计数器 </title>
<style type="text/css">

* {
	font-size: 16pt;
	color: #0000cc;
	padding: 10pt;
}
img{	padding: 0pt;
}

</style>
</head>

<?
function counttxt()
{
	$fp=fopen("countdat.txt", "r");
	$str=fgets($fp,10);
	fclose($fp);
	
	$str++;
	$fp=fopen("countdat.txt","r");
	fputs($fp, $str);
	fclose($fp);

	$max=1000000;
	while ($max>=1)
	{
		$digtal=floor($str/$max);
		echo "<img src='img/".$digtal.".gif'>\n";
		$str=$str-$digtal*$max;
		/* 第二种方式：$str=$str%$max;*/
		$max=$max/10;
	}

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


