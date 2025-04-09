
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
}