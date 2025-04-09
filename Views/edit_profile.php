<?php

session_start();

if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    header("Location: /Views/auth/sign_in.php");

    exit();
}

require_once '../../Config/DBconnect.php';
require_once '../../Models/User.php';
require_once '../../common.php'

$userModel = new User($connection);

$user = $ userModel ->getUserById($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile - PaperTrail Book Store</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include '../Layouts/Header.php'; ?>