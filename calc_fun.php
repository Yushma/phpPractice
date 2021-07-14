<?php

function sum_two_num(){
    $n1 = 4;
    $n2 = 6;
    return $n1+$n2;
}
$sum = sum_two_num();
echo $sum;

//passing parameter

function pass_parameter($hello){
echo $hello;
}
pass_parameter("Hi! How are You?");
?>