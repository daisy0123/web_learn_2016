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
     //���ļ���Ϊ��   
   }
}
else
{
?>

<body>

<div id='rename'>

	<FORM METHOD=POST ACTION="">
		���ļ�����<INPUT TYPE="text"    NAME="oldname"  value="<? echo basename($_GET['file1']); ?>" readonly><BR>
		���ļ�����<INPUT TYPE="text"    NAME="newname"><P>
				  <INPUT TYPE="submit"   name="sub"     value="����" >
				  <INPUT TYPE="reset"                   value="����">
	</FORM>
</div>

</body>

<?
}	
?>
