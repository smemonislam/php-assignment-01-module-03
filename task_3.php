<?php

/**
 * @Problem 03
 * Create an array called $grades with the following values: 85, 92, 78, 88, 95. Write a PHP function 
 * which takes "$grades" as an argument to sort the array in descending order and print the sorted grades
 *  as array.
 */

$grades = [85, 92, 78, 88, 95];


// Function to compare grades in descending order
function sortedByDescendingOrder($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a > $b) ? -1 : 1;
}

usort($grades, 'sortedByDescendingOrder');

// Print the sorted grades as an array
print_r($grades);


// function sortedByDescendingOrder($grades)
// {
//     // Create an empty array to store the result
//     $newArray = array();

//     // Descending order by rsort() function 
//     arsort($grades);
//     foreach ($grades as $value) {
//         array_push($newArray, $value);
//     }

//     // Return descending the array
//     return $newArray;
// }

// $result = sortedByDescendingOrder($grades);

// // Print the sorted grades as an array
// print_r($result);



// function sortedByDescendingOrder($grades)
// {
//     // Sort the grades in descending order
//     arsort($grades);

//     // Print the sorted grades as an array
//     print_r($grades);
// }

// sortedByDescendingOrder($grades);
