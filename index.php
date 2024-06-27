<?php

// Include the database and user files
require_once 'objects/Database.php';
require_once 'objects/User.php';

// Usage example
$database = new Database();
$db = $database->getConnection();

$user = new User($db);

// Create a new user
$user->name = "John Doe";
$user->email = "john.doe@example.com";
if($user->create()) {
    echo "User was created.</br>\n";
}

// Read all users
$stmt = $user->read();
echo "Users:\n";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    echo "ID: {$id}, Name: {$name}, Email: {$email}</br>\n";
}

// Update a user
$user->id = 1;  // assuming a user with ID 1 exists
$user->name = "John Smith";
$user->email = "john.smith@example.com";
if($user->update()) {
    echo "User was updated.</br>\n";
}

// Delete a user
$user->id = 1;  // assuming a user with ID 1 exists
if($user->delete()) {
    echo "User was deleted.</br>\n";
}
?>
