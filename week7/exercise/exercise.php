<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>乘法口诀表</title>
	</head>
	<style>
		.f1{
			width: 300px;
			height: 200px;
			border: 2px solid #339933;			
			color: #666;
		}
	</style>
	<body>
		<h2>乘法口诀表</h2>
		<div class="f1">
<?php

for($i=1;$i<10;$i++){
	for($j=1;$j<10;$j++){
		echo($i*$j)." ";		
	}
	echo("<br>");
}
?>
<p>丘玉秀 20141002345</p>
</div>
	</body>

</html>