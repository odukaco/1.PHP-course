<?php

// // Create array

// $fruts = ["banana", "apple", "orange"];

// // Print the whole array

//  echo '<pre>';
//  var_dump($fruts);
//  echo '</pre>';

// // Get element by index

// echo $fruts[0].'<br>';

// // Set element by index

// // Check if array has element at index 2

// // Append element
// $fruts[]="peach";


// // Print the length of the array
// //echo count($fruts).'<br>';
// // Add element at the end of the array

// // Remove element from the end of the array

// // Add element at the beginning of the array

// // Remove element from the beginning of the array

// // Split the string into an array

// // Combine array elements into string

// // Check if element exist in the array
// //in_array('Apple',$fruts);
// // Search element index in the array
// //echo array_search('apple',$fruts);
// // Merge two arrays

// // Sorting of array (Reverse order also)
// //sort($fruts);
// //rsort($fruts);
// // Filter, map, reduce of array

// $numbers = [1, 2, 3, 4, 5, 6, 7, 8];
// $evens = array_filter($numbers, fn($n) => $n % 2 === 0);





// echo '<pre>';
//  var_dump($evens);
//  echo '</pre>';
// // https://www.php.net/manual/en/ref.array.php

// $squares = array_map(fn($n) => $n * $n, $numbers);

// echo '<pre>';
//  var_dump($squares);
//  echo '</pre>';

// ============================================
// Associative arrays
// ============================================

// Create an associative array

$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games']
];




// Get element by key
echo $person['name'].'<br>';
echo $person['surname'].'<br>';
echo $person['age'].'<br>';
// Set element by key

$person['channel'] = 'TraversyMedia';

// Check if array has specific key
isset($person['age']);//true
isset($person['addres']);//false
// Print the keys of the array

echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array

echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
arsort($person);

echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays
$todoItems = [
    ["title" => "item1", "completed" => true ],
    ["title" => "item2", "completed" => false ],
    ["title" => "item3", "completed" => true ],
];

echo '<pre>';
var_dump($todoItems);
echo '</pre>';