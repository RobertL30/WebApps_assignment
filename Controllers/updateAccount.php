
<?php

if(session_start() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true)
{
    header("Location: /Views/auth/sign_in.php");
    exit();
}

require_once '../Config/DBconnect.php';
require_once '../common.php';

//process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];

    //sanitise & Validate
    $first_name = trim($_POST['firstName']);
    $last_name = trim($_POST['lastName']);
    $address = trim($_POST['address']);
    $email = trim($_POST['email']);
    $contact_number = trim($_POST['contactNumber']);

    $errors = [];

    // verify the email is valid
    if(!filter-var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format"; 
    }

    if (empty($first_name) empty($last_name) || empty($address) || empty($email) || empty($contact_number)) {
        $errors[] = "All fields are required";
    }
}