<?php
//$i =0;
// while

// Loop with $counter

// do - while

// for
// for ( ; $i<10; $i++)
// {
//     echo "Counter : $i".'<br>';
// }
// foreach
//  $fruits = ['banana','apple','orange'];
//  foreach($fruits as $i => $fruit)
//  {
//     echo $i.' '.$fruit.'<br>';
//  }
// Iterate Over associative array.
$person =[
    'name' => 'travers',
    'surname' => 'Bob',
    'age' => 30,
    'hobbies' => ['tennis','run']
];
foreach($person as $index => $valoare)
{
    if ($index === 'hobbies')break;
    echo $valoare .'<br>';
}