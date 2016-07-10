 <LINK   href="homework2_1.css"  type=text/css rel=stylesheet>

<?
//print_r($_GET);
$basedir='./upload/';

if (isset($_POST['sub']))
{   if (trim($_POST['newname'])!="")
   {  $newname=$basedir.$_POST['newname'];
      rename($_GET['file1'],$newname);
	  echo " <SCRIPT LANGUAGE=\"JavaScript\">\n";
      echo "   window.opener.location.href=\"homework2_1.php\"\n";
      echo "    window.close();\n";
      echo "</SCRIPT>\n";

   }
   else
   {
     //新文件名为空   
   }
}
else
{
?>

<body>

<div id='rename'>

	<FORM METHOD=POST ACTION="">
		旧文件名：<INPUT TYPE="text"    NAME="oldname"  value="<? echo basename($_GET['file1']); ?>" readonly><BR>
		新文件名：<INPUT TYPE="text"    NAME="newname"><P>
				  <INPUT TYPE="submit"   name="sub"     value="改名" >
				  <INPUT TYPE="reset"                   value="重设">
	</FORM>
</div>

</body>

<?
}	
?>
