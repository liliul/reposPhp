<?php

// Define an associative array to store operation symbols and their corresponding functions
$operations = [
    "+" => function($num1, $num2) {
        return $num1 + $num2;
    },
    "-" => function($num1, $num2) {
        return $num1 - $num2;
    },
    "*" => function($num1, $num2) {
        return $num1 * $num2;
    },
    "/" => function($num1, $num2) {
        if ($num2 === 0) {
            echo "Error: Division by zero is not allowed.\n";
            exit;
        }
        return $num1 / $num2;
    }
];

// Get the user's input for the first number
echo "Enter the first number: ";
$num1 = floatval(fgets(STDIN));

// Get the user's input for the operation symbol
echo "Enter the operation (+, -, *, /): ";
$operation = fgets(STDIN);
$operation = trim($operation); // Remove whitespace

// Get the user's input for the second number
echo "Enter the second number: ";
$num2 = floatval(fgets(STDIN));

// Check if the entered operation symbol is valid
if (!isset($operations[$operation])) {
    echo "Invalid operation symbol. Please use +, -, *, or /\n";
    exit;
}

// Perform the calculation using the corresponding function
$result = $operations[$operation]($num1, $num2);

// Display the calculation result
echo "Result: $num1 $operation $num2 = $result\n";

