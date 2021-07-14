<?php 
$max = MAX(34,55);
echo $max;


echo "<br>";
$str = "Hello World!";
echo strlen($str);
echo "<br>";
$arr = array(45,56,76,99,3,2);
sort($arr);
foreach($arr as $list){
    echo $list."<br>";
}

echo "length".count($arr);
?>