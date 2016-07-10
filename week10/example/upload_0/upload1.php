<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <LINK REL="stylesheet" TYPE="text/css" HREF="example.css">
</head>
<body>
<PRE>

<?php
copy($_FILES['uploadfile']['tmp_name'], $_FILES["uploadfile"]["name"]);

print_r($_REQUEST);
print_r($_FILES);

?>

</PRE>

</body>
</html>

