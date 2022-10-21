<?php

// Function which prints "Hello I am TheCodeholic"
// function hello($name)
// {
//     echo 'Hello I am '.$name.'<br>';
// }
// hello('name');
// Create sum of two functions
// function sum($a,$b)
// {
//     echo $a + $b.'<br>';
// }

// sum(3,5);
// Create function to sum all numbers using ...$nums

function sum(...$numbers)
{
    $sum=0;
    foreach($numbers as $num)
    {
        $sum+=$num;
    }
    return $sum;
}
echo sum(2,2,3);
// Arrow functions


