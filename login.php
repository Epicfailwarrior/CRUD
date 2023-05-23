<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Validate login credentials (dummy validation)
    if ($username === "admin" && $password === "password") {
        echo "Login successful!";   
    } else {
        echo "Invalid username or password!";
    }
}
?>
