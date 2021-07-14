<?php   

$name = "Yushma";

$hashFormat ="$2y$10$";

$salt = "icanuseanythingiwant22";
$has_and_salt = $hashFormat.$salt;
echo $name = crypt($name,$has_and_salt);

?>