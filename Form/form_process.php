<?php
// form_process.php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    // Retrieve and sanitize form data
    $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';
    $email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
    $rating = isset($_GET['rating']) ? htmlspecialchars($_GET['rating']) : '';
    $gender = isset($_GET['gender']) ? htmlspecialchars($_GET['gender']) : '';
    $message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : '';
    $robot = isset($_GET['robot']) ? $_GET['robot'] : ''; // Not a robot checkbox

    // Check if any required field is missing
    if (empty($name) || empty($email) || empty($message) || empty($robot)) {
        echo "Please fill in all the required fields.";
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Optionally: Validate other fields like rating, gender, etc.

    // Process form data (e.g., save to database, send email, etc.)
    // For this example, let's just display the submitted data.

    echo "<h2>Form Submission Successful!</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Rating:</strong> $rating</p>";
    echo "<p><strong>Gender:</strong
