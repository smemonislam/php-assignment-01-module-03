<?php
// $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$numbers = range(1, 10);
function removeEvenNumbers($numbers)
{
    // remove the even numbers from the array
    return $numbers % 2 !== 0;
}

$result = array_filter($numbers, 'removeEvenNumbers');

// print all reversed numbers
print_r($result);
