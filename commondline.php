<?php
// $a = fgets(STDIN);
// fwrite(STDOUT,$a);

//fscanf(STDIN, "%d %d",$a,$b);
// Output
// The sum of 1 and 5 is 6
//echo "The sum of two given numbers".$a.",".$b."=".($a+$b);

//$arr = explode(" ",STDIN);
//print_r($arr);

list($var1,$var2) = explode(" ",readline());
$var1 = (int)$var1;
$var2 = (int)$var2;
echo $var1+$var2;

    ?>