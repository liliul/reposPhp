<?php

// Define an array to store the list items
$itemList = [];

// Function to add an item to the list
function addItem($item) {
    global $itemList; // Access the global $itemList array
    array_push($itemList, $item); // Add the item to the end of the array
    echo "Item \"$item\" added to the list.\n";
}

// Function to delete an item from the list
function deleteItem($item) {
    global $itemList; // Access the global $itemList array
    $key = array_search($item, $itemList); // Find the index of the item
    if ($key !== false) {
        unset($itemList[$key]); // Remove the item from the array
        echo "Item \"$item\" deleted from the list.\n";
    } else {
        echo "Item \"$item\" not found in the list.\n";
    }
}

// Display the current list
function displayList() {
    global $itemList; // Access the global $itemList array
    if (empty($itemList)) {
        echo "The list is empty.\n";
    } else {
        echo "List contents:\n";
        foreach ($itemList as $item) {
            echo "- $item\n";
        }
    }
}

// Main program loop
while (true) {
    echo "\nChoose an action:\n";
    echo "1. Add item\n";
    echo "2. Delete item\n";
    echo "3. Display list\n";
    echo "4. Exit\n";

    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case '1':
            echo "Enter item to add: ";
            $item = trim(fgets(STDIN));
            addItem($item);
            break;
        case '2':
            echo "Enter item to delete: ";
            $item = trim(fgets(STDIN));
            deleteItem($item);
            break;
        case '3':
            displayList();
            break;
        case '4':
            echo "Exiting the program.\n";
            exit;
        default:
            echo "Invalid choice. Please try again.\n";
    }
}


