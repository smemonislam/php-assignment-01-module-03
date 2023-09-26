<?php

/**
 * @Problem
 * Create a PHP function called generatePassword($length) that generates a random password of the 
 * specified length. The password should include lowercase letters, uppercase letters, numbers, and 
 * special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 
 * characters using this function and print the password.
 */
function password_generate($chars)
{
    // Define character sets for different types of characters
    $_alphaSmall = 'abcdefghijklmnopqrstuvwxyz';            // small letters
    $_alphaCaps  = strtoupper($_alphaSmall);                // CAPITAL LETTERS
    $_numerics   = '1234567890';                            // numerics
    $_specialChars = '`~!@#$%^&*()-_=+]}[{;:,<.>/?\'"\|';   // Special Characters

    // Combine all character
    $data = $_alphaSmall . $_alphaCaps . $_numerics . $_specialChars;

    // Generate the password
    return substr(str_shuffle($data), 0, $chars);
}

// Generate a 12-character password
echo password_generate(12) . "\n";



// function generatePassword($length)
// {

//     // Define character sets for different types of characters
//     $_alphaSmall = 'abcdefghijklmnopqrstuvwxyz';            // small letters
//     $_alphaCaps  = strtoupper($_alphaSmall);                // CAPITAL LETTERS
//     $_numerics   = '1234567890';                            // numerics
//     $_specialChars = '`~!@#$%^&*()-_=+]}[{;:,<.>/?\'"\|';   // Special Characters

//     // Combine all character
//     $characters = $_alphaSmall . $_alphaCaps . $_numerics . $_specialChars;

//     // Get the total number of characters
//     $len = strlen($characters) - 1;

//     // Initialize the password variable
//     $password = "";

//     // Generate the password
//     for ($i = 1; $i <= $length; $i++) {
//         $password .= $characters[rand(0, $len)];
//     }

//     return $password;
// }

// // Generate a 12-character password
// echo generatePassword(12);
