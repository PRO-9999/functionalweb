<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Create a string to save to file
    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    
    // Append data to a text file
    file_put_contents('form_data.txt', $data, FILE_APPEND | LOCK_EX);
    
    // Redirect to a thank you page or any other page
    header('Location: thank_you.html');
    exit;
}
?>
