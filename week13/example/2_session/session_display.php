<?php
session_start();
?>

<link href="style.css" rel="stylesheet" type="text/css">


<?php
echo "<PRE>_SESSION    _REQUEST    ";
print_r($_SESSION);
print_r($_REQUEST);
echo "</PRE>";
echo "<p>1session±£´æÂ·¾¶£º",session_save_path();
echo "<p>session id:  ",session_id();

?>