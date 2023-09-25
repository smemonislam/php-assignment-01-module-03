<?php
function generatePassword($length)
{

    // Define character sets for different types of characters
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = "0123456789";
    $special_characters = "!@#$%^&*()-_+=";

    // Combine all character
    $characters = $lowercase . $uppercase . $numbers . $special_characters;

    // Get the total number of characters
    $len = strlen($characters);

    // Initialize the password variable
    $password = "";

    // Generate the password
    for ($i = 0; $i <= $length; $i++) {
        $password .= $characters[rand(0, $len - 1)];
    }

    return $password;
}
// Generate a 12-character password
echo generatePassword(12);
