<LINK href="homework2_1.css" type=text/css rel=stylesheet>

<?php
$file1 = $_GET['file1'];
$basedir = './upload/';

?>

<FORM METHOD=POST ACTION="">
    <TEXTAREA NAME="content" ROWS="15" COLS="80">
        <?php
        $fp = fopen($file1, "r");
        $contents = fread($fp, filesize($file1));
        echo htmlspecialchars($contents);
        fclose($fp);

        ?>
    </TEXTAREA>

    <p></p>
    <input type="submit" value="ÐÞ¸Ä" name="modifysub"/>
</FORM>

