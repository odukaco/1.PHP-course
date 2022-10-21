<?php

$age = 60;
$salary = 300000;

// if condition

// if condition - else

// if condition1 AND condition2

// if condition1 OR condition2

// if condition1 - elseif condition2 - else
// if($age < 20)
// {
//     echo 'you are young<br>';
// }elseif ($age<30)
// {
//     echo 'you are not really old<br>';
// }
// if condition1 and condition2 - elseif condition1 and condition2 - else

// Ternary if
//echo $age < 22 ? 'young' : ($age<50 ? 'not old':'old'),'<br>';
// Null coalescing operator
$MyAge = $age ?? 18;
echo $MyAge.'<br>';
$MyAddress = $address ?? 'current location';
echo $MyAddress.'<br>';
// Null coalescing assignment operator. Since PHP 7.4
$person = ['name' => 'jhon'];
$person ['name'] ??='Anonymous';
echo $person['name'].'<br>';
// switch
$userRole = 'admin';
switch($userRole)
{
    case 'admin':
        echo 'you are admin'.'<br>';
        break;
    case 'editor':
        echo 'you are editor'.'<br>';
        break;
    default:
        echo 'Unknown'.'<br>';
}

