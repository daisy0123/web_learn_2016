<?php

$image = isset($_REQUEST['image']) ? $_REQUEST['image'] : 0;

function get_table ($img=0)
 {
	 $img_list=get_image_list("./images");
	 $img_num=count($img_list);
	 $current=$img_list[$img];

	 $next=$img+1;
	 $link = "example4_showimg.php?image=$next";

	 $Prev=$img-1;
	 $linkp = "example4_showimg.php?image=$Prev";

	 if($img==0)
		 $stroutput='Prev | ';
     else{
		$stroutput='<a href="' . $linkp . '">Prev</a> | ';
	 }

	 if($img<$img_num-1){
		$stroutput.='<a href="' . $link . '">Next</a><p>';
	 }
	 else {
		$stroutput.='Next<p>';
	 }

	 $stroutput.='<img src="./images/'.$current.'" />';
	 echo $stroutput;

 }

 function get_image_list ( $image_dir ) {
  $d     = dir($image_dir);
  $files = array();
  
  if ( !$d ) return null;

  while (false !== ($file = $d->read())) {
    // getimagesize returns true only on valid images
    if ( @getimagesize( $image_dir . '/' . $file ) ) {
		$files[] = $file;
	}
  }
  
  $d->close();

 return $files;
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
           "http://www.w3.org/TR/2000/REC-xhtml1-20000126/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Creating a simple picture album viewer</title>

<style type="text/css">
body { text-align: center }
</style>

</head>
<body>

<h1>Creating a simple picture album viewer</h1>
<? get_table($image); ?>


</body>
</html>