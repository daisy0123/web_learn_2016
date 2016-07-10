<?php
        $fp = fopen("counter.txt", "r");
        $str1 = fgets($fp, 10);
        $str1++;
        fclose($fp);
        $fp = fopen("counter.txt", "w");
        fputs($fp, $str1);
        fclose($fp);

        $len1 = strlen($str1);
        $str2 = "000000000";
        $len2 = strlen($str2);
        $dif = $len2 - $len1;
        $rest = substr($str2, 0, $dif);
        $string = $rest . $str1;
        echo "<div>ตฺ" . $string . "ดฮทรฮส</div>";
?>
