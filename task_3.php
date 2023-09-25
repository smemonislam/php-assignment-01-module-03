<?php
$grades = [85, 92, 78, 88, 95];


function sortedByDescendingOrder($grades)
{
    // Create an empty array to store the result
    $newArray = array();

    // Descending order by rsort() function 
    rsort($grades);
    foreach ($grades as $value) {
        array_push($newArray, $value);
    }

    // Return descending the array
    return $newArray;
}

$result = sortedByDescendingOrder($grades);

// Print the sorted grades as an array
print_r($result);



// function sortedByDescendingOrder($grades)
// {
//     // Sort the grades in descending order
//     rsort($grades);

//     // Print the sorted grades as an array
//     print_r($grades);
// }

// sortedByDescendingOrder($grades);
